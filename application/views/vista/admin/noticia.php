<!doctype html>
<html lang="es">
  <head>
    <title>Crear noticia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src='tinymce/tinymce.min.js'></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
  </head>

  <body>
    <!-- header -->
      <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
      <div class="container">
        <h1 class="text-center">Crear Noticia</h1><hr>
        <form action="" method="post">

          <div class="row">
            <div class="col col-md-12">
              <div class="input-group form-group">
                <label for="titulo" class="input-group-addon">Titulo</label>
                <input type="text" class="form-control" name="titulo" value="">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-md-12">
              <div class="input-group form-group">
                <label for="descripcion" class="input-group-addon">Descripcion</label>
                <textarea name="descripcion" id="mytextarea" class="form-control"></textarea>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-md-12">
              <div class="input-group form-group">
                <label for="foto" class="input-group-addon">Fotos</label>
                <input type="file" class="form-control" name="foto" value="">
              </div>
            </div>
          </div>
          <div class="input-group form-group">
            <input type="submit" class="btn btn-primary" value="Publicar">
          </div>
        </form>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="CSS/js/bootstrap.min.js"></script>
  </body>
</html>