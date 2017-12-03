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
                <form action="" method="post">
                    <input type="hidden" name="id" class="form-control" value="">
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="input-group form-group">
                                <label for="titulo" class="input-group-addon">Titulo</label>
                                <input type="text" name="titulo" class="form-control" value="" placeholder="Titulo de su anucio">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="input-group form-group">
                                <label for="descripcion" class="input-group-addon">Descripcion</label>
                                <textarea name="descripcion" class="form-control"  placeholder="Descripcion de su anuncio"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="input-group form-group">
                                <label for="foto" class="input-group-addon">Imagen</label>
                                <input type="file" name="imagen" class="form-control" value="" placeholder="Subir la imagen">
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

    </footer>
    <!-- Fin Footer -->
  </body>
</html>