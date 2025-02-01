<?php

namespace Habiba\Session1;

class App {
    private $url ,$controller ,$method;
    public function __construct($object)
    {
        $this->url = $object->queryString();
        $this->sprintUrl();
        $this->callMethod();

    }
    public function sprintUrl() {

        $urlArray = explode("/",$this->url);
        $this->controller = ucfirst($urlArray[0])."Controller"; // PostController
        $this->method = $urlArray[1];

    }
    public function callMethod() {
        $this->controller = "Habiba\Session1\Controller\\".$this->controller;
            if(class_exists($this->controller)){
                $controllerWithName = new $this->controller; // object
                if(method_exists($controllerWithName,$this->method)){
                    call_user_func([$controllerWithName,$this->method]); // call method
                }else{
                die("method not found");
                }
            }else{
                die("class not found");
            }
    }   
}