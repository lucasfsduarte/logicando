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

	<title> Algoritmos - Logicando Games </title>

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
		    	<a href="<?php echo URL_GS_3 ?>"> Jogo anterior </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<!-- Game Screen - Sessão onde o jogo irá ficar -->
	<section>
		
		<div class="container_geral">
			
			<p class="title-game-screen"> Jogando: A Pizzaria de Luigi </p>
			<p class="textTwo" style="text-align: justify"> Ajude Luigi a entregar todas as pizzas a tempo! <b>Atenção:</b> Os clientes
				podem ir até a pizzaria ou pedir a pizza por telefone! Boa sorte!
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

				<p class="textOne"> O que aprendemos até agora? </p>

				<p class="textTwo" style="text-align: justify"> <strong> Olá, tudo bem? </strong> Muitos parabéns por ter chegado até aqui! No jogo da Pizzaria, verificamos uma situação em que usamos as três coisas que aprendemos nos jogos anteriores! Será que você foi capaz de identificar todos eles? Nos quatro jogos, vimos os conceitos de variável, estruturas condicionais e estruturas de repetição, assim como as aplicações deles em situações imaginárias. Com esses conceitos, é possível entender a base de quase todas as linguagens de programação de alto nível existentes! Apenas para a sua curiosidade, uma linguagem de programação de alto nível é aquela que não trabalha com a linguagem de máquina, ou seja, que não conversa diretamente com o computador. <br><br> Mas um momento... o que estamos fazendo desde o início em cada um dos jogos? Já parou para pensar nisso? Meus amigos, o que estamos fazendo aqui é a base para resolver QUALQUER problema em programação! Desde o começo, estamos trabalhando com formas de resolver um problema que irá se repetir diversas vezes. No jogo das variáveis, você teve que montar uma sequência de passos para resolver um problema, que era ajudar Ponny a pegar as frutas que você escolheu no início. No jogo das condições, você teve que construir uma sequência exata de passos para fazer o jeca atravessar o rio com o lobo, o porco e a cenoura. No jogo das estruturas de repetição, você teve que fazer o trabalhador repetir uma sequência de passos. No jogo da pizzaria, você novamente teve que fazer uma sequência para entregar as pizzas. Você conseguiu perceber isso? Tudo que fizemos até agora dependeu de montar uma sequência de passos para resolver um problema. Em todos os jogos, trabalhamos a ideia de algoritmos. Nome feio, não é? Mas a ideia é bem simples. Um algoritmo nada mais é do que uma sequência de passos que pode ser utilizada para resolver um problema. Definindo de um jeito mais detalhado, podemos dizer que:

				</p>
				
				<div class="boxTextDefinition">
					<p> Um <b>algoritmo</b> é uma sequência de instruções que possibilitam que problemas parecidos sejam resolvidos independente da forma em que aparecem. </p>
				</div>

				<p class="textTwo" style="text-align: justify"> Vamos voltar ao jogo das condições. Imagine agora que em vez de termos o lobo, o porco e a cenoura, tivéssemos um gavião, uma cobra e um rato. Será que você iria conseguir resolver da mesma forma? É claro que sim! A única coisa que fizemos foi mudar os personagens, mas a forma de resolver o problema continua a mesma! Dessa forma, podemos dizer que você criou um algoritmo para atravessar o rio envolvendo três elementos! Viu como é simples? 
				Novamente, muitos parabéns por ter chegado até aqui! Você acabou de concluir o módulo iniciante, esperamos que você tenha aprendido! Ah, prepare-se, novos desafios te aguardam no avançado, mas eu sei que você consegue. 
				Até lá, descanse um pouco. Você merece!
				</p>



				
				<center>

					<?php UpdateSumValue($dataUser['user_id'], "num_medalhas", "3"); ?>
					<?php CloseSimpleModule("A pizzaria de Luigi", 0); ?>

					<form action="" method="post" style="display: inline-block;">
						<input type="submit" name="send" value="Finalizar módulo" class="game-screen-button">
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