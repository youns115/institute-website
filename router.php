<?php

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];



$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contacts' => 'controllers/contacts.php',
    '/faq' => 'controllers/faq.php',
    '/gallery' => 'controllers/gallery.php',
    '/login' => 'controllers/login.php'

];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);
