<?php
	// Verifica se o usuário está altenticado
	include("verifica.php");
?>
<html>
	<head>
	<meta charset="utf-8">
	<title> Administrador </title>
	</head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="../style/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../style/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="../style/css/base.css" rel="stylesheet" media="screen">

	<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Admin</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="newpost.php">Novo Post</a></li>
              <li><a href="newadmin.php">Novo Administrador</a></li>
              <li class="pull-ritgh"><a href="logout.php">Sair</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<div class="container">
		
		<h4><?php echo "Olá ".$users->name."!";?></h4>		
	
	</div>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="../style/js/bootstrap.min.js"></script>
	</body>
</html>