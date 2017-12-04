<!doctype html>
<html lang="es">
  <head>
    <title>Contacto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <!-- card -->
    <main>
        <div class="container">
            <div class="text-center">
                <h2>¡Envíanos un mensaje!</h2>
                <p>Nos pondremos en contacto con usted en la brevedad de lo posible.</p>
            </div><hr>
                
            <form action="" method="post">
                <div class="row">
                    <div class="col col-sx-6">
                        <div class="input-group form-group">
                            <label for="mensaje" class="input-group-addon">Mensaje</label>
                            <textarea name="mensaje" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                </div>
                
                 <div class="input-group form-group">
                    <div >
                        <input type="submit" value="Enviar" class="btn btn-info">
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