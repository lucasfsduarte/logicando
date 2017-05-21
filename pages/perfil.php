<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logicando/system/system.php';

	// Verifica se o usuário está logado. Se não estiver, o acesso é negado e ele é redirecionado a pagina de login (inicial);

	AcessPrivate();

	$dataUser = GetUser();
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

	<title> Logicando · Perfil de <?php echo $dataUser['name']; ?> </title>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">

		<div class="mini-image-perfil"> <?php MiniImagemPerfil($dataUser); ?> </div>
		<a href=" <?php echo URL_PAINEL ?>"> <img src="../imagens/logicandologo3.png" title="Logo Logicando" class="logo"/> </a>

		<div class="dropdown" style="float:right;">
  			
  			<button class="dropbtn"> Menu </button>
			
			<div class="dropdown-content">
		    	
		    	<a href="<?php echo URL_PAINEL ?>">Voltar atrás</a>
		    	<a href="#">Medalhas</a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<section class="perfil-screen">

		<?php SetaImagemCapa($dataUser); ?>

		<div class="div-medalhas">
		
			<p class="textOne"> Suas medalhas</p>

			<center>

				<div class="place-medalha" id="#place-medalha-small">
					<div class="medalha-image" id="medalha-prata"></div>
					<p class="textMedalha"> Mestre da Lógica </p>
					<p class="textPontos"> 1600 pts </p>
				</div>

				
				<div class="place-medalha" id="#place-medalha-big">
					<div class="medalha-image" id="medalha-ouro"></div>
					<p class="textMedalha"> Lorde dos Ifs </p>
					<p class="textPontos"> 2600 pts </p>
				</div>

				<div class="place-medalha" id="#place-medalha-small">
					<div class="medalha-image" id="medalha-prata"></div>
					<p class="textMedalha"> Rei dos Loops </p>
					<p class="textPontos"> 1400 pts </p>
				</div>
			</center>

			<center>
				<a href="#"> <input type="submit" class="button" value="Ver todas as medalhas"> </a>
				<a href=" <?php echo URL_PERFIL_CONFIG ?> "> <input type="submit" class="button" value="Alterar meus dados pessoais"> </a>
			</center>
		
		</div>
	</section>

	<footer class="rodape">
		
		<p> 2016. <strong> Logicando. </strong> Direitos Reservados. </p> <br>
		
		<strong> <p> Design by Lucas Duarte, Vítor Luis, Bruno Victor. Responsive Design </p> </strong> <br>
		
		<p> TCC - Orientador: Professor Alisson Rodrigo dos Santos - CEFET-MG </p>

	</footer>
		


</body>
</html>
