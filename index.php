<?php

require 'functions.php';


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];


# The function is if the array has a key of the given name exists
# So if we have the corresponding URI only on that condition should we 
# require the corresponding controller

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}

