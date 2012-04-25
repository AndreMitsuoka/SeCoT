<?php
	require "connect.php";
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>IV SeCoT - Inscrição</title>
		<link type="text/css" rel="stylesheet" href="css/fonts.css" />
		<style type="text/css">

			* {
				border: 0;
				margin: 0;
				padding: 0;
			}

			html, body {
				height: 707px;
				overflow: hidden;
			}

			#content-inscricao {
				background-color: #FFF;
				height: 700px;
				margin: 0 auto;
				width: 950px;
			}
			
			.title {
				background-color: #064972;
				color: #FFF;
				font-size: 20px;
				height: 50px;
				line-height: 50px;
				padding-left: 30px;
				vertical-align: middle;
				width: 100%;
			}

			form {
				margin: 30px;
				width: 100%;
			}

			#info input {
				border: 1px solid #ccc;
				height: 30px;
				margin-bottom: 5px;
				padding: 3px 10px;
				width: 300px;
			}

			.warning {
				color: red;
				font-size: 12px;
				margin: 30px 0px;
				width: 300px;
			}

			#info,
			#palestras {
				display: inline-block;
				vertical-align: top;
				width: 420px;
			}

			#palestras {
				margin-left: 40px;
			}

			#info span,
			#palestras span {
				font-size: 20px;
			}

			#palestras input {
				display: inline-block;
				margin-right: 10px;
				vertical-align: middle;
			}

			.titulo-palestra {
				display: inline-block;
				vertical-align: middle;
				margin: 7px 0px;
				width: 387px;
			}

			#submit {
				background-color: #bf0000;
				border: 0px;
				color: #FFF;
				cursor: pointer;
				display: block;
				font-size: 20px;
				height: 50px;
				line-height: 50px;
				margin: 30px 0px -30px -30px;
				padding-left: 30px;
				vertical-align: middle;
				width: 100%;
			}

		</style>
		<script type="text/javascript">
			window.onload = function(){
				var submitButton = document.getElementById("submit");

				if (navigator.appName == 'Microsoft Internet Explorer'){
					submitButton.attachEvent('onclick', submit);
				} else {
					submitButton.addEventListener('click', submit, false);
				}

				function submit(e){
					console.log(e);
					
					if(!validate()){
						e.preventDefault();
						e.stopPropagation();
					}					
				}

				function validate(){
					var valid = true;
					var defaultBorder = "1px solid #ccc";

					var nomeInput = document.getElementById("nome");
					if(nomeInput.value.length == 0){
						nomeInput.style.border = "1px solid red";
						valid = false;
					} else {
						nomeInput.style.border = defaultBorder;
					}

					var emailInput = document.getElementById("email");
					if(emailInput.value.length == 0){
						emailInput.style.border = "1px solid red";
						valid = false;
					} else {
						emailInput.style.border = defaultBorder;
					}

					var rgInput = document.getElementById("rg");
					if(rgInput.value.length == 0){
						rgInput.style.border = "1px solid red";
						valid = false;
					} else {
						rgInput.style.border = defaultBorder;
					}

					return valid;
				}
			}
		</script>
	</head>
	<body>
		<div id="content-inscricao">
			<div class="title">Inscrição</div>
			<form action="concluir.php" method="POST">
				<div id="info">
					<span>Dados Pessoais:</span></br></br>
					<input type="text" id="nome"		name="nome"				placeholder="Nome" 			/><br />
					<input type="text" id="email"		name="email"			placeholder="Email" 		/><br />
					<input type="text" id="rg"			name="rg"				placeholder="RG" 			/><br />
					<input type="text" id="instituicao" name="instituicao"		placeholder="Instituição" 	/><br />

					<div class="warning">
						A inscrição só será validada mediante o pagamento da taxa de inscrição.<br /><br />
						As palestras, workshops e mini-cursos têm limite de participantes e podem estar desabilitadas caso tenham atingido esse limite.<br /><br />
						Fique atento aos mini-cursos que serão realizados em paralelo às palestras.<br /><br />
						A emissão do certificado só será realizada caso você tenha comparecido em no mínimo 75% das palestras selecionadas.
					</div>
				</div>
				<div id="palestras">
					<span>Palestras escolhidas:</span></br></br>
					<?php

					$query = sprintf("SELECT * FROM palestras");

					$result = mysql_query($query);

					if (!$result) {
					    $message  = 'Invalid query: ' . mysql_error() . "\n";
					    $message .= 'Whole query: ' . $query;
					    die($message);
					}

					while ($row = mysql_fetch_assoc($result)) {
					    echo '<input type="checkbox" value="'.$row['id'].'" name="palestras[]" ';

					    if($row['total'] >= $row['maximo']){
					    	echo ' disabled="true"';
					    }

					    echo ' /><div class="titulo-palestra">'.$row['tema'].' - '.$row['palestrante'].'</div><br />';
					}

					mysql_free_result($result);

					?>
				</div>
				<input type="submit" value="Concluir inscrição" id="submit" />
			</form>
		</div>
	</body>
</html>
