<?php
	// Inicia a sessão
	session_start();
	
	// Inclui as classes e as informações do bd
	include ("../classes/classes.php");
	include ("../connect.php");
	
	$login_sessao = $_SESSION['login'];
	$password_sessao = $_SESSION['password'];
	
	$aut = mysql_query("SELECT * FROM users WHERE email = '".$login_sessao."' && password = '".$password_sessao."'");
	
	// Define como padrão que o usuário não está cadastrado
	$cadastrado = 0;
	
	// Verifica os resultados da query
	while($row = mysql_fetch_array($aut)){
		// Se o usuário foi encontrado é criado o objeto usuário
		$users = new users($row['id'], $row['email'], $row['password'], $row['name']);
		// Define que é usuário cadastrado
		$cadastrado = 1;
	}
	
	// Se o usuário não está cadastrado/logado
	if(!$cadastrado)
		// Redireciona para a index
		header("Location:index.html");
?>