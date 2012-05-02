<?php
	require "head.php";
	$page = "faq";
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

			.pergunta {
				color: #000;
				display: block;
				font: 20px/30px 'RobotoRegular', Arial, sans-serif;
				margin: 30px 50px 10px 30px;
				width: 600px;
			}

			p {
				font: 15px/25px 'RobotoLight', Arial, sans-serif;
				margin: 0px 10px 30px 30px;
				text-align: justify;
				text-indent: 2em;
				width: 890px;
			}

			#maps {
				height: 160px;
				margin: 20px 0;
				width: 100%;
			}

			#horario {
				margin: 10px 30px;
			}

			.horariosOnibus {
				display: inline-block;
				list-style: none;
				margin: 10px 5px;
				vertical-align: top;
				width: 50px;
			}

			.piracema {
				color: #cc0000;
			}

			.urbes {
				color: #00DD00;
			}

			#legenda {
				float: right;
				margin: 20px 50px 0px 0px;
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
					<span class="pergunta">O que é a Secot?</span>
					<p>SeCoT é a sigla para Semana da Computação e Tecnologia, um evento realizado pelos alunos de Ciências da Computação da UFSCar Sorocaba. Seu foco é disseminar conhecimentos e gerar debates sobre computação e suas tecnologias, introduzir às diversas carreiras no mercado de trabalho e gerar networking entre a comunidade.</p>
					<span class="pergunta">Quando será a edição 2012?</span>
					<p>A edição 2012 será realizada entre 07 e 12 de maio.</p>
					<span class="pergunta">Como posso me inscrever?</span>
					<p>Inicialmente, você deve fazer um pré-cadastro através do nosso site e então procurar um membro da organização para realizar o pagamento da taxa de inscrição. A data inicial será divulgada futuramente.</p>
					<span class="pergunta">Como chegar?</span>

					<p> Utilizando o transporte público, é possível tomar os ônibus da URBES, São João ou Piracema. É importante ressaltar que os dois se encontram no <a href="http://g.co/maps/exjsp">Terminal São Paulo</a>.</p>
					<p>URBES: é necessário adentrar o Terminal, utilizando um cartão unitário (que pode ser comprado na entrada do Terminal) no valor de R$ 2,85 (a confirmar) e tomar o ônibus 80 (UFSCar) no ponto F e o ponto final é na UFSCar (seus horários podem ser vistos mais a baixo).</p>
	   				<p>Piracema/São João: é necessário pegar o ônibus fora do Terminal, na região dos bancos, ou na rodoviária. Este ônibus possui uma placa indicando a viagem Sorocaba X Salto de Pirapora e possui um cartaz na frente indicando UFSCar. O valor de R$ 3,10 deve ser pago ao cobrador. O ponto final do ônibus fica em Salto de Pirapora, portanto é necessário indicar ao motorista que você deseja descer na UFSCar.</p>
					<a href="http://g.co/maps/2kkwx"><img src="img/mapagoogle.png" /></a>
					<span class="pergunta">Quais são as linhas e horários de ônibus?</span>
					<div id="horario">
						<ul class="horariosOnibus">
							<li class="piracema">05:00</li>
							<li class="urbes">05:20</li>
							<li class="piracema">05:30</li>
							<li class="urbes">05:45</li>
							<li class="piracema">06:00</li>
							<li class="urbes">06:10</li>
							<li class="urbes">06:25</li>
							<li class="piracema">06:30</li>
							<li class="urbes">06:45</li>
							<li class="piracema">06:50</li>
							<li class="urbes">07:00</li>
							<li class="urbes">07:10</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="piracema">07:10</li>
							<li class="urbes">07:20</li>
							<li class="urbes">07:25</li>
							<li class="urbes">07:30</li>
							<li class="piracema">07:30</li>
							<li class="urbes">07:35</li>
							<li class="urbes">07:45</li>
							<li class="piracema">07:50</li>
							<li class="piracema">08:10</li>
							<li class="urbes">08:15</li>
							<li class="piracema">08:30</li>
							<li class="urbes">08:35</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="piracema">08:50</li>
							<li class="urbes">08:55</li>
							<li class="piracema">09:10</li>
							<li class="piracema">09:30</li>
							<li class="urbes">09:35</li>
							<li class="piracema">09:50</li>
							<li class="piracema">10:10</li>
							<li class="urbes">10:25</li>
							<li class="piracema">10:30</li>
							<li class="piracema">10:50</li>
							<li class="piracema">11:10</li>
							<li class="urbes">11:15</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="piracema">11:30</li>
							<li class="piracema">11:50</li>
							<li class="urbes">12:05</li>
							<li class="piracema">12:10</li>
							<li class="piracema">12:30</li>
							<li class="piracema">12:50</li>
							<li class="urbes">12:55</li>
							<li class="piracema">13:10</li>
							<li class="piracema">13:30</li>
							<li class="urbes">13:45</li>
							<li class="piracema">13:45</li>
							<li class="piracema">14:00</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="piracema">14:15</li>
							<li class="piracema">14:30</li>
							<li class="urbes">14:35</li>
							<li class="piracema">14:45</li>
							<li class="piracema">15:00</li>
							<li class="piracema">15:10</li>
							<li class="piracema">15:20</li>
							<li class="urbes">15:25</li>
							<li class="piracema">15:30</li>
							<li class="piracema">15:40</li>
							<li class="urbes">15:50</li>
							<li class="piracema">15:50</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="piracema">16:00</li>
							<li class="piracema">16:10</li>
							<li class="urbes">16:15</li>
							<li class="piracema">16:18</li>
							<li class="piracema">16:25</li>
							<li class="piracema">16:33</li>
							<li class="urbes">16:40</li>
							<li class="piracema">16:40</li>
							<li class="piracema">16:45</li>
							<li class="piracema">16:50</li>
							<li class="piracema">16:55</li>
							<li class="piracema">17:00</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="urbes">17:05</li>
							<li class="piracema">17:05</li>
							<li class="piracema">17:12</li>
							<li class="piracema">17:17</li>
							<li class="piracema">17:23</li>
							<li class="urbes">17:30</li>
							<li class="piracema">17:30</li>
							<li class="piracema">17:36</li>
							<li class="piracema">17:42</li>
							<li class="piracema">17:48</li>
							<li class="piracema">17:54</li>
							<li class="urbes">17:55</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="piracema">18:00</li>
							<li class="piracema">18:08</li>
							<li class="piracema">18:16</li>
							<li class="urbes">18:20</li>
							<li class="piracema">18:24</li>
							<li class="piracema">18:32</li>
							<li class="piracema">18:42</li>
							<li class="urbes">18:45</li>
							<li class="piracema">18:55</li>
							<li class="piracema">19:05</li>
							<li class="urbes">19:10</li>
							<li class="piracema">19:20</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="urbes">19:35</li>
							<li class="piracema">19:40</li>
							<li class="urbes">20:00</li>
							<li class="piracema">20:00</li>
							<li class="piracema">20:20</li>
							<li class="urbes">20:33</li>
							<li class="piracema">20:45</li>
							<li class="urbes">21:06</li>
							<li class="piracema">21:10</li>
							<li class="urbes">21:39</li>
							<li class="piracema">21:40</li>
							<li class="piracema">21:55</li>
						</ul>
						<ul class="horariosOnibus">
							<li class="piracema">22:10</li>
							<li class="urbes">22:12</li>
							<li class="piracema">22:25</li>
							<li class="piracema">22:40</li>
							<li class="piracema">22:55</li>
							<li class="urbes">23:20</li>
							<li class="piracema">23:20</li>
							<li class="urbes">23:51</li>
							<li class="piracema">00:15</li>
						</ul>
						<div id="legenda">
							<span class="urbes">&#9632;</span> Urbes<br />
							<span class="piracema">&#9632;</span> Piracema/São João
						</div>
					</div>
					<span class="pergunta">Quais serão as palestras?</span>
					<p>A lista completa de palestras pode ser visualizada na página incial ou através da agenda do evento.</p>
					<!--
					<span class="pergunta">Quais são as opções de alimentação?</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ipsum, ultricies et pharetra laoreet, faucibus at lectus. Sed dui nibh, sodales sit amet pharetra sit amet, ullamcorper vitae odio. Etiam auctor posuere leo, ut sollicitudin erat venenatis vitae. Mauris sagittis mauris sed ante fringilla eget fermentum felis dignissim. Aliquam erat volutpat. Nulla porttitor velit viverra nisi vestibulum non rhoncus purus pulvinar. Curabitur lacus mauris, iaculis eget tincidunt a, ultrices ac nisi. Nunc luctus lacus et nunc eleifend sed suscipit tortor feugiat. Etiam eu enim sit amet libero fermentum rutrum. Duis sed cursus enim.</p>
					-->
					<span class="pergunta">Eu recebo um certificado ao final do evento?</span>
					<p>Sim, você receberá um certificado após o término do evento. Será divulgada uma data para retirá-lo na UFSCar Sorocaba.</p>
					<span class="pergunta">Quem são os organizadores do evento?</span>
					<p>A SeCoT é organizada anualmente pelos alunos de Ciência da Computação da UFSCar Sorocaba. Este ano a equipe é formada pelos alunos: Alex Alves Matos, Alexandre Cavalheiros, André Rodrigues Mitsuoka, Bruno Gianelli Silva, Caio H. Rainha Cones, Eduardo Henrique Aleixo Martins, Felipe de Lima, Fernando Bonfim Andrade, Gabriel Stankevir Soares, Gabriela de Martins Jesus, Gabriela Lisboa Martins, Henrique Teruo Eihara, Hugo Noboru Nomura, Igor Francis Beloti, Lucas Gabriel Mendez de Oliveira, Lucio Mitsuru Seki, Luis Augusto França Barbosa, Marcos Cavalcante Barbosa, Mateus Caldas Craveiro, Matheus Moraes Pinheiro, Natália Siste Santos, Nathana Facion, Renato Angelo Poulicer, Rodrigo Mello Arraes, Thais Akemi Inaba, Thiago Wittmann, Viviane Bonadia dos Santos, com apoio dos professores: Tiago Agostinho de Almeida e Tiemi Christine Sakata.</p>
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