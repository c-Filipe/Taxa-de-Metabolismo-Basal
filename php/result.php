<?php
	require_once 'classe_calculadora.php';
	$tmb = new calculadora;
	$tmb->calcular();
			
?>

<!DOCTYPE html>
<html>
<head>
	<title>TMB</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>


	<div class="container body">
		<div class="container header">
			<header>

				<div class="row d-flex justify-content-center">
					<h2>Resultado do TMB</h2>           
				</div>
			</header>     
		</div> 
		
		<div class="container section">            
            <section>
				
					<?php
						echo "<div class='row d-flex justify-content-center'>";
							echo "<span class='sub tmb'> TMB:</span>". "<span class='result'>" .number_format($tmb->getTmb(),2, '.', '')."</span>";
						echo "</div>";
						echo "</br>";
						echo "<div class='row d-flex justify-content-center'>";	
							echo " <span class='sub'> TMB total:</span>". "<span class='result'>". number_format($tmb->getTmbTotal(),2, '.', '')."</span>";
						echo "</div>";	

					?>
				</br>	
				
			</section>
			<p>
				Para <span class='sub'>PERDER </span> peso diminua do seu TMB Total de <span class='result'> 500</span> a <span class='result'> 600 </span> calorias diariamente. 
			</p>
			<p>
				Para <span class='sub'> AUMENTAR </span> seu peso some ao  seu TMB Total de <span class='result'> 500</span> a <span class='result'> 600 </span> calorias diariamente. 
			</p>
			<div class='row d-flex justify-content-center'>

				<a href="../index.html"><input class="btn btn-info btn-lg btn-block type="submit" value="Novo cálculo" /> </a>

				</div>	
			 
		</div>
	</br>
			
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
		<a href="https://www.linkedin.com/in/carlos-filipe-1232571a0/" target="_blank">	<img src="../imagens/linkedin.png" class="img-fluid">	LinkedIn &nbsp; </a>
		 <a href="https://www.instagram.com/filipe.andrade_/" target="_blank"> <img src="../imagens/instagram.png" class="img-fluid">	Instagram  </a>
		</div> 				
	</footer>
</body>

</html>