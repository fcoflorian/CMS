<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	    	<h2 class="mt-5 mb-5">Preguntas frecuentes</h2>
	        <?php foreach($faqs as $faq){ ?>
				<h5><?php echo $faq['pregunta'] ?></h5>
				<p><?php echo $faq['respuesta'] ?></p>
				<?php if($this->session->userdata('admin') != null){ ?>
					<a href="<?php echo site_url('Faq_controller/guardarFaq/'.$faq['id']); ?>" class="btn btn-warning">Editar</a>
              		<a href="<?php echo site_url('Faq_controller/borrarFaq/'.$faq['id']); ?>" class="btn btn-danger">Eliminar</a>
              	<?php } ?>
	        <?php } ?>
	    </div>
    </main>


    
</body>
</html>