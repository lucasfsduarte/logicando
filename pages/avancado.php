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

	<title> Selecione a sua atividade · Nível Iniciante </title>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">

		<div class="mini-image-perfil"> <?php MiniImagemPerfil($dataUser); ?> </div>
		<a href=" <?php echo URL_PAINEL ?>"> <img src="../imagens/logicandologo3.png" title="Logo Logicando" class="logo"/> </a>
		
		<div class="dropdown" style="float:right;">
	
  			<button class="dropbtn"> Menu </button>
			
			<div class="dropdown-content">
		    	
		    	<a href="<?php echo URL_PAINEL ?>"> Voltar atrás </a>
		    	<a href="<?php echo URL_PERFIL ?>"> Meu perfil </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<section>
		
			<p class="textOne"> Nível: Avançado </p>

			<div class="container_geral">
				<p class="textTwo" style="text-align: justify"> <strong> Entenda o nível avançado: </strong> O módulo avançado foi criado para que você possa aperfeiçoar os seus conhecimentos adquiridos no módulo anterior, o Iniciante. Para que tal objetivo seja atingido, você se deparará com vários desafios um pouco mais complexos, que exigem conhecimento e domínio nos quatro temas que você aprendeu. Você não lembra quais são? Simples, são as <strong>variáveis,</strong> as <strong>estruturas de condição,</strong> os <strong>loops</strong> e, é claro, a boa e velha <strong>lógica.</strong> Boa sorte!
				</p>

				<!--
				<input type="text" class="ativ-bar" disabled value="Atividade 1">
				<input type="submit" value="send" class="ativ-button">
				<br><br><br><br>
				<input type="text" class="ativ-bar" disabled value="Atividade 2">
				<input type="submit" value="send" class="ativ-button"> -->
	
				<center>

				<a href="<?php echo URL_PORTUGOL ?>">
					<div class="box-select">
						<div class="litle-box-select select-bg-5"></div>
						<p class="box-text"> Tutorial: Programando em Portugol </p>
					</div>
				</a>

				<a href="<?php echo URL_OBI ?>">
					<div class="box-select">
						<div class="litle-box-select select-bg-6"></div>
						<p class="box-text"> Atividades: Questões da OBI </p>
					</div>
				</a>
				</center>

				<p class="textOne"> Progresso: <?php echo $dataUser['vlr_progresso2']; ?>% concluído </p>

				<div class="barra"> <span <?php echo "style='width: " . $dataUser['vlr_progresso2'] . "%'" ?> class="carga"></span> </div>

				<!--
				<div class="dropdown-image">
				  <img src="../imagens/example.jpg" alt="Trolltunga Norway" width="300" height="200">
				  <div class="dropdown-image-content">
				    <img src="../imagens/example.jpg" alt="Trolltunga Norway" width="600" height="400">
				    <div class="desc">Beautiful Trolltunga, Norway</div>
				  </div>
				</div>
				-->

			</div>

	</section>

	<footer class="rodape">
		
		<p> 2016. <strong> Logicando. </strong> Direitos Reservados. </p> <br>
		
		<strong> <p> Design by Lucas Duarte, Vítor Luis, Bruno Victor. Responsive Design </p> </strong> <br>
		
		<p> TCC - Orientador: Professor Alisson Rodrigo dos Santos - CEFET-MG </p>

	</footer>

</body>
</html>