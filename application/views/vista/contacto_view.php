<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <!-- header -->
      <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
        <div class="container">
            <h1 class="text-center">Contacto</h1><hr>
            <form action="" method="post">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="input-group form-group">
                            <label for="name" class="input-group-addon">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="" placeholder="nombre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="input-group form-group">
                            <label for="email" class="input-group-addon">Email</label>
                            <input type="email" name="email" class="form-control" value="" placeholder="Correo electronico">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="input-group form-group">
                            <label for="asunto" class="input-group-addon">Asunto</label>
                            <input type="text" name="asuto" class="form-control" value="" placeholder="Asunto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="input-group form-group">
                            <label for="name" class="input-group-addon">Mensaje</label>
                            <textarea name="mensaje" class="form-control" value="" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="input-group form-group">
                            <input type="submit" class="btn btn-info" value="Enviar">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>