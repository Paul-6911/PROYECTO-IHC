<?php  
        require 'includes/config/database.php';
        include 'includes/templates/header.php';

        $db = conectarDB();
        //consultar para obtener los vendedores
        $consulta = "SELECT * FROM vendedores"; //prueba
        $resultado = mysqli_query($db, $consulta);

        //validacion
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }

?>
<hr>
<br>

<section class="inner-title-login">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-12">
        <div class="container-login">
          <img class="logo-favicon" src="images/logo-iniciosesion.png" alt="Logo MediSalud">
          <h4>Iniciar Sesión - Asegurado</h4>
          <form class="" action="prueba.php" method="POST" action="/login-asegurado.php">

            <label for="usuario-asegurado">Usuario</label>
            <input type="email" placeholder="Ingrese su correo electrónico" id="usuario-asegurado" name="asegurado">
            <label for="password-asegurado">Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" id="password-asegurado" name="contraseña">
            <input type="submit" value="Iniciar sesión">
            <a href="forgotten-password.php">¿Olvidaste tu contraseña?</a><br>
            <a href="form-aseguramiento.php">Asegúrate a MediSalud</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!---
<section>
  <div class="container-login">
    <img class="logo-favicon" src="images/logo-iniciosesion.png" alt="Logo MediSalud">
    <h4>Iniciar Sesión - Asegurado</h4>
    <form class="" action="" method="post">
      <label for="usuario-asegurado">Usuario</label>
      <input type="text" placeholder="Ingrese su usuario">
      <label for="password-asegurado">Contraseña</label>
      <input type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="Iniciar sesión">
      <a href="#">¿Olvidaste tu contraseña?</a><br>
      <a href="#">¿Aún no tienes una cuenta?</a>
    </form>
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
</html>