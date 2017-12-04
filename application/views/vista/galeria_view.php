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
        <div class="d-flex align-items-center">
          <div class="card-group" >
            <?php foreach($fotos as $foto){ ?>
            <div class="col col-md-4">
              <div class="card mb-3 mr-5">
                <img class="card-img-top" width="250" height="250" src="<?php echo base_url('/imagenes/');?><?php echo isset($foto['foto'])?$foto['foto']:'';?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $foto['nombre'] ?></h4>
                  <p class="card-text"><?php echo $foto['descripcion'] ?></p>
                </div>
                <div class="card-footer">
                  <div class="container">
                    <a href="<?php echo site_url('Galeria_controller/guardarFoto/'.$foto['id']); ?>" class="btn btn-warning">Editar</a>
                    <a href="<?php echo site_url('Galeria_controller/borrarFoto/'.$foto['id']); ?>" class="btn btn-danger">Eliminar</a>
                  </div><br>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </main>

    <?php $this->load->view('vista/footer') ?>
  </body>
</html>