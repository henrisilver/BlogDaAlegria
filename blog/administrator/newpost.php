<?php
	// Verifica se o usuário está altenticado
	include("verifica.php");
?>
<html>
	<head>
	<meta charset="utf-8">
	<title> Novo Post </title>
	</head> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="../style/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../style/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="../style/css/base.css" rel="stylesheet" media="screen">

	<link rel="stylesheet" href="/javascripts/aloha/css/aloha.css" type="text/css">
    <script src="/javascripts/aloha/lib/require.js"></script>
    <script src="/javascripts/aloha/lib/aloha.js"
      data-aloha-plugins="common/ui,common/format,common/highlighteditables,common/link"></script>
	
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
              <li class="active"><a href="#">Novo Post</a></li>
              <li><a href="newadmin.php">Novo Administrador</a></li>
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
		$title = $_POST['title'];
		$content = $_POST['content'];
        $pub = htmlentities($pub);
        $title = htmlentities($title);
        $content = htmlentities($content);
				
		if ( mysql_query("insert into posts (user_id, title, content) values ('$pub', '$title', '$content')"))
		{
				
		?>
				
		<div class="alert alert-success">Post publicado com sucesso!</div>
			
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

		<form method="POST" action="newpost.php">
		  <fieldset>
		    <legend>Novo Post</legend>
		    <div class="row-fluid">
		    	<input type="text" name="title" placeholder="Título" class="span8" required>
			</div>
			<div class="row-fluid">
		    	<textarea rows="15" id="content" name="content" placeholder="Conteúdo" class="span8"></textarea>
		    	<script type="text/javascript">
        Aloha.ready( function() {
            Aloha.jQuery('#content').aloha();
        });
    </script>
			</div>
		    <div class="row-fluid">
		    	<button type="submit" class="btn">Publicar</button>
		    </div>
		  </fieldset>
		</form>
		
		</div>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="../style/js/bootstrap.min.js"></script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	</body>
</html>