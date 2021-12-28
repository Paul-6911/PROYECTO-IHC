<?php

    $correo ='';
    $contrasenia ='';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $correo = $_POST['correo'];
      $contrasenia = $_POST['contrasenia'];
    }

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
<section id="section-12" style="margin-top: -14px; margin-bottom: -14px;">
  <div class="container" >
    <div class="row">
      <div class="col-md-12 col-md-12">
        <div class="portfolioFilter text-center">
          <a href="#" data-filter="*" class="current">Todas las Especialidades</a>/
          <a href="#" data-filter=".cardiologia">Cardiología</a>/
          <a href="#" data-filter=".dermatologia">Dermatología</a>/
          <a href="#" data-filter=".neurologia">Neurologia</a>/
          <a href="#" data-filter=".oftalmologia">Oftalmología</a>/
          <a href="#" data-filter=".pediatria">Pediatría</a>/
          <a href="#" data-filter=".radiologia">Radiología</a><br>
        </div>
       <!---
        <div class="portfolioFilter1 text-center">
          <a href="#" data-filter="*" class="current">Todas las Sedes</a>/
          <a href="#" data-filter=".independencia">Independencia</a>/
          <a href="#" data-filter=".sanborja">San Borja</a>/
          <a href="#" data-filter=".villamaria">Villa María del Triunfo</a>
        </div>
        ---->
       <!---
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle"
                  data-toggle="dropdown">
            Búsqueda por Sedes <span class="caret"></span>
          </button>
        
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Independencia</a></li>
            <li><a href="#">San Borja</a></li>
            <li><a href="#">Villa María del Triunfo</a></li>
            
            <li class="divider"></li>
            <li><a href="#">Acción #4</a></li>
          </ul>
        </div>
        
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle"
                  data-toggle="dropdown">
            Búsqueda por Especialidad <span class="caret"></span>
          </button>
        
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Cardiología</a></li>
            <li><a href="#">Dermatología</a></li>
            <li><a href="#">Neurología</a></li>
            <li><a href="#">Oftalmología</a></li>
            <li><a href="#">Pediatría</a></li>
            <li><a href="#">Radiología</a></li>
            <!---
            <li class="divider"></li>
            <li><a href="#">Acción #4</a></li>
          </ul>
        </div>
      -->
        <!--class="img-responsive wow zoomIn" fue quitada de cada imagen del doctor (img src) debido a que la imagen no se mostraba
        si no estaba en la parte superior de la página-->

        <!---<a class="magnific-popup" href="images/portfolio/doctorX.jpg"> se quitó de cada imagen de doctor (dificultad al usuario
          cuando hace click en la imagen)-->

        <div class="portfolioContainer" style="margin-bottom: 20px;">
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor1.jpg" class="imagenDoctor img-responsive" alt="image" style="width:100%;"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor"><!--class="especialidad-descripcionDoctor"-->
                    <h6>Cardiología</h6>
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Abad Centella, Julia Elisa<br></div>
                    <input class="ocultar" type="text" name="doctor" value="Abad Centella, Julia Elisa">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Martes 14pm-16pm">
                    <!--<div class="sedeDoctor">Sede Villa María del Triunfo</div> class="sedeDoctor"--->
                    <br>
                  </div> 
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Martes
                    </div><h6>14pm-16pm</h6>
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia villamaria text-center">
            <form action="/registrarCita.php" method="POST">
              <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor2.jpg" class="imagenDoctor img-responsive" alt="image" style="width:100%;"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor"><!--class="especialidad-descripcionDoctor"-->
                  <h6>Neurología</h6>
                  <input class="ocultar" type="text" name="doctor" value="ARRUNÁTEGUI PÉREZ, ÓSCAR MANUEL">
                  <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                  <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                  <input class="ocultar" type="text" name="horario" value="Martes 8am-10:30 am">
                </div>
                <div class="datosDoctor">
                  <div class="nombreDoctor">Arrunátegui Pérez, Óscar Manuel<br></div>
                  <!--<div class="sedeDoctor">Sede Villa María del Triunfo</div> class="sedeDoctor"--->
                  <br>
                </div> 
              </div>
              <div class="descripcion_horario">
                <div class="box-horario">
                  <div class="dia-horario">
                    Martes
                  </div><h6>8am-10:30am</h6>
                 
                </div>
                <input type="submit" class="box-reservarCita" value="Reservar Cita">
              </div>
            </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia villamaria text-center">
            <form action="/registrarCita.php" method="POST">
              <div class="img-descripcionDoctor">
                <a href="registrarCita.php"><img src="images/portfolio/doctor33.jpg" alt="image" class="imagenDoctor img-responsive"></a>
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Neurología</h6>
                    <input class="ocultar" type="text" name="doctor" value="BETETA SOLÓRZANO, PEDRO ALFONSO">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Lunes 8 am - 10 am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Beteta Solórzano, Pedro Alfonso<br></div>
                    <!---<div class="sedeDoctor">Sede Villa María del Triunfo</div>-->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>8am-10am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor32.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Oftalmología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Bustíos Peña, Adriana Nicole">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miercoles 8am-10pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Bustíos Peña, Adriana Nicole<br></div>
                    <!---<div class="sedeDoctor">Sede Villa María del Triunfo</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>8am-10am</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor3.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Neurología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Calderón Albites, Verónica">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Martes 14pm-15:30pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Calderón Albites, Verónica<br></div>
                    <!--<div class="sedeDoctor">Sede San Borja</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Martes
                    </div><h6>14pm-15:30pm</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia sanborja text-center">
            <form action="/registrarCita.php" method="POST">
              <div class="img-descripcionDoctor">
                <a href="registrarCita.php"><img src="images/portfolio/doctor4.jpg" alt="image" class="imagenDoctor img-responsive"></a>
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Dermatología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Díaz Jáuregui, Aldo Ernesto">
                      <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                      <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                      <input class="ocultar" type="text" name="horario" value="Lunes 8am-9:30am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Díaz Jáuregui, Aldo Ernesto<br></div>
                    <!--<div class="sedeDoctor">Sede San Borja</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>8am-9:30am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia independencia text-center">
            <form action="/registrarCita.php" method="POST">
              <div class="img-descripcionDoctor">
                <a href="registrarCita.php"><img src="images/portfolio/doctor5.jpg" alt="image" class="imagenDoctor img-responsive"></a>
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Cardiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Foster De la Torre, Mirella Leonor">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Viernes 16:30pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Foster De la Torre, Mirella Leonor<br></div>
                    <!--<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Martes
                    </div><h6>08am-10am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor6.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Dermatología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Fuentes Urrutia, Leonardo Misael">
                      <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                      <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                      <input class="ocultar" type="text" name="horario" value="Lunes 16pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Fuentes Urrutia, Leonardo Misael<br></div>
                    <!--<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>16pm-18pm</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia villamaria text-center">
            <form action="/registrarCita.php" method="POST">
              <div class="img-descripcionDoctor">
                <a href="registrarCita.php"><img src="images/portfolio/doctor7.jpg" alt="image" class="imagenDoctor img-responsive"></a>
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Radiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Hidalgo Briceño, Anthony">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Sabado 11am-13pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Hidalgo Briceño, Anthony<br></div>
                    <!--<div class="sedeDoctor">Sede Villa María del Triunfo</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Martes
                    </div><h6>16pm-18pm</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor8.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Radiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Hilton Fernández, Paulo Toribio">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miércoles 10am-11:30am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Hilton Fernández, Paulo Toribio<br></div>
                    <!---<div class="sedeDoctor">Sede San Borja</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>10am-11:30am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor9.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Neurología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Ibarra Otoya, Sandra Susana">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Lunes 16pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Ibarra Otoya, Sandra Susana<br></div>
                    <!---<div class="sedeDoctor">Sede San Borja</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>16pm-18pm</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor10.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Pediatría</h6>
                    <input class="ocultar" type="text" name="doctor" value="Ishiguro Jiménez, Lila Naomí">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Lunes 16pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Ishiguro Jiménez, Lila Naomí<br></div>
                    <!---<div class="sedeDoctor">Sede Villa María del Triunfo</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>14pm-16pm</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia vilamaria text-center">
            <form action="/registrarCita.php" method="POST">
              <div class="img-descripcionDoctor">
                <a href="registrarCita.php"><img src="images/portfolio/doctor11.jpg" alt="image" class="imagenDoctor img-responsive"></a>
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Cardiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Llanos Teijeiro, Juan Francisco">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Lunes 10am-11:30am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Llanos Teijeiro, Juan Francisco<br></div>
                    <!--<div class="sedeDoctor">Sede Villa María del Triunfo</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>10am-11:30am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor12.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Oftalmología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Llanos Teijeiro, Juan Francisco">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Lunes 14pm-16pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Losada Reátegui, Santiago Eduardo<br></div>
                    <!---<div class="sedeDoctor">Sede San Borja</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>14pm-16pm</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor13.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Dermatología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Luján Abregú, Pamela Roxana">
                      <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                      <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                      <input class="ocultar" type="text" name="horario" value="Martes 09:30am-11am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Luján Abregú, Pamela Roxana<br></div>
                    <!---<div class="sedeDoctor">Sede Villa María del Triunfo</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Martes
                    </div><h6>09:30am-11am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria sanborja text-center">
            <form action="/registrarCita.php" method="POST">
              <div class="img-descripcionDoctor">
                <a href="registrarCita.php"><img src="images/portfolio/doctor14.jpg" alt="image" class="imagenDoctor img-responsive"></a>
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Pediatría</h6>
                    <input class="ocultar" type="text" name="doctor" value="Merino Espejo, Gael Omar">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Martes 15:30pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Merino Espejo, Gael Omar<br></div>
                    <!--<div class="sedeDoctor">Sede San Borja</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Martes
                    </div><h6>15:30pm-18pm</h6>
                  
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
               </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor15.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Radiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Montalvo Dos Santos, Carmen Rosa">
                      <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                      <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                      <input class="ocultar" type="text" name="horario" value="Lunes 11:30am-13:30am<">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Montalvo Dos Santos, Carmen Rosa<br></div>
                    <!---<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>11:30am-13:30am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor16.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Oftalmología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Núñez Hinostroza, Néstor">
                        <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                        <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                        <input class="ocultar" type="text" name="horario" value="Martes 8am-10am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Núñez Hinostroza, Néstor<br></div>
                    <!--<div class="sedeDoctor">Sede Villa María del Triunfo</div>--->
                    <br>
                  </div>  
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Martes
                    </div><h6>8am-10am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor17.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Oftalmología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Olórtegui Li, Victoria de los Ángeles">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miércoles 16pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Olórtegui Li, Victoria de los Ángeles<br></div>
                    <!--<div class="sedeDoctor">Sede San Borja</div>---->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>16pm-18pm</h6>
                  
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor18.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Dermatología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Ortega Espinola, Andrés Gastón">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Jueves 14pm-16pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Ortega Espinola, Andrés Gastón<br></div>
                    <!--<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Jueves
                    </div><h6>14pm-16pm</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor19.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Cardiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Palao Torregrosa, Juan Cristóbal">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Lunes 16pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Palao Torregrosa, Juan Cristóbal<br></div>
                    <!---<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>16pm-18pm</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor20.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Pediatría</h6>
                    <input class="ocultar" type="text" name="doctor" value="Puelles Montana, Ashley Susana">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miércoles 14pm-15:30pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Puelles Montana, Ashley Susana<br></div>
                    <!--<div class="sedeDoctor">Sede San Borja</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>14pm-15:30pm</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
         
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor22.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Pediatría</h6>
                    <input class="ocultar" type="text" name="doctor" value="Reyes Quiñones, Estrella Jesusa">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Lunes 8am-10am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Reyes Quiñones, Estrella Jesusa<br></div>
                    <!--<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>8am-10am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor23.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Radiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Rueda De Molina, José Ignacio">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miércoles 16pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Rueda De Molina, José Ignacio<br></div>
                    <!--<div class="sedeDoctor">Sede Independencia</div>---->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>16pm-18pm</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor24.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Oftalmología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Salvatierra Yamamoto, Saúl Arturo">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Lunes 8am-10am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Salvatierra Yamamoto, Saúl Arturo<br></div>
                    <!--<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Lunes
                    </div><h6>8am-10am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>

            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor25.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Neurología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Taboada Sevilla, Kiara Paola">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Jueves 8am-9:30am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Taboada Sevilla, Kiara Paola<br></div>
                    <!--<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Jueves
                    </div><h6>8am-9:30am</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"><img src="images/portfolio/doctor26.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Cardiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Torre Chumpitaz, Melva">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miércoles 8am-10am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Torre Chumpitaz, Melva<br></div>
                    <!--<div class="sedeDoctor">Sede San Borja</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>8am-10am</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"> <img src="images/portfolio/doctor27.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Dermatología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Torre Morales, Braulio Héctor">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miércoles 8am-10am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Torre Morales, Braulio Héctor<br></div>
                    <!--<div class="sedeDoctor">Sede San Borja</div>---->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>8am-10am</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"> <img src="images/portfolio/doctor28.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Neurología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Torroja Villareal, Luis Ángel">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miércoles 8am-10am">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Torroja Villareal, Luis Ángel<br></div>
                    <!--<div class="sedeDoctor">Sede Villa María del Triunfo</div>-->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>8am-10am</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
              </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"> <img src="images/portfolio/doctor29.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Radiología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Wilhelm Eguren, Marcos Lorenzo">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Martes 10:30am-12:30pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Wilhelm Eguren, Marcos Lorenzo<br></div>
                    <!---<div class="sedeDoctor">Sede Villa María del Triunfo</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Martes
                    </div><h6>10:30am-12:30pm</h6>
                   
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
       
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"> <img src="images/portfolio/doctor31.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Dermatología</h6>
                    <input class="ocultar" type="text" name="doctor" value="Yesán Ortega, Narciso">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Miércoles 11:30am-13pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Yesán Ortega, Narciso<br></div>
                    <!---<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Miércoles
                    </div><h6>11:30am-13pm</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="registrarCita.php"> <img src="images/portfolio/doctor34.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <form action="/registrarCita.php" method="POST">
                <div class="descripcionDoctor">
                  <div class="especialidad-descripcionDoctor">
                    <h6>Pediatría</h6>
                    <input class="ocultar" type="text" name="doctor" value="Zapata Alarcón, Gabriela Estefania">
                    <input class="ocultar" type="text" name="email" value=<?php echo $correo ?>>
                    <input class="ocultar" type="text" name="pass" value="<?php echo $contrasenia ?>">
                    <input class="ocultar" type="text" name="horario" value="Jueves 16pm-18pm">
                  </div>
                  <div class="datosDoctor">
                    <div class="nombreDoctor">Zapata Alarcón, Gabriela Estefania<br></div>
                    <!--<div class="sedeDoctor">Sede Independencia</div>--->
                    <br>
                  </div>
                </div>
                <div class="descripcion_horario">
                  <div class="box-horario">
                    <div class="dia-horario">
                      Jueves
                    </div><h6>16pm-18pm</h6>
                    
                  </div>
                  <input type="submit" class="box-reservarCita" value="Reservar Cita">
                </div>
                </form>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/templates/footer.php'?>