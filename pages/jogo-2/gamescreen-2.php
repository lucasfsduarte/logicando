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

	<title> Estruturas Condicionais - Logicando Games </title>

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
		    	<a href="<?php echo URL_GS_1 ?>"> Jogo anterior </a>
		    	<a href="<?php echo URL_GS_3 ?>"> Próximo jogo </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<!-- Game Screen - Sessão onde o jogo irá ficar -->
	<section>
		
		<div class="container_geral">
			
			<p class="title-game-screen"> Jogando: Brincando com Estruturas de Condição! </p>

			<p class="textTwo" style="text-align: justify"> Ajude o pescador a levar os seus bichinhos para o outro lado do rio em segurança! <strong> Atenção! </strong> Você não pode deixar o <strong>Lobo sozinho com o Porquinho</strong> e nem o <strong>Porquinho sozinho com a Cenoura</strong>, pois eles podem ser comidos! Boa sorte!
			</p>

			<center> <div class="game-screen">
				
				<a href="javascript:%7B%20window.__gwt_bookmarklet_params%20%3D%20%7B'server_url'%3A'http%3A%2F%2Flocalhost%3A9876%2F'%7D%3B%20var%20s%20%3D%20document.createElement('script')%3B%20s.src%20%3D%20'http%3A%2F%2Flocalhost%3A9876%2Fdev_mode_on.js'%3B%20void(document.getElementsByTagName('head')%5B0%5D.appendChild(s))%3B%7D">&#8635;</a>

              	<div align="center" id="embed-html"></div>
                <script type="text/javascript" src="html/html.nocache.js"></script>

			</div> </center>

		</div>
	</section>

	<section>
		
			

			<div class="container_geral">

				<p class="textOne"> O que é uma Estrutura de Condição? </p>

				<p class="textTwo" style="text-align: justify"> <strong> Você entendeu o joguinho? </strong> Olha, se você conseguiu chegar até aqui, nós te damos parabéns pelo seu esforço! Esse jogo foi um pouco complicado. Ele foi feito para demonstrar um pouco a respeito das <b>condições.</b> Uma condição é alguma coisa que deve acontecer para que então uma outra seja feita. Por exemplo, a condição para passar de ano na escola é ter um resultado final maior do que 60 em todas as matérias. Uma palavra mágica no mundo das condições é <b>se</b>. <b>Se</b> minha mãe chegar em casa e achar a pia limpa, ela vai me deixar jogar videogame. <b>Se</b> eu estudar muito, vou tirar notas boas. <b>Se</b> eu tentar dar um salto mortal sem treinar, vou quebrar algumas partes do meu corpo! Na programação, as aplicações das condições são ilimitadas. Um programa irá operar muito bem se muitas condições para que ele seja operado sejam especificadas.  Para entender melhor, sugerimos fortemente que você jogue novamente e tente entender onde as condições estão presentes no jogo. É bom anotar todas, assim vai ser mais fácil bolar um jeito de ganhar sem tentar muitas vezes. 

				</p>

				<div class="boxTextDefinition">
					<p> As <b>condições</b>, estruturas de controle em um código, são usadas quando se deseja especificar um evento no código que apenas irá ocorrer como consequência de outro especificado. </p>
				</div>

				<p class="textTwo" style="text-align: justify"> Esperamos que você tenha entendido. Descanse um pouco a sua mente, porque ainda temos mais coisa pela frente! Até mais, continue trabalhando para obter o sucesso! </p>
				
				<center>

					<?php CloseSimpleModule("Introdução às variáveis", 3); ?>

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