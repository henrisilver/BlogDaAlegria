<?php
	// Inicia a sess�o
	session_start();
	
	// Conecta no banco
	include ("../connect.php");
	
	// Pega os dados enviados
	$login = $_POST['login'];
	$password = $_POST['password'];

	
	// Roda o SQL no banco de dados
	// $aut = mysql_query("SELECT * FROM users WHERE email = '$login' && password = '$password'");

	$pdo = new PDO('mysql:host=localhost;dbname=eseg_t2_restr_dupla1', 'restrict_dupla01', 'pwd0232123');
	$statement = $pdo->prepare('SELECT * FROM users WHERE email = :login && password = :password');
	$statement->bindValue(':login', $login);
	$statement->bindValue(':password', $password
	$statement->execute();

	// Se o resultado � positivo
	if($row = $stmt->fetch()){
	
		// Cria as vari�veis de sess�o com os valores
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
		
		// Redireciona para a agenda
		header("Location:principal.php");
		
	// Caso contr�rio
	}else{
	
		// Limpa as vari�veis de sess�o
		$_SESSION['login'] = "";
		$_SESSION['password'] = "";
		
		// Redireciona para a p�gina de inicial de login
		header("Location:index.html");
	}
?>