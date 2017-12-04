<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
</head>
<body>
    <!-- header -->
        <?php $this->load->view('vista/header') ?>
    <!-- end header -->

	<main>
	    <div class="container">
	    	<h2 class="mt-5 mb-5">Preguntas frecuentes</h2>
	        <?php foreach($faqs as $faq){ ?>
				<h5><?php echo $faq['pregunta'] ?></h5>
				<p><?php echo $faq['respuesta'] ?></p>
	        <?php } ?>
	    </div>
    </main>
    
</body>
</html>