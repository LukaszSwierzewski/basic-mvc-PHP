<?php



// $router->define([
//     'php-basic' => 'controllers/index.php',
//     'php-basic/about' => 'controllers/about.php',
//     'php-basic/about-culture' => 'controllers/about-culture.php',
//     'php-basic/contact' => 'controllers/contact.php',
//     'php-basic/names' => 'controllers/add-name.php'
// ]);



$router->get('php-basic', 'PagesController@home');
$router->get('php-basic/about', 'PagesController@about');
$router->get('php-basic/contact', 'PagesController@contact');
$router->get('php-basic/users', 'UserController@index');

$router->post('php-basic/users', 'UserController@store');
