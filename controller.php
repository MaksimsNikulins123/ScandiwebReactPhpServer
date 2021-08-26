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

    $db = new liw\app\core\Db();
    $db->write($request);

}else if($request["btn"] == 'mass delete'){
   
    $db = new liw\app\core\Db();
    $db->delete($request["deleteId"]);
}

