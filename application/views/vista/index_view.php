<!doctype html>
<html lang="es">
  <head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


  </head>

  <body>
    <!-- header -->
      <?php $this->load->view('vista/header') ?>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block img-fluid w-100" src="http://localhost/cms/imagenes/2.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid w-100" src="http://localhost/cms/imagenes/2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid w-100" src="http://localhost/cms/imagenes/2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- end header -->

    <main>
      <?php foreach($noticias as $noticia){ ?>
        <div class="container mt-2">
          <div class="row mb-3">
            <div class="col-3">
              <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticia['imagen'])?$noticia['imagen']:'';?>" alt="">
              <p class="lead text-muted text-center"><?php $d = strtotime($noticia['fecha']); echo date('F d, Y', $d); ?></p>
            </div>
            <div class="col-9">
              <a href="#"><h3><?php echo $noticia['titulo'] ?></h3></a>
              <p><?php echo $noticia['texto'] ?></p>
            </div>
            </div>
          </div>
        </div>

        <div class="container mt-2">
          <div class="row mb-3">
            <div class="col-3">
              <img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticia['imagen'])?$noticia['imagen']:'';?>" alt="">
              <p class="lead text-muted text-center"><?php $d = strtotime($noticia['fecha']); echo date('F d, Y', $d); ?></p>
            </div>
            <div class="col-9">
              <a href="#"><h3><?php echo $noticia['titulo'] ?></h3></a>
              <p><?php echo $noticia['texto'] ?></p>
            </div>
            </div>
          </div>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>