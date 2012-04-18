<?php
	require "head.php";
	$page = "agenda";
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

			/*

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

			*/

			.columns {
				float: left;
				width: 145px;
			}

			.columns:last-child {
				border: 0px;
			}

			.horarios {
				width: 80px !important;
			}

			.header {
				background-color: #0e5b8c;
				border-right: 1px solid #064972;
				border-bottom: 1px solid #064972;
				color: #FFF;
				font: 16px 'RobotoRegular', Arial, sans-serif;
				height: 48px;
				line-height: 24px;
				padding: 9px 0px 8px 0px;
				text-align: center;
				vertical-align: middle;
			}

			.columns:last-child .header {
				border-right: 0;
			}

			.horario,
			.horario-2 {
				border-right: 1px solid #dedede;
				border-bottom: 1px solid #dedede;
				text-align: center;
				vertical-align: middle;
				-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
				-moz-box-sizing: border-box;    /* Firefox, other Gecko */
				box-sizing: border-box;         /* Opera/IE 8+ */		
			}

			.horario {
				height: 70px;
				line-height: 70px;
			}

			.horario-2 {
				height: 140px;
				line-height: 140px;
			}

			.palestra,
			.palestra-1,
			.palestra-3,
			.palestra-4 {
				border-right: 1px solid #dedede;
				border-bottom: 1px solid #dedede;
				color: #000;
				display: block;
				font: 14px 'RobotoLight', Arial, sans-serif;
				height: 140px;
				position: relative;
				width: 145px;
				-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
				-moz-box-sizing: border-box;    /* Firefox, other Gecko */
				box-sizing: border-box;         /* Opera/IE 8+ */
			}

			.palestra:hover,
			.palestra-1:hover,
			.palestra-3:hover,
			.palestra-4:hover,
			.dia-todo:hover {
				background-color: #FFFFE0;
			}

			.palestra-1 {
				height: 70px !important;
			}

			.palestra-3 {
				height: 210px !important;
			}

			.palestra-4 {
				height: 280px !important;
			}

			.placeholder-palestra {
				border-right: 1px solid #dedede;
				border-bottom: 1px solid #dedede;
				display: block;
				height: 140px;
				position: relative;
				width: 145px;
				-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
				-moz-box-sizing: border-box;    /* Firefox, other Gecko */
				box-sizing: border-box;         /* Opera/IE 8+ */
			}

			.titulo-palestra {
				display: block;
				font-weight: bold;
				margin: 5px;
				position: absolute;
				text-align: left;
				top: 0;
				width: 135px;
			}

			.palestrante {
				bottom: 0;
				display: block;
				margin: 5px;
				position: absolute;
				text-align: right;
				width: 135px;
			}

			.break {
				border-right: 1px solid #dedede;
				border-bottom: 1px solid #dedede;
				display: block;
				font-size: 14px;
				height: 70px;
				line-height: 70px;
				position: relative;
				text-align: center;
				vertical-align: middle;
				width: 145px;
				-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
				-moz-box-sizing: border-box;    /* Firefox, other Gecko */
				box-sizing: border-box;         /* Opera/IE 8+ */
			}

			.dia-todo {
				border-right: 1px solid #dedede;
				color: #000;
				display: block;
				font: 14px 'RobotoLight', Arial, sans-serif;
				height: 770px;
				position: relative;
				text-align: center;
				width: 145px;
				-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
				-moz-box-sizing: border-box;    /* Firefox, other Gecko */
				box-sizing: border-box;         /* Opera/IE 8+ */
			}

			.dia-todo .evento {
				bottom: 50%;
				display: block;
				font-weight: bold;
				margin: 5px;
				position: absolute;
				width: 135px;
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
					<div class="columns horarios">
						<div class="header"></div>
						<div class="horario-2">9h</div>
						<div class="horario-2">10h</div>
						<div class="horario">12h</div>
						<div class="horario">14h</div>
						<div class="horario">15h</div>
						<div class="horario">15h40</div>
						<div class="horario">16h</div>
						<div class="horario">16h40</div>
						<div class="horario">17h</div>
					</div>
					<div class="columns">
						<div class="header">Segunda<br/>(07/05)</div>
						<a href="#" class="palestra">
							<span class="titulo-palestra">Recepção e entrega das credenciais</span><br />
							<span class="palestrante">Sorteio de brindes da Yazigi</span>
						</a>
						<a href="<?php echo $urlbase; ?>/agenda/scrum-ou-kanban-qual-voce-usaria" class="palestra">
							<span class="titulo-palestra">Scrum ou Kanban, qual você usaria?</span><br/>
							<span class="palestrante">César - UOL</span>
						</a>
						<div class="break">
							Horário Livre
						</div>
						<a href="<?php echo $urlbase; ?>/agenda/inovacao-centrada-no-usuario" class="palestra">
							<span class="titulo-palestra">Inovação centrada no usuário</span><br />
							<span class="palestrante">Dr. Paulo Melo</span>
						</a>
						<div class="break">
							Coffee Break
						</div>
						<a href="#" class="palestra-3">
							<span class="titulo-palestra">Tema a confirmar</span><br />
							<span class="palestrante">Everis</span>
						</a>
					</div>
					<div class="columns">
						<div class="header">Terça<br/>(08/05)</div>
						<div class="placeholder-palestra"></div>
						<a href="<?php echo $urlbase; ?>/agenda/comecando-com-nodejs" class="palestra">
							<span class="titulo-palestra">Começando com Node.js</span><br />
							<span class="palestrante">Nando</span>
						</a>
						<div class="break">
							Horário Livre
						</div>
						<a href="#" class="palestra-1">
							<span class="titulo-palestra">Plataformatec</span>
						</a>
						<a href="#" class="palestra-3">
							<span class="titulo-palestra">Tema a confirmar</span><br />
							<span class="palestrante">Fábio Akita</span>
						</a>
						<div class="break">
							Coffee Break
						</div>
						<a href="#" class="palestra-1">
							<span class="titulo-palestra">Nova.com</span>
						</a>
					</div>
					<div class="columns">
						<div class="header">Quarta<br/>(09/05)</div>
						<div class="placeholder-palestra"></div>
						<a href="<?php echo $urlbase; ?>/agenda/sexo-drogas-e-software-livre" class="palestra">
							<span class="titulo-palestra">Sexo, Drogas e Software Livre</span><br />
							<span class="palestrante">Alexandre Oliva</span>
						</a>
						<div class="break">
							Horário Livre
						</div>
						<a href="#" class="palestra">
							<span class="titulo-palestra">Tema a confirmar</span><br />
							<span class="palestrante">Eher</span>
						</a>
						<div class="break">
							Coffee Break
						</div>
						<a href="#" class="palestra-3">
							<span class="titulo-palestra">Dojo/Everis</span><br />
							<span class="palestrante"></span>
						</a>
					</div>
					<div class="columns">
						<div class="header">Quinta<br/>(10/05)</div>
						<div class="placeholder-palestra"></div>
						<a href="#" class="palestra">
							<span class="titulo-palestra">Tema a confirmar</span><br />
							<span class="palestrante">Dr. Ricardo Oliveira</span>
						</a>
						<div class="break">
							Horário Livre
						</div>
						<a href="#" class="palestra">
							<span class="titulo-palestra">Tema a confirmar</span><br />
							<span class="palestrante">Dr. Jurandy Gomes de Almeida Jr</span>
						</a>
						<div class="break">
							Coffee Break
						</div>
						<a href="#" class="palestra-3">
							<span class="titulo-palestra">Tema a confirmar</span><br />
							<span class="palestrante">André - Claro</span>
						</a>
					</div>
					<div class="columns">
						<div class="header">Sexta<br/>(11/05)</div>
						<a href="<?php echo $urlbase; ?>/maratona" class="dia-todo">
							<span class="evento">Mini-Maratona de Programação</span>
						</a>
					</div>
					<div class="columns">
						<div class="header">Sábado<br/>(12/05)</div>
						<a href="http://gurusorocaba.com.br/" class="dia-todo">
							<span class="evento">Encontro GURU</span>
						</a>
					</div>

					<!--
					<table>
						<tr class="table-header">
							<td class="table-side"></td>
							<td>Segunda<br/>(07/05)</td>
							<td>Terça<br/>(08/05)</td>
							<td></td>
							<td>Quinta<br/>(10/05)</td>
							<td></td>
							<td></td>
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
								<a href="<?php echo $urlbase; ?>/maratona" class="evento">Mini-Maratona de Programação</a>
							</td>
							<td rowspan="7">
								<a href="http://gurusorocaba.com.br/" class="evento">Encontro GURU</a>
							</td>
						</tr>
						<tr>
							<td class="table-side">10h</td>
							<td>
								<a href="<?php echo $urlbase; ?>/agenda/scrum-ou-kanban-qual-voce-usaria" class="palestra">
									<span class="titulo-palestra">Scrum ou Kanban, qual você usaria?</span><br/>
									<span class="palestrante">César - UOL</span>
								</a>
							</td>
							<td>
								<a href="<?php echo $urlbase; ?>/agenda/comecando-com-nodejs" class="palestra">
									<span class="titulo-palestra">Começando com Node.js</span><br />
									<span class="palestrante">Nando</span>
								</a>
							</td>
							<td>
								<a href="<?php echo $urlbase; ?>/agenda/sexo-drogas-e-software-livre" class="palestra">
									<span class="titulo-palestra">Sexo, Drogas e Software Livre</span><br />
									<span class="palestrante">Alexandre Oliva</span>
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
								<a href="<?php echo $urlbase; ?>/agenda/inovacao-centrada-no-usuario" class="palestra">
									<span class="titulo-palestra">Inovação centrada no usuário</span><br />
									<span class="palestrante">Dr. Paulo Melo</span>
								</a>
							</td>
							<td>
								<a href="#" class="palestra">
									<span class="titulo-palestra">Tema a confirmar</span><br />
									<span class="palestrante">Fábio Akita</span>
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
									<span class="titulo-palestra">Dojo</span>
								</a>
							</td>
							<td>
								<a href="#" class="palestra">
									<span class="titulo-palestra">Tema a confirmar</span><br />
									<span class="palestrante">André - Claro</span>
								</a>
							</td>
						</tr>
					</table>
					-->
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
