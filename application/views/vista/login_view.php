<!doctype html>
<html lang="es">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>

  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
        <!-- Large modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

        <div class="modal fade bd-example-modal-lg" id="login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col col-md-12">
                                <div class="form-group input-group">
                                    <label for="cedula" class="input-group-addon">Cedula</label>
                                    <input type="text" name="cedula" class="form-control" placeholder="Cedula">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col col-md-12">
                                <div class="form-group input-group">
                                    <label for="email" class="input-group-addon">Password</label>
                                    <input type="password" name="pass" class="form-control" placeholder="password">
                                </div>
                            </div>
                        </div> -->
                    </form>
                </div>
                <div class="text-center"><hr>
                    <input type="submit" class="btn btn-primary" value="Entrar">
                    <!-- <button type="hidden" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="hidden" class="btn btn-primary">Save changes</button> -->
                    
                </div>
                <div class="text-center">
                    <a href="<?php site_url('Miembros_controller/registrarMiembro');?>">Register</a>
                </div>
            </div>
        </div>
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
    <script src="CSS/js/bootstrap.min.js"></script>
  </body>
</html>