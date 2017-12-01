<!doctype html>
<html lang="es">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <!-- header -->
    <header>
      <div class="container-fluid bg-light text-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
          <a class="navbar-brand mr-5" href="#">CMS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
              <a class="nav-item nav-link" href="#">Inicio</a>
              <a class="nav-item nav-link" href="#">Noticias</a>
              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Miembros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"> Inicia Sesión</a>
                  <a class="dropdown-item" href="#">Registrarte</a>
                  <!-- <div class="dropdown-divider"></div> -->
                </div>
              </div>
              <a class="nav-item nav-link" href="#">Galería de fotos</a>
              <a class="nav-item nav-link" href="#">Eventos</a>
              <a class="nav-item nav-link" href="#">Clasificados</a>
              <a class="nav-item nav-link" href="#">Contacto</a>
              <a class="nav-item nav-link" href="#">FAQ</a>
              <a class="nav-item nav-link" href="#">Admin</a>
            </div>
            <div>
              <a href="#" class="btn btn-outline-primary">Login</a>
              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#register">Register</a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header -->

    <main>
      <!-- Large modal -->
      <div class="modal fade bd-example-modal-lg" id="register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                  <div class="row">
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Cedula</label>
                        <input type="number" name="cedula" class="form-control" placeholder="Cedula">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                      </div>
                    </div>
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Apellido</label>
                        <input type="text" name="apelldio" class="form-control" placeholder="Apellido">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Telefono</label>
                        <input type="number" name="telefono" class="form-control" placeholder="Telefono">
                      </div>
                    </div>
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Celular</label>
                        <input type="number" name="celular" class="form-control" placeholder="Celular">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Direccion</label>
                        <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Latitud</label>
                        <input type="text" name="latitud" class="form-control" placeholder="Latitud">
                      </div>
                    </div>
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Longitud</label>
                        <input type="text" name="logintud" class="form-control" placeholder="Longitud">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Email</label>
                        <input type="email" name="email " class="form-control" placeholder="Email">
                      </div>
                    </div>
                    <div class="col col-sx-6">
                      <div class="input-group form-group">
                        <label for="" class="input-group-addon">Contraseña</label>
                        <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                      </div>
                    </div>
                  </div>

                </form><hr>
              </div>
              <div class="text-center">
                <a href="" class="btn btn-primary" type="submit">Registrection</a>
                <div>
                  <a href="" class="badge badge-info">login</a>
                </div>
                
              </div>
          </div>
        </div>
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