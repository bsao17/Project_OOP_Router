<?php

namespace src\controllers;

require "vendor/autoload.php";

use Twig\Environment;


class Navigation
{
    public function home(){
        return self::templateTwig("home.twig");
    }

    public function billets(){
        return self::templateTwig("billets.twig");
    }

    public function contact(){
        return self::templateTwig("contact.twig");
    }

    public static function templateTwig($temp){
        $loader = new \Twig\Loader\FilesystemLoader('src/views/templates');
        $twig = new Environment($loader, [ "cache" =>false ]);
        echo $twig->render($temp);
    }
}