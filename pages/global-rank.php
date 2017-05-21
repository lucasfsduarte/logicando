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

	<title> Logicando · Ranking Global! </title>

	<style>

		table {

		    border-collapse: collapse;
		    font-size: 1.6em;
		    width: 100%;
		    color: #444444;
		}

		td, th {
		    
		    text-align: center;
		    padding: 8px;
		}

		tr:nth-child(even) {

		    background-color: #dddddd;
		}
	</style>

</head>
<body id="topo">

	<!-- CABEÇALHO - Barra de Navegação do Site -->

	<header class="header">

		<div class="mini-image-perfil"> <?php MiniImagemPerfil($dataUser); ?> </div>
		<a href=" <?php echo URL_PAINEL ?>"> <img src="../imagens/logicandologo3.png" title="Logo Logicando" class="logo"/> </a>

		<div class="dropdown" style="float:right;">
  			
  			<button class="dropbtn"> Menu </button>
			
			<div class="dropdown-content">
		    	
		    	<a href="<?php echo URL_PAINEL ?>"> Menu Inicial </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<section>
		
			<p class="textOne"> Ranking Global </p>
			<p class="textTwo"> Veja sua pontuação e se compare com os melhores! </p>

			<center>
			
				<div class="container_geral"> 

					<div class="box-ranking">
						<div class="box-ranking-little" id="img_box_4"></div>

						<!-- Função que gera automaticamente a tabela do Ranking -->
						
						<?php GetRank($dataUser["user_id"]); ?>
						 
					</div>
				
				</div>
			</center>

			<center>
				<a href="painel.php">
					<input type="submit" name="send" value="Voltar" class="game-screen-button" style="background-color: #757ADE;">
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