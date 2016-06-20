<?php
	$usuario = "restrict_dupla01";
	$password = "pwd0232123";

	$bd = "eseg_t2_restr_dupla1";
	$computador = "localhost";
	
	$con = mysql_connect($computador, $usuario, $password);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db($bd, $con);
	
?>
