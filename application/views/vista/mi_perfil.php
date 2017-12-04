<!doctype html>
<html lang="es">
  <head>
    <title><?php echo isset($parametros['titulo'])?$parametros['titulo']:'Titulo de la pagina' ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('/imagenes/');?><?php echo isset($parametros['favicon'])?$parametros['favicon']:'';?>" type="image/x-icon">
  </head>
  <body>
    <!-- header -->
    <?php $data['nombre_equipo'] = $parametros['nombre_equipo']; ?>
      <?php $this->load->view('vista/header', $data) ?>
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

    <?php $this->load->view('vista/footer') ?>
  </body>
</html>