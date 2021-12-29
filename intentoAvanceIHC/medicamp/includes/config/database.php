<?php 

    function conectarDB() : mysqli {
        $db = mysqli_connect('localhost','root','Analucia_14143840','hospital');//aqui poner tus credenciales y el nombre de la base de datos
        if(!$db){
            echo "Error";
            exit;
        }
        return $db;
    }