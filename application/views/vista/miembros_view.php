<!doctype html>
<html lang="es">
  <head>
    <title>Miembros</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <?php foreach($miembros as $miembro){ ?>
                  <tr>
                    <td><?php echo 'Foto' ?></td>
                    <td><?php echo $miembro['nombre'] ?></td>
                    <td><?php echo $miembro['telefono'] ?></td>
                    <td><?php echo $miembro['correo'] ?></td>
                  </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
  </body>
</html>