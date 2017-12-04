
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <style>
    
    .blog-footer {
      padding: 2.5rem 0;
      color: #999;
      text-align: center;
      background-color: #f9f9f9;
      border-top: 0 solid #e5e5e5;
    } 
    .blog-footer p:last-child {
      margin-bottom: 0;
    }

    #navbar{
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 1030;
    }
  
  </style>
</head>
<body>
    <div class="">

    
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top " id="navbar">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Index_controller/index')?'active':'' ?>" href="<?php echo site_url('Index_controller/index') ?>">Inicio</a>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Noticias_controller/index')?'active':'' ?>" href="<?php echo site_url('Noticias_controller/index') ?>">Noticias</a>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo strpos(current_url(), 'Miembros_controller/index')?'active':'' ?>" id="navbarDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Miembros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if($this->session->userdata('cedula') == null){ ?>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#login">Iniciar sesión</a>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#register">Registrarse</a>
              <?php }else{ ?>
                <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/cerrarSesion') ?>">Cerrar sesión</a>
              <?php } ?>
              <?php if($this->session->userdata('cedula') != null){ ?>
                <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/index') ?>">Ver miembros</a>
                <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/miPerfil') ?>">Mi perfil</a>
              <?php } ?>
            </div>
          </div>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Galeria_controller/index')?'active':'' ?>" href="<?php echo site_url('Galeria_controller/index') ?>">Galería de fotos</a>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Eventos_controller/index')?'active':'' ?>" href="<?php echo site_url('Eventos_controller/index') ?>">Eventos</a>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Clasificados_controller/index')?'active':'' ?>" href="<?php echo site_url('Clasificados_controller/index') ?>">Clasificados</a>
          <?php if($this->session->userdata('cedula') != null){ ?>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Clasificados_controller/guardarClasificado')?'active':'' ?>" href="<?php echo site_url('Clasificados_controller/guardarClasificado') ?>">Crear clasificado</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Contacto_controller/enviarMensaje')?'active':'' ?>" href="<?php echo site_url('Contacto_controller/enviarMensaje') ?>">Contacto</a>
          <?php } ?>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Faq_controller/index')?'active':'' ?>" href="<?php echo site_url('Faq_controller/index') ?>">FAQ</a>
          <?php if($this->session->userdata('admin') == 'admin'){ ?>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Noticias_controller/guardarNoticia')?'active':'' ?>" href="<?php echo site_url('Noticias_controller/guardarNoticia') ?>">Crear noticias</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Galeria_controller/guardarFoto')?'active':'' ?>" href="<?php echo site_url('Galeria_controller/guardarFoto') ?>">Subir fotos</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Eventos_controller/guardarEvento')?'active':'' ?>" href="<?php echo site_url('Eventos_controller/guardarEvento') ?>">Crear evento</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Contacto_controller/index')?'active':'' ?>" href="<?php echo site_url('Contacto_controller/index') ?>">Mensajes</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Faq_controller/guardarFaq')?'active':'' ?>" href="<?php echo site_url('Faq_controller/guardarFaq') ?>">Crear pregunta frecuente</a>
          <?php } ?>
        </div>
        <div>
          <?php if($this->session->userdata('cedula') == null){ ?>
            <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#login">Login</a>
            <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#register">Register</a>
          <?php }else{ ?>
            <a class="btn btn-outline-info" href="<?php echo site_url('Miembros_controller/miPerfil') ?>">Mi perfil</a>
            <a class="btn btn-outline-danger" href="<?php echo site_url('Miembros_controller/cerrarSesion') ?>">Cerrar sesión</a>
          <?php } ?>
        </div>
      </div>
    </nav> -->
  </div>

  <nav class="navbar sticky-top navbar-expand-lg navbar-toggleable-lg navbar-light bg-faded"  style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Index_controller/index')?'active':'' ?>" href="<?php echo site_url('Index_controller/index') ?>">Inicio</a>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Noticias_controller/index')?'active':'' ?>" href="<?php echo site_url('Noticias_controller/index') ?>">Noticias</a>
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo strpos(current_url(), 'Miembros_controller/index')?'active':'' ?>" id="navbarDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Miembros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if($this->session->userdata('cedula') == null){ ?>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#login">Iniciar sesión</a>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#register">Registrarse</a>
              <?php }else{ ?>
                <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/cerrarSesion') ?>">Cerrar sesión</a>
              <?php } ?>
              <?php if($this->session->userdata('cedula') != null){ ?>
                <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/index') ?>">Ver miembros</a>
              <?php } ?>
            </div>
          </div>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Galeria_controller/index')?'active':'' ?>" href="<?php echo site_url('Galeria_controller/index') ?>">Galería de fotos</a>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Eventos_controller/index')?'active':'' ?>" href="<?php echo site_url('Eventos_controller/index') ?>">Eventos</a>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Clasificados_controller/index')?'active':'' ?>" href="<?php echo site_url('Clasificados_controller/index') ?>">Clasificados</a>
          <?php if($this->session->userdata('cedula') != null){ ?>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Clasificados_controller/guardarClasificado')?'active':'' ?>" href="<?php echo site_url('Clasificados_controller/guardarClasificado') ?>">Crear clasificado</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Contacto_controller/enviarMensaje')?'active':'' ?>" href="<?php echo site_url('Contacto_controller/enviarMensaje') ?>">Contacto</a>
          <?php } ?>
          <a class="nav-item nav-link <?php echo strpos(current_url(), 'Faq_controller/index')?'active':'' ?>" href="<?php echo site_url('Faq_controller/index') ?>">FAQ</a>
          <?php if($this->session->userdata('admin') == 'admin'){ ?>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Noticias_controller/guardarNoticia')?'active':'' ?>" href="<?php echo site_url('Noticias_controller/guardarNoticia') ?>">Crear noticias</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Galeria_controller/guardarFoto')?'active':'' ?>" href="<?php echo site_url('Galeria_controller/guardarFoto') ?>">Subir fotos</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Eventos_controller/guardarEvento')?'active':'' ?>" href="<?php echo site_url('Eventos_controller/guardarEvento') ?>">Crear evento</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Contacto_controller/index')?'active':'' ?>" href="<?php echo site_url('Contacto_controller/index') ?>">Mensajes</a>
            <a class="nav-item nav-link <?php echo strpos(current_url(), 'Faq_controller/guardarFaq')?'active':'' ?>" href="<?php echo site_url('Faq_controller/guardarFaq') ?>">Crear pregunta frecuente</a>
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
                                <input type="number" name="cedula" class="form-control" placeholder="Cedula" value="<?php echo isset($cedula)?$cedula:''; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="text-center"><hr>
                      <input type="submit" class="btn btn-primary" value="Iniciar sesión">
                    </div>

                    <?php if(isset($errorLogin)){ ?>
                      <div class="alert alert-danger">
                        <span><?php echo $errorLogin ?></span>
                      </div>
                    <?php } ?>
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
            <form action="<?php echo site_url('Miembros_controller/registrarMiembro') ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="cedula" class="input-group-addon">Cedula</label>
                    <input type="number" name="cedula" class="form-control" placeholder="Cedula" value="<?php echo isset($miembro['cedula'])?$miembro['cedula']:''; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="nombre" class="input-group-addon">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo isset($miembro['nombre'])?$miembro['nombre']:''; ?>">
                  </div>
                </div>
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="apellido" class="input-group-addon">Apellido</label>
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="<?php echo isset($miembro['apellido'])?$miembro['apellido']:''; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="telefono" class="input-group-addon">Telefono</label>
                    <input type="number" name="telefono" class="form-control" placeholder="Telefono" value="<?php echo isset($miembro['telefono'])?$miembro['telefono']:''; ?>">
                  </div>
                </div>
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="celular" class="input-group-addon">Celular</label>
                    <input type="number" name="celular" class="form-control" placeholder="Celular" value="<?php echo isset($miembro['celular'])?$miembro['celular']:''; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="direccion" class="input-group-addon">Direccion</label>
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="<?php echo isset($miembro['direccion'])?$miembro['direccion']:''; ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="latitud" class="input-group-addon">Latitud</label>
                    <input type="text" name="latitud" class="form-control" placeholder="Latitud" value="<?php echo isset($miembro['latitud'])?$miembro['latitud']:''; ?>">
                  </div>
                </div>
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="longitud" class="input-group-addon">Longitud</label>
                    <input type="text" name="longitud" class="form-control" placeholder="Longitud" value="<?php echo isset($miembro['longitud'])?$miembro['longitud']:''; ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="correo" class="input-group-addon">Correo</label>
                    <input type="email" name="correo" class="form-control" placeholder="Correo" value="<?php echo isset($miembro['correo'])?$miembro['correo']:''; ?>">
                  </div>
                </div>
                <div class="col col-sx-6">
                  <div class="input-group form-group">
                    <label for="foto" class="input-group-addon">Foto</label>
                    <input type="file" name="foto" class="form-control">
                  </div>
                </div>
              </div>

              <div class="text-center">
                <input class="btn btn-primary" type="submit" value="Registrarse">
              </div>

              <?php if(isset($errorRegistro)){ ?>
                <div class="alert alert-danger">
                  <span><?php echo $errorRegistro ?></span>
                </div>
              <?php } ?>
            </form><hr>
          </div>
      </div>
    </div>
  </div>
  <!--Modal register-->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<?php if(isset($cedula)){ ?>
  <script>
    $('#login').modal({ show:true });
  </script>
<?php } ?>
<?php if(isset($miembro)){ ?>
  <script>
    $('#register').modal({ show:true });
  </script>
<?php } ?>
</body>
</html>

