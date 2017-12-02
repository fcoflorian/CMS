<!DOCTYPE html>
<html>
<head>
	<title>Galeria de fotos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="../../CSS/css/bootstrap.min.css">
</head>
<body>

	<!-- header -->
      <?php $this->load->view('vista/header') ?>
    <!-- end header -->
	
	<div class="container">
		<h1>Galeria de fotos</h1><hr>
		<form action="<?php echo isset($foto['id'])?site_url('Galeria_controller/index/'.$foto['id']):site_url('Galeria_controller/index'); ?>" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col col-md-6">
					<div class="input-group form-group">
						<label for="nombre" class="input-group-addon">Nombre</label>
						<input type="text" class="form-control" name="nombre" value="<?php echo isset($foto['nombre'])?$foto['nombre']:'';?>">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col col-md-6">
					<div class="input-group form-group">
						<label for="descripcion" class="input-group-addon">Descripción</label>
						<input type="text" class="form-control" name="descripcion" value="<?php echo isset($foto['descripcion'])?$foto['descripcion']:'';?>">
					</div>
				</div>
			</div>

			
			<div class="row">
				<div class="col col-md-6">
					<div class="input-group form-group">
						<label for="foto" class="input-group-addon">Foto</label>
						<input type="file" class="form-control" name="foto">	
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-primary" value="Guardar">
		</form>

	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>