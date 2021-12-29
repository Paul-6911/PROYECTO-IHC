<?php  
   require 'includes/config/database.php';
   $db = conectarDB();
   $errores = [];

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
       $query = "SELECT Correo_Doctor,Contrasenia_Doctor FROM doctor WHERE Correo_Doctor = '$correo' AND Contrasenia_Doctor = '$contrasenia'";
       $resultado = mysqli_query($db,$query);
       $valor = mysqli_fetch_assoc($resultado);
      
       if($valor === NULL){
         header("Location: http://localhost:3000/login-doctor.php");
       }else{
         header("Location: http://localhost:3000/index.php");
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
        <div class="container-login">
          <img class="logo-favicon" src="images/logo-iniciosesion.png" alt="Logo MediSalud">
          <h4>Iniciar Sesión - Doctor</h4>
          <form  action= " <?php echo empty($errores) === TRUE ? 'login-doctor.php': 'doctor-paciente.php';?>" method="POST">
            <label for="usuario-doctor">Correo</label>
            <input type="email" placeholder="Ingrese su correo electrónico" id="usuario-doctor" name="correo">
            <label for="password-doctor">Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" name="contrasenia">
            <input type="submit" value="Iniciar sesión" id="password" >
            <a href="forgotten-password.php">¿Olvidaste tu contraseña?</a><br>
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