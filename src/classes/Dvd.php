<?php

namespace liw\src\classes;

use liw\src\abstractClass\Product;

class Dvd extends Product
{

    private $size;
    
    public function get()
    {
        echo "DVD class";
    }
    public function set(){

    }
}