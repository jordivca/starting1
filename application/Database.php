<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database extends PDO
{
    public function __construct() {
        parent::__construct(
                'mysql:host='.DB_HOST.
                ';dbname='.DB_NAME,
                DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES '.DB_CHAR)
                );
        
    }
}



?>