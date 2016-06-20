<?php
	// Verifica se o usuário está altenticado
	include("verifica.php");
?>
<html>
	<head>
	<meta charset="utf-8">
	<title> Novo Adiministrador </title>
	</head> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="../style/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../style/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="../style/css/base.css" rel="stylesheet" media="screen">

	<link rel="stylesheet" href="/javascripts/aloha/css/aloha.css" type="text/css">
	
	</head>
	<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="principal.php">Admin</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="principal.php">Home</a></li>
              <li class="active"><a href="newpost.php">Novo Post</a></li>
              <li><a href="#">Novo Administrador</a></li>
              <li class="pull-ritgh"><a href="logout.php">Sair</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{				
		$pub = $users->id;
		$email = $_POST['email'];
		$passwd = $_POST['passwd'];
		$name = $_POST['name'];
				
		if ( mysql_query("insert into users (email, password, name) values ('$email', '$passwd', '$name')"))
		{
				
		?>
				
		<div class="alert alert-success">Administrador inserido com sucesso!</div>
			
		<?php
		} 
		else 
		{
		?>
			<div class="alert alert-error">
		<?php
		echo mysql_error();
		?>
			</div>
		<?php
		}
	}
	?>
		
		<h4><?php echo "Olá ".$users->name."!";?></h4>

		<form method="POST" action="newadmin.php">
		  <fieldset>
		    <legend>Novo Administrador</legend>
		    <div class="row-fluid">
		    	<input type="email" name="email" placeholder="Email" class="span8" required>
			</div>
			<div class="row-fluid">
		    	<input type="password" name="passwd" placeholder="Password" class="span8" required>
			</div>
			<div class="row-fluid">
		    	<input type="text" name="name" placeholder="Nome" class="span8" required>
			</div>
		    <div class="row-fluid">
		    	<button type="submit" class="btn">Adicionar</button>
		    </div>
		  </fieldset>
		</form>
		
		</div>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="../style/js/bootstrap.min.js"></script>
	</body>
</html>