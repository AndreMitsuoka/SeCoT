<div id="header">
	<?php
		/*
		if(isset($_GET["logo3"])){
			echo '<img src="img/logo3.png" style="height: 185px; margin-top: 10px;" />';
		} else if(isset($_GET["logo2"])){
			echo '<img src="img/logo2.png" style="height: 180px; margin-top: 10px;" />';
		} else {
			echo '<img src="img/logo.png" />';
		}
		*/
	?>
	<img src="img/logo3.png" style="height: 185px; margin-top: 10px;" />
	<span>IV Semana da Computação<br/>e Tecnologia</span>
	<ul id="menu">
		<li <?php if($page == "index") echo "class=\"selected\""; ?> ><a href="/">Início</a></li>
		<li <?php if($page == "agenda") echo "class=\"selected\""; ?> ><a href="/agenda">Agenda</a></li>
		<li <?php if($page == "faq") echo "class=\"selected\""; ?> ><a href="/faq">FAQ</a></li>
	</ul>
</div>
