<!doctype html>
<html lang="es">
  <head>
    <title><?php echo isset($parametros['titulo'])?$parametros['titulo']:'Titulo de la pagina' ?></title>
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
        <h2 class="text-center">Evento <?php echo $evento['titulo'] ?></h2><hr>
        <div class="row d-flex justify-content-center">
          <div class="card mb-3" style="width: 40rem;">
            <img class="card-img-top img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($evento['imagen'])?$evento['imagen']:'';?>" alt="Imagen no disponible">
            <div class="card-body">
              <p class="card-text"><b>Descripción: </b><?php echo $evento['descripcion'] ?></p>
              <p class="card-text"><b>Fecha: </b><?php $d = strtotime($evento['fecha']); echo date('F d, Y', $d); ?>. <b>Hora: </b><?php echo $evento['hora'] ?>.</p>
            </div>
            <div class="card-footer">
              <div class="container">
                <?php if($this->session->userdata('admin') != null){ ?>
                  <a href="<?php echo site_url('Eventos_controller/guardarEvento/'.$evento['id']); ?>" class="btn btn-warning">Editar</a>
                  <a href="<?php echo site_url('Eventos_controller/borrarEvento/'.$evento['id']); ?>" class="btn btn-danger">Eliminar</a>
                <?php } ?>
                <?php if($this->session->userdata('cedula') != null && $asistencia == false){ ?>
                  <a href="<?php echo site_url('Eventos_controller/asistirAEvento/'.$evento['id']); ?>" class="btn btn-info">Asistir</a>
                <?php }else if($this->session->userdata('cedula') != null && $asistencia == true){ ?>
                  <a href="<?php echo site_url('Eventos_controller/desasistirAEvento/'.$evento['id']); ?>" class="btn btn-info">Ya no asistiré</a>
                <?php } ?>
              </div><br>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <h3>Miembros que asistirán</h3>
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($miembros as $miembro){ ?>
                <tr>
                  <td><img class="img-fluid" src="<?php echo base_url('/imagenes/');?><?php echo isset($miembro['foto'])?$miembro['foto']:'';?>" width="100" alt="Imagen no disponible"></td>
                  <td><?php echo $miembro['nombre'] ?></td>
                  <td><?php echo $miembro['telefono'] ?></td>
                  <td><?php echo $miembro['correo'] ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    
  </body>
</html>