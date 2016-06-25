<?php
	// Verifica se o usuário está altenticado
	//include("verifica.php");
	include ("classes/post.php");
	include ("classes/comment.php");
	include ("connect.php");
?>
<html>
	<head>
	<meta charset="utf-8">
	<title> Post </title> 

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
	          <a class="brand" href="index.php">Blog</a>
	          <div class="nav-collapse collapse">
	            <ul class="nav">
	              <li><a href="index.php">Home</a></li>
	              <li><a href="administrator/index.html">Admin</a></li>
	            </ul>
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>
	
	<div class="container">
		
		<?php
			
			
			if (!empty($_GET['id'])){
				
				$id = $_GET['id'];
			
				$pes = mysql_query("SELECT p.id AS post_id, p.user_id AS post_user_id, p.title AS post_title, p.content AS post_content, p.date AS post_date,
					u.email AS user_email, u.name AS user_name FROM posts p join users u on p.user_id = u.id WHERE p.id = ".$id);

				if (mysql_num_rows($pes) == 0){
					echo "<p>Nenhum post encontrado.</p>";
				}else {
					while($row = mysql_fetch_array($pes)){
						$post_id = htmlentities($post_id);
						$post_user_id = htmlentities($post_user_id);
						$post_title = htmlentities($post_title);
						$post_content = htmlentities($post_content);
						$post_date = htmlentities($post_date);
						$user_email = htmlentities($user_email);
						$user_name = htmlentities($user_name);

						$post = new post($row['post_id'], $row['post_user_id'], $row['user_email'], $row['user_name'], $row['post_title'], $row['post_content'], $row['post_date']);

						?>
							<div class="row">
						<?php
						echo "<h2>".$post->title."</h2>";
						?>
							</div>
							<div class="row">
						<?php
						echo $post->content;
						?>
							</div>
							<br />
							<div class="row">
						<p>
				          <i class="icon-user"></i> by <?php echo $post->user_name ?>
				          | <i class="icon-calendar"></i> <?php echo date_format($post->date, 'd/m/Y') ?>
				      	</p>
							</div>
							<hr>
						<?php
					}
					if($_SERVER['REQUEST_METHOD'] == 'POST')
					{				
						$post_id = $post->id;
						$name = $_POST['name'];
						$email = $_POST['email'];
						$content = $_POST['content'];
								
						if ( mysql_query("insert into comments (post_id, email, name, content) values ('$post_id', '$email', '$name', '$content')"))
						{
								
						?>
								
						<div class="alert alert-success">Comentário publicado com sucesso!</div>
							
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
					$com = mysql_query("SELECT * FROM comments WHERE post_id = '$id'");
					if (mysql_num_rows($com) != 0) {
						while($row = mysql_fetch_array($com)){
						$comment = new comment($row['id'], $row['post_id'], $row['email'], $row['name'], $row['content'], $row['date']);

						?>

						<div class="row offset2">
						  <div class="span8">
						    <div class="row">
						      <div class="span8">
						        <h4><?php echo $comment->name ?></h4>
						      </div>
						    </div>
						    <div class="row">
						      <div class="span8">      
						        <p>
						          <?php echo $comment->content ?>
						        </p>
						      </div>
						    </div>
						    <div class="row">
						      <div class="span8">
						        <p></p>
						        <p>
						          <i class="icon-calendar"></i> <?php echo date_format($comment->date, 'd/m/Y H:i:s') ?>
						        </p>
						      </div>
						    </div>
						    <hr>
						  </div>
						</div>
						<?php
						}
					}
				}
			} else
			{
				echo "<h3>Não foi passado nenhum parâmetro para a busca!</h3>";
			}
		
		?>

		<form method="POST" action="post.php?id=<?php echo $post->id ?>">
		  <fieldset>
		    <legend>Novo Comentário</legend>
		    <div class="row-fluid span8 offset2">
		    	<input type="text" name="name" placeholder="Nome" class="span8" required>
			</div>
			<div class="row-fluid span8 offset2">
		    	<input type="email" name="email" placeholder="Email" class="span8" required>
			</div>
			<div class="row-fluid span8 offset2">
		    	<textarea rows="15" name="content" placeholder="Conteúdo" class="span8"></textarea>
			</div>
		    <div class="row-fluid span8 offset2">
		    	<button type="submit" class="btn">Publicar</button>
		    </div>
		  </fieldset>
		</form>
	
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	</body>
</html>