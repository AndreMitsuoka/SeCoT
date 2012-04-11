<?php
	$page = "palestra";

	$slug = $_GET['p'];

	$palestras = array();

	$palestras['exemplo']['titulo']      = "";
	$palestras['exemplo']['descricao']   = "";
	$palestras['exemplo']['palestrante'] = "";
	$palestras['exemplo']['biografia']   = "";

	$palestras['scrum-ou-kanban-qual-voce-usaria']['titulo']      = "Scrum ou Kanban, qual você usaria?";
	$palestras['scrum-ou-kanban-qual-voce-usaria']['descricao']   = "A palestra será uma comparação entre os métodos ágeis Scrum e Kanban e quais são os cenários que levam um time adotar um outro framework de desenvolvimento.  Além dos conceitos sobre os métodos, exemplos práticos e vivenciados no dia-a-dia de empresas e times onde tive a oportunidade de aplicar esses frameworks.";
	$palestras['scrum-ou-kanban-qual-voce-usaria']['palestrante'] = "César";
	$palestras['scrum-ou-kanban-qual-voce-usaria']['biografia']   = "";

	$palestras['inovacao-centrada-no-usuario']['titulo']      = "Inovação centrada no usuário: criando os produtos que a sua vovó vai usar e você vai ficar feliz em comprar";
	$palestras['inovacao-centrada-no-usuario']['descricao']   = "Com a necessidade de inovar se tornando cada vez mais urgente nas agendas das organizações, investir apenas na inovação de base tecnológica mostrou-se uma estratégia com limitações claras. Neste cenário, um paradigma de inovação cada vez mais popular é a chamada Inovação Centrada no Usuário. Nesta perspectiva, o processo de inovação se dá a partir da inspiração nos hábitos e contextos do consumidor. A Inovação Centrada no Usuário parte da premissa de que inovações devem ser geradas de forma a – baseadas no entendimento do usuário – solucionar problemas e atender demandas identificadas em um contexto social específico.";
	$palestras['inovacao-centrada-no-usuario']['palestrante'] = "Dr. Paulo Melo";
	$palestras['inovacao-centrada-no-usuario']['biografia']   = "Paulo Melo é psicólogo e mestre em Psicologia Cognitiva pela UFPE. Em 2010, ele concluiu o doutorado profissional em User-system Interaction na University of Technology Eindhoven (Holanda). Profissionalmente, Paulo atuou como Designer de Interação e Especialista em Usabilidade no CESAR e CSIRO (Austrália). Nos últimos anos, ele tem atuado na área de Experiência do Usuário (UX), onde trabalhou pelo CESAR Sul, Philips e In/situm. Ao longo de sua experiência profissional, Paulo participou de projetos ligados a jogos para aparelhos celulares, acessibilidade, aplicações médicas, TV digital, sistemas de informação e design de produtos. Atualmente Paulo é gerente de negócios para projetos em UX no CESAR em São Paulo.";

	$palestras['sexo-drogas-e-software-livre']['titulo']      = "Sexo, Drogas e Software Livre: Filosofando nas Trincheiras entre o Bem e o Mal";
	$palestras['sexo-drogas-e-software-livre']['descricao']   = "Usuários de software privativo são vítimas de estupro, de pedofilia ou apenas gostam de sacanagem?  Ficam impotentes quando tentam abandonar o vício?  Será que os traficantes de software privativo, pedófilos e estupradores de usuários, vão algum dia achar que exageraram no gozo do poder?  Temas pesados discutidos explicitamente, com pitadas de humor levemente apimentado.  Não recomendado para menores de XXX anos.";
	$palestras['sexo-drogas-e-software-livre']['palestrante'] = "Alexandre Oliva";
	$palestras['sexo-drogas-e-software-livre']['biografia']   = "Alexandre Oliva é ativista pela liberdade de software e pelo software livre; conselheiro da FSFLA, Fundação Software Livre América Latina; mantenedor do GNU Linux-libre, uma versão do núcleo Linux sem as armadilhas privativas de liberdade presentes na versão original; co-mantenedor da GNU libc e de porções do GCC e GNU binutils; co-autor do livro A Revolução do Software Livre, publicado pela Comunidade Sol; colunista da Revista Espírito Livre; engenheiro de compiladores livres na Red Hat Brasil; engenheiro de computação e mestre em ciências da computação formado na Unicamp.";

	$palestras['comecando-com-nodejs']['titulo']      = "Começando com Node.JS";
	$palestras['comecando-com-nodejs']['descricao']   = "Veja como desenvolver aplicativos realtime usando Node.js nesta introdução prática. Você verá alguns conceitos de JavaScript, além de um tutorial prático de Node.js";
	$palestras['comecando-com-nodejs']['palestrante'] = "Nando";
	$palestras['comecando-com-nodejs']['biografia']   = "";





	if(!isset($palestras[$slug])){
		exit();
	}

	$titulo      = $palestras[$slug]['titulo'];
	$descricao   = $palestras[$slug]['descricao'];
	$palestrante = $palestras[$slug]['palestrante'];
	$biografia   = $palestras[$slug]['biografia'];
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
				width: 890px;
			}

			.subtitulo {
				color: #222;
				display: block;
				font: 30px/40px 'RobotoLight', Arial, sans-serif;
				margin: 20px 30px 10px 30px;
				width: 890px;
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
					<span class="titulo"><?php echo $titulo; ?></span>
					<p><?php echo $descricao; ?></p>
					<span class="subtitulo"><?php echo $palestrante; ?></span>
					<p><?php echo $biografia; ?></p>
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