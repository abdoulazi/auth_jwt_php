<?php

// Database with ORM Eloquent
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$container['db'] = function($container) use ($capsule) {
	return $capsule;
};
// --------------------------


$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', 'http://localhost:4200')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});


$container['HomeController'] = function($container) {
	return new App\Controllers\HomeController($container);
};


$container['AuthController'] = function($container) {
	return new App\Controllers\Auth\AuthController($container);
};

$container['UserController'] = function($container) {
	return new App\Controllers\User\UserController($container);
};

$container['User'] = function($container) {
	return  new App\Models\User();
};
