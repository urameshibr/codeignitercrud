<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$container = require APPPATH . 'config/container.php';
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'user_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

include_once('api_routes.php');

/** WEB ROUTES */
$route['user/index'] = 'user_controller/index';
$route['user/edit/(:num)'] = 'user_controller/edit/$1';
$route['user/create'] = 'user_controller/create';
$route['user/show/(:num)'] = 'user_controller/show/$1';
$route['user/store']['POST'] = 'user_controller/store';
$route['user/update/(:num)']['UPDATE'] = 'user_controller/update/$1';
$route['user/destroy/(:num)']['DELETE'] = 'user_controller/destroy/$1';


$route['test'] = function () use ($container) {
    $container['TestController']->run();
    die();
};

/*endpoint('GET', 'test2', 'TestController@test2');

function endpoint($method = 'GET', $url, $actionController){
    $resolving = explode('@', $actionController);
    $controller = $resolving[0];
    $action = $resolving[1];

    return $route[$url][$method] = function () {
        return $container[$controller]->$action();
    };
}*/