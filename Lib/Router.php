<?php

namespace Lib;

class Router
{
    public static function start(): void
    {
        $url = $_GET['url'] ?? '/';   //  '/'  'contacts'
        require_once __DIR__ . '/../routes.php';

        if (!isset($routes[$url])) {
            die('Page Not Found');
        }

        list($ctrlName, $ctrlMethod) = $routes[$url];

        if(!file_exists("Core/Controllers/$ctrlName.php")){
            die("Controller $ctrlName Not Found");
        }

        $controller = new ("\\Core\\Controllers\\$ctrlName")();

        if(!method_exists($controller, $ctrlMethod)){
            die("Method $ctrlMethod Not Found");
        }

        $controller->$ctrlMethod();
    }
}


/* 

$routes = [
    '/'         => ['MainController', 'home'],
    'contacts'  => ['MainController', 'contacts'],
];


*/