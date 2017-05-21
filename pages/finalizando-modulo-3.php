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

	<title> Fim do Curso · Logicando </title>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">


		<center>
			
		</center>

	</header>

	<section class="perfil-screen">

		<!-- <center> <img style="width: 69px; height: 91.5px" src='../imagens/medalhas/trofeu.png'> </center> -->

		<div class="container_geral">

			<p class="textOne" style="margin-top: 50px"> Parabéns, <?php echo $dataUser["name"]?>! Você concluiu o curso Logicando! </p>

			<center> <img style="margin: 20px 0px 20px 0px" width="100" src="../imagens/medalhas/win.png"> </center>

			<p class="textTwo" style="text-align: justify"> <strong> Parabéns! </strong> Se você conseguiu chegar até aqui, você é uma pessoa muito estudiosa e atenciosa. Esperamos que você tenha aprendido bastante com as atividades disponibilizadas nesse site, que mesmo sendo simples, foram preparadas com muito amor e carinho para você, nosso pequeno aprendiz. Muito obrigado! A ideia para criar essa plataforma surgiu da dificuldade que nós, os desenvolvedores tivemos quando ingressamos no curso de Informática do CEFET-MG Contagem (momento que mudou a nossa vida para sempre, hehehe). No início, a enorme quantidade de atividades e conceitos novos sendo introduzidos todos ao mesmo tempo na nossa cabeça nos deixou bastante confusos, e essa experiência serviu para mostrar o quão despreparados nós estávamos ao encarar essa nova jornada. Então, nós decidimos criar a Logicando como nosso Trabalho de Conclusão de Curso para ajudar a introduzir os conceitos de lógica e de programação, mesmo que de uma forma bem simples, para que um possível aprendizado de tais conceitos possam ser mais suaves e fácil de captar. O projeto se encontra em um estado bastante inicial, mas se for continuado poderá se tornar numa incrível ferramenta de aprendizado. Muito obrigado por participar de tudo isso desde o início! E lembre-se: você pode se tornar o que quiser, basta se esforçar! </p>

			<p class="textTwo" style="text-align: center"> <br><b> Atenciosamente, <br> Bruno V. Ventura, <br>Lucas Duarte,<br>Vítor Luis. <br><br>&hearts;<br>  Orientador: Prof. Alisson R. Santos </b> </p>

				
			

		</div>
		
		</div>

		<center>
			<a href="global-rank.php">
				<input type="submit" name="send" value="Ver Rank Global" class="game-screen-button" style="background-color: #757ADE;">
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
