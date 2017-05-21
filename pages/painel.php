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

	<title> Logicando · Bem vindo ao sistema Logicando! </title>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">

		<div class="mini-image-perfil"> <?php MiniImagemPerfil($dataUser); ?> </div>
		<a href=" <?php echo URL_PAINEL ?>"> <img src="../imagens/logicandologo3.png" title="Logo Logicando" class="logo"/> </a>

		<div class="dropdown" style="float:right;">
  			
  			<button class="dropbtn"> Menu </button>
			
			<div class="dropdown-content">
		    	
		    	<a href="<?php echo URL_PERFIL ?>"> Meu perfil </a>
		    	<a href="<?php echo URL_RANK ?>"> Rank </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<section>
		
			<p class="textOne"> <?php Cumprimento(); echo $dataUser['name']; ?>! </p>
			<p class="textTwo"> Escolha um nível de atividades e começe a aprender agora mesmo! </p>

			<center>
				<div class="big-box"> 
					<div class="litle-box" id="img_box_3"></div>
					<p class="box-title"> Nível Iniciante </p>
					<p class="box-text"> O módulo iniciante foi criado com o objetivo de ensinar os fundamentos básicos da lógica de programação. </p>

					<a href="<?php echo URL_SELECT_EASY ?>"> <input type="submit" value="Iniciar!" class="box-button"> </a>
				</div>

				<div class="big-box">
					<div class="litle-box" id="img_box_4"></div>
					<p class="box-title"> Nível Avançado </p>
					<p class="box-text"> O módulo avançado foi criado para que você possa aperfeiçoar os seus conhecimentos adquiridos no módulo anterior, o Iniciante.</p>

					<a href="<?php echo URL_SELECT_HARD ?>"> <input type="submit" value="Iniciar!" class="box-button"> </a>
				</div>

				<div class="medium-box">
					<p class="box-text"> <b>Dica do dia:</b> Você pode ver suas estatísticas e o seu rank na aba <b>Rank</b> do menu! </p>
				</div>
				
				

				<!-- <BR> <CENTER> <a href="<?php //echo URL_BASE.'pages/testedb.php' ?>"> ÁREA DE TESTES BANCO DE DADOS </a> </CENTER> -->
			</center>
	</section>

	<footer class="rodape">
		
		<p> 2016. <strong> Logicando. </strong> Direitos Reservados. </p> <br>
		
		<strong> <p> Design by Lucas Duarte, Vítor Luis, Bruno Victor. Responsive Design </p> </strong> <br>
		
		<p> TCC - Orientador: Professor Alisson Rodrigo dos Santos - CEFET-MG </p>

	</footer>
		


</body>
</html>
