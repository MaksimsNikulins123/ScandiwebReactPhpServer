<?php

namespace liw\src\controller;

use liw\app\core\Db;

class Controller
{
    public function show()
    {
        $db = new Db();
        $db->read();
    }

    public function getAction($request)
    {
       
        $action = ucfirst($request["clickBtnValue"]);

        $actionClass = "liw\\src\\classes\\".$action;

        $actionClassObject = new $actionClass($request);
    }
}