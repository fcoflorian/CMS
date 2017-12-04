<!doctype html>
<html lang="es">
  <head>
    <title>Mi perfil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <!-- header -->
      <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
      <h2 class="text-center mt-5 mb-5">Mi perfil</h2>
      <div class="container">
        <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo $this->session->userdata('foto');?>" width="400" alt="Imagen no disponible">
        <h4 class="mt-5 mb-5"><b>Cedula: </b><?php echo $this->session->userdata('cedula') ?></h4>
        <h4 class="mt-5 mb-5"><b>Nombre: </b><?php echo $this->session->userdata('nombre') ?></h4>
        <h4 class="mt-5 mb-5"><b>Apellido: </b><?php echo $this->session->userdata('apellido') ?></h4>
        <h4 class="mt-5 mb-5"><b>Telefono: </b><?php echo $this->session->userdata('telefono') ?></h4>
        <h4 class="mt-5 mb-5"><b>Correo: </b><?php echo $this->session->userdata('correo') ?></h4>
        <h4 class="mt-5 mb-5"><b>Celular: </b><?php echo $this->session->userdata('celular') ?></h4>
        <h4 class="mt-5 mb-5"><b>Direccion: </b><?php echo $this->session->userdata('direccion') ?></h4>
        <h4 class="mt-5 mb-5"><b>Latitud: </b><?php echo $this->session->userdata('latitud') ?></h4>
        <h4 class="mt-5 mb-5"><b>Longitud: </b><?php echo $this->session->userdata('longitud') ?></h4>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
  </body>
</html>