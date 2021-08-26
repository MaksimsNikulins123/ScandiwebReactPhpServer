<?php

namespace liw\src\classes;

use liw\src\abstractClass\Product;

class Furniture extends Product
{

    private $height;
    private $width;
    private $length;
    
    public function get()
    {
        echo "Furniture class";
    }
    public function set(){

    }
}