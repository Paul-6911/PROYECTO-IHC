<?php  
        require 'includes/config/database.php';
        $db = conectarDB();
        $errores = [''];
        $valor = '';
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $correo = 'x23%#a';
        $contrasenia = 'm32zw%$';

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
            $query = "SELECT Correo_Asegurado,Contrasenia_Asegurado FROM asegurados WHERE Correo_Asegurado = '$correo' AND Contrasenia_Asegurado = '$contrasenia'";
            $resultado = mysqli_query($db,$query);
            $valor = mysqli_fetch_assoc($resultado);
           
            if($valor === NULL){
              header("Location: http://localhost:3000/login-asegurado.php");
            }else{
              header("Location: http://localhost:3000/portfolio-4.php");
            }
          }
        }
      /*
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
          if(isset($_POST["correo"], $_POST["contrasenia"])){     
      
              $correo = $_POST["correo"]; 
              $contrasenia = $_POST["contrasenia"]; 
      
              $query = "SELECT Correo_Asegurado,Contrasenia_Asegurado FROM asegurados WHERE Correo_Asegurado = '$correo' AND Contrasenia_Asegurado = '$contrasenia'";
              $result1 = mysqli_query($db,$query);
      
              if(mysqli_num_rows($result1) > 0 )
              { 
                if(!$correo){
                  $errores[] = "Debe de completar el nombre de usuario";
                }
                if(!$contrasenia){
                  $errores[] = "Debe de completar su contraseña";
                }

                if(empty($errores)){
                  $valor = mysqli_fetch_assoc($result1);
                 
                  if($valor === NULL){
                    header("Location: http://localhost:3000/login-asegurado.php");
                  }else{
                    header("Location: http://localhost:3000/portfolio-4.php");
                  }
                }
              }
              else
              {
                  echo 'The username or password are incorrect!';
              }
          }
        }
      */
       
        include 'includes/templates/header.php';

?>
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
          <h4>Iniciar Sesión - Asegurado</h4>

          <form method="POST" action= " <?php echo empty($errores) === TRUE ?  'login-asegurado.php': 'portfolio-4.php';?> " >
            <label for="usuario-asegurado">Usuario</label>
            <input type="email" placeholder="Ingrese su correo electrónico" id="usuario-asegurado" name="correo">
            <label for="password-asegurado">Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" id="password-asegurado" name="contrasenia">
            <input type="submit" value="Iniciar">
            <a href="forgotten-password.php">¿Olvidaste tu contraseña?</a><br>
            <a href="form-aseguramiento.php">Asegúrate a MediSalud</a>
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