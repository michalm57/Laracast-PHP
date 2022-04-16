<?php
require 'core/bootstrap.php';

// echo '<pre>';
// var_dump($_SERVER['REQUEST_URI']);
// echo '</pre>';
// die();

require Router::load('routes.php')
    ->direct(Request::uri());
