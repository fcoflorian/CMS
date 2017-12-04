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
            <h2 class="mt-5 mb-5">Crear pregunta frecuente</h2>

            <form action="<?php echo isset($faq['id'])?site_url('Faq_controller/guardarFaq/'.$faq['id']):site_url('Faq_controller/guardarFaq'); ?>" method="post">
                <div class="row">
                    <div class="col col-sx-12">
                        <div class="input-group form-group">
                            <label for="pregunta" class="input-group-addon">Pregunta</label>
                            <textarea name="pregunta" class="form-control" placeholder="Pregunta"><?php echo isset($faq['pregunta'])?$faq['pregunta']:'' ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sx-12">
                        <div class="input-group form-group">
                            <label for="respuesta" class="input-group-addon">Respuesta</label>
                            <textarea name="respuesta" class="form-control"placeholder="Respuesta"><?php echo isset($faq['respuesta'])?$faq['respuesta']:'' ?></textarea>
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