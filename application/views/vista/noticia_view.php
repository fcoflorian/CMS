
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
     
    <!-- Main -->
    <div class="container">
      <h2>Noticias</h2>
      <p class="lead">Escrito por Alejandro Villa</p>
      <hr>
        <div class="row">
          <!-- Sección de noticias -->
          <div class="col-12 col-lg-9 mb-5">
            <!-- Artículos -->
            <?php for($i = ($paginaActual-1) * 10; $i < $paginaActual * 10; $i++){ ?>
              <?php if($i < count($noticias)){ ?>
                <div class="row mb-5">
                  <div class="col-3">
                    <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticias[$i]['imagen'])?$noticias[$i]['imagen']:'';?>" alt="">
                    <p class="lead text-muted text-center"><?php $d = strtotime($noticias[$i]['fecha']); echo date('F d, Y', $d); ?></p>
                  </div>
                  <div class="col-9">
                    <a href="#"><h3><?php echo $noticias[$i]['titulo'] ?></h3></a>
                    <p><?php echo $noticias[$i]['descripcion'] ?></p>
                  </div>
                  
                  <!--Comentarios-->

                  <div class="container">
                    <hr>
                    <?php if($noticias[$i]['comentarios'] != null){ ?>
                      <?php foreach($noticias[$i]['comentarios'] as $comentario){ ?>
                        <div>
                          <p><?php echo $comentario['comentario'] ?></p>
                        </div>
                      <?php } ?>
                    <?php } ?>
                    <div class="d-flex justify-content-center">
                        <form action="" method="post">
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
                    </div>
                  </div>

                  <!--Comentarios-->

                </div>
              <?php } ?>
            <?php } ?>
            <!-- Fin Artículos -->
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
          </div>
          <!-- Fin Sección noticias -->
          <!-- Aside -->
          <div class="col-12 col-md-3">
            <!-- Cards -->
            <div class="card mb-2" style="width: 20rem;">
              <img class="card-img-top img-fluid" src="http://localhost/cms/imagenes/2.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <!-- Fin Cards -->
            <!-- Cards -->
            <div class="mb-2">
              <div class="card card-inverse card-success text-center">
                <div class="card-block">
                  <blockquote class="card-blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <!-- Fin Cards -->
            <!-- Cards -->
            <div class="mb-2">
              <div class="card card-inverse card-warning text-center">
                <div class="card-block">
                  <blockquote class="card-blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <!-- Fin Cards -->
            <!-- Cards -->
            <div class="mb-2">
              <div class="card card-inverse card-danger text-center">
                <div class="card-block">
                  <blockquote class="card-blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <!-- Fin Cards -->
          </div>
          <!-- Fin Aside -->
        </div>
    </div>
    <!-- Fin Main -->
  </body>
</html>