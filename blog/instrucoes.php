<?php
	// Verifica se o usuário está altenticado
	//include("verifica.php");
	include ("connect.php");
	include ("classes/post.php");
	include ("classes/comment.php");

?>
<html>
	<head>
	<meta charset="utf-8">
	<title> Inicial </title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="style/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="style/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="style/css/base.css" rel="stylesheet" media="screen">
	
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="brand" href="#">Blog</a>
	          <div class="nav-collapse collapse">
	            <ul class="nav">
	              <li class="active"><a href="index.php">Home</a></li>
	              <li><a href="administrator/index.html">Admin</a></li>
                      <li><a href="instrucoes.php">Instruções</a></li>
	            </ul>
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>
	
	<div class="contaier">

		<div class="row offset2">
						  <div class="span8">
						    <div class="row">
						      <div class="span8">
						        <h4><a href="#">Instruções</a></h4>
						      </div>
						    </div>
						    <div class="row">
						      <div class="span2">
						        <a href="post.php?id=<?php echo $post->id ?>" class="thumbnail">
						            <img src="images/260x180.gif" alt="">
						        </a>
						      </div>
						      <div class="span6">      
						        <p><span class="destaque"><strong>Usuario padrão: </strong></span>admin@email.com</p>
						        <p><span class="destaque"><strong>Senha padrão: </strong></span>123@admin</p>
						        <p><span class="destaque"><strong>Fonte do blog: </strong></span><a href='blog.zip'>aqui</a></p>
							<p><span class="destaque"><strong>Reiniciar banco de dados: </strong></span><a href='reset.php'>aqui</a></p>
						      </div>
						    </div>
						</div>
		</div>
	
	</div>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
	</body>
</html>