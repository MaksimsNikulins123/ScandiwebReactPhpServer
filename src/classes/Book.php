<?php

namespace liw\src\classes;

use liw\src\abstractClass\Product;
use liw\app\core\Db;

class Book extends Product
{
    private $type;
    private $weight;

    public function __construct($request)
    {
        $this->setSku($request["sku"]);
        $this->setName($request["name"]);
        $this->setPrice($request["price"]);
        $this->setType($request["type"]);
        $this->setSize($request["size"]);
        $this->setWeight($request["weight"]);
        $this->setHeight($request["height"]);
        $this->setWidth($request["width"]);
        $this->setLength($request["length"]);

        $db = new Db();
        
        $db->write(
            $this->getSku(), 
            $this->getName(), 
            $this->getPrice(), 
            $this->getType(),
            $this->getSize(),
            $this->getWeight(),
            $this->getHeight(),
            $this->getWidth(),
            $this->getLength()
        );
    }
  
    public function getSku()
    {
        return $this->sku;
    }
    public function setSku($sku)
    {
        if(strlen($sku) > 0){
            $this->sku = $sku;
            return "sku has been updated to $sku";
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
            return "name has been updated to $name";
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
            return "price has been updated to $price";
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
            return "type has been updated to $type";
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
            return "size has been updated to $size";
        }else{
            return 'not a valid size';
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
            return "weight has been updated to $weight";
        }else{
            return 'not a valid weight';
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
            return "height has been updated to $height";
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
            return "width has been updated to $width";
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
            return "length has been updated to $length";
        }else{
            return 'not a valid length';
        }
    }
}