<?php
    session_start();
    session_destroy();
    if($_GET['id'] === '1'){
        header("location: /login-asegurado.php");
    }else if($_GET['id'] === '3'){
        header("location: /login-doctor.php");
    }
    
?>