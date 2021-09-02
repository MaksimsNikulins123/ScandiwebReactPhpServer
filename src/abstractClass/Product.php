<?php

namespace liw\src\abstractClass;

abstract class Product {

    private $id;
    private $sku;
    private $name;
    private $price;
 
    
    abstract function getSku();
    abstract function setSku($sku);
    abstract function getName();
    abstract function setName($name);
    abstract function getPrice();
    abstract function setPrice($price);
    

}