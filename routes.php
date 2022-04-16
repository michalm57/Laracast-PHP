<?php
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');

$router->get('about/culture', 'controllers/about-culture.php');
$router->post('users', 'UsersController@store');
