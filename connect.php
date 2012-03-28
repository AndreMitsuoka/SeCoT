<?php
	$link = mysql_connect('localhost', 'kabombic_secot', 'q;QM53Th$JU{');
	if (!$link) {
	    die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
	mysql_close($link);
?>