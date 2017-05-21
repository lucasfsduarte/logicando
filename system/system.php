<?php

	Init();

	// VALIDA O FORMULÁRIO DE ALTERAÇÃO DE DADOS

	function ValidateFormChange($userdata) {

		if(!!GetPost('send')) {

			$message = null;
			$mailVer = false;

			$name = GetPost('showname');
			$mail = GetPost('showmail');
			$about = GetPost('showabout');

			if (empty($name))
				$name = $userdata['name'];
			
			if (empty($mail)) {

				$mail = $userdata['mail'];
				$mailVer = true;
			}

			if (empty($about))
				$about = $userdata['about'];

			if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
				$message = "Informe um e-mail válido!";

			else if (!MailExists($mail) && $mailVer === false)
				$message = "Este email já foi cadastrado!";

			else {

				$change = ChangeData($name, $mail, $about);

				if (!$change)
					$message = "Desculpe! Algum erro ocorreu!";
				else
					$message = "Seus dados foram alterados com sucesso!";
			}

			$classCss = null;

			if ($message === "Seus dados foram alterados com sucesso!")
				$classCss = "form_warning_green";
			else
				$classCss = "form_warning_red";

			echo '<center> <div class="'. $classCss .'">' . $message . '</div> </center>';
		}
	}

	// VALIDA O FORMULÁRIO DE LOGIN

	function ValidateFormLogin() {

		if(!!GetPost('send')) {

			$message = null;

			$mail = GetPost('username');
			$password = GetPost('password');

			if(empty($mail))
				$message = "Informe o seu e-mail!";
			else if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
				$message = "Informe um e-mail válido!";
			else if (empty($password))
				$message = "Insira sua senha!";
			
			else {

				if(!UserVerify($mail, $password))
					$message = "Email ou senha incorretos!";
				else if(!UserVerify($mail, $password, true))
					$message = "Conta desativada!";
				else
					CreateSession($mail, $password);

			}

			$classCss = "form_warning_red";

			echo '<center> <div class="'. $classCss .'">' . $message . '</div> </center>';
		}
	}

	// VALIDA O FORMULÁRIO DE CADASTRO

	function ValidateFormReg() {

		if(!!GetPost('send')) {

			$message = null;

			$name = GetPost('name');
			$mail = GetPost('mail');
			$password = GetPost('password');
			$confPassword = GetPost('confpass');
			$idade = GetPost('idade');
			$sexo = GetPost('sexo');

			if(empty($name))
				$message = "Informe o seu nome!";

			else if (empty($mail))
				$message = "Informe seu email!";

			else if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
				$message = "Informe um e-mail válido!";

			else if (empty($password))
				$message = "Informe a sua senha!";

			else if (empty($confPassword))
				$message = "Confirme sua senha!";

			else if (empty($idade))
				$message = "Informe uma idade!";

			else if (empty($sexo))
				$message = "Preencha o sexo!";

			else if ($password != $confPassword)
				$message = "As senhas não correspondem!";
			
			else {

				if (!MailExists($mail))
				$message = "Este email já foi cadastrado!";

				else {

					$register = Register($name, $mail, $password, $idade, $sexo);

					if (!register)
						$message = "Desculpe! Algum erro ocorreu!";
					else
						$message = "Usuário cadastrado com sucesso!";
						CreateSession($mail, $password);
				}
			}

			$classCss = null;

			if ($message === "Usuário cadastrado com sucesso!")
				$classCss = "form_warning_green";
			else
				$classCss = "form_warning_red";


			echo '<center> <div class="'. $classCss .'">' . $message . '</div> </center>';
		}
	}

	// INICIA O SISTEMA

	function Init() {

		session_start();

		// Chamando o arquivo config.php

		$configFile = $_SERVER['DOCUMENT_ROOT'].'/logicando/system/config.php';

		if(!file_exists($configFile)) die('Erro arquivo config.php does not exists');

		else require_once $configFile;

		// Chamando o arquivo helpers.php

		if(!file_exists(FILE_HELPERS)) die('Error file helpers.php does not exists');

		else require_once FILE_HELPERS;

		// Chamando o arquivo database.php

		if(!file_exists(FILE_DATABASE)) die('Error file database.php does not exists');

		else require_once FILE_DATABASE;

		// Conectando com o banco de dados
		
		Connect();

		// Caso o usuário clique em sair, executa o logout!
		
		DoLogout();
	}

?>