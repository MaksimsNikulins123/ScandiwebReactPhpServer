<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");

require __DIR__ . "/vendor/autoload.php";
require "app/init.php";

$postdata = file_get_contents("php://input");
$request = json_decode($postdata,true) ;

$db = new Monolog\app\core\Database();

$db->write($request);