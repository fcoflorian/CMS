
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noticias</title>
  </head>
  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->
     
    <main>
      <div class="container">
        <h2 class="mt-5 mb-5">Noticias</h2>
        <div class="row">
          <div class="col-12 col-lg-9 mb-5">
            <?php for($i = ($paginaActual-1) * 10; $i < $paginaActual * 10; $i++){ ?>
              <?php if($i < count($noticias)){ ?>
                <hr>
                <div class="row mb-5">
                  <div class="col-3">
                    <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticias[$i]['imagen'])?$noticias[$i]['imagen']:'';?>" alt="Imagen no disponible">
                    <p class="lead text-muted text-center"><?php $d = strtotime($noticias[$i]['fecha']); echo date('F d, Y', $d); ?></p>
                  </div>
                  <div class="col-9">
                    <a href="<?php echo site_url('Noticias_controller/verNoticia/'.$noticias[$i]['id']) ?>"><h3><?php echo $noticias[$i]['titulo'] ?></h3></a>
                    <p><?php echo $noticias[$i]['descripcion'] ?></p>
                  </div>

                  <?php if($this->session->userdata('admin') != null){ ?>
                    <a href="<?php echo site_url('Noticias_controller/guardarNoticia/'.$noticias[$i]['id']); ?>" class="btn btn-warning">Editar</a>
                    <a href="<?php echo site_url('Noticias_controller/borrarNoticia/'.$noticias[$i]['id']); ?>" class="btn btn-danger">Eliminar</a>
                  <?php } ?>
                  
                  <!--Comentarios-->

                  <div class="container">
                    <hr>
                    <?php if($noticias[$i]['comentarios'] != null){ ?>
                      <h4 class="mt-4 mb-4">Comentarios</h4>
                      <?php foreach($noticias[$i]['comentarios'] as $comentario){ ?>
                        <div>
                          <p><span class="text-primary"><?php echo $comentario['nombre_usuario'] ?>:</span> <?php echo $comentario['comentario'] ?></p>
                        </div>
                      <?php } ?>
                    <?php } ?>
                    <?php if($this->session->userdata('cedula') != null){ ?>
                      <div class="d-flex justify-content-center">
                          <form action="<?php echo site_url('Noticias_controller/index') ?>" method="post">
                              <input type="hidden" name="id_noticia" class="form-control" value="<?php echo $noticias[$i]['id'] ?>">
                              <div class="row">
                                <div class="col-auto">
                                  <div class="input-group form-group">
                                    <label for="comentario" class="input-group-addon">Comentario</label>
                                    <textarea rows="2" cols="80" name="comentario"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="text-center">
                                  <div class="input-group form-group">
                                      <input type="submit" class="btn btn-success" value="Comentar">    
                                  </div>
                              </div>
                          </form>

                          <?php if(isset($error)){ ?>
                              <div class="alert alert-danger"><?php echo $error ?></div>
                          <?php } ?>
                      </div>
                    <?php } ?>
                  </div>

                  <!--Comentarios-->

                </div>
              <?php } ?>
            <?php } ?>

            <!-- Navegación páginas -->
            <div class="d-flex justify-content-center">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <?php if($numeroDePaginas > 1){ ?>
                    <?php $prevPage = $paginaActual - 1; $nextPage = $paginaActual +1; ?>
                    <?php if($paginaActual != 1){ ?>
                      <a href="<?php echo site_url('Noticias_controller/index/'.$prevPage); ?>" class="btn btn-secondary">Anterior</a>
                    <?php } ?>

                    <?php for($i = 1; $i <= $numeroDePaginas; $i++){ ?>
                      <a href="<?php echo site_url('Noticias_controller/index/'.$i); ?>" class="btn btn-secondary"><?php echo $i ?></a>
                    <?php } ?>

                    <?php if($paginaActual != $numeroDePaginas){ ?>
                      <a href="<?php echo site_url('Noticias_controller/index/'.$nextPage); ?>" class="btn btn-secondary">Siguiente</a>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- Fin Navegación páginas -->
            
          </div>
        </div>
      </div>
    </main>

  </body>
</html>