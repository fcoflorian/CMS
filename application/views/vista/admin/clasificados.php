<!doctype html>
<html lang="es">
  <head>
    <title>Crear clasificado</title>
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
            <h2 class="text-center">Crear clasificado</h2><hr>
            <div class="d-flex justify-content-center">
                <form action="<?php echo isset($clasificado['id'])?site_url('Clasificados_controller/guardarClasificado/'.$clasificado['id']):site_url('Clasificados_controller/guardarClasificado'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col col-sx-12">
                            <div class="input-group form-group">
                                <label for="titulo" class="input-group-addon">Titulo</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Titulo de su anucio" value="<?php echo isset($clasificado['titulo'])?$clasificado['titulo']:'' ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sx-12">
                            <div class="input-group form-group">
                                <label for="descripcion" class="input-group-addon">Descripcion</label>
                                <textarea name="descripcion" class="form-control"  placeholder="Descripcion de su anuncio"><?php echo isset($clasificado['descripcion'])?$clasificado['descripcion']:'' ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sx-12">
                            <div class="input-group form-group">
                                <label for="foto" class="input-group-addon">Imagen</label>
                                <input type="file" name="imagen" class="form-control" placeholder="Subir la imagen">
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="input-group form-group">
                            <input type="submit" class="btn btn-success" value="Publicar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <?php $this->load->view('vista/footer') ?>
    </footer>
    <!-- Fin Footer -->
  </body>
</html>