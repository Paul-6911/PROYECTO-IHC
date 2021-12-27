<?php  incluirTemplate('header');?>
<section id="inner-title" class="inner-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <h2>Staff Médico</h2>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="breadcrumbs">
          <ul>
            <li>Página Actual:</li>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#">Recursos</a></li>
            <li><a href="portfolio-4.html">4 Colums</a></li>
          </ul>
        </div>
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
              <a href="#"><img src="images/portfolio/doctor1.jpg" class="imagenDoctor img-responsive" alt="image" style="width:100%;"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor"><!--class="especialidad-descripcionDoctor"-->
                  <h6>Cardiología</h6>
                </div>
                <div class="datosDoctor">
                  <div class="nombreDoctor">Abad Centella, Julia Elisa<br></div>
                  <!--<div class="sedeDoctor">Sede Villa María del Triunfo</div> class="sedeDoctor"--->
                  <br>
                </div> 
              </div>
              <div class="descripcion_horario">
                <div class="box-horario">
                  <div class="dia-horario">
                    Martes
                  </div><h6>14pm-16pm</h6>
                  <div class="dia-horario">
                    Jueves
                  </div><h6>8am-10am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor2.jpg" class="imagenDoctor img-responsive" alt="image" style="width:100%;"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor"><!--class="especialidad-descripcionDoctor"-->
                  <h6>Neurología</h6>
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
                  <div class="dia-horario">
                    Viernes
                  </div><h6>9am-11am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor33.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Neurología</h6>
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
                  <div class="dia-horario">
                    Jueves
                  </div><h6>9:30am-11:30am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor32.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Oftalmología</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>8am-10am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor3.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Neurología</h6>
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
                  <div class="dia-horario">
                    Jueves
                  </div><h6>14pm-16:30pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor4.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Dermatología</h6>
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
                  <div class="dia-horario">
                    Martes
                  </div><h6>14pm-16pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor5.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Cardiología</h6>
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
                  <div class="dia-horario">
                    Viernes
                  </div><h6>16:30pm-18pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor6.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Dermatología</h6>
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
                  <div class="dia-horario">
                    Jueves
                  </div><h6>8am-10am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor7.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Radiología</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>11am-13pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor8.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Radiología</h6>
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
                  <div class="dia-horario">
                    Viernes
                  </div><h6>8am-9:30am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor9.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Neurología</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>9am-11am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor10.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Pediatría</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>10am-12pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia vilamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor11.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Cardiología</h6>
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
                  <div class="dia-horario">
                    Lunes
                  </div><h6>14pm-16pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor12.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Oftalmología</h6>
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
                  <div class="dia-horario">
                    Viernes
                  </div><h6>16pm-18pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor13.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Dermatología</h6>
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
                  <div class="dia-horario">
                    Viernes
                  </div><h6>14:00pm-16pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor14.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Pediatría</h6>
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
                  <div class="dia-horario">
                    Jueves
                  </div><h6>8am-9:30am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor15.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Radiología</h6>
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
                  <div class="dia-horario">
                    Jueves
                  </div><h6>16pm-18pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor16.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Oftalmología</h6>
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
                  <div class="dia-horario">
                    Martes
                  </div><h6>14pm-16pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor17.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Oftalmología</h6>
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
                  <div class="dia-horario">
                    Jueves
                  </div><h6>9:30am-11am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor18.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Dermatología</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>9am-11am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor19.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Cardiología</h6>
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
                  <div class="dia-horario">
                    Miércoles
                  </div><h6>16pm-18pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor20.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Pediatría</h6>
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
                  <div class="dia-horario">
                    Viernes
                  </div><h6>15:30pm-18pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <!---
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="doctores/reateguimatta-diegoalonso.html"><img src="images/portfolio/doctor21.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Cardiología</h6>
                </div>
                <div class="datosDoctor">
                  <div class="nombreDoctor">Reátegui Matta, Diego Alonso<br></div>
                    <div class="sedeDoctor">Sede San Borja</div>
                  <br>
                </div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior
          </div>
          --->
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor22.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Pediatría</h6>
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
                  <div class="dia-horario">
                    Miércoles
                  </div><h6>16pm-18pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor23.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Radiología</h6>
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
                  <div class="dia-horario">
                    Viernes
                  </div><h6>14pm-15:30pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor24.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Oftalmología</h6>
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
                  <div class="dia-horario">
                    Viernes
                  </div><h6>10am-12pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor25.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Neurología</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>11am-13pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"><img src="images/portfolio/doctor26.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Cardiología</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>8am-10am</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="#"> <img src="images/portfolio/doctor27.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Dermatología</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>14pm-16pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 neurologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"> <img src="images/portfolio/doctor28.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Neurología</h6>
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
                  <div class="dia-horario">
                    Miércoles
                  </div><h6>14pm-16:30pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 radiologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="#"> <img src="images/portfolio/doctor29.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Radiología</h6>
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
                  <div class="dia-horario">
                    Jueves
                  </div><h6>11am-11pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <!---
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 cardiologia villamaria text-center">
            <div class="img-descripcionDoctor">
              <a href="doctores/ybarsandoval-cynthiaregina.html"> <img src="images/portfolio/doctor30.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Cardiología</h6>
                </div>
                <div class="datosDoctor">
                  <div class="nombreDoctor">Ybar Sandoval, Cynthia Regina<br></div>
                  <!--<div class="sedeDoctor">Sede Villa María del Triunfo</div>
                  <br>
                </div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior
          </div>
          --->
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 dermatologia independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"> <img src="images/portfolio/doctor31.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Dermatología</h6>
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
                  </div><h6>11:30am-1pm</h6>
                  <div class="dia-horario">
                    Viernes
                  </div><h6>16pm-18pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pediatria independencia text-center">
            <div class="img-descripcionDoctor">
              <a href="#"> <img src="images/portfolio/doctor34.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Pediatría</h6>
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
                  <div class="dia-horario">
                    Sábado
                  </div><h6>14pm-16pm</h6>
                </div>
                <div class="box-reservarCita"><h6>Reservar Cita</h6></div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior-->
          </div>
          <!--
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 oftalmologia sanborja text-center">
            <div class="img-descripcionDoctor">
              <a href="doctores/zearivadeneira-javieresteban.html"> <img src="images/portfolio/doctor35.jpg" alt="image" class="imagenDoctor img-responsive"></a>
              <div class="descripcionDoctor">
                <div class="especialidad-descripcionDoctor">
                  <h6>Oftalmología</h6>
                </div>
                <div class="datosDoctor">
                  <div class="nombreDoctor">Zea Rivadeneira, Javier Esteban<br></div>
                  <!--<div class="sedeDoctor">Sede San Borja</div>
                  <br>
                </div>
              </div>
            </div>
            <br> <!--Da espacio para el transform: scale(1.05) de los doctores de la última fila parte inferior
          </div>
          --->
        </div>
      </div>
    </div>
  </div>
</section>
<!---
<section id="section10" class="section-10-background">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-lg-9">
        <div class="section-10-box-text-cont">
          <h3>Medicamp  HTML Template. Buy this theme.</h3>

        </div>
      </div>
      <div class="col-md-3 col-lg-3">
        <div class="section-10-btn-cont"><a href="#" class="btn btn-secondary wow fadeInUp">Get Started!</a></div>
      </div>
    </div>
  </div>
</section>
--->
<?php  incluirTemplate('footer');?>