<?php

namespace Controller;

class Controller
{
    // variable attribute
    var $controllerName;
    var $controllerMethod;

    // method untuk mengambil samua atribut
    public function getControllerAttribute()
    {
        return[
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod,
        ];
    }
}