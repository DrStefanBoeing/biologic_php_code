<?php

use Biologic\Core\Classes\Request;
use Biologic\Core\Classes\Router;

// boot.php will set up various initial configurations we require
require __DIR__.'/init/boot.php';

$request = new Request(base_url_path(), $_SERVER['REQUEST_METHOD']);

// instantiate router
$router = new Router($request);

// include experiment specific routes files
$experiment_dir = __DIR__.'/../experiments';
foreach(glob($experiment_dir . '/*', GLOB_ONLYDIR) as $dir) {
    if(file_exists($dir.'/routes.php')) {
        include $dir . '/routes.php';
    }
}

// include core routes files
require __DIR__.'/routes.php';

// get a response from the router and send it back to the client
$response = $router->response();
$response->send();
