<?php
	
	// FUNÇÕES PARA VALIDAÇÃO DO FORMULÁRIO DE RESPOSTAS OBI

	function ValidateOBI($dataUser) {

		if(!!GetPost('send')) {

			$message = null;
			$acertos = 0;

			$q1 = GetPost('q1');
			$q2 = GetPost('q2');
			$q3 = GetPost('q3');
			$q4 = GetPost('q4');
			$q5 = GetPost('q5');
			$q6 = GetPost('q6');
			$q7 = GetPost('q7');
			$q8 = GetPost('q8');
			$q9 = GetPost('q9');
			$q10 = GetPost('q10');

			if($q1 == null || $q2 == null || $q3 == null || $q4 == null || $q5 == null || $q6 == null || $q7 == null ||$q8 == null || $q9 == null || $q10 == null) {

				$message = "Você não respondeu todas as perguntas!";

				echo '<center> <div class="form_warning_red">' . $message . '</div> </center>';
			}

			else {

				if($q1 == 1)
					$acertos++;
				if($q2 == 5)
					$acertos++;
				if($q3 == 1)
					$acertos++;
				if($q4 == 3)
					$acertos++;
				if($q5 == 3)
					$acertos++;
				if($q6 == 2)
					$acertos++;
				if($q7 == 3)
					$acertos++;
				if($q8 == 4)
					$acertos++;
				if($q9 == 4)
					$acertos++;
				if($q10 == 2)
					$acertos++;

				$pontos = $acertos * 1000;

				if($dataUser['vlr_progresso2'] < 100) 
					UpdateSumValue($dataUser['user_id'], "vlr_progresso2", "50");	

				echo "

				<link rel='stylesheet' type='text/css' href='../css/modals.css' />

				<!-- The Modal -->
				<div id='myModal' class='modal'>
	  				<!-- Modal content -->
	  				<div class='modal-content'>
	    				<div class='modal-header'>
	      					<span class='close'>&times;</span>
	      					<center> <p style='padding-top: 32px'>Fim do Módulo Avançado</p> </center>
	    				</div>
	    				<div class='modal-body'>
	      					<center>
	      						<img class='trofeu' src='../imagens/medalhas/trofeu.png'>
	      						<p> Você acertou " . $acertos . " questões em 10, parabéns!</p>
	      						<p> Pontuação: " . $pontos . " pontos</p>
	      					</center>
	    				</div>
	    				<div class='modal-footer'>
	      					
	    				</div>
	  				</div>
				</div>

				<script>
					// Get the modal
					var modal = document.getElementById('myModal');

					// Get the button that opens the modal
					var btn = document.getElementById('myBtn');

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName('close')[0];

					// Opening the modal
					
					modal.style.display = 'block';
				
					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
					    modal.style.display = 'none';
					    window.location.href = '../pages/finalizando-modulo-2.php';
					}

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					    if (event.target == modal) {
					        modal.style.display = 'none';
					        window.location.href = '../pages/finalizando-modulo-2.php';
					    }
					}
				</script>";

				return $pontos;
			}
		}
	}

	// FUNÇÃO PARA PONTUAR MODULOS

	function CloseSimpleModule($description, $destiny) {

		if(!!GetPost('send')) {

			$dataUser = GetUser();

			$nome = $dataUser['name'];

			$points = rand(100, 1000);

			// Definindo a pontuação da página;

			UpdateSumValue($dataUser['user_id'], "total_pontos", $points);

			if($dataUser['vlr_progresso1'] < 100) 
				UpdateSumValue($dataUser['user_id'], "vlr_progresso1", "25");	
		
			// Definindo o redirecionamento da página;

			$href = "";
			$desafrase = "";

			if($destiny == 0) {

				$href = "window.location.href = '../finalizando-modulo-1';";
				$desafrase = "<p> O módulo 1: Iniciante foi finalizado! </p>";
			}
			else {

				$href = "window.location.href = '../jogo-".$destiny."/gamescreen-". $destiny.".php';";
				$desafrase = "<p> Pronto para o próximo desafio? </p>";
			}
				
			// Exibindo o HTML;

			echo "

				<link rel='stylesheet' type='text/css' href='../../css/modals.css' />

				<!-- The Modal -->
				<div id='myModal' class='modal'>
	  				<!-- Modal content -->
	  				<div class='modal-content'>
	    				<div class='modal-module-header'>
	      					<span class='close-module'>&times;</span>
	      					<center> <p style='padding-top: 32px'>Nível Iniciante: " . $description . "</p> </center>
	    				</div>
	    				<div class='modal-module-body'>
	      					<center>
	      						<img class='trofeu' src='../../imagens/medalhas/trofeu.png'>
	      						<p> Parabéns, " . $nome . "! Você conseguiu <b style='color: #588805'>" . $points . "</b> pontos! </p>
	      						" . $desafrase . "
	      					</center>
	    				</div>
	    				<div class='modal-module-footer'>
	      
	    				</div>
	  				</div>
				</div>

				<script>
					// Get the modal
					var modal = document.getElementById('myModal');

					// Get the button that opens the modal
					var btn = document.getElementById('myBtn');

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName('close-module')[0];

					// Opening the modal
					
					modal.style.display = 'block';
				
					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
					    modal.style.display = 'none';
					    " . $href . "
					}

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					    if (event.target == modal) {
					        modal.style.display = 'none';
					        " . $href . "
					    }
					}
				</script>";
		}
	}

	// FUNÇÃO PARA PONTUAR MÓDULOS AVANÇADO

	function CloseAdvModule() {

		if(!!GetPost('send')) {

			$dataUser = GetUser();

			$nome = $dataUser['name'];

			$points = rand(500, 1000);

			// Definindo a pontuação da página;

			UpdateSumValue($dataUser['user_id'], "total_pontos", $points);

			if($dataUser['vlr_progresso2'] < 100) 
				UpdateSumValue($dataUser['user_id'], "vlr_progresso2", "50");	
				
			// Exibindo o HTML;

			echo "

				<link rel='stylesheet' type='text/css' href='../css/modals.css' />

				<!-- The Modal -->
				<div id='myModal' class='modal'>
	  				<!-- Modal content -->
	  				<div class='modal-content'>
	    				<div class='modal-header'>
	      					<span class='close'>&times;</span>
	      					<center> <p style='padding-top: 32px'>Fim do Módulo Avançado</p> </center>
	    				</div>
	    				<div class='modal-body'>
	      					<center>
	      						<img class='trofeu' src='../imagens/medalhas/trofeu.png'>
	      						<p> Parabéns, " . $nome . "! Você conseguiu <b style='color: #DF0101'>" . $points . "</b> pontos! </p>
	      						<p> Pronto para o último desafio? </p>
	      					</center>
	    				</div>
	    				<div class='modal-footer'>
	      					
	    				</div>
	  				</div>
				</div>

				<script>
					// Get the modal
					var modal = document.getElementById('myModal');

					// Get the button that opens the modal
					var btn = document.getElementById('myBtn');

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName('close')[0];

					// Opening the modal
					
					modal.style.display = 'block';
				
					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
					    modal.style.display = 'none';
					    window.location.href = '../pages/avancado-questoes.php';
					}

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					    if (event.target == modal) {
					        modal.style.display = 'none';
					        window.location.href = '../pages/avancado-questoes.php';
					    }
					}
				</script>";
		}
	}



	// FUNÇÃO PARA TERMINAR MÓDULO 1

	function CloseFirstModule() {

		if(!!GetPost('send')) {

			$dataUser = GetUser();

			$nome = $dataUser['name'];

			echo "

				<link rel='stylesheet' type='text/css' href='../../css/modals.css' />

				<!-- The Modal -->
				<div id='myModal' class='modal'>
	  				<!-- Modal content -->
	  				<div class='modal-content'>
	    				<div class='modal-module-header'>
	      					<span class='close-module'>&times;</span>
	      					<center> <p style='padding-top: 32px'>Módulo 1: Iniciante</p> </center>
	    				</div>
	    				<div class='modal-module-body'>
	      					<center>
	      						<p> Parabéns, " . $nome . "! Você terminou com sucesso o primeiro módulo! </p>
	      						<p> Pontos: x</p>
	      						<p> Pontuação Total: x</p>
	      					</center>
	    				</div>
	    				<div class='modal-module-footer'>
	      					<center> <img src='../../imagens/logicandologo.png' width='150' height='50'> </center>
	    				</div>
	  				</div>
				</div>

				<script>
					// Get the modal
					var modal = document.getElementById('myModal');

					// Get the button that opens the modal
					var btn = document.getElementById('myBtn');

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName('close-module')[0];

					// Opening the modal
					
					modal.style.display = 'block';
				
					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
					    modal.style.display = 'none';
					    window.location.href = '../painel.php';
					}

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					    if (event.target == modal) {
					        modal.style.display = 'none';
					        window.location.href = '../painel.php';
					    }
					}
				</script>";
		}
	}
?>