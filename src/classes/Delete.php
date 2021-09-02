<?php

namespace liw\src\classes;

use liw\app\core\Db;

class Delete 
{
    public function __construct($request)
    {

        $db = new Db();
        $db->delete($request["deleteId"]);

    }
}