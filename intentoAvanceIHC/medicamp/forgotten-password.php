<?php  
    require 'includes/config/database.php';
    $db = conectarDB();
    $errores = [];
    $valor = '';

    //validacion
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $correo = $_POST['correo'];
      $contrasenia = $_POST['contrasenia'];

      if(!$correo){
        $errores[] = "Debe de completar el nombre de usuario";
      }
      if(!$contrasenia){
        $errores[] = "Debe de completar su contraseña";
      }

      if(empty($errores)){
        $db = conectarDB();
          $query = "SELECT Correo_Asegurado FROM asegurados WHERE Correo_Asegurado = '$correo' ";
          $resultado = mysqli_query($db,$query);
          $valor = mysqli_fetch_assoc($resultado);
        //$mysqli_close($db);

        if($valor === NULL){
          header("Location: http://localhost:3000/forgotten-password.php");
        }else{
          $db = conectarDB();
            $query = "UPDATE asegurados SET Contrasenia_Asegurado = '$contrasenia' WHERE Correo_Asegurado = '$correo' ";
            $resultado = mysqli_query($db,$query);
            // var_dump$valor = mysqli_fetch_assoc($resultado);
            if (!mysqli_query($db, $query)) {
              print("error");
              // var_dump(mysqli_error($db));
             }
          //$mysqli_close($db);
            header("Location: http://localhost:3000/login-asegurado.php");
        }
      }
    }

include 'includes/templates/header.php' ?>

<hr>
<br>


<?php foreach($errores as $error) : ?>
    <div class="error">
      <?php echo $error; ?>
    </div>
<?php endforeach; ?>


<section class="inner-title-login">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-12">
        <div class="container-forgotten-password">
          <img class="logo-favicon" src="images/logo-iniciosesion.png" alt="Logo MediSalud">
          <h4>Obtener nueva contraseña</h4>
          <form class="" action="/forgotten-password.php" method="POST">
            <label for="correo" >Correo Electrónico</label>
            <input type="email" placeholder="Ingrese su correo electrónico" name="correo">
            <label for="password1">Ingrese nueva contraseña</label>
            <input type="password" placeholder="Nueva contraseña" name="contrasenia">
            <label for="password2">Confirme nueva contraseña</label>
            <input type="password" placeholder="Nueva contraseña">
            <input type="submit" value="Establecer nueva contraseña">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
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