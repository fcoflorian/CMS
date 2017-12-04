<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preguntas frecuentes</title>
</head>
<body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col col-sx-12">
                    <div class="input-group form-group">
                        <label for="pregunta" class="input-group-addon">Preguntas</label>
                        <textarea name="pregunta" class"form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-sx-12">
                    <div class="input-group form-group">
                        <label for="respuesta" class="input-group-addon">Respuesta</label>
                        <textarea name="respuesta" class"form-control"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <div class="col col-sx-12">
                    <div class="input-group form-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
            </div>
    </div>
    
</body>
</html>