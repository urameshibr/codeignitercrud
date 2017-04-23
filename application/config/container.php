<?php
$container = new \Pimple\Container;

$container['UserRepository'] = function (){
    return new \App\Repositories\UserRepository();
};
$container['UserController'] = function($container){
    return new User_controller($container['UserRepository']);
};
$container['TestController'] = function($container){
    return new \App\Controllers\TestController($container['UserRepository']);
};
$container['UserModel'] = function(){
    return new User_model();
};

return $container;