<!doctype html>
<html lang="es">
  <head>
    <title><?php echo isset($parametros['titulo'])?$parametros['titulo']:'Inicio' ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('/imagenes/');?><?php echo isset($parametros['favicon'])?$parametros['favicon']:'';?>" type="image/x-icon">

    <style>
      #map {
        height: 200px;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <!-- header -->
      <?php $data['nombre_equipo'] = $parametros['nombre_equipo']; ?>
      <?php $this->load->view('vista/header', $data) ?>
      <!-- Slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <?php $i = 0; ?>
            <?php foreach($noticias as $noticia){ ?>
                <?php $class=""; ?>
                <?php if($i == 0){ ?>
                    <?php $class = "active"; ?>
                <?php } ?>
                <div class="carousel-item <?php echo $class; ?>">
                    <img class="d-block w-100" src="<?php echo base_url('/imagenes/');?><?php echo isset($noticia['imagen'])?$noticia['imagen']:'';?>" alt="Imagen no disponible">
                </div>
                <?php $i++; ?>
            <?php } ?>
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
      <h1 class="mt-3">Ultimas noticias</h1><hr>
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
                <a href="<?php echo site_url('Noticias_controller/verNoticia/'.$noticia['id']) ?>"><h3><?php echo $noticia['titulo'] ?></h3></a>
                <p alig="justify"><?php echo $noticia['descripcion'] ?></p>
              </div>

            </div><!-- Fin Artículos --><hr>
          <?php } ?>
        </div><!-- Fin col -->

        <div class="col-12 col-md-3">
          <div class="mb-2">
            <h5>Eventos cercanos</h5>
            <div class="card card-inverse card-primary text-center">
              <div class="card-block">
                <div id="map"></div>
                <script>
                  function initMap() {
                    var uluru = [];
                    var id = [];

                    <?php foreach($eventos as $evento){ ?>
                      var evento = {lat: <?php echo $evento['latitud']; ?>, lng: <?php echo $evento['longitud']; ?>};
                      uluru.push(evento);

                      var idEvento = <?php echo $evento['id'];?>;
                      id.push(idEvento);
                    <?php } ?>

                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 8,
                      center: {lat: 18.918857, lng: -70.209149}
                    });

                    for(var i = 0; i < uluru.length; i++){
                      var marker = new google.maps.Marker({
                        position: uluru[i],
                        map: map,
                        title: 'Click para ver detalles'
                      });

                      (function(i){marker.addListener('click', function(){
                          location.href = "<?php echo site_url('Eventos_controller/verEvento/'); ?>" + id[i];
                        });
                      })(i);
                    }
                  }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZHzIYT_dSmPko_c4U1qYlkuneOzdGpgQ&callback=initMap">
                </script>
              </div>
            </div>
          </div>

          <?php foreach($clasificados as $clasificado){ ?>
            <div class="card mb-2" width="50" height="50">
              <img class="card-img-top"  src="<?php echo base_url('/imagenes/');?><?php echo isset($clasificado['imagen'])?$clasificado['imagen']:'';?>" alt="Card image cap">
              <p class="lead text-muted text-center"><?php $d = strtotime($clasificado['fecha']); echo date('F d, Y', $d); ?></p>
              <div class="card-body">
                <h4 class="card-title"><?php echo $clasificado['titulo'] ?></h4>
                <p class="card-text"><?php echo $clasificado['descripcion'] ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div><!-- Fin row -->
    </main><hr>


   
  </body>
</html>