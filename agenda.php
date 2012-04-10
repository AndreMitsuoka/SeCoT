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
				margin: 10px;
				overflow: hidden;
				width: 950px;
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

			table td a {
				color: black;
				display: block;
				min-height: 120px;
				position: relative;
				text-decoration: none;
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
				position: absolute;
				text-align: left;
				top: 5px;
				width: 100%;
			}

			.palestrante {
				bottom: 5px;
				display: block;
				position: absolute;
				text-align: right;
				width: 100%;
			}

			.evento {
				color: black;
				display: block;
				font-weight: bold;
				text-align: center;
				text-decoration: none;
				width: 100%;
			}

			.centralizado {
				font-weight: bold;
				text-align: center;
			}

			.centralizado-vertical {
				vertical-align: middle;
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
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Recepção e entrega das credenciais</span><br />
								<span class="palestrante">Sorteio de brindes da Yazigi</span>
							</a>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td rowspan="7">
							<a href="/maratona" class="evento">Mini-Maratona de Programação</a>
						</td>
						<td rowspan="7">
							<a href="http://gurusorocaba.com.br/" class="evento">Encontro GURU</a>
						</td>
					</tr>
					<tr>
						<td class="table-side">10h</td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Tema a confirmar</span><br/>
								<span class="palestrante">César - UOL</span>
							</a>
						</td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Começando com Node.js</span><br />
								<span class="palestrante">Nando</span>
							</a>
						</td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Tema a confirmar</span><br />
								<span class="palestrante">Oliva</span>
							</a>
						</td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Tema a confirmar</span><br />
								<span class="palestrante">Dr. Ricardo Oliveira</span>
							</a>
						</td>
					</tr>
					<tr>
						<td class="table-side"></td>
						<td colspan="4" class="centralizado">Tempo Livre</td>
					</tr>
					<tr>
						<td class="table-side">14h</td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Tema a confirmar</span><br />
								<span class="palestrante">Dr. Paulo Melo</span>
							</a>
						</td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Tema a confirmar</span><br />
								<span class="palestrante">Fábio Akita</span>
							</a>
						</td>
						<td></td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Tema a confirmar</span><br />
								<span class="palestrante">Dr. Jurandy Gomes de Almeida Jr</span>
							</a>
						</td>
					</tr>
					<tr>
						<td class="table-side"></td>
						<td colspan="4" class="centralizado">Coffee Break</td>
					</tr>				
					<tr>
						<td class="table-side">16h</td>
						<td></td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Os desafios de TI no negócio e&#8209;commerce</span><br />
								<span class="palestrante">Nova.com</span>
							</a>
						</td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Tema a confirmar</span><br />
								<span class="palestrante">Eher</span>
							</a>
						</td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Tema a confirmar</span><br />
								<span class="palestrante">André - Claro</span>
							</a>
						</td>
					</tr>
					<tr>
						<td class="table-side">18h</td>
						<td></td>
						<td></td>
						<td>
							<a href="#" class="palestra">
								<span class="titulo-palestra">Dojo</span>
							</a>
						</td>
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
