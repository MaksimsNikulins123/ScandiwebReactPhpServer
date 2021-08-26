<?php
session_start();
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Content-Type');

require "app/init.php";


$postdata = file_get_contents("php://input");
$request = json_decode($postdata,true) ;


if($postdata == ''){

    $db = new liw\app\core\Db();
    $db->read();

}else if($request["clickBtnValue"] == 'save'){ 
    if($request["type"] == "DVD"){
    
        $dvd = new liw\src\classes\Dvd();

        $dvd->setSku($request["sku"]);
        $dvd->setName($request["name"]);
        $dvd->setPrice($request["price"]);
        $dvd->setType($request["type"]);
        $dvd->setSize($request["size"]);

        $db = new liw\app\core\Db();
        
        $db->write(
            $dvd->getSku(), 
            $dvd->getName(), 
            $dvd->getPrice(), 
            $dvd->getType(),
            $dvd->getSize(),
            "0",
            "0",
            "0",
            "0"
        );
        
    }else if($request["type"] == "Book"){

        $book = new liw\src\classes\Book();

        $book->setSku($request["sku"]);
        $book->setName($request["name"]);
        $book->setPrice($request["price"]);
        $book->setType($request["type"]);
        $book->setWeight($request["weight"]);

        $db = new liw\app\core\Db();

        $db->write(
            $book->getSku(), 
            $book->getName(), 
            $book->getPrice(), 
            $book->getType(),
            "0",
            $book->getWeight(),
            "0",
            "0",
            "0"
        );
        
    }else if($request["type"] == "Furniture"){
     
        $book = new liw\src\classes\Furniture();

        $book->setSku($request["sku"]);
        $book->setName($request["name"]);
        $book->setPrice($request["price"]);
        $book->setType($request["type"]);
        $book->setHeight($request["height"]);
        $book->setWidth($request["width"]);
        $book->setLength($request["length"]);

        $db = new liw\app\core\Db();

        $db->write(
            $book->getSku(), 
            $book->getName(), 
            $book->getPrice(), 
            $book->getType(),
            "0",
            "0",
            $book->getHeight(),
            $book->getWidth(),
            $book->getLength()
        );
    }
    

}else if($request["clickBtnValue"] == 'mass delete'){
   
    $db = new liw\app\core\Db();
    $db->delete($request["deleteId"]);
}


