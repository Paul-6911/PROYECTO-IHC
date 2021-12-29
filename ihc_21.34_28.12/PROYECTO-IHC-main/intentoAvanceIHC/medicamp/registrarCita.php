<?php
    require 'includes/config/database.php';
    

    $separado = explode(',', $_POST["doctor"]);
    $apellido = trim($separado[0]);
    $correo = $_POST['email'];

    $db = conectarDB();
      $query = "SELECT * FROM doctor WHERE Apellido_Doctor = '$apellido' ";
      $resultado = mysqli_query($db,$query);
      $row = mysqli_fetch_assoc($resultado);
      $idDoc = $row['ID_Doctor'];
      $nombreDoc = $row['Nombre_Doctor'];
      $apellDoc = $row['Apellido_Doctor'];
      $nomCompleto = $nombreDoc.", ".$apellDoc;
      $especialidadDoc = $row['Especialidad'];
     // echo "$nombreDoc"." "."$apellDoc";
    mysqli_close($db);

    
    $db = conectarDB();
      $query2 = "SELECT * FROM asegurados WHERE Correo_Asegurado = '$correo' ";
      $resultado2 = mysqli_query($db,$query2);
      $row2 = mysqli_fetch_assoc($resultado2);
      $idAseg = $row2['ID_Asegurado'];
      $nombreAseg = $row2['Nombre_Asegurado'];
      $apellidoAseg = $row2['Apellido_Asegurado'];
     // echo "$nombreAseg"." "."$apellidoAseg";
    mysqli_close($db);

    

    $db = conectarDB();
       $query3 = "INSERT INTO atencion (ID_Doctor_Atencion,Nombre_Doctor_Atencion,Especialidad_Atencion, ID_Asegurado_Atencion,Nombre_Asegurado_Atencion,Apellido_Asegurado_Atencion) VALUES ('$idDoc','$nomCompleto','$especialidadDoc','$idAseg','$nombreAseg','$apellidoAseg')";
       if (!mysqli_query($db, $query3)) {
         print("error");
         // var_dump(mysqli_error($db));
        }
        // $resultado3 = mysqli_query($db,$query3);
        // $row3 = mysqli_fetch_assoc($resultado3);
        
    mysqli_close($db);
    //echo "$nomCompleto"." "."$nombreAseg";

  

?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Medicamp Responsive Bootstrap Template">
<meta name="keywords" content="Pixel">
<meta name="author" content="rkwebdesigns">
<script src="https://kit.fontawesome.com/025c8798b9.js" crossorigin="anonymous"></script>
<!-- Site Title   -->
<title>Sistema de Atención Hospitalaria - Sobre Nosotros</title>
<!-- Fav Icons   -->
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
<!-- Fonts Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- animate Effect -->
<link href="css/animate.css" rel="stylesheet">
<!-- Main CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- Responsive CSS -->
<link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<header id="header" class="head">
  
  <div class="top-header">
    <div class="container">
      <div class="row ">
        <ul class="contact-detail2 col-md-6 pull-left">
           <li> <a href="#" target="_blank"><i class="fa fa-mobile" style="color: #333"></i>459 123 721</a></li>
           <li> <a href="#" target="_blank"><i class="fa fa-envelope-o" style="color: #333"></i>mediSalud@gmail.com</a></li>
        </ul>
        <div class="social-links col-md-6 pull-right">
          <ul class="social-icons pull-right">
            <li> <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook" style="color: blue;"></i></a> </li>
            <li> <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter" style="color: skyblue;"></i></a> </li>
            <!---
            <li> <a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest" style="color: red;"></i></a> </li>
            <li> <a href="http://dribble.com/" target="_blank"><i class="fa fa-skype"></i></a> </li>
            <li> <a href="http://pinterest.com" target="_blank"><i class="fa fa-dribbble"></i></a> </li>
            --->
           </ul>
        </div>
      </div>
     </div>
    </div>
    
  <nav class="navbar navbar-default navbar-menu">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="index.php">
          <div class="logo-text"><span><samp>M</samp>Medi</span>Salud</div>
          <!-- <img src="images/logo.png" alt="logo"> -->
        </a> 
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login-asegurado.php" style="color:#00aef0">Salir</a></li>
    
         
        </ul>
      </div>

<section id="inner-title" class="inner-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <h2>Staff Médico</h2>
      </div>
      
    </div>
  </div>
</section>

<div class="formulario-registrar">
        <form action="/citaConfirmada.php" method="POST" class="form-reg">
          <fieldset>
            <legend>Validar los datos Registrados</legend>
            <div class="campos">
              <label for="Correo">Correo</label>
              <input type="text" value="<?php echo $_POST['email'] ?>" name="correo">
              <label for="Doctor">Doctor</label>
              <input type="text" value="<?php echo $_POST['doctor'] ?>">
              <label for="hora">Horario</label>
              <input type="text" value="<?php echo $_POST['horario'] ?>">
            <!---  <input type="date"> --->
            </div>
          </fieldset>
        </form>

        <a class="confirmar" href="citaConfirmada.php">Confirmar cita</a>
</div>



<?php include 'includes/templates/footer.php'?>