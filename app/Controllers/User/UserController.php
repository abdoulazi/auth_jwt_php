<?php

namespace App\Controllers\User;

use App\Controllers\Controller;
use App\Models\User;
/**
 *
 */
class UserController extends Controller
{

 public function getUsers($request, $response)
 {

    $users = User::all(['name', 'lastname', 'email', 'created_at']);

    return $response->withHeader('Content-Type', 'application/json') 
                       ->withJson($users, 200);

 }

}
