
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog super genial</title>
    <meta name="description" content="Curso de Bootstrap Gratis">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ignacio Gutiérrez">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Estilos en Css -->
    <style>
      .slider{
        background: url("images/bg-3.png");
        background-size: cover;
        background-position: center; 
        height: 400px;
      }
    </style>   
  </head>
  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->
     
    <!-- Main -->
    <div class="container">
      <h2>Noticia</h2>
      <p class="lead">Escrito por Alejandro Villa</p>
      <hr>
        <div class="row">
          <!-- Sección de noticias -->
          <div class="col-12 col-lg-9 mb-5">
            <!-- Artículos -->
            <div class="row mb-5">
              <div class="col-3">
                <img class="img-fluid" src="../klk.png" alt="">
                <p class="lead text-muted text-center">2 Diciembre 2017</p>
              </div>
              <div class="col-9">
                <a href="#"><h3>Lorem ipsum dolor sit amet.</h3></a>
                <a href="#"><span class="badge badge-danger text-uppercase">html</span></a>
                <a href="#"><span class="badge badge-primary text-uppercase">css</span></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ipsum, similique debitis saepe soluta, vero provident ab atque fuga molestias magni repellat labore adipisci! Sapiente deleniti numquam minus adipisci reiciendis at, assumenda odit itaque tempore voluptas, repellat sequi ab quibusdam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi rem quasi reiciendis, ut eligendi, facilis deleniti temporibus vero ipsum accusamus.</p>
                <a href="#" class="btn btn-outline-warning btn-sm">Leer más...</a>
              </div>

              <?php $this->load->view('vista/admin/comentario') ?>
            </div>
            <!-- Fin Artículos -->
            <!-- Artículos -->
            <div class="row mb-5">
              <div class="col-3">
                <img class="img-fluid" src="" alt="">
                <p class="lead text-muted text-center">2 Diciembre 2017</p>
              </div>
              <div class="col-9">
                <a href="#"><h3>Lorem ipsum dolor sit amet.</h3></a>
                <a href="#"><span class="badge badge-danger text-uppercase">html</span></a>
                <a href="#"><span class="badge badge-primary text-uppercase">css</span></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ipsum, similique debitis saepe soluta, vero provident ab atque fuga molestias magni repellat labore adipisci! Sapiente deleniti numquam minus adipisci reiciendis at, assumenda odit itaque tempore voluptas, repellat sequi ab quibusdam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi rem quasi reiciendis, ut eligendi, facilis deleniti temporibus vero ipsum accusamus.</p>
                <a href="#" class="btn btn-outline-warning btn-sm">Leer más...</a>
              </div>
            </div>
            <!-- Fin Artículos -->
            <!-- Artículos -->
            <div class="row mb-5">
              <div class="col-3">
                <img class="img-fluid" src="" alt="">
                <p class="lead text-muted text-center">2 Diciembre 2017</p>
              </div>
              <div class="col-9">
                <a href="#"><h3>Lorem ipsum dolor sit amet.</h3></a>
                <a href="#"><span class="badge badge-danger text-uppercase">html</span></a>
                <a href="#"><span class="badge badge-primary text-uppercase">css</span></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ipsum, similique debitis saepe soluta, vero provident ab atque fuga molestias magni repellat labore adipisci! Sapiente deleniti numquam minus adipisci reiciendis at, assumenda odit itaque tempore voluptas, repellat sequi ab quibusdam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi rem quasi reiciendis, ut eligendi, facilis deleniti temporibus vero ipsum accusamus.</p>
                <a href="#" class="btn btn-outline-warning btn-sm">Leer más...</a>
              </div>
            </div>
            <!-- Fin Artículos -->
            <!-- Navegación páginas -->
              <div class="d-flex justify-content-center">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary">Inicio</button>
                    <button type="button" class="btn btn-secondary active">1</button>
                    <button type="button" class="btn btn-secondary">2</button>
                    <button type="button" class="btn btn-secondary">3</button>
                    <button type="button" class="btn btn-secondary">4</button>
                    <button type="button" class="btn btn-secondary">Final</button>
                  </div>
                </div>
              </div>
            <!-- Fin Navegación páginas -->
          </div>
          <!-- Fin Sección noticias -->
          <!-- Aside -->
          <div class="col-12 col-md-3">
            <!-- Cards -->
            <div class="mb-2">
              <div class="card card-inverse card-primary text-center">
                <div class="card-block">
                  <blockquote class="card-blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <!-- Fin Cards -->
            <!-- Cards -->
            <div class="mb-2">
              <div class="card card-inverse card-success text-center">
                <div class="card-block">
                  <blockquote class="card-blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <!-- Fin Cards -->
            <!-- Cards -->
            <div class="mb-2">
              <div class="card card-inverse card-warning text-center">
                <div class="card-block">
                  <blockquote class="card-blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <!-- Fin Cards -->
            <!-- Cards -->
            <div class="mb-2">
              <div class="card card-inverse card-danger text-center">
                <div class="card-block">
                  <blockquote class="card-blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <!-- Fin Cards -->
          </div>
          <!-- Fin Aside -->
        </div>
    </div>
    <!-- Fin Main -->
      
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>