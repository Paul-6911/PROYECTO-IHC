<?php 

    function conectarDB() : mysqli {
        $db = mysqli_connect('localhost','root','2398','mydb');//credenciales de la bd
        if(!$db){
            echo "Error";
            exit;
        }
        return $db;
    }