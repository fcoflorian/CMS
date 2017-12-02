<!DOCTYPE html>
<html>
<head>
	<title>Galeria de fotos</title>
</head>
<body>
	<form action="<?php echo isset($foto['id'])?site_url('Galeria_controller/index/'.$foto['id']):site_url('Galeria_controller/index'); ?>" method="POST" enctype="multipart/form-data">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?php echo isset($foto['nombre'])?$foto['nombre']:'';?>">

		<label for="descripcion">Descripción</label>
		<input type="text" name="descripcion" value="<?php echo isset($foto['descripcion'])?$foto['descripcion']:'';?>">

		<label for="foto">Foto</label>
		<input type="file" name="foto">

		<input type="submit" value="Guardar">
	</form>

	<?php foreach($fotos as $foto){ ?>
		<p><?php echo $foto['nombre'] ?></p>
		<a href="<?php echo site_url('Galeria_controller/index/'.$foto['id']); ?>" class="btn btn-warning">Editar</a>
		<a href="<?php echo site_url('Galeria_controller/borrarFoto/'.$foto['id']); ?>" class="btn btn-danger">Eliminar</a>
	<?php } ?>
</body>
</html>