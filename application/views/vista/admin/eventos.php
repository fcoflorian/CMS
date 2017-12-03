<!doctype html>
<html lang="es">
  <head>
    <title>Crear evento</title>
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
        <h2 class="text-center">Crear evento</h2><hr>
          <form action="" method="post">
            <div class="row">
              <div class="col col-sx-4">
                <div class="input-group form-group">
                  <label for="titulo" class="input-group-addon">Titulo</label>
                  <input type="text" name="titulo" class="form-control">
                </div>
              </div>
              <div class="col col-sx-4">
                <div class="input-group form-group">
                  <label for="fecha" class="input-group-addon">Fecha</label>
                  <input type="date" name="fecha" class="form-control">
                </div>
              </div>
              <div class="col col-sx-4">
                <div class="input-group form-group">
                  <label for="hora" class="input-group-addon">Hora</label>
                  <input type="text" name="hora" class="form-control">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-sx-12">
                <div class="input-group form-group">
                  <label for="descripcion" class="input-group-addon">Descripcion</label>
                  <textarea name="descripcion" class="form-control"></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-sx-6">
                <div class="input-group form-group">
                  <label for="latitud" class="input-group-addon">Latitud</label>
                  <input type="text" name="latitud" class="form-control">
                </div>
              </div>

              <div class="col col-sx-6">
                <div class="input-group form-group">
                  <label for="longitud" class="input-group-addon">Longitud</label>
                  <input type="text" name="longitud" class="form-control">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-sx-6">
                <div class="input-group form-group">
                  <label for="imagen" class="input-group-addon">Imagen</label>
                  <input type="file" name="imagen" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-sx-6">
                <div class="input-group form-group">
                  <input type="submit" class="btn btn-primary" value="Crear">
                </div>
              </div>
            </div>

            
          </form>
      </div>
      
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
  </body>
</html>