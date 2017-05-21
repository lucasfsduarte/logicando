<?php

	// BANCO DE DADOS

	define('HOSTNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'logcbd');

	// URL'S

	define('URL_BASE', 'http://localhost/logicando/');
	define('URL_LOGIN', URL_BASE.'pages/login.php');
	define('URL_CADASTRO', URL_BASE.'pages/cadastro.php');
	define('URL_404', URL_BASE.'pages/notfound.php');
	define('URL_PAINEL', URL_BASE.'pages/painel.php');
	define('URL_PERFIL', URL_BASE.'pages/perfil.php');
	define('URL_PERFIL_CONFIG', URL_BASE.'pages/perfconf.php');
	define('URL_PORTUGOL', URL_BASE.'pages/avancado-portugol.php');
	define('URL_OBI', URL_BASE.'pages/avancado-questoes.php');
	define('URL_RANK', URL_BASE.'pages/global-rank.php');

	define('URL_SELECT_EASY', URL_BASE.'pages/iniciante.php');
	define('URL_SELECT_HARD', URL_BASE.'pages/avancado.php');

	define('URL_GS_1', URL_BASE.'pages/jogo-1/gamescreen-1.php');
	define('URL_GS_2', URL_BASE.'pages/jogo-2/gamescreen-2.php');
	define('URL_GS_3', URL_BASE.'pages/jogo-3/gamescreen-3.php');
	define('URL_GS_4', URL_BASE.'pages/jogo-4/gamescreen-4.php');


	// DIRETÓRIOS

	define('DIR_BASE', $_SERVER['DOCUMENT_ROOT'].'/logicando/');
	define('DIR_SYSTEM', DIR_BASE.'system/');

	// ARQUIVOS

	define('FILE_CONFIG', DIR_SYSTEM.'config.php');
	define('FILE_HELPERS', DIR_SYSTEM.'helpers.php');
	define('FILE_DATABASE', DIR_SYSTEM.'database.php');
	define('FILE_MODALS', DIR_SYSTEM.'modals.php');

?>