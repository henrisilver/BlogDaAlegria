<?php
	// Inicia a sessão
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

	// Se o resultado é positivo
	if($row = $stmt->fetch()){
	
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