<?php

use Lib\Router;

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once "./$class.php";
});

Router::start();

?>