<!doctype html>
<html lang="es">
  <head>
    <title>Ver eventos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>

  <body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

    <main>
        <div class="container">
        <h2 class="text-center">Evento <?php echo $evento['titulo'] ?></h2><hr>
          <div class="row d-flex justify-content-center">
            <div class="card mb-3" style="width: 40rem;">
              <img class="card-img-top img-fluid" src="http://localhost/cms/imagenes/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Klk con KlK</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <!-- <div class="row d-flex justify-content-center">
            <div class="card mb-3" style="width: 40rem;">
              <img class="card-img-top img-fluid" src="http://localhost/cms/imagenes/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div> -->
        </div>
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>
  </body>
</html>