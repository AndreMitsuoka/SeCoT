<?php

	/*
	if(!isset($_GET["view"]) || $_GET["view"] != "test"){
		exit();
	}
	*/

	$page = "maratona";
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>IV SeCoT</title>
		<link type="text/css" rel="stylesheet" href="/css/fonts.css" />
		<link type="text/css" rel="stylesheet" href="/css/layout.css" />
		<style type="text/css">

			#content {
				background-color: #FFF;
				border-radius: 4px;
				float: left;
				margin: 0 10px;
				overflow: hidden;
				width: 960px;
				-moz-border-radius: 4px;
				-moz-box-shadow: 0 0 6px #c6c6c6;
				-webkit-border-radius: 4px;
				-webkit-box-shadow: 0 0 6px #c6c6c6;
			}

			.titulo {
				color: #000;
				display: block;
				font: 40px/60px 'RobotoLight', Arial, sans-serif;
				margin: 20px 30px 10px 30px;
				width: 600px;
			}

			p {
				font: 15px/20px 'RobotoLight', Arial, sans-serif;
				margin: 0px 10px 30px 30px;
			}

		</style>
	</head>
	<body>
		<div id="top">
			<?php include "header.php" ?>
		</div>
		<div id="middle">
			<div id="content">
				<span class="titulo"><?php print_r($_GET); ?></span>
				<p>SeCoT é a sigla para Semana da Computação e Tecnologia, um evento realizado pelos alunos de Ciências da Computação da UFSCar Sorocaba. Seu foco é disseminar conhecimentos e gerar debates sobre computação e suas tecnologias, introduzir às diversas carreiras no mercado de trabalho e gerar networking entre a comunidade.</p>						
			</div>
			<div class="clear"></div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
	</body>
</html>