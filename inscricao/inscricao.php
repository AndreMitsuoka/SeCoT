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

			#content {
				background-color: #FFF;
				border-radius: 4px;
				float: left;
				margin: 10px;
				overflow: hidden;
				width: 950px;
				-moz-border-radius: 4px;
				-moz-box-shadow: 0 0 6px #c6c6c6;
				-webkit-border-radius: 4px;
				-webkit-box-shadow: 0 0 6px #c6c6c6;
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
		<div id="w">
			<div id="top">
				<?php include "header.php" ?>
			</div>
			<div id="middle">
				<div id="content">
					<div class="title">Inscrição</div>
					<form>
						<div id="info">
							<span>Dados Pessoais:</span></br></br>
							<input type="text" id="nome"		placeholder="Nome" 			/><br />
							<input type="text" id="email"		placeholder="Email" 		/><br />
							<input type="text" id="rg"			placeholder="RG" 			/><br />
							<input type="text" id="instituicao" placeholder="Instituição" 	/><br />
						</div>
						<div id="palestras">
							<span>Palestras escolhidas:</span></br></br>
							<?php

							foreach ($palestras as $key=>$palestra) {
								echo '<input type="checkbox" value="'.$key.'" /><div class="titulo-palestra">'.$palestra['titulo'].' - '.$palestra['palestrante'].'</div><br />';
							}

							?>
						</div>
						<input type="submit" value="Concluir inscrição" id="submit" />
					</form>
				</div>
				<div class="clear"></div>
				<br />
			</div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
	</body>
</html>
