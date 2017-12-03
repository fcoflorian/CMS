<!doctype html>
<html lang="es">
  <head>
    <title>Miembros</title>
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
      <h2 class="text-center mt-5 mb-5">Lista de miembros</h2>
      <div class="container">
          <table class="table table-hover">
            <thead>
              <tr>
                
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach($miembros as $miembro){ ?>
                  <tr>
                    <td><?php echo 'Foto' ?></td>
                    <td><?php echo $miembro['nombre'] ?></td>
                    <td><?php echo $miembro['telefono'] ?></td>
                    <td><?php echo $miembro['correo'] ?></td>
                  </tr>
                  <tr>
                    <td><?php echo 'Foto' ?></td>
                    <td><?php echo $miembro['nombre'] ?></td>
                    <td><?php echo $miembro['telefono'] ?></td>
                    <td><?php echo $miembro['correo'] ?></td>
                  </tr>
                  <tr>
                    <td><?php echo 'Foto' ?></td>
                    <td><?php echo $miembro['nombre'] ?></td>
                    <td><?php echo $miembro['telefono'] ?></td>
                    <td><?php echo $miembro['correo'] ?></td>
                  </tr>
                  <tr>
                    <td><?php echo 'Foto' ?></td>
                    <td><?php echo $miembro['nombre'] ?></td>
                    <td><?php echo $miembro['telefono'] ?></td>
                    <td><?php echo $miembro['correo'] ?></td>
                  </tr>
                  
                <?php } ?>
              </tr>
            </tbody>
          </table>
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