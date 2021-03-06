<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo base_url('/imagenes/');?><?php echo isset($parametros['favicon'])?$parametros['favicon']:'';?>" type="image/x-icon">
	<title><?php echo isset($parametros['titulo'])?$parametros['titulo']:'Titulo de la pagina' ?></title>
</head>
<body>

	<!-- header -->
		<?php $data['nombre_equipo'] = $parametros['nombre_equipo']; ?>
      <?php $this->load->view('vista/header', $data) ?>
    <!-- end header -->
	<main>
		<div class="container">
			<h2>Subir foto</h2><hr>
			<form action="<?php echo isset($foto['id'])?site_url('Galeria_controller/guardarFoto/'.$foto['id']):site_url('Galeria_controller/guardarFoto'); ?>" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col col-md-6">
						<div class="input-group form-group">
							<label for="nombre" class="input-group-addon">Nombre</label>
							<input type="text" class="form-control" name="nombre" value="<?php echo isset($foto['nombre'])?$foto['nombre']:'';?>" placeholder="Nombre">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col col-md-6">
						<div class="input-group form-group">
							<label for="descripcion" class="input-group-addon">Descripción</label>
							<input type="text" class="form-control" name="descripcion" value="<?php echo isset($foto['descripcion'])?$foto['descripcion']:'';?>" placeholder="Descripcion">
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

			<?php if(isset($error)){ ?>
                <div class="alert alert-danger"><?php echo $error ?></div>
            <?php } ?>
		</div>
	</main>

</body>
</html>