<?php
$router->define([
    'array' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/about/culture' => 'controllers/about-culture.php',
    'array/contact' => 'controllers/contact.php',
]);
