<?php

namespace App;

class Connection{

    public static function getDb(){
        try{

            $dsn='mysql:host=127.0.0.1;dbname=mvc;charset=utf8';
            $user='root';
            $pass='';

            $conn = new \PDO($dsn,$user,$pass);
            return $conn;

        }catch(\PDOException $e){

            echo "Conexão não realizada...<br/><br/><br/>";
            echo "<pre>";
            echo $e;
            echo "</pre>";
        }
    }
}


?>