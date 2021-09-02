<?php

namespace liw\src\classes;

class Save
{
    public function __construct($request)
    {

        $productType = ucfirst(strtolower($request["type"]));

        $productClass = "liw\\src\\classes\\".$productType;

        $productClassObject = new $productClass($request);

    }
    
}