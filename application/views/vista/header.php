
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
  <header>
  <div class="containt-fluid sticky-top">
    <nav class="navbar  navbar-expand-lg navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="<?php echo site_url('Index_controller/index') ?>">Inicio</a>
          <a class="nav-item nav-link" href="<?php echo site_url('Noticias_controller/index') ?>">Noticias</a>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Miembros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if($this->session->userdata('cedula') == null){ ?>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#login">Iniciar sesión</a>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#register">Registrarse</a>
              <?php }else{ ?>
                <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/cerrarSesion') ?>">Cerrar sesión</a>
              <?php } ?>
              <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/index') ?>">Ver miembros</a>
            </div>
          </div>
          <a class="nav-item nav-link" href="<?php echo site_url('Galeria_controller/index') ?>">Galería de fotos</a>
          <a class="nav-item nav-link" href="<?php echo site_url('Eventos_controller/index') ?>">Eventos</a>
          <a class="nav-item nav-link" href="<?php echo site_url('Clasificados_controller/index') ?>">Clasificados</a>
          <a class="nav-item nav-link" href="<?php echo site_url('Contacto_controller/enviarMensaje') ?>">Contacto</a>
          <a class="nav-item nav-link" href="#">FAQ</a>
          <?php if($this->session->userdata('admin') == 'admin'){ ?>
            <a class="nav-item nav-link" href="<?php echo site_url('Noticias_controller/guardarNoticia') ?>">Crear noticias</a>
            <a class="nav-item nav-link" href="<?php echo site_url('Galeria_controller/guardarFoto') ?>">Subir fotos</a>
            <a class="nav-item nav-link" href="<?php echo site_url('Eventos_controller/guardarEvento') ?>">Crear evento</a>
            <a class="nav-item nav-link" href="<?php echo site_url('Contacto_controller/index') ?>">Mensajes</a>
          <?php } ?>
        </div>
        <div>
          <?php if($this->session->userdata('cedula') == null){ ?>
            <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#login">Login</a>
            <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#register">Register</a>
          <?php }else{ ?>
            <a class="btn btn-outline-danger" href="<?php echo site_url('Miembros_controller/cerrarSesion') ?>">Cerrar sesión</a>
          <?php } ?>
        </div>
      </div>
    </nav>
  </div>

  <!--Modal login-->

  <div class="modal fade bd-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('Miembros_controller/iniciarSesion') ?>" method="post">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group input-group">
                                <label for="cedula" class="input-group-addon">Cedula</label>
                                <input type="text" name="cedula" class="form-control" placeholder="Cedula">
                            </div>
                        </div>
                    </div>

                    <div class="text-center"><hr>
                      <input type="submit" class="btn btn-primary" value="Iniciar sesión">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

  <!--Modal login-->

  <!--Modal register-->

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
            <form action="<?php echo site_url('Miembros_controller/registrarMiembro') ?>" method="post">
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
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido">
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
                    <input type="text" name="longitud" class="form-control" placeholder="Longitud">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="" class="input-group-addon">Email</label>
                    <input type="email" name="correo" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>

              <div class="text-center">
                <input class="btn btn-primary" type="submit" value="Registrarse">
              </div>

            </form><hr>
          </div>
      </div>
    </div>
  </div>

  <!--Modal register-->

</header>
  
</body>
</html>

