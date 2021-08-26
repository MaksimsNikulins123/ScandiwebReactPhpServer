<?php

namespace liw\src\abstractClass;

abstract class Product {
    private $id;
    private $sku;
    private $name;
    private $price;

    abstract function get();
    abstract function set();

}