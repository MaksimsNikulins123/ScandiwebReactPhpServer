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

    public function set($name, $value){
        if($value == ''){
          $this->$name = 0;
        }else{
          $this->$name = $value;
        }
      }

    public function get($name){
        return $this->$name;
      }

    public function write($request)
    {
        
        $arrayKeys = array_keys($request);
        $arrayValues = array_values($request);
        
        for ($i=0; $i < count($request) ; $i++) { 
            $this->set($arrayKeys[$i], $arrayValues[$i]);
        }

        for ($i=0; $i < count($request) ; $i++) { 
              ${$arrayKeys[$i]} = $this->get($arrayKeys[$i]);
            }
    
            $connect = $this->connect();
                
            $sql = "INSERT INTO `products`(`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) 
                    VALUES (null,'$this->sku','$this->name','$this->price','$this->type','$this->size','$this->weight','$this->height','$this->width','$this->length')";
            
            $result = $connect->query($sql);            
          
    }

    public function delete($request){

        $idList = implode(",", $request);
 
        $connect = $this->connect();

        $sql = "DELETE FROM `products` WHERE id IN ($idList)";

        $result = $connect->query($sql);   

       }

}