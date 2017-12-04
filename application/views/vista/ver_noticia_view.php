<!doctype html>
<html lang="es">
  <head>
    <title>Ver noticia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
      <div class="container">
        <h2 class="text-center"><?php echo $noticia['titulo'] ?></h2><hr>
        <div class="row d-flex justify-content-center">
          <div class="card mb-3" style="width: 40rem;">
            <img class="card-img-top img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticia['imagen'])?$noticia['imagen']:'';?>" alt="Imagen no disponible">
            <div class="card-body">
              <p class="card-text"><?php echo $noticia['descripcion'] ?></p>
              <p class="text-muted"><?php $d = strtotime($noticia['fecha']); echo date('F d, Y', $d); ?></p>
            </div>
            <div class="card-footer">
              <div class="container">
                <?php if($this->session->userdata('admin') != null){ ?>
                  <a href="<?php echo site_url('Noticias_controller/guardarNoticia/'.$noticia['id']); ?>" class="btn btn-warning">Editar</a>
                  <a href="<?php echo site_url('Noticias_controller/borrarNoticia/'.$noticia['id']); ?>" class="btn btn-danger">Eliminar</a>
                <?php } ?>
              </div><br>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
  </body>
</html>