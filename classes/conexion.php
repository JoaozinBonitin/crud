<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/crud/vendor/autoload.php";

class Conexion { 
    public function conectar(){

        try {

            $servidor = "127.0.0.1";
            $usuario = "mongoadmin";
            $password = "123456";
            $database = "crud";
            $door = "27017";

            $conexionChain = "mongodb://" . $usuario . ":" . $password . "@" . $servidor . ":" . $door . "/" . $database;


            $client = new MongoDB\Client($conexionChain);

            return $client->selectDatabase($database);

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}


?>