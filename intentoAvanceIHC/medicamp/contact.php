<?php  include 'includes/templates/header.php' ?>

<section id="inner-title" class="inner-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <h2>Contactanos</h2>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="breadcrumbs">
          <ul>
            <li>Página Actual:</li>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="contact.php">Contáctenos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="section16" class="section16">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-1">
        <div class="single-location">
          <div class="loc-icon">
            <i class="fa fa-phone fa-2x" style="color:#00aef0"></i>
          </div>
          <span class="loc-content">+(000)123-456-789</span>
          <span class="loc-content">+(000)9849-494-875</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="single-location">
          <div class="loc-icon">
            <i class="fa fa-envelope fa-2x" style="color:#00aef0"></i>
          </div>
          <span class="loc-content">mediSalud@gmail.com</span>
        </div>
      </div>
      <div class="col-md-3">
        <div class="single-location">
          <div class="loc-icon">
            <i class="fa fa-map-marker fa-2x" style="color:#00aef0"></i>
          </div>
          <span class="loc-content">Jr. Almte. Miguel Grau 309, Santiago de Surco 15049</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <form id="contact" role="form">
          <!-- successfully -->
          <p class="success alert alert-success"><i class="fa fa-check"></i> Your message has been sent successfully. </p>
          <!-- unsuccessfully -->
          <p class="error alert alert-danger"><i class="fa fa-times"></i> E-mail must be valid and message must be longer than 1 character. </p>
          <div class="control-group form-group">
            <div class="controls">
              <input  class="form-control" id="cf-name" type="text" name="cf-name" placeholder="Nombre">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <input class="form-control" id="cf-email" type="email" name="cf-email" placeholder="Correo Electrónico">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
             <input class="form-control" id="cf-subject" type="text" name="cf-subject" placeholder="Asunto">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <textarea class="form-control custom-control" id="cf-message" rows="4" name="cf-message" placeholder="¿Cómo podemos ayudarlo?"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" id="cf-submit" name="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      <div class="col-md-6 col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.5320504319507!2d-77.00761338573126!3d-12.144137047024627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b81c6de0c541%3A0x84e698038ee3da56!2sJr.%20Almte.%20Miguel%20Grau%20309%2C%20Santiago%20de%20Surco%2015049!5e0!3m2!1ses-419!2spe!4v1640220995217!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/templates/footer.php'?>