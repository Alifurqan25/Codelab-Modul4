<?php

namespace Controller;

class Controller
{
    // VARIABEL ATRIBUT
    var $controllerName;
    var $controllerMethod;

    //METHOD UNTUK MENGAMBIL SEMUA ATRIBUT
    public function getControllerAttribute()
    {
        return[
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod
        ];
    }
}