<!doctype html>
<html lang="es">
  <head>
    <title>Eventos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
      #map {
        height: 650px;
        width: 100%;
        margin-bottom:100px;
      }
    </style>
  </head>

  <body>
    <!-- header -->
      <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
      <div class="container">
        <h2 class="mt-5 mb-5">Eventos cercanos</h2>

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
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
  </body>
</html>