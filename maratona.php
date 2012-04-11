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

		</style>
	</head>
	<body>
		<div id="w">
			<div id="top">
				<?php include "header.php" ?>
			</div>
			<div id="middle">
				<div id="content">
					<span class="titulo">Maratona de Programação</span>
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