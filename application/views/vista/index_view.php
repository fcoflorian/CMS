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
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link active" href="#">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo site_url('Noticias_controller/index') ?>">Noticias</a>
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Miembros
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"> Iniciar sesión</a>
                <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/registrarMiembro') ?>">Registrarse</a>
                <!-- <div class="dropdown-divider"></div> -->
              </div>
            </div>
            <a class="nav-item nav-link" href="<?php echo site_url('Galeria_controller/index') ?>">Galería de fotos</a>
            <a class="nav-item nav-link" href="#">Eventos</a>
            <a class="nav-item nav-link" href="#">Clasificados</a>
            <a class="nav-item nav-link" href="#">Contacto</a>
            <a class="nav-item nav-link" href="#">FAQ</a>
            <a class="nav-item nav-link" href="#">Admin</a>
          </div>
          <div>
            <a href="#" class="btn btn-outline-primary">Login</a>
            <a href="#"  class="btn btn-outline-primary">Register</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header -->

    <main>
      <?php foreach($noticias as $noticia){ ?>
        <div>
          <h2><?php echo $noticia['titulo']?></h2>
          <p><?php echo $noticia['texto']?></p>
        </div>
      <?php } ?> 
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