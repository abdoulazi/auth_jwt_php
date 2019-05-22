<?php


namespace App\Controllers;

use App\Controllers\Controller;  
use App\Models\User;

/**
 * 
 */
class HomeController extends Controller
{
	
	 public function index($request, $response) {  

	 	$users = User::all(); 
 
	 	return $response->withHeader('Content-Type', 'application/json')
	 					->withJson($users);

	 }
}