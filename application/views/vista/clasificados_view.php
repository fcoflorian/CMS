
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('/imagenes/');?><?php echo isset($parametros['favicon'])?$parametros['favicon']:'';?>" type="image/x-icon">
    <title>Clasificados</title>
  </head>
  <body>
    <!-- header -->
    <?php $data['nombre_equipo'] = $parametros['nombre_equipo']; ?>
        <?php $this->load->view('vista/header', $data) ?>
    <!-- end header -->
    <main>
      <div class="container">
        <h2>Clasificados</h2>
          <?php for($i = ($paginaActual-1) * 10; $i < $paginaActual * 10; $i++){ ?>
            <?php if($i < count($clasificados)){ ?>
              <hr>
              <div class="row">
                <div class="col-12 col-lg-9 mb-5">
                  <div class="row mb-5">
                    <div class="col-3">
                      <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($clasificados[$i]['imagen'])?$clasificados[$i]['imagen']:'';?>" alt="Imagen no disponible">
                      <p class="lead text-muted text-center"><?php $d = strtotime($clasificados[$i]['fecha']); echo date('F d, Y', $d); ?></p>
                    </div>
                    <div class="col-9">
                      <h3><?php echo $clasificados[$i]['titulo'] ?></h3>
                      <p><?php echo $clasificados[$i]['descripcion'] ?></p>
                    </div>
                    <?php if($clasificados[$i]['id_usuario'] == $this->session->userdata('id') || $this->session->userdata('admin') != null){ ?>
                      <a href="<?php echo site_url('Clasificados_controller/guardarClasificado/'.$clasificados[$i]['id']); ?>" class="btn btn-warning">Editar</a>
                      <a href="<?php echo site_url('Clasificados_controller/borrarClasificado/'.$clasificados[$i]['id']); ?>" class="btn btn-danger">Eliminar</a>
                    <?php } ?>
                  </div>
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
    <?php $this->load->view('vista/footer') ?>
  </body>
</html>