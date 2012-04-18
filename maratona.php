<?php

	require "head.php";
	$page = "maratona";
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>IV SeCoT</title>
		<link type="text/css" rel="stylesheet" href="<?php echo $urlbase; ?>/css/fonts.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo $urlbase; ?>/css/layout.css" />
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

			.titulo {
				color: #000;
				display: block;
				font: 40px/60px 'RobotoLight', Arial, sans-serif;
				margin: 20px 30px 10px 30px;
				width: 600px;
			}

			p {
				font: 15px/25px 'RobotoLight', Arial, sans-serif;
				margin: 0px 10px 30px 30px;
				text-align: justify;
				text-indent: 2em;
				width: 890px;
			}

			.no-margin {
				margin: 0px 10px 3px 30px !important;
			}

		</style>
	</head>
	<body>
		<div id="w">
			<div id="top">
				<?php include "header.php" ?>
			</div>
			<div id="middle">
				<div id="content">
					<span class="titulo">Mini-Maratona de Programação</span>
					<p>A 2ª Mini Maratona de Programação da UFSCar Sorocaba será realizada nos moldes da famosa Maratona de Programação da ACM-SBC (http://maratona.ime.usp.br/), onde grupos de 3 estudantes enfrentam uma sequência de problemas desafiantes de programação.</p>
					<p>Incentivamos a participação de todos que gostem de programação! Esta é uma excelente oportunidade para conhecer o estilo dos problemas da maratona, o ambiente de competição e participar de uma atividade divertida que permite o aprendizado de novas habilidades e que conta créditos de atividades complementares.</p>

					<p>Sobre a Mini Maratona:</p>
					<p class="no-margin">Times: 3 alunos de qualquer curso da UFSCar Sorocaba.</p>
					<p class="no-margin">Incrições: Enviar nome do time, lista de participantes com nome e RA e indicar pessoa de contato do time por e-mail até dia 27/4 para tiemi@ufscar.br. As vagas são limitadas, a seleção dos times se dará por ordem de inscrição.</p>
					<p class="no-margin">Data: 11/5</p>
					<p class="no-margin">Hora: Aquecimento da 10h00 as 11h30. Competição das 13h30 as 16h30.</p>
					<p class="no-margin">Local: UFSCar Sorocaba</p>
					<br /><br />
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
		<?php include "tracking.php" ?>
	</body>
</html>