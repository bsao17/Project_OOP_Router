<?php

require "vendor/autoload.php";

use controllers\Router;

$action = isset($_GET['acton']) ? $_GET['action'] : null;

if($action != null){
    switch($action){
        case "home":
            $route = new Router();
            require Router::LINK_HOME;
            break;

        case "signin":
            require_once Router::LINK_SIGNIN;
            Dump($_POST);
            break;

        default:
            echo('404 not found');
    }

}