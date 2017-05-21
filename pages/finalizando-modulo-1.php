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

	<title> Finalizando Módulo 1 · Logicando </title>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">


		<center>
			<div class="img-perf-estatisticas"> <?php MiniImagemPerfil($dataUser); ?> </div>
		</center>

	</header>

	<section class="perfil-screen">

		<!-- <center> <img style="width: 69px; height: 91.5px" src='../imagens/medalhas/trofeu.png'> </center> -->

		<div class="div-estatisticas">
		
			<p class="textOne" style="margin-top: 10px"> Módulo Iniciante · Estatísticas </p>

			<center>

				<div class="place-estatistica">
					<div class="grafico" style="height: 200px"></div>
					<p class="textMedalha"> Atividades Concluídas </p>
					<p class="textPontos" style="color: #757ADE"> 4 Atv. </p>
				</div>

				<div class="place-estatistica">
					<div class="grafico" <?php echo "style='height: ".$dataUser['total_pontos']."px;'" ?>></div>
					<p class="textMedalha"> Pontos Totais </p>
					<p class="textPontos" style="color: #757ADE"> <?php echo $dataUser['total_pontos']?> pontos </p>
				</div>

				
				<div class="place-estatistica">
					<div class="grafico" style="height: 50px;"></div>
					<p class="textMedalha"> Tempo em Jogo </p>
					<p class="textPontos" style="color: #757ADE"> <?php echo $dataUser['horas_uso']?> horas </p>
				</div>

				<div class="place-estatistica">
					<div class="grafico" style="height: 80px;" ></div>
					<p class="textMedalha"> Medalhas Conquistadas </p>
					<p class="textPontos" style="color: #757ADE"> <?php echo $dataUser['num_medalhas']?> medalhas </p>
				</div>
			</center>

		</div>

		<div class="div-medalhas">
		
			<p class="textOne"> Medalhas conquistadas </p>

			<center>

				<div class="place-medalha" id="#place-medalha-small">
					<div class="medalha-image" id="medalha-prata"></div>
					<p class="textMedalha"> Mestre da Lógica </p>
					<p class="textPontos" style="color: #757ADE"> 1600 pts </p>
				</div>

				
				<div class="place-medalha" id="#place-medalha-big">
					<div class="medalha-image" id="medalha-ouro"></div>
					<p class="textMedalha"> Lorde dos Ifs </p>
					<p class="textPontos" style="color: #757ADE"> 2600 pts </p>
				</div>

				<div class="place-medalha" id="#place-medalha-small">
					<div class="medalha-image" id="medalha-prata"></div>
					<p class="textMedalha"> Rei dos Loops </p>
					<p class="textPontos" style="color: #757ADE"> 1400 pts </p>
				</div>
			</center>
		
		</div>

		<center>
			<a href="painel.php">
				<input type="submit" name="send" value="Continuar" class="game-screen-button" style="background-color: #757ADE;">
			</a>
		</center>


	</section>

	<footer class="rodape">
		
		<p> 2016. <strong> Logicando. </strong> Direitos Reservados. </p> <br>
		
		<strong> <p> Design by Lucas Duarte, Vítor Luis, Bruno Victor. Responsive Design </p> </strong> <br>
		
		<p> TCC - Orientador: Professor Alisson Rodrigo dos Santos - CEFET-MG </p>

	</footer>
		


</body>
</html>
