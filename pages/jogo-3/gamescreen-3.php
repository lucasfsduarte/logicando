<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logicando/system/system.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/logicando/system/modals.php';

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

  	<link rel="shortcut icon" href="../../imagens/icones/icon.ico" type="image/x-icon" />
	<link rel="icon" href="../../imagens/icones/icon.ico" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="../../css/appstyle.css" />

	<!-- API do Google - JQuery - Scrool -->

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

	<script type="text/javascript" src="../../js/functions.js"></script>

	<!-- LIBGDX SCRIPTS -->

	<script src="soundmanager2-setup.js"></script>
  	<script src="soundmanager2-jsmin.js"></script>

	<title> Loops - Logicando Games </title>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">

		<div class="mini-image-perfil"> <?php MiniImagemPerfilLvl2($dataUser); ?> </div>
		<a href=" <?php echo URL_PAINEL ?>"> <img src="../../imagens/logicandologo3.png" title="Logo Logicando" class="logo"/> </a>
		
		<div class="dropdown" style="float:right;">
	
  			<button class="dropbtn"> Menu </button>
			
			<div class="dropdown-content">
		    	
		    	<a href="<?php echo URL_SELECT_EASY ?>"> Seleção de Jogos </a>
		    	<a href="<?php echo URL_GS_2 ?>"> Jogo anterior </a>
		    	<a href="<?php echo URL_GS_4 ?>"> Próximo jogo </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<!-- Game Screen - Sessão onde o jogo irá ficar -->
	<section>
		
		<div class="container_geral">
			
			<p class="title-game-screen"> Jogando: Se divertindo com Loops! </p>

			<p class="textTwo" style="text-align: justify"> Ajude Toby a levar todas as caixas para o pátio da fábrica. Você pode <strong>programar</strong> Toby para repetir um movimento que você ache correto! <strong> Ah, atenção! </strong> Caso você demore muito o seu chefe poderá ficar bravo! Boa Sorte!
			</p>

			<center> <div class="game-screen">
				
				 <a class="superdev" href="javascript:%7B%20window.__gwt_bookmarklet_params%20%3D%20%7B'server_url'%3A'http%3A%2F%2Flocalhost%3A9876%2F'%7D%3B%20var%20s%20%3D%20document.createElement('script')%3B%20s.src%20%3D%20'http%3A%2F%2Flocalhost%3A9876%2Fdev_mode_on.js'%3B%20void(document.getElementsByTagName('head')%5B0%5D.appendChild(s))%3B%7D">&#8635;</a>
				 
              	 <div align="center" id="embed-html"></div>

              	 <script type="text/javascript" src="html/html.nocache.js"></script>

			</div> </center>
			
		</div>
	</section>

	<section>
		
			

			<div class="container_geral">

				<p class="textOne"> O que é um Loop? </p>

				<p class="textTwo" style="text-align: justify"> <strong> Você entendeu o joguinho? </strong> Esse joguinho foi feito para demonstrar como funcionam os <b>laços de repetição</b> na programação, conhecidos simplesmente como loops (pronuncia-se <i>“lúpis”).</i> Essa técnica é bastante utilizada quando a tarefa que o computador precisa utilizar é muito repetitiva. Imagine se o trabalhador tivesse que levar mais de um milhão de caixas! Você teria que levar uma por uma! Não seria cansativo? Na programação, é comum utilizarmos os loops quando uma <b>tarefa</b> irá se <b>repetir diversas vezes.</b> Também devemos usar uma condição (lembra do jogo do rio?) para dizer quando o programa deve parar de repetir o que está fazendo. Se o trabalhador se cansasse toda vez que levasse dez caixas, essa seria a condição de parada.

				</p>

				<div class="boxTextDefinition">
					<p> Os <b>loops</b> ou laços de repetição representam um conjunto de comandos que serão executados até que uma ou mais condições forem cumpridas. </p>
				</div>

				<p class="textTwo" style="text-align: justify"> No jogo do trabalhador, você pode observar como usar os loops simplificam (e muito) as nossas tarefas. Que tal você jogar novamente para observar melhor? Quando terminar, não desanime em continuar a sua jornada pelo mundo da programação!
 				
 				</p>
				
				<center>

					<?php CloseSimpleModule("Introdução aos loops", 4); ?>

					<form action="" method="post">
						<input type="submit" name="send" value="Próximo Joguinho" class="game-screen-button">
					</form>

				</center>
				
			</div>

	</section>

	<footer class="rodape">
		
		<p> 2016. <strong> Logicando. </strong> Direitos Reservados. </p> <br>
		
		<strong> <p> Design by Lucas Duarte, Vítor Luis, Bruno Victor. Responsive Design </p> </strong> <br>
		
		<p> TCC - Orientador: Professor Alisson Rodrigo dos Santos - CEFET-MG </p>

	</footer>

</body>

	<script>
	          function handleMouseDown(evt) {
	            evt.preventDefault();
	            evt.stopPropagation();
	            evt.target.style.cursor = 'default';
	          }

	          function handleMouseUp(evt) {
	            evt.preventDefault();
	            evt.stopPropagation();
	            evt.target.style.cursor = '';
	          }

	          document.getElementById('embed-html').addEventListener('mousedown', handleMouseDown, false);
	          document.getElementById('embed-html').addEventListener('mouseup', handleMouseUp, false);
	</script>
</html>