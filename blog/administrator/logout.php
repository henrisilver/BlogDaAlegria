<?php 
	// Inicia a sess�o
	session_start();

	// Limpa as vari�veis de sess�o
	$_SESSION['login'] = "";
	$_SESSION['password'] = "";

	session_destroy();
	
	// Redireciona para a p�gina inicial de login
	header("Location:index.html");
?>