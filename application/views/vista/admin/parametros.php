<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo base_url('/imagenes/');?><?php echo isset($parametros['favicon'])?$parametros['favicon']:'';?>" type="image/x-icon">
    <title><?php echo isset($parametros['titulo'])?$parametros['titulo']:'Titulo de la pagina' ?></title>
</head>
<body>
    <!-- header -->
        <?php $data['nombre_equipo'] = $parametros['nombre_equipo']; ?>
        <?php $this->load->view('vista/header', $data) ?>
    <!-- end header -->

    <main>
        <div class="container">
            <h2 class="mt-5 mb-5">Configurar parametros</h2>

            <form action="<?php echo isset($parametros['id'])?site_url('Index_controller/guardarParametros/'.$parametros['id']):site_url('Index_controller/guardarParametros'); ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col col-sx-12">
                        <div class="input-group form-group">
                            <label for="nombre_equipo" class="input-group-addon">Nombre del equipo</label>
                            <input type="text" name="nombre_equipo" class="form-control" value="<?php echo isset($parametros['nombre_equipo'])?$parametros['nombre_equipo']:'' ?>" placeholder="Nombre del equipo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sx-12">
                        <div class="input-group form-group">
                            <label for="titulo" class="input-group-addon">Titulo de la pagina</label>
                            <input type="text" name="titulo" class="form-control" value="<?php echo isset($parametros['titulo'])?$parametros['titulo']:'' ?>" placeholder="Titulo de la pagina">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sx-12">
                        <div class="input-group form-group">
                            <label for="favicon" class="input-group-addon">Favicon</label>
                            <input type="file" name="favicon" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col col-sx-12">
                    <div class="input-group form-group">
                        <input type="submit" class="btn btn-success" value="Guardar">
                    </div>
                </div>
            </form>

            <?php if(isset($error)){ ?>
                <div class="alert alert-danger"><?php echo $error ?></div>
            <?php } ?>
        </div>
    </main>

</body>
</html>