<?php

namespace Monolog\app\core;

use mysqli;

class Database
{
    
    // public $db_host = DB_HOST;
    // public $db_user = DB_USER;
    // public $db_pass = DB_PASS;
    // public $db_name = DB_NAME;
// public $servername = "localhost";
// public $username = "id17429804_maxim";
// public $password = "MaksimNikulin123@";
// public $database = "id17429804_max";






  public $sku;
  public $name;
  public $price;
  public $type;
  public $size;
  public $weight;
  public $height;
  public $width;
  public $length;
  
  public function connect(){
    $servername = "localhost";
    $username = "id17429804_maxim";
    $password = "MaksimNikulin123@";
    $database = "id17429804_max";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    // var_dump($conn);
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
  public function write($request){
      
    //   var_dump($request);
      
    $arrayKeys = array_keys($request);
    $arrayValues = array_values($request);

    for ($i=0; $i < count($request) ; $i++) { 
      $this->set($arrayKeys[$i], $arrayValues[$i]);
    }
    for ($i=0; $i < count($request) ; $i++) { 
      ${$arrayKeys[$i]} = $this->get($arrayKeys[$i]);
    }
    
    // var_dump($this->type);
    
  
    $servername = "localhost";
    $username = "id17429804_maxim";
    $password = "MaksimNikulin123@";
    $database = "id17429804_max";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "Connected seccessfuly";
    }
    //     // var_dump($request);
    //     // echo $this->sku;
        
      $sql = "INSERT INTO `products`(`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) 
            VALUES (null,'$this->sku','$this->name','$this->price','$this->type','$this->size','$this->weight','$this->height','$this->width','$this->length')";
            
        //   var_dump($sql);  
        //   var_dump($conn);  
           
      if ($conn->query($sql) === TRUE) {
        //   echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
  }
  public function read(){ 
       $servername = "localhost";
    $username = "id17429804_maxim";
    $password = "MaksimNikulin123@";
    $database = "id17429804_max";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    // var_dump($conn);
    $products = [];
    // $query = "SELECT * FROM products";

    // var_dump($result);
    if($result = mysqli_query($conn, "SELECT * FROM products"))
    {
        // echo "read from database";
      $cr = 0;
      while( $row = mysqli_fetch_assoc($result))
     {
      $products[$cr]['id'] = $row['id'];
      $products[$cr]['sku'] = $row['sku'];
      $products[$cr]['name'] = $row['name'];
      $products[$cr]['price'] = $row['price'];
      $products[$cr]['type'] = $row['type'];
      $products[$cr]['size'] = $row['size'];
      $products[$cr]['weight'] = $row['weight'];
      $products[$cr]['height'] = $row['height'];
      $products[$cr]['width'] = $row['width'];
      $products[$cr]['length'] = $row['length'];
      $cr++;
     }
    //  var_dump($products);
      echo json_encode($products);
    // }else{
        // echo "couldn't read from database";
        // var_dump($query);
        // var_dump($this->connect());
    }
                
   
  }
  public function delete($request){
   echo "request:" . $request; 
    // $idList = implode(",", $request);
    echo "php file delete" . $request;
    
    
     $servername = "localhost";
    $username = "id17429804_maxim";
    $password = "MaksimNikulin123@";
    $database = "id17429804_max";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
         echo "Connected successfully";
    }
       
        echo "deleted" . $idList;
        
    $query = "DELETE FROM `products` WHERE id IN ($request)";
      $deleteProducts = mysqli_query($conn, $query);
        if(!$deleteProducts){
            echo "Cannot delete from database";
        }else{
           echo "deleted"; 
        }
        
        $conn->close();
    //     mysqli_close($this->connect());
  }
}