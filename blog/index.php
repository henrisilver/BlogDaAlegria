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
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="administrator/index.html">Admin</a></li>
                      <li><a href="instrucoes.php">Instruções</a></li>
	            </ul>
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>
	
	<div class="contaier">

		<?php
			
				$pes = mysql_query("SELECT p.id AS post_id, p.user_id AS post_user_id, p.title AS post_title, p.content AS post_content, p.date AS post_date,
					u.email AS user_email, u.name AS user_name FROM posts p join users u on p.user_id = u.id");

				
				if (mysql_num_rows($pes) == 0){
					echo "<p>Nenhum post encontrado.</p>";
				}else {
					while($row = mysql_fetch_array($pes)){
						$post = new post($row['post_id'], $row['post_user_id'], $row['user_email'], $row['user_name'], $row['post_title'], $row['post_content'], $row['post_date']);
						$com = mysql_query("SELECT COUNT(C.id) AS NumberOfComments from comments C where post_id = ".$post->id);
						$result = mysql_fetch_assoc($com);
						$number = $result['NumberOfComments'];
						?>

						<div class="row offset2">
						  <div class="span8">
						    <div class="row">
						      <div class="span8">
						        <h4><a href="post.php?id=<?php echo $post->id ?>"><?php echo $post->title ?></a></h4>
						      </div>
						    </div>
						    <div class="row">
						      <div class="span2">
						        <a href="post.php?id=<?php echo $post->id ?>" class="thumbnail">
						            <img src="images/260x180.gif" alt="">
						        </a>
						      </div>
						      <div class="span6">      
						        <p>
						          <?php echo substr($post->content, 0, 430)."..." ?>
						        </p>
						        <p><a class="btn" href="post.php?id=<?php echo $post->id ?>">Read more</a></p>
						      </div>
						    </div>
						    <div class="row">
						      <div class="span8">
						        <p></p>
						        <p>
						          <i class="icon-user"></i> by <?php echo $post->user_name ?>
						          | <i class="icon-calendar"></i> <?php echo date_format($post->date, 'd/m/Y') ?>
						          | <i class="icon-comment"></i> <?php echo $number ?> Comments
						        </p>
						      </div>
						    </div>
						    <hr>
						  </div>
						</div>
					</div>

						<?php
					}
				}
		
		?>
	
	</div>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
	</body>
</html>