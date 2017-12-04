<!doctype html>
<html lang="es">
  <head>
    <title>Crear evento</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('/imagenes/');?><?php echo isset($parametros['favicon'])?$parametros['favicon']:'';?>" type="image/x-icon">
  </head>

  <body>
    <!-- header -->
      <?php $data['nombre_equipo'] = $parametros['nombre_equipo']; ?>
      <?php $this->load->view('vista/header', $data) ?>
    <!-- end header -->

    <main>
      <div class="container">
        <h2 class="text-center">Crear evento</h2><hr>
          <form action="<?php echo isset($evento['id'])?site_url('Eventos_controller/guardarEvento/'.$evento['id']):site_url('Eventos_controller/guardarEvento'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col col-sx-4">
                <div class="input-group form-group">
                  <label for="titulo" class="input-group-addon">Titulo</label>
                  <input type="text" name="titulo" class="form-control" value="<?php echo isset($evento['titulo'])?$evento['titulo']:'' ?>">
                </div>
              </div>
              <div class="col col-sx-4">
                <div class="input-group form-group">
                  <label for="fecha" class="input-group-addon">Fecha</label>
                  <input type="date" name="fecha" class="form-control" value="<?php isset($evento['fecha'])?$d = strtotime($evento['fecha']):''; echo isset($evento['fecha'])?date('Y-m-d', $d):'' ?>">
                </div>
              </div>
              <div class="col col-sx-4">
                <div class="input-group form-group">
                  <label for="hora" class="input-group-addon">Hora</label>
                  <input type="text" name="hora" class="form-control" value="<?php echo isset($evento['hora'])?$evento['hora']:'' ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-sx-12">
                <div class="input-group form-group">
                  <label for="descripcion" class="input-group-addon">Descripcion</label>
                  <textarea name="descripcion" class="form-control"><?php echo isset($evento['descripcion'])?$evento['descripcion']:'' ?></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-sx-6">
                <div class="input-group form-group">
                  <label for="latitud" class="input-group-addon">Latitud</label>
                  <input type="text" name="latitud" class="form-control" value="<?php echo isset($evento['latitud'])?$evento['latitud']:'' ?>">
                </div>
              </div>

              <div class="col col-sx-6">
                <div class="input-group form-group">
                  <label for="longitud" class="input-group-addon">Longitud</label>
                  <input type="text" name="longitud" class="form-control" value="<?php echo isset($evento['longitud'])?$evento['longitud']:'' ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-sx-6">
                <div class="input-group form-group">
                  <label for="imagen" class="input-group-addon">Imagen</label>
                  <input type="file" name="imagen" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col col-sx-6">
                <div class="input-group form-group">
                  <input type="submit" class="btn btn-primary" value="Crear">
                </div>
              </div>
            </div>
          </form>
          
          <?php if(isset($error)){ ?>
              <div class="alert alert-danger"><?php echo $error ?></div>
          <?php } ?>
      </div>
      
    </main>

    <?php $this->load->view('vista/footer') ?>
  </body>
</html>