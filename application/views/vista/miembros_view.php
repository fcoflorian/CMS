<!doctype html>
<html lang="es">
  <head>
    <title>Miembros</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('/imagenes/');?><?php echo isset($parametros['favicon'])?$parametros['favicon']:'';?>" type="image/x-icon">

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
    <?php $data['nombre_equipo'] = $parametros['nombre_equipo']; ?>
      <?php $this->load->view('vista/header', $data) ?>
    <!-- end header -->

    <main>
      <h2 class="text-center mt-5 mb-5">Lista de miembros</h2>
      <div class="container">
        <div class="row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <?php if($this->session->userdata('admin') != null){ ?>
                  <th scope="col">Admin</th>
                  <th scope="col">Acción</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php foreach($miembros as $miembro){ ?>
                <tr>
                  <td><img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($miembro['foto'])?$miembro['foto']:'';?>" width="100" alt="Imagen no disponible"></td>
                  <td><?php echo $miembro['nombre'] ?></td>
                  <td><?php echo $miembro['telefono'] ?></td>
                  <td><?php echo $miembro['correo'] ?></td>
                  <?php if($this->session->userdata('admin') != null){ ?>
                    <td><?php echo $miembro['admin'] ?></td>
                    <td><a href="<?php echo site_url('Miembros_controller/hacerAdmin/'.$miembro['id']) ?>" class="btn btn-primary">Hacer admin</a></td>
                  <?php } ?>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <?php if($this->session->userdata('admin') != null){ ?>
          <div class="row">
            <a href="<?php echo site_url('Miembros_controller/exportarMiembros') ?>" class="btn btn-success">Exportar a excel</a>
            <div id="map"></div>
            <script>
              function initMap() {
                var uluru = [];

                <?php foreach($miembros as $miembro){ ?>
                  var miembro = {lat: <?php echo $miembro['latitud']; ?>, lng: <?php echo $miembro['longitud']; ?>};
                  uluru.push(miembro);
                <?php } ?>

                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 8,
                  center: {lat: 18.918857, lng: -70.209149}
                });

                for(var i = 0; i < uluru.length; i++){
                  var marker = new google.maps.Marker({
                    position: uluru[i],
                    map: map
                  });
                }
              }
            </script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZHzIYT_dSmPko_c4U1qYlkuneOzdGpgQ&callback=initMap">
            </script>
          </div>
        <?php } ?>
      </div>
    </main>

    <?php $this->load->view('vista/footer') ?>
  </body>
</html>