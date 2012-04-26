<style type="text/css">
	h1 {
		color: #000;
		display: block;
		font: 40px/60px 'RobotoLight', Arial, sans-serif;
		margin: 30px auto;
		text-align: center;
	}

	h2 {
		color: #dedede;
		display: block;
		font: 20px/30px 'RobotoLight', Arial, sans-serif;
		margin: 30px auto;
		text-align: center;
	}
</style>
<?php

	if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['rg'])){
		header('Location: inscricao.php');
	}

	require "connect.php";

	$nome 		 = $_POST['nome'];
	$email 		 = $_POST['email'];
	$rg 		 = $_POST['rg'];
	$instituicao = $_POST['instituicao'];

	$query = sprintf("INSERT INTO participantes VALUES (0, '%s', '%s', '%s', '%s', 'N')", 
		mysql_real_escape_string($nome), 
		mysql_real_escape_string($email),
		mysql_real_escape_string($rg),
		mysql_real_escape_string($instituicao));

	mysql_query($query);

	$participante = mysql_insert_id();

	//echo "Participante ID: ".$participante;

	$palestras = $_POST['palestras'];

	foreach ($palestras as $p){

		$query = sprintf("INSERT INTO escolha VALUES (".$participante.", ".$p.", 'N')");

		mysql_query($query);

		mysql_query("UPDATE palestras SET total = total + 1 WHERE id = '".$p."'");
	}

	echo "<h1>Inscri&ccedil;&atilde;o realizada com sucesso!</h1>";
	echo "<h2>Favor realizar o pagamento da taxa com um dos organizadores.</h2>";

?>