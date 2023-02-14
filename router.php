<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//accounts for subdomain (smartdew.markfehrenbach.me/) remove on production
// $uri = substr($uri, 2);

$routes = [
  '/' => 'controllers/index.php',
  '/dashboard' => 'controllers/index.php',
  '/add-data' => 'controllers/add-data.php',
  '/register' => 'controllers/register.php',
  '/login' => 'controllers/login.php',
  '/contact' => 'controllers/contact.php',
  '/user' => 'controllers/user.php',
  '/logout' => 'auth/logout.php',
];


function routeToController($uri, $routes)
{

  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

routeToController($uri, $routes);

function abort($code = 404)
{
  http_response_code($code);

  require "views/{$code}.view.php";

  die();
}
