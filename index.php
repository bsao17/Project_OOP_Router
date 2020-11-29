<?php

require "vendor/autoload.php";
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$request = new Request(
    $_GET,
    $_POST,
    [],
    $_COOKIE,
    $_FILES,
    $_SERVER
);

$links = ["home", "contact", "billets"];
$action = $request->query->get('action');

if( in_array( $action, $links)){
    echo sprintf("c'est bien %s ", $action);
}else{
    echo "404 not found !!!";
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
 
