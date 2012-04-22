<?php

	print_r($_POST);

	if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['rg'])){
		header('Location: inscricao.php');
	}

	require "connect.php";
	//require "email.php";

	$nome 		 = $_POST['nome'];
	$email 		 = $_POST['email'];
	$rg 		 = $_POST['rg'];
	$instituicao = $_POST['instituicao'];

	$query = sprintf("INSERT INTO participantes VALUES (0, '%s', '%s', '%s', '%s')", 
		mysql_real_escape_string($nome), 
		mysql_real_escape_string($email),
		mysql_real_escape_string($rg),
		mysql_real_escape_string($instituicao));

	mysql_query($query);

	$participante = mysql_insert_id();

	echo "Participante ID: ".$participante;

	$palestras = $_POST['palestras'];

	foreach ($palestras as $p){

		$query = sprintf("INSERT INTO escolha VALUES (".$participante.", ".$p.")");

		mysql_query($query);

		mysql_query("UPDATE palestras SET total = total + 1 WHERE id = '".$p."'");
	}

	//$body = "Inscrição confirmada";

	//Email::Write($nome, $email, $body);

?>