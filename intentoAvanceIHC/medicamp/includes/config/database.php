<?php 

    function conectarDB() : mysqli {
        $db = mysqli_connect('localhost','root','2398','mydb');//aqui poner tus credenciales y el nombre de la base de datos
        if(!$db){
            echo "Error";
            exit;
        }
        return $db;
    }