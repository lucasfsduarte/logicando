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

	<title> Logicando · Dados pessoais de <?php echo $dataUser['name']; ?> </title>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">

		<div class="mini-image-perfil"> <?php MiniImagemPerfil($dataUser); ?> </div>
		<a href=" <?php echo URL_PAINEL ?>"> <img src="../imagens/logicandologo3.png" title="Logo Logicando" class="logo"/> </a>
		
		<div class="dropdown" style="float:right;">
  			
  			<button class="dropbtn"> Menu </button>
			
			<div class="dropdown-content">
		    	
		    	<a href="<?php echo URL_PERFIL ?>"> Perfil </a>
		    	<a href="<?php echo URL_PAINEL ?>">Início</a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<section class="perfil-screen">
		
		<center>
			<div class="form-box">

				<?php ImagemPerfilBloco($dataUser); ?>

				<?php ValidateFormChange($dataUser); ?>
				
				<form action="" method="post">

					<p class="label"> Mude o seu nome! </p>
					<input type="text" name="showname" class="input" placeholder="<?php echo $dataUser['name']; ?>" value="">
					<br>

					<p class="label"> Mude o seu e-mail! </p>
					<input type="text" name="showmail" class="input" placeholder="<?php echo $dataUser['mail']; ?>" value="">
					<br>

					<p class="label"> Atualize seu status! </p>
					<textarea rows="4" cols="50" name="showabout" class="input_text" placeholder="<?php echo $dataUser['about']; ?>" maxlength="255"></textarea>

					<br><br>

		    		<input type="submit" name="send" class="button_form" value="Atualizar meus dados">
		    		<input type="reset" name="reset" class="button_form" value="Cancelar">
				</form>

				
			</div>
		</center>
		
	</section>

	<footer class="rodape">
		
		<p> 2016. <strong> Logicando. </strong> Direitos Reservados. </p> <br>
		
		<strong> <p> Design by Lucas Duarte, Vítor Luis, Bruno Victor. Responsive Design </p> </strong> <br>
		
		<p> TCC - Orientador: Professor Alisson Rodrigo dos Santos - CEFET-MG </p>

	</footer>
		


</body>
</html>