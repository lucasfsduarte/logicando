<?php 

	require_once 'system/system.php';

	AcessPublic();
?>

<!DOCTYPE html>

<html lang="pt">

<head>

  	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  	<!-- Ícone da página e Chamada do CSS -->

  	<link rel="shortcut icon" href="imagens/icones/icon.ico" type="image/x-icon" />
	<link rel="icon" href="imagens/icones/icon.ico" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" href="css/logicando.css" />

	<link href="css/css-social-buttons/social-buttons.css" rel="stylesheet">

	<!-- API do Google - JQuery - Scrool -->

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

	<script type="text/javascript" src="js/functions.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

	<script>

		$(function() {
	    	$(window).on("scroll", function() {
		        
		        if($(window).scrollTop() > 500) $(".header").addClass("header-colored");
		        else $(".header").removeClass("header-colored");
	    	});
		});

	</script>

	<title> Logicando · Programar nunca foi tão divertido! </title>

</head>
<body id="topo">

	<!-- Section Header: Logo and buttons -->

	<header>

		<div class="header">

			<a href=" <?php echo URL_BASE ?> "> <img src="imagens/logicandologo.png" title="Logo Logicando" class="logo"/> </a>

			<ul class="menu">
				<a href=" <?php echo URL_LOGIN ?> "> <li> <button class="menu-button"> Login </button> </li> </a>
				<a href=" <?php echo URL_CADASTRO ?> "> <li> <button class="menu-button"> Cadastrar </button> </li> </a>
			</ul>
		</div>	

	</header>

	<!-- Section Banner: Banner, Pitch and buttons -->

	<section>

		<div class="div-banner">
			
			<p class="text-one"> Aprenda lógica e noções de programação se divertindo! </p>

			<center>
				<a href=" <?php echo URL_CADASTRO ?> "> <input type="submit" class="banner-button" value="Comece Agora!"> </a>
				<a href="#como_funciona"  class="scroll"> <input type="submit" class="banner-button" value="Como funciona?"> </a>
			</center>
		</div>

	</section>

	<!-- Body section: Website building -->

	<div class="container_geral">

		

		<section>
			<center> <h1 id="como_funciona"> Como Funciona? </h1> </center>

			<center>

				<div class="box">

					<center> <div class="box_image" id="box1"> </div> </center>
					<p class="box_title"> <b> Escolha um módulo </b> </p>
					<center> <hr class="box_hr"> </hr> </center>
					<p class="box_text"> Selecione um dos níveis de dificuldade disponíveis na plataforma. Você pode escolher o que for melhor para você!  </p>

				</div>

				<div class="box">

					<center> <div class="box_image" id="box2"> </div> </center>
					<p class="box_title"> <b> Selecione atividades </b> </p>
					<center> <hr class="box_hr"> </hr> </center>
					<p class="box_text"> Escolha uma das atividades disponíveis em seu nível. Você pode iniciar atividades novas ou refazer outras!  </p>
				
				</div>

				<div class="box">

					<center> <div class="box_image" id="box3"> </div> </center>
					<p class="box_title"> <b> Divirta-se! </b> </p>
					<center> <hr class="box_hr"> </hr> </center>
					<p class="box_text"> Jogue, descubra, avance cada vez mais! Cada jogo contém um novo conceito divertido para você aprender! </p>
				
				</div>

			</center>
		</section>
	</div>

	<!-- Button section -->

	<section>

		<div class="div_faixa_button">

			<center>
				<a href=" <?php echo URL_CADASTRO ?> "> <input type="submit" class="button_faixa" value="Gostei! Quero começar!"> </a>
			</center>
		</div>

	</section>

	<!-- Container destined to depositions -->

	<div class="container_geral">
		
		<section>
			
			<center> <h1 id="depoimentos"> Veja o que falam sobre a gente! </h1> </center>

			<center>
				
				<div class="box_dep">
					<div class="circle_image" id="image_lucas"></div>
					<p> Achei bem interessante, didático e divertido! Acho que meu irmão vai adorar!  </p>
					<b> <p id="box-dep-tit"> Lucas de Aguiar, Estudante </p> </b>
				</div>
				
				<div class="box_dep">
					<div class="circle_image" id="image_claudia"></div>
					<p> Achei o projeto maravilhoso, pois estimula jovens a ingressar no fantástico mundo da tecnologia! </p>
					<b> <p id="box-dep-tit"> Claudia Duarte, Pedagoga </p> </b>
				</div>
				
				<div class="box_dep">
					<div class="circle_image" id="image_eric"></div>
					<p> A plataforma é o máximo. Nela eu posso fazer atividades, me divertir e ter meu progresso salvo! </p>
					<b> <p id="box-dep-tit"> Eric Perry, Estudante </p> </b>
				</div>

			</center>

		</section>
	</div>

	<!-- Container destined to numbers and statistics -->

	<section>
		
		<div class="div-num-box">
			
			<center> <h1 id="numeros-title"> Nossos usuários já passaram mais de </h1> </center> 

			<center> <div class="div-horas">5</div> <div class="div-horas">0</div> <div class="div-horas">h</div></center>

			<center> <h1 id="numeros-title"> Horas aprendendo! </h1> </center>

			<center> <a href=" <?php echo URL_CADASTRO ?> "> <input type="submit" class="button-numeros" value="Junte-se a eles!"> </a> </center>

		</div>

	</section>

	<!-- Footer: Contains address, fone and another informations -->

	<footer class="footer">

		<p>
			2016. <strong style="color: #1B8D58"> Logicando. </strong> Direitos Reservados. <br><br>
			Centro Federal de Educação Tecnológica de Minas Gerais - Unidade Contagem <br>
			Avenida Doutor Antônio Chagas Diniz, 655 - Bairro Cidade Industrial - Praça da Cemig <br>
			Contagem/MG - CEP: 32210-160 <br>
			Telefone: (31) 3368-4300 <br><br>
		</p>

		<a href="#" class="sb white no-border twitter">Twitter</a>
		<a href="#" class="sb white no-border facebook">Facebook</a>

		<br><br>

		<a href="#topo" class="scroll"> Ir para o topo </a> <BR>

		<a href="http://www.sanpedrovalley.org"> <img src="imagens/icones/sanpedrovalley.png" title="Comunidade empreendedora" width="110" height="40" style="margin-top: 20px; margin-bottom: 20px" /> </a>


		<!-- <div class="div-map"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15008.890589140645!2d-44.0448637!3d-19.8728183!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b9d4b445af211aa!2sCEFETMG%2C+Unidade+Contagem!5e0!3m2!1spt-BR!2sbr!4v1472345343110" width="100%" height="400" frameborder="0" style="border:0; pointer-events: none;" scrolling="no" allowfullscreen></iframe> </div> -->

	</footer>

</body>

</html>