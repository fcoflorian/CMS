<header>
  <div class="containt-fluid">
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
            <a class="nav-link dropdown-toggle" href="<?php echo site_url('Miembros_controller/index') ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Miembros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('Miembros_controller/iniciarSesion') ?>"> Iniciar sesión</a>
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
          <a href="<?php echo site_url('Miembros_controller/iniciarSesion') ?>" class="btn btn-outline-primary">Login</a>
          <a href="#"  class="btn btn-outline-primary">Register</a>
        </div>
      </div>
    </nav>
  </div>
</header>