<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logicando/system/system.php';

	// Verifica se o usuário está logado. Se estiver, ele é redirecionado ao seu perfil.

	AcessPublic();
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

	<link rel="stylesheet" type="text/css" href="../css/logcad.css" />

	<link href="../css/css-social-buttons/social-buttons.css" rel="stylesheet">

	<!-- API do Google - JQuery - Scrool -->

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

	<script type="text/javascript" src="../js/functions.js"></script>

	<title> Logicando · Fazer Login </title>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header>

		<div class="header">

			<a href=" <?php echo URL_BASE ?> "> <img src="../imagens/logicandologo.png" title="Logo Logicando" class="logo"/> </a>

			<ul class="menu">
				<a href=" <?php echo URL_BASE ?> "> <li> <button class="menu-button"> Página Inicial </button> </li> </a>
				<a href=" <?php echo URL_CADASTRO ?> "> <li> <button class="menu-button"> Cadastrar </button> </li> </a>
			</ul>
		</div>	

	</header>

	<section>

		

		<h1> Fazer Login </h1>

		<p class="text_form"> Insira os seus dados abaixo para poder acessar o seu perfil na plataforma! </p>
		
		<section class="form_box">

			<div class="form">

				<?php ValidateFormLogin(); ?>

				<form action="" method="post">

					<input type="text" name="username" class="form_input" placeholder="O seu email" value="<?php echo GetPost('username') ?>" required> <br>

					<input type="password" name="password" class="form_input" placeholder="A sua senha" required> <br>

					<input type="submit" name="send" value="Iniciar Sessão!" class="form_button_big">

				</form>

				<p class="link-cad"> Não possui uma conta? <a href=" <?php echo URL_CADASTRO ?> "> Cadastre-se! </a> </p>

			</div>

		</section>
	</section>

	<footer class="footer">

		<p>
			2016. <strong> Logicando. </strong> Direitos Reservados. <br><br>
			Centro Federal de Educação Tecnológica de Minas Gerais - Unidade Contagem <br>
			Avenida Doutor Antônio Chagas Diniz, 655 - Bairro Cidade Industrial - Praça da Cemig <br>
			Contagem/MG - CEP: 32210-160 <br>
			Telefone: (31) 3368-4300 <br><br>
		</p>

		<a href="#" class="sb white no-border twitter">Twitter</a>
		<a href="#" class="sb white no-border facebook">Facebook</a>

		<br><br>

		<strong> <a href="#topo" class="scroll" style="color: #fff"> Ir para o topo </a> </strong>

		<!-- <div class="div-map"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15008.890589140645!2d-44.0448637!3d-19.8728183!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b9d4b445af211aa!2sCEFETMG%2C+Unidade+Contagem!5e0!3m2!1spt-BR!2sbr!4v1472345343110" width="100%" height="400" frameborder="0" style="border:0; pointer-events: none;" scrolling="no" allowfullscreen></iframe> </div> -->

	</footer>

</body>
</html>