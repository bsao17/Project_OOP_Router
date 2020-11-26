<?php

namespace controllers;

class Router{
    /**
     *constant link
     */
    const LINK_HOME = "src/views/home.html";
    const LINK_SIGNIN = "src/views/signin.html";

    private array $route = [];

    public function getRoute($route){
        if(in_array($this->route, $route)){
            echo sprintf("index.php/? %s", $route);
        }
    }
}