<?php

namespace src\controllers;

require "vendor/autoload.php";

use Exception;
use Symfony\Component\HttpFoundation\Request;


class Route
{
    protected Request $request;
    public $action;
    public array $path = ["home", "contact", "billets", "signin"];
    
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
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            $this->action = $this->request->query->get('action');
        }else if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->action = $this->request->request->get('action');
        }else{
            throw new Exception("Unknown request method");
        }
        return $this->action;
    }
    
    public function getRoute($action){
        $this->action = $action;
        if (in_array( $this->action, $this->path)){
            $page = new Navigation();
            eval("\$page->\$action();");
            return;
            
        }
    }    
}