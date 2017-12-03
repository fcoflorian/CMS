<!doctype html>
<html lang="es">
  <head>
    <title>Galeria de fotos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <!-- card -->
    <main>
      <h2 class="text-center mt-3 mb-2">Galeria de fotos</h2><hr>
      <div class="container">
        <?php $i = 0 ?>
        <?php foreach($fotos as $foto){ ?>
          <div class="d-flex align-items-center">
            <div class="card-group" style="width: 20rem;">
              <div class="card mb-3">
                <img class="card-img-top img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($foto['foto'])?$foto['foto']:'';?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $foto['nombre'] ?></h4>
                  <p class="card-text"><?php echo $foto['descripcion'] ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><?php echo date("Y-m-d H:i:s") ?></small>
                </div>
              </div>
            </div>
          </div>
        <div class="container">
          <a href="<?php echo site_url('Galeria_controller/guardarFoto/'.$foto['id']); ?>" class="btn btn-warning">Editar</a>
          <a href="<?php echo site_url('Galeria_controller/borrarFoto/'.$foto['id']); ?>" class="btn btn-danger">Eliminar</a>
        </div><br>
        <?php } ?>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
  </body>
</html>