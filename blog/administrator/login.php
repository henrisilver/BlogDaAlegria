<?php
	// Inicia a sessão
	session_start();
	
	// Conecta no banco
	include ("../connect.php");
	
	// Pega os dados enviados
	$login = $_POST['login'];
	$password = $_POST['password'];

	
	// Roda o SQL no banco de dados
	$aut = mysql_query("SELECT * FROM users WHERE email = '$login' && password = '$password'");
	
	// Se o resultado é positivo
	if($row = mysql_fetch_array($aut)){
	
		// Cria as variáveis de sessão com os valores
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
		
		// Redireciona para a agenda
		header("Location:principal.php");
		
	// Caso contrário
	}else{
	
		// Limpa as variáveis de sessão
		$_SESSION['login'] = "";
		$_SESSION['password'] = "";
		
		// Redireciona para a página de inicial de login
		header("Location:index.html");
	}
?>