<?php

namespace controllers;

class Router{
    /**
     *constant link
     */
    const LINK_HOME = "src/views/home.html";
    const LINK_SIGNIN = "src/views/signin.html";

    const action = [
        "home",
        "signin"
    ];

    public function getRoute($route){
        if(in_array(Router::action, $route)){
            echo sprintf("index.php/? %s", $route);
        }
    }
}