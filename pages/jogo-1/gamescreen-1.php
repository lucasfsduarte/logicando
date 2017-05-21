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

	<!-- SCRIPTS LIBGDX -->

	<script src="soundmanager2-setup.js"></script>
  	<script src="soundmanager2-jsmin.js"></script>

	<title> Variáveis - Logicando Games </title>

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
		    	<a href="<?php echo URL_GS_2 ?>"> Próximo Jogo </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<!-- Game Screen - Sessão onde o jogo irá ficar -->
	<section>
		
		<div class="container_geral">
			
			<p class="title-game-screen"> Jogando: Aprendendo com Variáveis! </p>
			<center> <div class="game-screen">
				
				<a class="superdev" href="javascript:%7B%20window.__gwt_bookmarklet_params%20%3D%20%7B'server_url'%3A'http%3A%2F%2Flocalhost%3A9876%2F'%7D%3B%20var%20s%20%3D%20document.createElement('script')%3B%20s.src%20%3D%20'http%3A%2F%2Flocalhost%3A9876%2Fdev_mode_on.js'%3B%20void(document.getElementsByTagName('head')%5B0%5D.appendChild(s))%3B%7D">&#8635;</a>
              	
              	<div align="center" id="embed-html"></div>
              	
              	<script type="text/javascript" src="html/html.nocache.js"></script>
		
			</div> </center>

		</div>
	</section>

	<section>

			<div class="container_geral">

				<p class="textOne"> O que são variáveis? </p>

				<p class="textTwo" style="text-align: justify"> <strong> Você entendeu o joguinho? </strong> Olá, e parabéns por completar o seu primeiro objetivo na plataforma! Bom, você deve ter passado maus bocados para ajudar a menininha a encher o cestinho de frutas, não é? Fique calmo, pois todo o seu esforço não foi em vão. O conceito que você acabou de aprender jogando é um dos mais fundamentais e importantes na programação: as <b>Variáveis!</b> Uma variável é um <b>espaço livre</b> na memória de seu computador que é escolhido para <b>armazenar</b> alguma <b>informação</b> importante. Não entendeu? Bom, pense no seu guarda-roupas. Ele provavelmente tem gavetas, não é? E cada uma dessas gavetas servem para guardar determinados tipos de roupas ou outras coisas, certo? As variáveis funcionam da mesma maneira! Os espaços livres na memória, como as suas gavetas, podem ser utilizados para armazenar vários tipos de dados, como inteiros (números) e caracteres (letras e outros sinais gráficos). Para que você consiga entender de vez, sugiro que jogue o joguinho novamente e tente entender o funcionamento da sua variável e como você guarda os dados dentro dela. Fácil, não é? Aqui vai o conceito de maneira um pouco mais formal, para que você possa entender melhor:

				</p>

				<div class="boxTextDefinition">
					<p> As <b>variáveis</b> são objetos (posições) localizados na memória do computador, capazes de reter (guardar) e representar um valor ou expressão de qualquer tipo. </p>
				</div>

				<p class="textTwo" style="text-align: justify"> Esperamos que você tenha entendido. Agora relaxe um pouco, porque ainda temos um longo caminho a trilhar! Até mais e continue se esforçando! </p>
				
				<center>

					<?php CloseSimpleModule("Indrodução às variáveis", 2); ?>

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