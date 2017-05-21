<?php

	// FUNÇÃO DE CONEXÃO COM BANCO DE DADOS

	function Connect() {

		error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

		$connect = mysql_connect(HOSTNAME, USERNAME, PASSWORD);

		if(!$connect) die(mysql_error());

		else {
			mysql_select_db(DATABASE, $connect) or die(mysql_error());

			mysql_query("SET NAMES 'utf-8'");
			mysql_query("SET character_set_connection=utf8");
			mysql_query("SET character_set_client=utf8");
			mysql_query("SET character_set_results=utf8");
		}
	}

	// FUNÇÃO VERIFICA EMAIL EXISTENTE

	function MailExists($mail) {

		$query = "SELECT mail FROM userdata WHERE mail = '$mail'";
		$result = mysql_query($query) or die(mysql_error());

		// Verifica se o e-mail existe e retorna true caso não exista e false caso exista.

		if(mysql_num_rows($result) <= 0)
			return true;
		else
			return false;
	}

	// FUNÇÃO QUE CADASTRA O USUÁRIO NO BANCO DE DADOS

	function Register($name, $mail, $password, $idade, $sexo) {

		$status = true;
		$password = CriptPass($password);
		$userkey = KeyGenerator();
		$about = " ";
		$register = time();
		$horas = rand(1, 5);

		// Cria a query de execução para o banco de dados;
		
		$query = "INSERT INTO userdata ( name, mail, password, idade, about, sexo, userkey, register, status ) VALUES ( '$name', '$mail', '$password', '$idade', '$about', '$sexo', '$userkey', '$register', '$status' )";

		$query2 = "INSERT INTO userdata_plataforma ( user_id, num_medalhas, vlr_progresso1, vlr_progresso2, total_pontos, horas_uso ) VALUES ( (select LAST_INSERT_ID()), '0', '0', '0', '0', '$horas' )";

		$result = mysql_query($query) or die(mysql_error());
		$result2 = mysql_query($query2) or die(mysql_error());

		if($result && $result2) {
			return true;
		}
		
		else return false;
	}

	// FUNÇÃO QUE VERIFICA OS DADOS DO USUÁRIO PARA O LOGIN

	function UserVerify($mail, $password, $status = false) {

		$password = CriptPass($password);

		$query = "SELECT * FROM userdata WHERE mail = '$mail' AND password = '$password'";
		$query .= ($status) ? ' AND status = true' : '';
		$result = mysql_query($query) or die(mysql_error());

		if (mysql_num_rows($result) <= 0)
			return false;
		
		else {

			$data = mysql_fetch_assoc($result);
			return $data['userkey'];
		}
	}

	// FUNÇÃO QUE RECUPERA A USERKEY

	function GetKey($mail, $password) {

		$userdata = UserVerify($mail, $password, true);
		return $userdata;
	}

	// FUNÇÃO QUE VERIFICA O USUÁRIO LOGADO NO SISTEMA 

	function StayLogged() {

		$userkey = UserLog();

		$query = "SELECT userkey FROM userdata WHERE userkey = '$userkey' AND status = true";
		$result = mysql_query($query) or die(mysql_error());

		if(mysql_num_rows($result) <= 0)
			return false;
		else
			return true;
	}

	// FUNÇÃO QUE ALTERA OS DADOS DO USUÁRIO NO SISTEMA

	function ChangeData($username, $usermail, $userabout) {

		if(!IsLogged())
			return false;

		else {

			$userkey = UserLog();

			$query = "UPDATE userdata SET name = '$username', mail = '$usermail', about = '$userabout' WHERE userkey = '$userkey' AND status = true";
			$result = mysql_query($query) or die(mysql_error());

			if(!result)
				return false;
			else
				return true;
		}
	}

	// FUNÇÃO QUE RECUPERA INFORMAÇÕES DO USUÁRIO

	function GetUser($key = null) {

		if(!IsLogged())
			return false;
		else {

			$userkey = UserLog();

			$query = "SELECT * FROM userdata WHERE userkey = '$userkey' AND status = true";
			$result = mysql_query($query) or die(mysql_error());
			$dados = mysql_fetch_assoc($result);

			// Função que retorna o elemento para onde o ponteiro aponta no array: current(array);

			$id = current($dados);
			$dadosT2 = GetUserT2($id);

			// Concatenando o array da primeira tabela com o da segunda tabela;

			$dados = $dados + $dadosT2;

			if($key == null)
				return $dados;
			else
				return (isset($dados[$key])) ? $dados[$key] : false;
		}
	}

	// FUNÇÃO QUE RECUPERA AS INFORMAÇÕES DA TABELA USERDATA_PLATAFORMA

	function GetUserT2($id) {

		$query = "SELECT * from userdata_plataforma WHERE user_id = '$id'";
		$result = mysql_query($query) or die(mysql_error());
		$data = mysql_fetch_assoc($result);

		return $data;
	}

	// FUNÇÃO PARA ATUALIZAR O VALOR DE UM CAMPO

	function UpdateValue($id, $campo, $value) {

		// Cria a query de execução para o banco de dados;
		
		$query = "UPDATE userdata_plataforma SET ".$campo." = '$value' WHERE user_id = '$id'";

		$result = mysql_query($query) or die(mysql_error());

		if($result)
			return true;
		else
			return false;
	}

	// FUNÇÃO PARA FAZER UPDATE COM SOMA

	function UpdateSumValue($id, $campo, $value) {

		// Cria a query de execução para o banco de dados;
		
		// Exemplo da sintaxe: UPDATE produtos SET quantidade = quantidade+1 WHERE nome_produto = 'Tênis de Futebol';
		
		$query = "UPDATE userdata_plataforma SET ".$campo."= ".$campo."+ '$value' WHERE user_id = '$id'";

		$result = mysql_query($query) or die(mysql_error());

		if($result)
			return true;
		else
			return false;
	}

	// FUNCAO QUE PEGA O RANK DOS MELHORES JOGADORES DO SERVIDOR

	function GetRank($userid) {

		$query = "SELECT userdata.id, userdata.name, userdata_plataforma.num_medalhas, userdata_plataforma.horas_uso, userdata_plataforma.total_pontos FROM userdata INNER JOIN userdata_plataforma ON userdata.id=userdata_plataforma.user_id ORDER BY userdata_plataforma.total_pontos DESC";

		$result = mysql_query($query) or die(mysql_error());

		echo "<table style='width:100%'>
			<tr>
			 	<th>Rank</th>
			    <th>Nome</th>
			    <th>Número de Medalhas</th>
			    <th>Horas Jogadas</th>
			    <th>Pontuação Total</th>
			</tr>";

		$count = 1;

		// Coloca o resultado em um array associativo para possibilitar a seleção;

		while ($registro = mysql_fetch_assoc($result)) {

		echo "<tr>";

		//Imprimindo as medalhas de 1, 2 e 3 place;

		if($count == 1)
			echo "<td><img src='../imagens/medalhas/trofeu.png' width='15'></td>";
		else if($count == 2)
			echo "<td><img src='../imagens/medalhas/gold.png' width='20'></td>";
		else if($count == 3) 
			echo "<td><img src='../imagens/medalhas/silver.png' width='20'></td>";
		else
			echo "<td>".$count."</td>";

		// Imprimindo o nome do usuario em negrito, se ele estiver na lista;

		if ($userid == $registro["id"])
			echo "<td><b>Você (".$registro["name"].")</b></td>";
		else
			echo "<td>".$registro["name"]."</td>";

		// Imprimindo o restante da tabela;
		
		echo "<td>".$registro["num_medalhas"]." medalhas</td>
			    <td>".$registro["horas_uso"]." horas</td>
			    <td>".$registro["total_pontos"]." pontos</td>
			</tr>";

		if($count == 10) break;
		
			$count++;
		}

		echo "</table>";			 
	}

?>