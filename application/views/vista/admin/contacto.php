<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensajes</title>
</head>
<body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

  <main>
    <div class="container">
      <h2 class="mt-5 mb-5">Mensajes</h2>
      <?php foreach($mensajes as $mensaje){ ?>
        <div class="container mt-5">
          <div class="card">
            <div class="card-header">
              <?php echo $mensaje['correo'] ?>
            </div>
            <div class="card-body">
              <h4 class="card-title"><?php echo $mensaje['nombre'] ?></h4>
              <p class="card-text"><?php echo $mensaje['mensaje'] ?></p>
            </div>
            <div class="card-footer text-muted">
              <?php $d = strtotime($mensaje['fecha']); echo date('F d, Y', $d); ?>
              <a href="<?php echo site_url('Contacto_controller/borrarMensaje/'.$mensaje['id']); ?>" class="btn btn-danger">Eliminar</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>
  
    <?php $this->load->view('vista/footer') ?>
</body>
</html>