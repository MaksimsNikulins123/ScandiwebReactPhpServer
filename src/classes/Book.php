<?php

namespace liw\src\classes;

use liw\src\abstractClass\Product;

class Book extends Product
{

    private $weight;
    
    public function get()
    {
        echo "Book class";
    }
    public function set(){

    }
}