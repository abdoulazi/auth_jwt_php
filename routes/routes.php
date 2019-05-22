<?php




$app->get('/', 'HomeController:index');

$app->post('/api/v1/auth/signup', 'AuthController:signUp');
$app->post('/api/v1/auth/signin', 'AuthController:signIn');

$app->get('/api/v1/users', 'UserController:getUsers');

$app->post('/api/auth/signout', function($request, $response, $args){
	return $response->getBody()->write('Auth sign out');
});
