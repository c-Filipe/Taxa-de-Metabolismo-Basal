<!DOCTYPE html>
<html>
<head>
	<title>TMB</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo_personalizado.css">
</head>
<body>

  <!-- Quebra linha -->
  <div class="clearfix"></div>
    <!-- Quebra linha -->
	<div class="clearfix"></div>
	
</div>

	<div class="row d-flex justify-content-center">
		<div class="col-2">
			Resultado
		</div>
		
		 <!-- Force as próximas colunas quebrarem, em uma nova linha -->
		<div class="w-100"></div>

 		<div class="col-2">
  			<?php
				require_once 'classe_calculadora.php';
				$tmb = new calculadora;
				$tmb->calcular();
			
			?>
		</div>
  	</div>


		
            
					
							




	
	
	
		


		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	</div>
	<footer>
		<hr />
		<div class="container d-flex justify-content-center">
			 Copyright &copy; 2020 - by Filipe Andrade	
		</div>
		<div class="container d-flex justify-content-center">
		 	<img src="imagens/face_logo.png" class="img-fluid">	Facebook |
		 	<img src="imagens/insta_logo.png" class="img-fluid"> Instagram
		</div> 				
	</footer>
</body>

</html>