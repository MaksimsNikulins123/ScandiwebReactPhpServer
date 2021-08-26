<?php

namespace liw\src\classes;

use liw\src\abstractClass\Product;

class Furniture extends Product
{

    private $height;
    private $width;
    private $length;
    
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
        if(is_string($type) && $type == "Furniture"){
            $this->type = $type;
            return "id has been updated to $type";
        }else{
            return 'not a valid type';
        }
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setHeight($height)
    {
        if(is_string($height) && strlen($height) > 0){
            $this->height = $height;
            return "id has been updated to $height";
        }else{
            return 'not a valid height';
        }
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function setWidth($width)
    {
        if(is_string($width) && strlen($width) > 0){
            $this->width = $width;
            return "id has been updated to $width";
        }else{
            return 'not a valid width';
        }
    }
    public function getLength()
    {
        return $this->length;
    }
    public function setLength($length)
    {
        if(is_string($length) && strlen($length) > 0){
            $this->length = $length;
            return "id has been updated to $length";
        }else{
            return 'not a valid length';
        }
    }
}