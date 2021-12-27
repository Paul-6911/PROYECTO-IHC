<?php  incluirTemplate('header');?>
<section id="inner-title" class="inner-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <h2>Detalles del Blog</h2>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="breadcrumbs">
          <ul>
            <li>Página Actual:</li>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="section14" class="section-margine blog-list">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-lg-9">
        <div class="section-14-box">
          <img src="images/blog/Un-nuevo-tratamiento-contra-el-cancer-es-capaz-de-reactivar-el-sistema-inmunitario.jpg" class="img-responsive" alt="Blog image 1">
          <h3><a href="#">Nuevo tratamiento contra el cancer</a></h3>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="comments">
                <a class=""><i class="fa fa-calendar"></i> July, 30, 30</a>
                <a class=""><i class="fa fa-user"></i> rkwebdes</a>
              </div>
            </div>
          </div>
          <p>Una clase de medicamento que se utiliza actualmente para la inmunoterapia del cáncer son los inhibidores del bloqueo de puntos de control, que desbloquean a las células T que están exhaustas y no pueden atacar los tumores. Estos fármacos han tenido éxito en el tratamiento de algunos tipos de cáncer, sin embargo, existen otros muchos contra los que no son efectivos.
          Los autores se propusieron mejorar su rendimiento combinándolos con fármacos de quimioterapia citotóxica, con la esperanza de que esta ayudara a estimular el sistema inmunitario para que eliminara las células tumorales. Este enfoque se basa en un fenómeno conocido como muerte celular inmunogénica, en el que las células tumorales muertas o moribundas envían señales que atraen la atención del sistema inmunitario.</p>
         
          
          <div class="comment-form-container wow fadeInLeft">
          <h4 class="color-deep"><a href="#">DEJA UN COMENTARIO</a></h4>
          <form name="sentMessage" action="#" id="contactForm" novalidate>
            <div class="col-md-6 nopadding-left">
              <div class="control-group form-group">
                <div class="controls">
                  <input type="text" class="form-control" id="name" placeholder="Name..">
                  <p class="help-block"></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 nopadding-left">
              <div class="control-group form-group">
                <div class="controls">
                  <input type="tel" class="form-control" id="phone" required placeholder="Phone..">
                </div>
              </div>
            </div>
            <div class="col-md-12 nopadding-left">
              <div class="control-group form-group">
                <div class="controls">
                  <input type="email" class="form-control" id="email" required placeholder="Email..">
                </div>
              </div>
            </div>
            <div class="col-md-12 nopadding-left">
              <div class="control-group form-group">
                <div class="controls">
                  <textarea rows="10" cols="100" class="form-control" id="message" required placeholder="Message.."  maxlength="999" style="resize:none"></textarea>
                </div>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <div class="col-md-12 nopadding-left">
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      <div class="col-md-3 col-lg-3">
        <div class="section-14-box"> 
          <h4 class="underline">Busqueda</h4>
          <form class="search-form" action="http://tiyoshent.in/Pixel/search" method="post">
                <input type="search" class="blog-search-field" placeholder="Search..." value="" name="s" title="Search for:"> 
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button> 
            </form>
        </div>
        
        
      </div>
    </div>
  </div>
</section>

<?php  incluirTemplate('footer');?>