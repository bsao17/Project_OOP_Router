<?php

namespace src\controllers;

require "vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;


class Route
{
    private $request;
    public $action;
    public $links = ["home", "contact", "billets"];
    
    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->request = new Request(
            $_GET,
            $_POST,
            [],
            $_COOKIE,
            $_FILES,
            $_SERVER
        );
        $this->action = $this->request->query->get('action');
        return $this->action;
    }

    public function getRoute(){
        if (in_array( $this->action, $this->links)){
           $template = Route::templateTwig("home.twig");
           return $template;
        }
    }

    public static function templateTwig($temp){
        $loader = new \Twig\Loader\FilesystemLoader('src/views/templates');
        $twig = new Environment($loader, [ "cache" =>false ]);
        echo $twig->render($temp);
        return;
    }
}