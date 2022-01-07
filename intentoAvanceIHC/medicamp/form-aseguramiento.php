<?php  
        require 'includes/config/database.php';
        include 'includes/templates/header.php' ;

        //arreglo errores
        $errores = [];

        //conectar a la base de datos
        $db = conectarDB();
       
            $nombres = '';
            $apellidos = '';
            $dni = '';
            $direccion = '';
            $telefono = '';
            $correo = '';
            $contraseña = '';
            $genero = '';
            $distrito = '';
            $fechaNacimiento = '';

        if($_SERVER['REQUEST_METHOD'] ==='POST'){

            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $dni = $_POST['dni'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];
            $genero = $_POST['genero'];
            $distrito = $_POST['distrito'];
            $fechaNacimiento = $_POST['fechaNacimiento'];

            if(!$nombres){
              $errores[]="Debe de completar su nombre";
            }
            if(!$apellidos){
                $errores[] = "Debe de completar sus apellidos";
            }
            if(!$dni){
                $errores[] = "Debe de completar su DNI";
            }
            if(!$direccion){
                $errores[] = "Ingrese su direccion";
            }
            if(!$telefono){
                $errores[] = "Su telefono es obligatorio";
            }
            if(!$correo){
                $errores[] = "Su correo es obligatorio";
            }
            if(!$contraseña){
              $errores[] = "Su contraseña es obligatorio";
            }
            if(!$genero){
              $errores[] = "El genero es obligatorio";
            }
            if(!$distrito){
              $errores[] = "El distrito es obligatorio";
            }
            if(!$fechaNacimiento){
              $errores[] = "La fecha de nacimiento es obligatoria";
            }

            
            if(empty($errores)){
               //INSERTAR
               $query = "INSERT INTO asegurados (Nombre_Asegurado,Apellido_Asegurado,DNI_Asegurado,Telefono_Asegurado,Genero_Asegurado,Fecha_Nacimiento,Distrito_Asegurado,Direccion_Asegurado,Correo_Asegurado,Contrasenia_Asegurado) VALUES ('$nombres','$apellidos','$dni','$telefono','$genero','$fechaNacimiento','$distrito','$direccion','$correo','$contraseña')";

               $resultado = mysqli_query($db,$query);

               if($resultado){
                  $nombres = '';
                  $apellidos = '';
                  $dni = '';
                  $direccion = '';
                  $telefono = '';
                  $correo = '';
                  $contraseña = '';
                  $genero = '';
                  $distrito = '';
                  $fechaNacimiento = '';
              }
             }
        }
?>


<section id="inner-title" class="inner-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6"><h2>Registro al Seguro de Salud</h2></div>
      <div class="col-md-6 col-lg-6">
        <div class="breadcrumbs">
          <ul>
            <li>Página Actual:</li>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="aboutus.php">Asegurarse a MediSalud</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> 
<br>

<?php foreach ($errores as $error): ?>
  <div class="error">
    <?php echo $error; ?>
  </div>
<?php endforeach; ?>


<script src="js/add-remove-form.js"></script>
<section class="inner-title-login">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-12">
        <div class="container-aseguramiento">
          <div class="formularios">
            <img class="logo-favicon" src="images/logo-iniciosesion.png" alt="Logo MediSalud">
            <h4>Formulario Único de Seguro de MediSalud</h4>
              <div id="form-asegurado">
                <form method="POST" action="form-aseguramiento.php">
                  <fieldset> <!--- FORMULARIO DEL TITULAR (ASEGURADO)-->
                    <legend>Datos del Titular</legend>
                      <div style="margin-right: 18px; padding-bottom: 15px;">
                        <label for="nombres">Nombres</label>
                        <input type="text" size="25" style="text-transform:uppercase" id="nombres" name="nombres" value="<?php echo $nombres ?>">
                      </div>
                      <div style="margin-right: 20px; padding-bottom: 15px;">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" size="30" style="text-transform:uppercase" id="apellidos" name="apellidos" value="<?php echo $apellidos ?>">
                      </div>
        
                      <div style="margin-right: 20px; padding-bottom: 15px;">
                        <label for="dni">DNI</label>
                        <input type="text" size="12" maxlength="8" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required id="dni" name="dni" value="<?php echo $dni ?>">
                      </div>

                      <div>
                        <label for="genero">Genero</label>
                        <select name="genero" id="genero">
                          <option selected disabled>-------</option>
                          <option value="masculino">Masculino</option>
                          <option value="femenino">Femenino</option>
                        </select>
                        <!-- <div>
                          <input type="radio" id="masculino" name="genero" value="masculino" >
                          <label for="masculino">Masculino</label>
                        </div>
          
                        <div>
                          <input type="radio" id="femenino" name="genero" value="femenino">
                          <label for="femenino">Femenino</label>
                        </div> -->
                      </div>
            
                      <div style="margin-right: 20px; padding-bottom: 15px;">
                        <label for="direccion">Dirección</label>
                        <input type="text" size="35" style="text-transform:uppercase" id="direccion" name="direccion" value="<?php echo $direccion ?>" >
                      </div>
        
                      <div style="margin-right: 20px; padding-bottom: 15px;">
                        <label for="distrito">Distrito</label>
                        <select name="distrito" style="height: 25px" id="distrito">
                                  <!--- <option>---</option> --->
                          <option value="" disabled selected>--------</option>
                          <option value="Ancón">Ancón</option>
                          <option value="Ate">Ate</option>
                          <option value="Barranco">Barranco</option>
                          <option value="Breña">Breña</option>
                          <option value="Carabayllo">Carabayllo</option>
                          <option value="Chaclacayo">Chaclacayo</option>
                          <option value="Chorrillos">Chorrillos</option>
                          <option value="Cieneguilla">Cieneguilla</option>
                          <option value="Comas">Comas</option>
                          <option value="El Agustino">El Agustino</option>
                          <option value="Independencia">Independencia</option>
                          <option value="Jesús María">Jesús María</option>
                          <option value="La Molina">La Molina</option>
                          <option value="La Victoria">La Victoria</option>
                          <option value="Lima">Lima</option>
                          <option value="Lince">Lince</option>
                          <option value="Los Olivos">Los Olivos</option>
                          <option value="Lurigancho-Chosica">Lurigancho-Chosica</option>
                          <option value="Lurín">Lurín</option>
                          <option value="Magdalena del Mar">Madgalena del Mar</option>
                          <option value="Miraflores">Miraflores</option>
                          <option value="Pachacamac">Pachacamac</option>
                          <option value="Pucusana">Pucusana</option>
                          <option value="Pueblo Libre">Pueblo Libre</option>
                          <option value="Puente Piedra">Puente Piedra</option>
                          <option value="Punta Hermosa">Punta Hermosa</option>
                          <option value="Punta Negra">Punta Negra</option>
                          <option value="Rímac">Rímac</option>
                          <option value="San Bartolo">San Bartolo</option>
                          <option value="San Borja">San Borja</option>
                          <option value="San Isidro">San Isidro</option>
                          <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                          <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                          <option value="San Luis">San Luis</option>
                          <option value="San Martín de Porres">San Martín de Porres</option>
                          <option value="San Miguel">San Miguel</option>
                          <option value="Santa Anita">Santa Anita</option>
                          <option value="Santa María del Mar">Santa María del Mar</option>
                          <option value="Santa Rosa">Santa Rosa</option>
                          <option value="Santiago de Surco">Santiago de Surco</option>
                          <option value="Surquillo">Surquillo</option>
                          <option value="Villa El Salvador">Villa El Salvador</option>
                          <option value="Villa María del Triunfo">Villa María del Triunfo</option>
                        </select>
        
                        </div>
                          <div style="margin-right: 20px; padding-bottom: 15px;">
                            <label style="padding-top: 0px;" for="numero-telefono">Teléfono/Celular</label>
                            <input type="text" maxlength="9" size="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required id="numero-telefono" name="telefono" value="<?php echo $telefono ?>">  
                          </div>
                          
                          <div style="margin-right: 20px; padding-bottom: 15px;">
                            <label for="fecha-nacimiento">Fecha de Nacimiento</label>
                            <input id="datefield" type='date' min="1900-01-01" max="2000-13-13" size="4" style="height: 25px" name="fechaNacimiento">
                          </div>
                        </div>       
                
                        <div style="margin-right: 20px; padding-bottom: 15px;">
                          <label for="correo">Correo Electrónico</label>
                          <input type="email" size="30" id="correo" name="correo" value="<?php echo $correo ?>">
                        </div>

                       <script src="js/password-form.js"></script>
                       <div style="margin-right: 20px; padding-bottom: 15px;">
                        <label for="contra">Contraseña (8-16 caracteres)</label>
                        <input id="password-form" size="22" type='password' minlength="8" maxlength="16" onkeyup = "verificarContra(); return false;" style="height: 25px" id="password-form" name="contraseña">
                        <div id="mensaje-error-password"></div>
                      </div>
                     
                  </fieldset>
                  <div class="botones-form-registro">
                        <input type="submit" value="Registrar al Seguro">
                        <input id="add" type="button" value="Asegurar un familiar" onclick="addNew()" />
                        <input id="remove" type="button" value="Quitar este formulario de familiar" onclick="removeLastElem()" style="visibility: hidden;"/>
                      </div>
              </form>
            </div>
              <div id="target">
            </div>
            
          </div>
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
<script src="js/ventana-salir-formulario.js"></script>
</body>
</html>