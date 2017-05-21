<?php
	
	/*======================================================================================*/
		
		/*CONTROLE DE SESSÃO */

		// VERIFICA SE O USUÁRIO ESTÁ LOGADO

		function IsLogged() {

			if(!isset($_SESSION['userLog']) || empty($_SESSION['userLog']))
				return false;
			else {

				if(StayLogged())
					return true;
				else
					return false;
			}
		}

		// SETA OU RECUPERA O LOG DO USUÁRIO

		function UserLog($value = null) {

			if($value === null)
				return $_SESSION['userLog'];

			else
				$_SESSION['userLog'] = $value;
		}

		// CRIA A SESSÃO DO USUÁRIO

		function CreateSession($mail, $password) {

			$key = GetKey($mail, $password);
			
			UserLog($key);

			AcessPublic();
		}

		// DESTRÓI A SESSÃO DO USUÁRIO

		function DestroySession() {

			unset($_SESSION['userLog']);

			AcessPrivateLogout();
		}

		// EFETUA O LOGOUT DO USUÁRIO

		function DoLogout() {

			if(isset($_GET['logout']))
				DestroySession();
		}

	/*=======================================================================================*/
		
		/* PROTEÇÃO DE DADOS */

		// CONTROLE DE ACESSO PRIVADO

		function AcessPrivate() {
			if(!IsLogged())
				Redirect(URL_BASE);
		}

		// CONTROLDE DE ACESSO PUBLICO

		function AcessPublic() {
			if(IsLogged())
				Redirect(URL_PAINEL);
		}
		
		// CONTROLE DE ACESSO PRIVADO (QUANDO O USUÁRIO FAZ LOGOFF)
		
		function AcessPrivateLogout() {
			if(!IsLogged())
				Redirect(URL_LOGIN);
		}

	/*========================================================================================*/

	// FUNÇÃO LIMPA STRING

	function ClearString($str) {

		return mysql_real_escape_string(strip_tags(trim($str)));
	}

	// FUNÇÃO REDIRECIONA

	function Redirect($url) {

		header("Location: ".$url);
		die();
	}

	// FUNÇÃO RECUPERAR $_POST

	function GetPost($key = null) {

		if($key === null) return $_POST;

		else return (isset($_POST[$key])) ? ClearString($_POST[$key]) : false;
	}

	// FUNÇÃO GERAR KEY DO USUÁRIO

	function KeyGenerator() {

		return sha1(rand().time());
	}

	// FUNÇÃO CRIPTOGRAFAR SENHAS

	function CriptPass($password) {

		return sha1($password);
	}

	/*========================================================================================*/

	// FUNÇÃO QUE SELECIONA A CAPA DO PERFIL DO USUÁRIO

	function SetaImagemCapa($userData) {

		$codeIdCapa = '';
		$codeIdPerf = '';

		if($userData['sexo'] === 'M' || $userData['sexo'] === 'm') {

			$codeIdCapa = 'id="capa-image-boy"';
			$codeIdPerf = 'id="perf-image-boy"';
		}
			
		else {
			$codeIdCapa = 'id="capa-image-girl"';
			$codeIdPerf = 'id="perf-image-girl"';
		}

		echo '<div class="capa-perfil" ' . $codeIdCapa . '> <div class="image" ' . $codeIdPerf . '> </div> </div>';
	}

	// FUNÇÃO QUE IMPRIME A MINI IMAGEM DE PERFIL DO USUÁRIO

	function MiniImagemPerfil($userData) {

		$codeIdPerf = '';

		if($userData['sexo'] === 'M' || $userData['sexo'] === 'm')
			$codeIdPerf = '../imagens/perfil/img-boy-1.png';
			
		else
			$codeIdPerf = '../imagens/perfil/img-girl-1.png';

		echo '<img src="' . $codeIdPerf . '" class="image-perfil">';
	}

	function MiniImagemPerfilLvl2($userData) {

		$codeIdPerf = '';

		if($userData['sexo'] === 'M' || $userData['sexo'] === 'm')
			$codeIdPerf = '../../imagens/perfil/img-boy-1.png';
			
		else
			$codeIdPerf = '../../imagens/perfil/img-girl-1.png';

		echo '<img src="' . $codeIdPerf . '" class="image-perfil">';
	}

	// FUNÇÃO PARA IMPRIMIR A IMAGEM DE PERFIL SIMPLES 

	function ImagemPerfilBloco($userData) {

		$codeIdPerf = '';

		if($userData['sexo'] === 'M' || $userData['sexo'] === 'm')
			$codeIdPerf = 'id="perf-image-boy"';
			
		else
			$codeIdPerf = 'id="perf-image-girl"';

		echo '<div class="image-form" ' . $codeIdPerf . '> </div>';
	}

	// FUNÇÃO QUE IMPRIME O CUMPRIMENTO DE ACORDO COM A HORA

	function Cumprimento() {

		$hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));
		$message = null;		

	    if (($hora >=6) && ($hora <=12)) $message = "Bom dia, ";
		if (($hora >12) && ($hora <=18)) $message = "Boa tarde, ";
		if (($hora >18) && ($hora <=24)) $message = "Boa noite, ";
		if (($hora >24) && ($hora <6)) $message = "Boa madrugada, ";
	    
		// echo "$hora"; // Debugging
	    echo "$message";
	}
?>