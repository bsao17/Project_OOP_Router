<?php

namespace controllers;

require "vendor/autoload.php";


class Router{

    const ACTION = [
        "home",
        "signin"
    ];

    public function getRoute(array $route){
        if(in_array(Router::ACTION, $route)){
            $_GET = sprintf("index.php/? %s", $route);
        }
    }
}