<?php
    session_start();
    require 'includes/config/database.php';
    $personas = [];
    $i = 0;
    
    //validacion
    
        $db = conectarDB();
        $correo = $_SESSION['correo'];
        $contrasenia = $_SESSION['contrasenia'];
        $query = "SELECT * FROM doctor WHERE Correo_Doctor = '$correo' AND Contrasenia_Doctor = '$contrasenia'";

        $consulta = mysqli_query($db,$query);
        $row = mysqli_fetch_assoc($consulta);
        //mysqli_close($db);

        $db = conectarDB();

        $variable = $row['ID_Doctor'];
        $string1 = strval($variable);

        $id_sin_espacio = trim($string1);

        //echo "The variable is converted to a string and its value is $string1."; 

        $query2 = "SELECT Nombre_Asegurado_Atencion, Apellido_Asegurado_Atencion FROM atencion WHERE ID_Doctor_Atencion =  $id_sin_espacio";

        $consulta2 = mysqli_query($db,$query2);
      //  $row2 = mysqli_fetch_assoc($consulta2);

        while($row2 = mysqli_fetch_assoc($consulta2)){
            $i++;
            $personas[$i][0] = $row2['Nombre_Asegurado_Atencion'];
            $personas[$i][1] = $row2['Apellido_Asegurado_Atencion'];
        }

        echo '<pre>';
        //var_dump ($personas);
        echo '</pre>';
/*
        while ($row2 = mysqli_fetch_assoc($consulta2)) {
            echo $row2['Nombre_Asegurado_Atencion'];
            echo $row2['Apellido_Asegurado_Atencion'];
        } */
            
        mysqli_free_result($consulta2);
    
        //mysqli_close($db);
    
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
          <li><a href="salir.php?id=3" style="color:#00aef0"><i class="fas fa-user"></i> Cerrar Sesión</a></li>
        </ul>
      </div>
</header>

<section id="inner-title" class="inner-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6"><h2>Horarios del Doctor</h2></div>
      <div class="col-md-6 col-lg-6">
        <div class="breadcrumbs">
          <ul>
            <li>Página Actual:</li>
            <li><a>Horarios del Doctor: <?php echo $row['Apellido_Doctor'].", ".$row['Nombre_Doctor']?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> 

<section id="section18" class="section-margine">
    <div class="container">
        <div class="col-md-4 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
        <div class="section-18-img">
            <img src="../images/portfolio/doctor28.jpg"  class="img-responsive" alt=""/>
        </div>
        </div>
        <div class="section18">
            <div class="container" style="justify-content: center; display: flex; margin-bottom: -15px;">
                <div class="col-md-6 col-lg-6 wow fadeInUp" >
                    <div style="border-radius: 30px; background-color: #70d7ff; padding: 15px 0px 15px 0px">
                        <h3 style="color:rgb(1, 143, 89); text-align: center;">Doctor(a): <?php echo $row['Apellido_Doctor'].", ".$row['Nombre_Doctor']?> </h3>
                        <h3 style="color:rgb(255, 255, 255); text-align: center;">Área: <?php echo $row['Especialidad']?></h3>  
                        <div class="horario-doctor" style="text-align: center;">
                            <div class="dia-horario" style="color: rgb(0, 0, 0);">
                                <h3>Horario: <?php echo $row['Horario_Doctor']?></h3>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>  
</section>
<!--- ESTO NO VA
<?php for($i = 0; $i<sizeof($personas); $i++):?>
    <div class="pacientes-doctor" style="border-radius: 30px; background-color: rgb(189, 247, 255); padding: 15px 15px 15px 15px;">
        <div>
          <ul>
            <h4><b style="color: black; font-weight: bold;">Nombre:</b><b> <?php echo $personas[$i+1][$i]?></b></h4>
            <h4><b style="color: black; font-weight: bold;">Apellido:</b><b> <?php echo $personas[$i+1][$i]?> </b></h4>
            <h4><b style="color: black; font-weight: bold;">Fecha Cita:</b><b> Miércoles 05 de Enero del 2022 </b></h4>
          </ul>
        </div>
      </div>
<?php endfor?>--->


<?php foreach($personas as $persona):?>
  <section id="section18" class="section-margine">
    <div class="container" style="justify-content: center; display: flex;">
      <div class="col-md-3 col-lg-7 wow fadeInUp" data-wow-delay=".2s">
        <div class="pacientes-doctor" style="border-radius: 30px; background-color: rgb(189, 247, 255); padding: 15px 15px 15px 15px; margin-bottom: -50px;">
            <div>
              <ul>
                <h4><b style="color: black; font-weight: bold;">Nombre:</b><b> <?php echo $persona[0]?></b></h4>
                <h4><b style="color: black; font-weight: bold;">Apellido:</b><b> <?php echo $persona[1]?> </b></h4>
                <h4><b style="color: black; font-weight: bold;">Fecha Cita:</b><b> Miércoles 05 de Enero del 2022 </b></h4>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </section>
<?php endforeach?> 

<!---
<section id="section18" class="section-margine" style="margin-bottom: -40px;">
  <div class="container">
    <div class="col-md-3 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
      <h3 style="color:#00aef0;">Tus Pacientes</h3>
      <div class="pacientes-doctor" style="border-radius: 30px; background-color: rgb(189, 247, 255); padding: 15px 15px 15px 15px;">
        <div>
          <ul>
            <h4><b style="color: black; font-weight: bold;">Nombre:</b><b> Juliana Avendaño Jiménez</b></h4>
            <h4><b style="color: black; font-weight: bold;">Fecha Cita:</b><b> Miércoles 05 de Enero del 2022 </b></h4>
            <h4><b style="color: black; font-weight: bold;">Lugar Cita:</b><b> Piso 1, Sala 5</b></h4>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
      <br><br>
      <div class="pacientes-doctor" style="border-radius: 30px; background-color: rgb(189, 247, 255); padding: 15px 15px 15px 15px;">
        <div>
          <ul>
            <h4><b style="color: black; font-weight: bold;">Nombre:</b><b> Juan Ríos Solórzano</b></h4>
            <h4><b style="color: black; font-weight: bold;">Fecha Cita:</b><b> Miércoles 12 de Enero del 2022 </b></h4>
            <h4><b style="color: black; font-weight: bold;">Lugar Cita:</b><b> Piso 1, Sala 5</b></h4>
          </ul>
        </div>
      </div>
    </div>
  </div>  
</section>

<section id="section18" class="section-margine">
  <div class="container">
    <div class="col-md-3 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
      <div class="pacientes-doctor" style="border-radius: 30px; background-color: rgb(189, 247, 255); padding: 15px 15px 15px 15px;">
        <div>
          <ul>
            <h4><b style="color: black; font-weight: bold;">Nombre:</b><b> Mayra Galarreta Girón</b></h4>
            <h4><b style="color: black; font-weight: bold;">Fecha Cita:</b><b> Miércoles 19 de Enero del 2022 </b></h4>
            <h4><b style="color: black; font-weight: bold;">Lugar Cita:</b><b> Piso 3, Sala 2</b></h4>
          </ul>
        </div>
      </div>
    </div>
  </div>  
</section>
--->
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.plugin.min.js"></script>
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/bootstrap-dropdownhover.min.js"></script>
<script src="js/wow.min.js"></script> 
<script src="js/waypoints.min.js"></script> 
<script src="js/jquery.counterup.min.js"></script> 
<script src="js/main.js"></script>
</body>