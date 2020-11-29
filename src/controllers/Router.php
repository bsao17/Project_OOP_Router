<?php

namespace src\controllers;

require "vendor/autoload.php";


class Router{

    private $route = [
        "home",
        "signin"
    ];

    public function getRoute($route){
        $route = new Route;
        if(in_array($route, $this->route)){
            $_GET = sprintf("index.php/? %s", $route);
        }
    }
}


// $loader = new \Twig\Loader\FilesystemLoader('src/views/templates');
// $twig = new \Twig\Environment($loader, [
//     'cache' => false,    
// ]);

// use controllers\Router;

// $action = isset($_GET['action']) ? $_GET['action'] : null;

// if($action != null){
//     switch($action){
//         case "home":
//             $route = new Router();    
//             echo $twig->render('home.twig');
//             break;

//         case "signin":
//             require_once Router::LINK_SIGNIN;    
//             Dump($_POST);
//             break;

//         default:
//             echo('404 not found');
//     }

// }
 
