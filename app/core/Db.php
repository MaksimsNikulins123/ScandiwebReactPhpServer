<?php

namespace liw\app\core;

require 'config.php';

use PDO;

class Db 
{
    private $dbHost     = DB_HOST;
    private $dbUsername = DB_USER;
    private $dbPassword = DB_PASS;
    private $dbName     = DB_NAME;
    
    public function connect()
    {
        
        try{
            $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            die("Failed to connect with MySQL: " . $e->getMessage());
        }
    }
    public function read()
    {
        $connect = $this->connect();

        $sql = "SELECT * FROM products";

        $result = $connect->query($sql);

        $products = $result->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($products);
    }

    public function write($sku, $name, $price, $type, $size, $weight, $height, $width, $length)
    {

            $connect = $this->connect();
            
            $sql = $connect->prepare ("INSERT INTO `products`(`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) 
                    VALUES (null, ? , ? , ? , ? , ? , ? , ? , ? , ? )");

            $sql->bindParam(1, $sku);
            $sql->bindParam(2, $name);
            $sql->bindParam(3, $price);
            $sql->bindParam(4, $type);
            $sql->bindParam(5, $size);
            $sql->bindParam(6, $weight);
            $sql->bindParam(7, $height);
            $sql->bindParam(8, $width);
            $sql->bindParam(9, $length);
            $sql->execute();
          
    }

    public function delete($request){

        $idList = implode(",", $request);
 
        $connect = $this->connect();

        $sql = "DELETE FROM `products` WHERE id IN ($idList)";

        $result = $connect->query($sql);   

       }

}