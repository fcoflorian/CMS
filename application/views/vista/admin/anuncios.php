<!doctype html>
<html lang="es">
  <head>
    <title>Crear anuncios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    

  </head>

  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
        <div class="container">
            <H1 class="text-center">Crear su anuncios!</H1><hr>
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
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="input-group form-group">
                                <label for="fecha" class="input-group-addon">Fecha</label>
                                <input type="date" name="fecha" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="input-group form-group">
                            <button type="submit" class="btn btn-success">Crear</button>    
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>