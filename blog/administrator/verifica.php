<?php
	// Inicia a sess�o
	session_start();
	
	// Inclui as classes e as informa��es do bd
	include ("../classes/classes.php");
	include ("../connect.php");
	
	$login_sessao = $_SESSION['login'];
	$password_sessao = $_SESSION['password'];
	
	$aut = mysql_query("SELECT * FROM users WHERE email = '".$login_sessao."' && password = '".$password_sessao."'");
	
	// Define como padr�o que o usu�rio n�o est� cadastrado
	$cadastrado = 0;
	
	// Verifica os resultados da query
	while($row = mysql_fetch_array($aut)){
		// Se o usu�rio foi encontrado � criado o objeto usu�rio
		$users = new users($row['id'], $row['email'], $row['password'], $row['name']);
		// Define que � usu�rio cadastrado
		$cadastrado = 1;
	}
	
	// Se o usu�rio n�o est� cadastrado/logado
	if(!$cadastrado)
		// Redireciona para a index
		header("Location:index.html");
?>