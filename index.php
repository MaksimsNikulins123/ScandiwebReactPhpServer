<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Content-Type');

require "app/init.php";


$postdata = file_get_contents("php://input");
$request = json_decode($postdata,true) ;

use liw\src\controller\Controller;

$controller = new Controller();

($request["clickBtnValue"] == "") ? $controller->show() : $controller->getAction($request);
