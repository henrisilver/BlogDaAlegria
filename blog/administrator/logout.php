<?php 
	// Inicia a sessão
	session_start();

	// Limpa as variáveis de sessão
	$_SESSION['login'] = "";
	$_SESSION['password'] = "";

	session_destroy();
	
	// Redireciona para a página inicial de login
	header("Location:index.html");
?>