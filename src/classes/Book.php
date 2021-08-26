<?php

namespace liw\src\classes;

use liw\src\abstractClass\Product;

class Book extends Product
{

    private $weight;

    public function getSku()
    {
        return $this->sku;
    }
    public function setSku($sku)
    {
        if(strlen($sku) > 0){
            $this->sku = $sku;
            return "id has been updated to $sku";
        }else{
            return 'not a valid sku';
        }
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if(strlen($name) > 0){
            $this->name = $name;
            return "id has been updated to $name";
        }else{
            return 'not a valid name';
        }
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        if(is_string($price) && strlen($price) > 0){
            $this->price = $price;
            return "id has been updated to $price";
        }else{
            return 'not a valid price';
        }
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        if(is_string($type) && $type == "Book"){
            $this->type = $type;
            return "id has been updated to $type";
        }else{
            return 'not a valid type';
        }
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        if(is_string($weight) && strlen($weight) > 0){
            $this->weight = $weight;
            return "id has been updated to $weight";
        }else{
            return 'not a valid weight';
        }
    }
}