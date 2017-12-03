
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clasificado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <!-- Main -->
    <div class="container">
      <h2>Clasificado</h2>
      <p class="lead">klk con klk</p>
      <hr>
        <div class="row">
          <!-- Sección de noticias -->
          <div class="col-12 col-lg-9 mb-5">
            <!-- Artículos -->
            <div class="row mb-5">
              <div class="col-3">
                <img class="img-fluid" src="images/cards1.png" alt="">
                <p class="lead text-muted text-center">08 Abril 2017</p>
              </div>
              <div class="col-9">
                <a href="#"><h3>Lorem ipsum dolor sit amet.</h3></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ipsum, similique debitis saepe soluta, vero provident ab atque fuga molestias magni repellat labore adipisci! Sapiente deleniti numquam minus adipisci reiciendis at, assumenda odit itaque tempore voluptas, repellat sequi ab quibusdam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi rem quasi reiciendis, ut eligendi, facilis deleniti temporibus vero ipsum accusamus.</p>
              </div>
            </div>
            <!-- Fin Artículos -->
          </div>
        </div>
    </div>
    <!-- Fin Main -->

     <!-- Navegación páginas -->
              <div class="d-flex justify-content-center">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <?php if($numeroDePaginas > 1){ ?>
                      <?php if($paginaActual != 1){ ?>
                        <a href="<?php echo site_url('Noticias_controller/index/'.$paginaActual-1); ?>" class="btn btn-secondary">Anterior</a>
                      <?php } ?>

                      <?php for($i = 0; $i < $numeroDePaginas; $i++){ ?>
                        <a href="<?php echo site_url('Noticias_controller/index/'.$i); ?>" class="btn btn-secondary"><?php echo $i ?></a>
                      <?php } ?>

                      <?php if($paginaActual != $numeroDePaginas){ ?>
                        <a href="<?php echo site_url('Noticias_controller/index/'.$paginaActual+1); ?>" class="btn btn-secondary">Siguiente</a>
                      <?php } ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <!-- Fin Navegación páginas -->

     

  </body>
</html>