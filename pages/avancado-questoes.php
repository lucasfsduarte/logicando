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

  	<link rel="shortcut icon" href="../imagens/icones/icon.ico" type="image/x-icon" />
	<link rel="icon" href="../imagens/icones/icon.ico" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="../css/appstyle.css" />

	<!-- API do Google - JQuery - Scrool -->

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

	<script type="text/javascript" src="../js/functions.js"></script>

	<style type="text/css">
		
		verde {

			color: #757ADE;
			font-weight: bold;
		}

		.img {

			margin-top: 10px;
		}

		.opcoes {

			color: #333;
			font-family: Raleway;
			font-size: 2em;
			margin-top: 30px;
			margin-bottom: 0px;
			text-align: center;
		}

		texto {

			color: #333;
			font-family: Raleway;
			font-size: 2em;
		}

	</style>

	<title> Treinamento da OBI - Logicando </title>

</head>

<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">

		<div class="mini-image-perfil"> <?php MiniImagemPerfil($dataUser); ?> </div>
		<a href=" <?php echo URL_PAINEL ?>"> <img src="../imagens/logicandologo3.png" title="Logo Logicando" class="logo"/> </a>
		
		<div class="dropdown" style="float:right;">
	
  			<button class="dropbtn"> Menu </button>
			
			<div class="dropdown-content">
		    	
		    	<a href="<?php echo URL_PAINEL ?>"> Menu inicial </a>
		    	<a href="<?php echo URL_SELECT_HARD ?>"> Menu: Módulo Avançado </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<section>
		
		<div class="container_geral">
			
			<p class="title-game-screen"> Módulo Avançado: Questões da OBI </p>
			

			<p class="textOne"> Questões da OBI </p>

			<p class="textTwo" style="text-align: justify"> <strong> Olá, tudo bem? </strong> Então, infelizmente chegamos ao último módulo existente na nossa plataforma até o presente momento. Mas anime-se! O material aqui disponibilizado foi retirado diretamente do site da <a target="_blank" href="http://olimpiada.ic.unicamp.br/" style="color: #757ADE"><b>OBI</b></a> (Olimpíada Brasileira de Informática), e contém uma série de questões selecionadas de forma a complementar todo o aprendizado que você obteve desde o início de sua jornada. Aproveite, pense e tente acertar o máximo de perguntas possíveis. Se você errar, não tem problema, basta tentar novamente depois, <b>quantas vezes você quiser!</b> Boa sorte! </p>
			

			<br><br><br>

			<?php UpdateSumValue($dataUser['user_id'], "num_medalhas", "3"); ?>
			<?php UpdateSumValue($dataUser['user_id'], "total_pontos", ValidateOBI($dataUser)); ?>

			<form action="" method="post">

			<p class="textTwo" style="text-align: justify"> <verde>Questão 1:</verde> Para comemorar o aniversário de Cláudio, ele e mais quatro amigos – Alberto, Beto, Dino e Eurico – foram almoçar juntos no restaurante da escola. As mesas são redondas e acomodam exatamente cinco pessoas. Cláudio e Dino sentam-se um ao lado do outro. Alberto e Beto não sentam-se um ao lado do outro. Os dois amigos sentados ao lado de Eurico são: </p>

			<texto>	

				<input type="radio" class="opcoes" name="q1" value="1"> Alberto e Beto <br>
	  			<input type="radio" class="opcoes" name="q1" value="2"> Cláudio e Dino <br>
	  			<input type="radio" class="opcoes" name="q1" value="3"> Dino e Beto <br>
	  			<input type="radio" class="opcoes" name="q1" value="4"> Cláudio e Alberto <br>
	  			<input type="radio" class="opcoes" name="q1" value="5"> Alberto e Dino <br>
	  			
	  		</texto>

	  		<br><br><br>

			<p class="textTwo" style="text-align: justify"> <verde>Questão 2:</verde> Uma equipe de meninas está participando de uma gincana preparada pelos professores da escola. Depois de muitas peripécias, elas finalmente encontraram o cofre escondido que contém a última tarefa a ser resolvida. Mas o cofre está protegido com um cadeado digital que é aberto somente se uma senha de quatro letras for digitada. Junto ao cofre elas encontraram também um pedaço de papel com as letras Xkzk. Inicialmente elas pensaram que essa era a senha, mas o cofre não abriu. No entanto, elas tinham certeza de que as quatro letras encontradas eram a chave para o enigma. Depois de pensar um pouco elas perceberam que os nomes das cinco meninas da equipe tinham exatamente quatro letras. Seria essa a ligação com as letras encontradas? Não demorou muito para elas abrirem o cofre, pois a senha era mesmo o nome de uma das meninas. Qual era a senha do cofre? </p>

			<texto>

				<input type="radio" class="opcoes" name="q2" value="1"> Anna <br>
	  			<input type="radio" class="opcoes" name="q2" value="2"> Lisa <br>
	  			<input type="radio" class="opcoes" name="q2" value="3"> Nina <br>
	  			<input type="radio" class="opcoes" name="q2" value="4"> Iris <br>
	  			<input type="radio" class="opcoes" name="q2" value="5"> Nara
	  
	  		</texto>

	  		<br><br><br>

			<p class="textTwo" style="text-align: justify"> <verde>Questão 3:</verde> Um robô é utilizado para fazer perfurações em uma chapa de madeira. O robô move-se em passos: a cada passo ele se muda de posição, para uma célula vizinha à célula corrente. A figura (a) abaixo indica as direções que o robô pode se mover a cada passo, associando cada direção a um número inteiro de 1 a 8. A figura (b) abaixo indica o trajeto do robô, da posição X para a posição Y, para fazer os furos mostrados. </p>

			<center> <img class="img" src="../imagens/obi/obi3"> </center>

			<texto>

				<input type="radio" class="opcoes" name="q3" value="1"> 3, 3, 5, 5, 8, 7, 6, 7, 7 <br>
	  			<input type="radio" class="opcoes" name="q3" value="2"> 3, 3, 2, 3, 4, 1, 1, 7, 7 <br>
	  			<input type="radio" class="opcoes" name="q3" value="3"> 7, 7, 1, 1, 5, 6, 7, 8, 1 <br>
	  			<input type="radio" class="opcoes" name="q3" value="4"> 3, 3, 5, 6, 7, 8, 9, 1, 2 <br>
	  			<input type="radio" class="opcoes" name="q3" value="5"> 7, 7, 1, 1, 8, 7, 6, 7, 7
	  
	  		</texto>

	  		<br><br><br>

			<p class="textTwo" style="text-align: justify"> <verde>Questão 4:</verde> Uma nova sala de aula foi inaugurada, para estudo e exercícios em grupo. A sala de aula tem mesas para seis estudantes. Quando as mesas são colocadas juntas, numa única fila de mesas, elas podem ser usadas pelo número de estudantes mostrado na figura abaixo. </p>

			<center> <img class="img" src="../imagens/obi/obi4"> </center>

			<texto>

				<input type="radio" class="opcoes" name="q4" value="1"> 15 <br>
	  			<input type="radio" class="opcoes" name="q4" value="2"> 16 <br>
	  			<input type="radio" class="opcoes" name="q4" value="3"> 18 <br>
	  			<input type="radio" class="opcoes" name="q4" value="4"> 20 <br>
	  			<input type="radio" class="opcoes" name="q4" value="5"> 24
	  
	  		</texto>

	  		<br><br><br>

	  		<p class="textTwo" style="text-align: justify"> <verde>Questão 5:</verde> Torrinha é um jogo de tabuleiro muito comum e muito simples. Cada jogador ganha um pião, colocado inicialmente na área marcada como Início. A cada rodada, cada jogador joga um dado e avança o número de casas correspondente ao valor do dado. O jogador cujo pião chegar primeiro na área marcada como Fim ganha o jogo. A figura abaixo mostra um tabuleiro de torrinha. A casa 20 do tabuleiro é uma armadilha: se o pião cair na casa 20 ele obrigatoriamente retrocede para a casa 5. As casas 4 e 11 são trampolins: se o pião cair na casa 4 ele obrigatoriamente avança para a casa 8, se o pião cair na casa 11 ele obrigatoriamente avança para a casa 18. </p>

			<center> <img class="img" src="../imagens/obi/obi5"> </center>

			<p class="textTwo" style="text-align: justify"> Cinco jogadores jogam. Em todas as jogadas, o jogador 1 só tira 1 no dado, o jogador 2 só tira 2 no dado, o jogador 3 só tira 3 no dado, o jogador 4 só tira 4 no dado, e o jogador 5 só tira 5 no dado. Qual jogador vence o jogo? </p>


			<texto>

				<input type="radio" class="opcoes" name="q5" value="1"> Jogador 1 <br>
	  			<input type="radio" class="opcoes" name="q5" value="2"> Jogador 2 <br>
	  			<input type="radio" class="opcoes" name="q5" value="3"> Jogador 3 <br>
	  			<input type="radio" class="opcoes" name="q5" value="4"> Jogador 4 <br>
	  			<input type="radio" class="opcoes" name="q5" value="5"> Jogador 5
	  
	  		</texto>

	  		<br><br><br>

			<p class="textTwo" style="text-align: justify"> <verde>Questão 6:</verde> Em um Quadrado Mágico, a soma de qualquer coluna, linha ou diagonal tem sempre o mesmo valor. A figura abaixo mostra um Quadrado Mágico parcialmente preenchido. Qual é o valor de x? </p>

			<center> <img class="img" src="../imagens/obi/obi6"> </center>

			<texto>

				<input type="radio" class="opcoes" name="q6" value="1"> 1 <br>
	  			<input type="radio" class="opcoes" name="q6" value="2"> 2 <br>
	  			<input type="radio" class="opcoes" name="q6" value="3"> 3 <br>
	  			<input type="radio" class="opcoes" name="q6" value="4"> 4 <br>
	  			<input type="radio" class="opcoes" name="q6" value="5"> 5
	  
	  		</texto>

	  		<br><br><br>

			<p class="textTwo" style="text-align: justify"> <verde>Questão 7:</verde> Oito alunos – Beto, Dulce, Guto, Júlia, Kelly, Neto, Silvia e Vivian decidiram tentar quebrar o recorde da tradicional prova de revezamento e resistência de natação que acontece todos os anos na escola. Nessa prova, cada um dos oito competidores da equipe deve nadar mil metros, em estilo livre, na forma de revezamento: cada nadador cai na piscina para nadar apenas uma vez, um de cada vez. O objetivo é que todos nadem no menor tempo possível. Depois de muita discussão, os competidores decidiram que a ordem em que cairão na piscina deve obedecer às seguintes condições: <br>
			* Silvia não nada por último. <br>
			* Vivian nada após Júlia e Neto nadarem. <br>
			* O primeiro a nadar é ou Beto ou Dulce. <br>
			* Guto nada antes de Júlia, com exatamente uma pessoa nadando entre eles. <br>
			* Kelly nada antes de Neto, com exatamente duas pessoas nadando entre eles. <br>
			Qual das seguintes alternativas é uma possível lista completa e correta dos nadadores do primeiro para o último? </p>

			<texto>

				<input type="radio" class="opcoes" name="q7" value="1"> Dulce, Kelly, Silvia, Guto, Neto, Beto, Júlia, Vivian <br>
	  			<input type="radio" class="opcoes" name="q7" value="2"> Dulce, Silvia, Kelly, Guto, Neto, Júlia, Beto, Vivian <br>
	  			<input type="radio" class="opcoes" name="q7" value="3"> Beto, Kelly, Silvia, Guto, Neto, Júlia, Vivian, Dulce  <br>
	  			<input type="radio" class="opcoes" name="q7" value="4"> Beto, Guto, Kelly, Júlia, Dulce, Neto, Vivian, Silvia <br>
	  			<input type="radio" class="opcoes" name="q7" value="5"> Beto, Silvia, Dulce, Kelly, Vivian, Guto, Neto, Júlia 
	  
	  		</texto>

	  		<br><br><br>

			<p class="textTwo" style="text-align: justify"> <verde>Questão 8:</verde> César descobriu mensagens escritas com estranhos símbolos. Após analisar várias palavras, ele descobriu que a mensagem original pode ser descoberta substituindo cada símbolo por uma determinada letra, seguindo a correspondência abaixo: </p>

			<center> <img class="img" src="../imagens/obi/obi8-1"> </center>

			<p class="textTwo" style="text-align: justify"> César encontrou uma nova palavra: </p>

			<center> <img class="img" src="../imagens/obi/obi8-2"> </center>

			<p class="textTwo" style="text-align: justify"> Qual a palavra formada após a substituição? </p>

			<texto>

				<input type="radio" class="opcoes" name="q8" value="1"> DEDOS <br>
	  			<input type="radio" class="opcoes" name="q8" value="2"> BALEIA <br>
	  			<input type="radio" class="opcoes" name="q8" value="3"> COLADO <br>
	  			<input type="radio" class="opcoes" name="q8" value="4"> CABELO <br>
	  			<input type="radio" class="opcoes" name="q8" value="5"> BOLADA
	  
	  		</texto>

	  		<br><br><br>

			<p class="textTwo" style="text-align: justify"> <verde>Questão 9:</verde> Iu-ki-po é um jogo de cartas que está muito popular na Nlogônia. Será realizado um torneio com os 8 melhores jogadores da região. Eles serão colocados numa arena e inicialmente será dado para cada um deles uma ficha. Em toda partida desse jogo há um vencedor e um perdedor, não há empates. A qualquer momento dois jogadores podem decidir jogar uma partida. Quando isso acontece, o jogador que vence ganha 3 fichas além de ganhar todas as fichas do adversário, já o jogador que perde tem que sair da arena. O torneio continua até restar apenas um jogador na arena. Quando o torneio acaba, o jogador que ganhar terá quantas fichas? </p>

			<texto>

				<input type="radio" class="opcoes" name="q9" value="1"> 26 <br>
	  			<input type="radio" class="opcoes" name="q9" value="2"> 27 <br>
	  			<input type="radio" class="opcoes" name="q9" value="3"> 28 <br>
	  			<input type="radio" class="opcoes" name="q9" value="4"> 29 <br>
	  			<input type="radio" class="opcoes" name="q9" value="5"> 30
	  
	  		</texto>

	  		<br><br><br>

			<p class="textTwo" style="text-align: justify"> <verde>Questão 10:</verde> O reino de Tumbólia é dividido em sete províncias, mostradas no mapa abaixo. </p>

			<center> <img class="img" src="../imagens/obi/obi10"> </center>

			<p class="textTwo" style="text-align: justify"> Para colorir cada província com uma cor diferente, de modo que duas províncias vizinhas não tenham a mesma cor, qual o número mínimo de cores que são necessárias? </p>

			<texto>

				<input type="radio" class="opcoes" name="q10" value="1"> 2 <br>
	  			<input type="radio" class="opcoes" name="q10" value="2"> 3 <br>
	  			<input type="radio" class="opcoes" name="q10" value="3"> 4 <br>
	  			<input type="radio" class="opcoes" name="q10" value="4"> 6 <br>
	  			<input type="radio" class="opcoes" name="q10" value="5"> 7
	  
	  		</texto>

			<center>

				<a href="#"> <input type="submit" name="send" value="Calcular meu resultado" class="game-screen-button"> </a>

			</center>
			
			</form>

		</div>		

	</section>

	<footer class="rodape">
		
		<p> 2016. <strong> Logicando. </strong> Direitos Reservados. </p> <br>
		
		<strong> <p> Design by Lucas Duarte, Vítor Luis, Bruno Victor. Responsive Design </p> </strong> <br>
		
		<p> TCC - Orientador: Professor Alisson Rodrigo dos Santos - CEFET-MG </p>

	</footer>

</body>
</html>