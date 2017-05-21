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

	<title> Aprendendo Portugol - Logicando </title>

	<style type="text/css">
		
		.img {

			margin-top: 20px;
			margin-bottom: 20px;
			box-shadow: 0px 0px 5px #46C9B6;
			-webkit-transition: all 0.1s;
			-moz-transition: all 0.1s;
			-o-transition: all 0.1s;
			transition: all 0.1s;
		}

		.img:hover {
			box-shadow: 0px 0px 10px #46C9B6;
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
		    	
		    	<a href="<?php echo URL_PAINEL ?>"> Menu inicial </a>
		    	<a href="<?php echo URL_SELECT_HARD ?>"> Menu: Módulo Avançado </a>
			    <a href="?logout">Sair</a>
			    
			</div>
		</div>

	</header>

	<section>
		
		<div class="container_geral">
			
			<p class="title-game-screen"> Módulo Avançado: Aprendendo a programar </p>
			

			<p class="textOne"> Curso de Portugol </p>

			<p class="textTwo" style="text-align: justify"> <strong> Olá, tudo bem? </strong> Então, gostaria de parabenizá-lo por chegar até esse módulo. Você se recorda dos conceitos que aprendeu no nível Iniciante? Pois é, agora você irá utilizá-los na prática!
			“Como vou fazer isso?”, você me pergunta, e eu te respondo: utilizando uma pseudo-linguagem conhecida como Portugol. Mas espera aí, o que é uma pseudo-linguagem? Muito simples: ela é uma linguagem de programação simplificada para auxiliar os programadores iniciantes, que no caso é você, a programar, ou seja, digitar várias linhas de código para realizar a construção de um programa, o seu programa! Para começar tal tarefa, será necessário que você faça o download do software chamado VisualG, que permite a programação em Portugol. ele é gratuito, de fácil acesso e você pode baixá-lo clicando <a href="../files/visualg-setup.exe" style="color: #46C9B6"><b>aqui</b></a>. Baixou? então vamos começar o tutorial!

			</p>
			
			<div class="boxTextDefinition">
				<p> <b>Só para relembrar:</b> Um <b>algoritmo</b> é uma sequência de instruções que possibilitam que problemas parecidos sejam resolvidos independente da forma em que aparecem. </p>
			</div>

			<p class="title-game-screen"> Instalando o Visualg </p>

				<p class="textTwo" style="text-align: justify"> Após o download, clique no arquivo baixado e espere a seguinte tela deverá aparecer: </p>

				<img class="img" src="../imagens/visualg/port1">

				<p class="textTwo" style="text-align: justify"> Clique em ‘Avançar’ e continue fazendo isso até a instalação ser completa. Lembramos que é recomendado deixar as configurações padrões da instalação, ou seja, não modifique nada. Por fim, a seguinte tela deverá aparecer: </p>

				<img class="img" src="../imagens/visualg/port2">

				<p class="textTwo" style="text-align: justify"> Basta clicar em ‘Concluir’ que a instalação terá terminado. Agora, amiguinho, vamos entender como funciona o VisualG. </p>

			<p class="title-game-screen"> Como usar o Visualg? </p>

				<p class="textTwo" style="text-align: justify"> Muito bem, amiguinho, você completou o tutorial de instalação do VisualG, e agora você deve encontrar o ícone para iniciar o programa em sua área de trabalho. Caso você não o tenha, por favor volte ao tutorial ‘Como instalar o VisualG’ ou contate-nos! Bom, quando você abrir o programa, a seguinte tela deverá aparecer no seu computador: </p>

				<img class="img" src="../imagens/visualg/port3">

				<p class="textTwo" style="text-align: justify"> Temos bastante coisa pra aprender com essa tela. Agora, vou explicar para você as funcionalidades mais importantes desse software, então não se desespere e tenha um pouco de calma. Vamos lá! Está vendo aquela barra de navegação acima do programa? Então, abaixo estão listados os ícones mais importantes, que você irá utilizar com mais frequência. </p>

				<center> <img class="img" src="../imagens/visualg/port5"> <br>
				<img class="img" src="../imagens/visualg/port6"> <br>
				<img class="img" src="../imagens/visualg/port7"> <br>
				<img class="img" src="../imagens/visualg/port8"> </center>

				<p class="textTwo" style="text-align: justify"> O primeiro ícone serve para criar um novo programa em branco de extensão ‘.alg’, que é utilizado no VisualG. O segundo ícone serve para abrir um programa já existente em seu computador de extensão ‘.alg’. O terceiro serve para salvar um programa que você está codificando. Ele será salvo em um arquivo de extensão ‘.alg’ que poderá ser reaberto por meio da ferramenta mencionada anteriormente, e o quarto ícone serve para executar o seu programa. Você sempre irá utilizar essa ferramenta para iniciar o seu programa e realizar o que você programou nele. Agora, vamos observar as outras partes do nosso software: </p>

				<img class="img" src="../imagens/visualg/port9">

				<p class="textTwo" style="text-align: justify"> Essa é a parte na qual você irá codificar. Note que ela possui 4 (quatro) palavras em azul, são elas algoritmo, var, inicio e fimalgoritmo. Irei explicar cada uma delas, então vem comigo. Preste bastante atenção, pois essa parte do tutorial é importante. Na parte do algoritmo, você pode nomear o seu programa, a função dele, colocar o nome do autor do programa, que no caso seria o seu nome, e a data na qual ele foi criado. Segue uma imagem exemplificando: </p>

				<img class="img" src="../imagens/visualg/port10">

				<p class="textTwo" style="text-align: justify"> Na parte da var, você pode declarar suas variáveis. Ei, você se lembra que um dos joguinhos no modo iniciante ensina o que era uma variável? Então, vamos aplicar esse conhecimento! No joguinho ‘Brincando com as variáveis’, existiam 3 (três) tipos de frutas: abacaxi, banana e morango. No Portugol existem 4 (quatro) tipos de variáveis, que seriam as frutas do jogo, que são: inteiro, que guarda valores numéricos inteiros, como por exemplo -1, 2, 340; real, que guarda valores numéricos com casas decimais, como por exemplo 1.2, -345.7, 85.0; lógico, que guarda apenas dois tipos, verdadeiro ou falso; caracter, que guarda apenas uma letra, por exemplo ‘a’, ‘b’, ‘z’. Segue uma imagem exemplificando: </p>

				<img class="img" src="../imagens/visualg/port11">

				<p class="textTwo" style="text-align: justify"> A parte início é o começo do seu código, ou seja, todo seu programa ficará ali dentro, antes do fimalgoritmo, pois ele delimita o fim do seu programa. Tudo aquilo que você digitar após o fimalgoritmo será ignorado. Segue uma imagem exemplificando um programa que irá realizar a soma de duas variáveis e colocar o resultado em outra: </p>

				<img class="img" src="../imagens/visualg/port12">

				<p class="textTwo" style="text-align: justify"> A imagem abaixo funciona como um console que mostra em que local do código suas variáveis estão localizados (Escopo), o nome que você deu a elas (Nome), o seu tipo (Tipo) e o valor da mesma (Valor). Observe o programa que foi codificado logo acima e o que ele faz. A única tarefa dele é somar duas variáveis, que no caso têm o nome de ‘a’ e ‘b’ e seus valores são 2 e 3, respectivamente, e armazenar tal resultado em uma terceira, que é chamada de ‘c’ e terá seu valor igual a 5. </p>

				<img class="img" src="../imagens/visualg/port13">

				<p class="textTwo" style="text-align: justify"> A parte abaixo mostra a execução do seu programa e as mensagens que foram exibidas na telinha preta quando você executa seu programa. Nesse exemplo, não irá aparecer nada, pois não utilizamos nenhum comando para realizar tal coisa. Em programas seguintes, você verá melhor sobre o que estamos falando. </p>

				<img class="img" src="../imagens/visualg/port14">

			<p class="title-game-screen"> Aplicando o que você aprendeu </p>

				<p class="textTwo" style="text-align: justify"> Como você já viu no tutorial de como usar o VisualG, o conceito de variáveis que você aprendeu no joguinho ‘Brincando com as variáveis’ serviu, de fato, para alguma coisa! Então, vamos mostrar para você como funciona os outros conceitos aprendidos no módulo iniciantes, vamos lá! Gostaríamos de avisar que não abordaremos todo conteúdo da programação, mas sim vamos dar as direções para você seguir no caminho da programação, facilitando dessa forma o aprendizado dessa área que torna-se cada dia mais importante no mundo em que vivemos, então não desanime e se esforce! <br><br> O conceito de condição que você aprendeu ao jogar o ‘Brincando com as estruturas de condições’ é de extrema importância no ramo da programação! Você se lembra de quais eram as condições do jogo? Se o porquinho ficasse com a cenoura, você perdia. Se o lobinho ficasse com o porquinho, você perdia. Se você conseguisse atravessá-los para o outro lado do rio, você ganhava. Então vou mostrar para você um exemplo simples utilizando esse conceito. </p>		

				<img class="img" src="../imagens/visualg/port15">

				<p class="textTwo" style="text-align: justify"> Observe que pedimos para o usuário digitar o número um (1) ou o número dois (2). Se o número for igual à 1, então a mensagem ‘Num 1 foi digitado’ deve aparecer. Se o número for igual à 2, então a mensagem ‘Num 2 foi digitado’ deverá ser exibida. Essa é uma das maneiras de programar uma Estrutura de Condição no Portugol. Ficou interessado em descobrir novas maneiras? Dê uma pesquisada! <br> <br> O conceito de repetição também é muito importante na programação. O joguinho ‘Brincando com as estruturas de repetição’ ensinou para você que uma tarefa quando necessita ser repetida várias vezes, existe uma maneira na qual você consegue facilitar a sua vida! Olhe o exemplo abaixo. </p>

				<img class="img" src="../imagens/visualg/port16">

				<p class="textTwo" style="text-align: justify"> A única função deste código é contar até 10. Observe que, enquanto o contador for menor ou igual a dez (contador<=10), será impresso na tela o valor do ‘contador’ e nele será adicionado mais um. Imagine que sem a Estrutura de Condição você precisaria escrever uma linha para cada número que será mostrado na tela, ou seja, dez linhas para contar até 10. Você deve estar pensando que isso é pouca coisa e essa estrutura é inútil, mas pense em como seria cansativo contar até 1000 (mil). Você iria escrever mil linhas só para fazer isso? Enfim, essa é uma das maneiras de se implementar uma Estrutura de Condição no Portugol. Ficou interessado em descobrir novas maneiras? Dê uma pesquisada! Ah, e parabéns por finalizar mais um módulo de estudos na plataforma! Garanto que você será recompensado por seu sucesso algum dia! Boa sorte! </p>

			<center>

					<?php CloseAdvModule(); ?>

					<form action="" method="post">
						<input type="submit" name="send" value="Próxima atividade" class="game-screen-button">
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
</html>