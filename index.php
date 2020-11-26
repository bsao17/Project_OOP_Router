<?php

require "vendor/autoload.php";
$loader = new \Twig\Loader\FilesystemLoader('src/views/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

use controllers\Router;

$action = isset($_GET['action']) ? $_GET['action'] : null;

if($action != null){
    switch($action){
        case "home":
            $route = new Router();
            echo $twig->render('home.twig');
            break;

        case "signin":
            require_once Router::LINK_SIGNIN;
            Dump($_POST);
            break;

        default:
            echo('404 not found');
    }

}