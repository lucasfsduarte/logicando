<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logicando/system/system.php';

	// Verifica se o usuário está logado. Se estiver, ele é redirecionado ao seu perfil.

	AcessPrivate();
	$dataUser = GetUser();
?>

<!DOCTYPE html>

<html lang="pt">

<head>

  	<meta charset="UTF-8" />
	<title> Testes BD </title>

</head>

<body>

<h1> Testes com o Banco de Dados: Inserção </h1>

<p> <?php
	
	echo rand(100, 1000);
	
	echo "ID: " . $dataUser['id'];
	echo "<br>Nome: " . $dataUser['name'];
	echo "<br>Mail: " . $dataUser['mail'];

	echo "<hr>";

	echo "

		<style>
			table, th, td {
			    border: 1px solid black;
			    border-collapse: collapse;
			}
		</style>

		<table>
		<tr>
		    <th> Medalhas </th>
		    <th> Progresso 1 </th>
		    <th> Progresso 2 </th>
		    <th> Pontos Totais </th>
		</tr>
		<tr>
		    <td>" . $dataUser['num_medalhas'] . "</td>
		    <td>" . $dataUser['vlr_progresso1'] . "</td>
		    <td>" . $dataUser['vlr_progresso2'] . "</td>
		    <td>" . $dataUser['total_pontos'] . "</td>
		</tr>
		</table>";

	?>
</p>

</body>

</html>