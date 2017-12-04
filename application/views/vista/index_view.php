<!doctype html>
<html lang="es">
  <head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>


  <body>
    <!-- header -->
      <?php $this->load->view('vista/header') ?>
      <!-- Slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="http://localhost/cms/imagenes/2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://localhost/cms/imagenes/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://localhost/cms/imagenes/2.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      <!-- fin slide -->
    <!-- end header -->

    <main role="main" class="container">
      <h1 class="mt-3">Noticias publicadas</h1><hr>
      <div class="row">
        <!-- Sección de noticias -->
        <div class="col-12 col-lg-9 mb-5">
          <?php foreach($noticias as $noticia){ ?>
            <!-- Artículos -->
            <div class="row mb-5">

              <div class="col-3">
                <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticia['imagen'])?$noticia['imagen']:'';?>" alt="">
                <p class="lead text-muted text-center"><?php $d = strtotime($noticia['fecha']); echo date('F d, Y', $d); ?></p>
              </div>

              <div class="col-9">
                <a href="#"><h3><?php echo $noticia['titulo'] ?></h3></a>
                <p alig="justify"><?php echo $noticia['descripcion'] ?></p>
              </div>

            </div><!-- Fin Artículos -->
          <?php } ?>
        </div><!-- Fin col -->

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
          </div><!-- Fin Cards -->
           <!-- Cards -->
            <div class="card mb-2" width="50" height="50">
              <img class="card-img-top"  src="<?php echo base_url('/imagenes/');?><?php echo isset($noticia['imagen'])?$noticia['imagen']:'';?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <!-- Fin Cards -->
            <!-- Cards -->
            <div class="card mb-2" width="250" height="250">
              <img class="card-img-top" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticia['imagen'])?$noticia['imagen']:'';?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <!-- Fin Cards -->
        </div>
      </div><!-- Fin row -->
    </main>

    <footer>
      <?php $this->load->view('vista/footer') ?>
    </footer>
   
  </body>
</html>