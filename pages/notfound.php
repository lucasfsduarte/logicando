<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logicando/system/system.php';

	// Qualquer usuário pode ver essa página!
?>

<!DOCTYPE html>

<html lang="pt">

<head>

  	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  	<!-- Ícone da página e Chamada do CSS -->

  	<link rel="shortcut icon" href="../imagens/icones/icon.ico" type="image/x-icon" />
	<link rel="icon" href="../imagens/icones/icon.ico" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="../css/appstyle.css" />

	<!-- API do Google - JQuery - Scrool -->

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

	<script type="text/javascript" src="../js/functions.js"></script>

	<title> Página não encontrada · Logicando Pages ?> </title>

</head>
<body class="body-404">

	<!-- CABEÇALHO - Barra de Navegação do Site -->
	
	<center> <div class="box-image-404"> </div> </center>
	
	<h1 class="title-404"> 404 </h1>
	
	<p class="text-404-big"> A página, arquivo ou diretório que você requisitou não existe </p>
	<p class="text-404-big"> The page, archive or directory that you ordered does not exists </p>
	
	<br><br>
	
	<p class="text-404-small"> <a href=" <?php echo URL_BASE; ?>"> Clique aqui para retornar a página inicial </a> </p>

	<footer class="rodape">
		
		<p> 2016. <strong> Logicando. </strong> Direitos Reservados. </p> <br>
		
		<strong> <p> Design by Lucas Duarte, Vítor Luis, Bruno Victor. Responsive Design </p> </strong> <br>
		
		<p> TCC - Orientador: Professor Alisson Rodrigo dos Santos - CEFET-MG </p>

	</footer>
		


</body>
</html>