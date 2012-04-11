<div id="header">
	<img src="<?php echo $urlbase; ?>/img/logo3.png" style="height: 185px; margin-top: 10px;" />
	<span>IV Semana da Computação<br/>e Tecnologia</span>
	<ul id="menu">
		<li <?php if($page == "index") echo "class=\"selected\""; ?> ><a href="<?php echo $urlbase; ?>/">Início</a></li>
		<li <?php if($page == "agenda") echo "class=\"selected\""; ?> ><a href="<?php echo $urlbase; ?>/agenda">Agenda</a></li>
		<li <?php if($page == "faq") echo "class=\"selected\""; ?> ><a href="<?php echo $urlbase; ?>/faq">FAQ</a></li>
	</ul>
</div>
