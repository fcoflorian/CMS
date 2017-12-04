<!doctype html>
<html lang="es">
  <head>
    <title><?php echo isset($parametros['titulo'])?$parametros['titulo']:'Titulo de la pagina' ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('/imagenes/');?><?php echo isset($parametros['favicon'])?$parametros['favicon']:'';?>" type="image/x-icon">
    <script src="<?php echo str_replace("index.php","",site_url()); ?>application/views/vista/admin/tinymce/tinymce.min.js"></script>
    
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
  </head>

  <body>
    <!-- header -->
    <?php $data['nombre_equipo'] = $parametros['nombre_equipo']; ?>
      <?php $this->load->view('vista/header', $data) ?>
    <!-- end header -->

    <main>
      <div class="container">
        <h2 class="text-center">Crear noticia</h2><hr>
        <form action="<?php echo isset($noticia['id'])?site_url('Noticias_controller/guardarNoticia/'.$noticia['id']):site_url('Noticias_controller/guardarNoticia'); ?>" method="post" enctype="multipart/form-data">

          <div class="row">
            <div class="col col-md-12">
              <div class="input-group form-group">
                <label for="titulo" class="input-group-addon">Titulo</label>
                <input type="text" class="form-control" name="titulo" value="<?php echo isset($noticia['titulo'])?$noticia['titulo']:'' ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-md-12">
              <div class="input-group form-group">
                <textarea name="descripcion" id="mytextarea" rows="10" cols="20" class="form-control"><?php echo isset($noticia['descripcion'])?$noticia['descripcion']:'' ?></textarea>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-md-12">
              <div class="input-group form-group">
                <label for="foto" class="input-group-addon">Imagen</label>
                <input type="file" class="form-control" name="imagen">
              </div>
            </div>
          </div>
          <div class="input-group form-group">
            <input type="submit" class="btn btn-primary" value="Publicar">
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