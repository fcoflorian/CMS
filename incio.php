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
     
    <!-- Main -->
    <div class="container">
      <h2>Blog</h2>
      <p class="lead">Escrito por Ignacio Gutiérrez</p>
      <hr>
        <div class="row">
          <!-- Sección de noticias -->
          <div class="col-12 col-lg-9 mb-5">
                <!-- Artículos -->
                <div class="row mb-5">
                <div class="col-3">
                    <img class="img-fluid" src="images/cards1.png" alt="">
                    <p class="lead text-muted text-center">08 Abril 2017</p>
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
    <!-- Footer -->
    <div class="container-fluid bg-inverse text-white py-3">
      <div class="container text-center">
        <p>Sitio desarrollado por Bluuweb!</p>
        <a href="https://www.youtube.com/bluuweb">Recuerda suscriberte en mi canal de Youtube :)</a>
      </div>
    </div>
    <!-- Fin Footer -->
      
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




//////////////

<div class=" mt-2">
            <div class="row mb-3">
              <div class="col-3">
                <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticia['imagen'])?$noticia['imagen']:'';?>" alt="">
                <p class="lead text-muted text-center"><?php $d = strtotime($noticia['fecha']); echo date('F d, Y', $d); ?></p>
              </div>
              <div class="">
                <a href="#"><h3><?php echo $noticia['titulo'] ?></h3></a>
                <p alig="justify"><?php echo $noticia['descripcion'] ?></p>
              </div>
            </div>
          </div>