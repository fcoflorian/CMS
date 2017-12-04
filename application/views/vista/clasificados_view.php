
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clasificados</title>
  </head>
  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->
    <main>
      <div class="container">
        <h2>Clasificados</h2>
          <?php for($i = ($paginaActual-1) * 10; $i < $paginaActual * 10; $i++){ ?>
            <?php if($i < count($clasificados)){ ?>
              <hr>
              <div class="row">
                <!-- Sección de clasificados -->
                <div class="col-12 col-lg-9 mb-5">
                  <!-- Artículos -->
                  <div class="row mb-5">
                    <div class="col-3">
                      <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($clasificados[$i]['imagen'])?$clasificados[$i]['imagen']:'';?>" alt="">
                      <p class="lead text-muted text-center"><?php $d = strtotime($clasificados[$i]['fecha']); echo date('F d, Y', $d); ?></p>
                    </div>
                    <div class="col-9">
                      <a href="#"><h3><?php echo $clasificados[$i]['titulo'] ?></h3></a>
                      <p><?php echo $clasificados[$i]['descripcion'] ?></p>
                    </div>
                  </div>
                  <!-- Fin Artículos -->
                </div>
              </div>
            <?php } ?>
          <?php } ?>
      </div>

      <!-- Navegación páginas -->
      <div class="d-flex justify-content-center">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
            <?php if($numeroDePaginas > 1){ ?>
              <?php $prevPage = $paginaActual - 1; $nextPage = $paginaActual +1; ?>
              <?php if($paginaActual != 1){ ?>
                <a href="<?php echo site_url('Clasificados_controller/index/'.$prevPage); ?>" class="btn btn-secondary">Anterior</a>
              <?php } ?>

              <?php for($i = 0; $i < $numeroDePaginas; $i++){ ?>
                <a href="<?php echo site_url('Clasificados_controller/index/'.$i); ?>" class="btn btn-secondary"><?php echo $i ?></a>
              <?php } ?>

              <?php if($paginaActual != $numeroDePaginas){ ?>
                <a href="<?php echo site_url('Clasificados_controller/index/'.$nextPage); ?>" class="btn btn-secondary">Siguiente</a>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    <!-- Fin Navegación páginas -->
    </main>
  </body>
</html>