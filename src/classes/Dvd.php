<?php

namespace liw\src\classes;

use liw\src\abstractClass\Product;

class Dvd extends Product
{

    private $size;

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
        if(is_string($type) && $type == "DVD"){
            $this->type = $type;
            return "id has been updated to $type";
        }else{
            return 'not a valid price';
        }
    }
    public function getSize()
    {
        return $this->size;
    }
    public function setSize($size)
    {
        if(is_string($size) && strlen($size) > 0){
            $this->size = $size;
            return "id has been updated to $size";
        }else{
            return 'not a valid size';
        }
    }
}