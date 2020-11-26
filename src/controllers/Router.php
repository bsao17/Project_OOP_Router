<?php

namespace controllers;

class Router{
    /**
     *constant link
     */
    const LINK_HOME = "src/views/home.html";
    const LINK_SIGNIN = "src/views/signin.html";

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