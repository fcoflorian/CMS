<!doctype html>
<html lang="es">
  <head>
    <title>Contacto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    
    

  </head>

  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <!-- card -->
    <main>
        <div class="container">
        <div class="text-center">
            <h1 >¡Envíanos un mensaje!</h1>
            <p>Nos pondremos en contacto con usted en la brevedad de lo posible.</p>
        </div><hr>
            
            <form action="" method="post">
                <div class="row">
                    <div class="col col-sx-6">
                        <div class="input-group form-group">
                            <label for="nombre" class="input-group-addon">Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sx-6">
                        <div class="input-group form-group">
                            <label for="correo" class="input-group-addon">Correo</label>
                            <input type="email" name="correo" class="form-control" placeholder="Correo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sx-6">
                        <div class="input-group form-group">
                            <label for="asunto" class="input-group-addon">Asunto</label>
                            <input type="text" name="asunto" class="form-control" placeholder="Asunto">
                        </div>
                    </div>
                </div>
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
                        <input type="submit" name="nombre" value="Enviar" class="btn btn-info">
                    </div>
                </div>
            </form>
        </div>
    
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>