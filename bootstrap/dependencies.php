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

$container['HomeController'] = function($container) {
	return new App\Controllers\HomeController($container);
};


$container['AuthController'] = function($container) {
	return new App\Controllers\Auth\AuthController($container);
}; 

$container['User'] = function($container) {
	return  new App\Models\User(); 
};



