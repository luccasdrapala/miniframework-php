<?php
    
    require_once "../vendor/autoload.php";

    $route = new \App\Route;
    echo '<pre>';
        print_r($route->getUrl());
    echo '</pre>';
    echo '<hr>';
    echo '<pre>';
        print_r($route->getRoutes());
    echo '</pre>';
?>