<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear pregunta frecuente</title>
</head>
<body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
        <div class="container">
            <h2 class="mt-5 mb-5">Crear pregunta frecuente</h2>

            <form action="<?php echo isset($faq['id'])?site_url('Faq_controller/guardarFaq/'.$faq['id']):site_url('Faq_controller/guardarFaq'); ?>" method="post">
                <div class="row">
                    <div class="col col-sx-12">
                        <div class="input-group form-group">
                            <label for="pregunta" class="input-group-addon">Pregunta</label>
                            <textarea name="pregunta" class="form-control"><?php echo isset($faq['pregunta'])?$faq['pregunta']:'' ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sx-12">
                        <div class="input-group form-group">
                            <label for="respuesta" class="input-group-addon">Respuesta</label>
                            <textarea name="respuesta" class="form-control"><?php echo isset($faq['respuesta'])?$faq['respuesta']:'' ?></textarea>
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
    <?php $this->load->view('vista/footer') ?>
</body>
</html>