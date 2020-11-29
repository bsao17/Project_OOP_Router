<?php

namespace src\controllers;

require "vendor/autoload.php";
use Symfony\Component\HttpFoundation\Request;

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
}