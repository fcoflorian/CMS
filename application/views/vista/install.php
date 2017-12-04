<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<title>Instalador de la base de datos</title>
</head>
<body>
	<div class="container">
		<h2 class="mt-5 mb-5">Instalador de la base de datos</h2>

		<?php if(isset($error)){ ?>
			<div class="alert alert-danger">
				<?php echo $error;?>
			</div>
		<?php } ?>

		<form action="<?php echo site_url('Index_controller/config'); ?>" method="POST">
				<div class="form-group input-group">
					<label for="server" class="input-group-addon">Servidor</label>
					<input type="text" name="server" value="<?php echo isset($config['server'])?$config['server']:"";?>" placeholder="Introduzca el servidor" class="form-control"/>
				</div>

				<div class="form-group input-group">
					<label for="user" class="input-group-addon">Usuario</label>
					<input type="text" name="user" value="<?php echo isset($config['user'])?$config['user']:"";?>" placeholder="Introduzca el usuario" class="form-control"/>
				</div>

				<div class="form-group input-group">
					<label for="pass" class="input-group-addon">Contraseña</label>
					<input type="text" name="pass" value="<?php echo isset($config['pass'])?$config['pass']:"";?>" placeholder="Introduzca la contraseña" class="form-control"/>
				</div>

				<div class="form-group input-group">
					<label for="db" class="input-group-addon">Base de datos</label>
					<input type="text" name="db" value="<?php echo isset($config['db'])?$config['db']:"";?>" placeholder="Introduzca el nombre de la base de datos" class="form-control"/>
				</div>

				<div class="form-group input-group">
					<input type="submit" value="Instalar" class="btn btn-primary"/>
				</div>
		</form>
	</div>
</body>
</html>