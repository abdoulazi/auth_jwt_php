<?php


namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;
use \Firebase\JWT\JWT;
/**
 *
 */
class AuthController extends Controller
{
	// Sign Up
	 public function signUp($request, $response, $args)
	 {
	 	if(!empty($request->getParam('name')) && !empty($request->getParam('lastname')) && !empty($request->getParam('email')) && !empty($request->getParam('password')))
	 	{
	 		$nbre = User::where('email', $request->getParam('email'))->count();
	 		if($nbre > 0)
	 		{
	 			$data = array('message' => 'Adresse email déja utilisé par une autre personne.');
	 			return $response->withHeader('Content-Type', 'application/json')
					->withHeader('Access-Control-Allow-Origin', '*')
					->withJson($data, 401);
	 		}
	 		else {
		 		$action = User::create([
		 			'name' => $request->getParam('name'),
		 			'lastname' => $request->getParam('lastname'),
		 			'email' => $request->getParam('email'),
		 			'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
		 		]);
		 				if($action)
		 				{
				 		 $data = array('message' => 'Utilisateur enregistré avec success.');
				 		}
				 		else {
				 		 $data = array('message' => 'Une erreur est survenue lors de l\'inscription.');
				 		}
		 		return $response->withHeader('Content-Type', 'application/json')
					->withHeader('Access-Control-Allow-Origin', '*')
					->withJson($data, 200);
	 		}
	 	}
	 	else {
	 		$data = array('message' => 'Un ou plusieurs champs sont vides');
	 		return $response->withHeader('Content-Type', 'application/json')
					->withHeader('Access-Control-Allow-Origin', '*')
					->withJson($data, 301);
	 	}
	 }

	 // Sign IN
	 public function signIn($request, $response, $args)
	 {
		 if(User::where('email', $request->getParam('email'))->count() == 1) {
		 	 $user = User::where('email', $request->getParam('email'))->first();
		 	 if(password_verify($request->getParam('password'), $user->password)) {
		 	 	$key = "example_key";
				$token = array(
				    "iss" => "http://example.org",
				    "aud" => "http://example.com",
				    "iat" => 1356999524,
				    "nbf" => 1357000000,
				    "data" => $user,
				);
				$jwt = JWT::encode($token, $key);
				$data = array('status' => 'Connexion reussit.', 'token' => $jwt);
		 		return $response->withHeader('Content-Type', 'application/json')
					->withHeader('Access-Control-Allow-Origin', '*')
					->withJson($data, 200);

		 	 } else {
		 	 	$data = array('status' => 'Identifiant incorrect');
		 		return $response->withHeader('Content-Type', 'application/json')
					->withHeader('Access-Control-Allow-Origin', '*')
					->withJson($data, 401);
		 	 }
		 }
		 else {
		 	$data = array('status' => 'Utilisateur introuvable');
		 	return $response->withHeader('Content-Type', 'application/json')
					->withHeader('Access-Control-Allow-Origin', '*')
					->withJson($data, 301);
		 }
	 }
}
