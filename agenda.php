<?php

	/*
	if(!isset($_GET["view"]) || $_GET["view"] != "test"){
		exit();
	}
	*/

	$page = "agenda";
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>IV SeCoT</title>
		<link type="text/css" rel="stylesheet" href="css/fonts.css" />
		<link type="text/css" rel="stylesheet" href="css/layout.css" />
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


			table {
				border-collapse: collapse;
				width: 100%;
			}

			table tr {
				height: 50px;
			}

			table td {
				border: 1px solid #dedede;
				font: 14px 'RobotoLight', Arial, sans-serif;
				padding: 10px;
				width: 148px;
			}

			.table-header {
				background-color: #0e5b8c;
				color: #FFF;
				height: 40px;
			}

			.table-header td {
				border: 1px solid #064972;				
				font: 16px 'RobotoRegular', Arial, sans-serif;
				text-align: center;
			}

			.table-side {
				width: 72px;
				font: 16px 'RobotoRegular', Arial, sans-serif;
				text-align: center;
			}

			.titulo-palestra {
				display: block;
				font-weight: bold;
				text-align: left;
				width: 100%;
			}

			.evento {
				display: block;
				font-weight: bold;
				text-align: center;
				width: 100%;
			}

		</style>
	</head>
	<body>
		<div id="top">
			<?php include "header.php" ?>
		</div>
		<div id="middle">
			<div id="content">
				<table>
					<tr class="table-header">
						<td class="table-side"></td>
						<td>Segunda<br/>(07/05)</td>
						<td>Terça<br/>(08/05)</td>
						<td>Quarta<br/>(09/05)</td>
						<td>Quinta<br/>(10/05)</td>
						<td>Sexta<br/>(11/05)</td>
						<td>Sábado<br/>(12/05)</td>
					</tr>
					<tr>
						<td class="table-side">9h</td>
						<td><span class="titulo-palestra">Recepção e entrega das credenciais</span><br />Sorteio de brindes da Yazigi</td>
						<td></td>
						<td></td>
						<td></td>
						<td rowspan="7"><span class="evento">Mini-Maratona de Programação</span></td>
						<td rowspan="7"><span class="evento">Encontro GURU</span></td>
					</tr>
					<tr>
						<td class="table-side">10h</td>
						<td>Tema a confirmar<br/>César - UOL</td>
						<td><span class="titulo-palestra">Começando com Node.js</span><br />Nando</td>
						<td>Tema a confirmar<br />Oliva</td>
						<td>Tema a confirmar<br />Dr. Ricardo Oliveira</td>
					</tr>
					<tr>
						<td class="table-side"></td>
						<td colspan="4">Tempo Livre</td>
					</tr>
					<tr>
						<td class="table-side">14h</td>
						<td>Tema a confirmar<br />Dr. Paulo Melo</td>
						<td>Tema a confirmar<br />Fábio Akita</td>
						<td></td>
						<td>Tema a confirmar<br />Dr. Jurandy Gomes de Almeida Jr</td>
					</tr>
					<tr>
						<td class="table-side"></td>
						<td colspan="4">Coffee Break</td>
					</tr>				
					<tr>
						<td class="table-side">16h</td>
						<td></td>
						<td><span class="titulo-palestra">Os desafios de TI no negócio e&#8209;commerce</span><br />Nova.com</td>
						<td>Tema a confirmar<br />Eher</td>
						<td>Tema a confirmar<br />André - Claro</td>
					</tr>
					<tr>
						<td class="table-side">18h</td>
						<td></td>
						<td></td>
						<td>Dojo</td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="clear"></div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
	</body>
</html>
