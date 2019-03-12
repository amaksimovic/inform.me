<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>INFORM.ME</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:700,700i,800,900&amp;subset=latin-ext" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet"> 
	</head>

<body>

	<div id="wrapper">

		<header>
		
			<div id="logo">
			
				<a href="index.php"><h1>INFORM.ME</h1></a>
			
			</div>
			
			<nav>
				<ul>
					<li><a href="admin_create.php">create new article</a></li>
					<li><a href="admin_articles.php">all articles</a></li>
				</ul>
			</nav>

			<?php session_start(); if(isset($_SESSION['status']) && $_SESSION['status'] == true) { ?>
			
				<div id="user">
					
					<span><?php echo "You are logged in, ".$_SESSION['username']."!"; ?></span>
					<a href="admin_logout.php">Logout</a>			
					
				</div>
				
			<?php } else {
						header("location: admin.php");
					}
			?>			
		
		</header>
		
		<section>
		
		<div class="page">
		
		<h3>Post an article</h3>
	
			<form action="admin_update.php" method="POST" name="article" enctype="multipart/form-data">
	
				<select name="category">
					<option value="" disabled selected>Select category</option>
					<option>Politics</option>
					<option>Business</option>
					<option>Culture</option>
					<option>Sports</option>
					<option>Lifestyle</option>
				</select><br><br>
				
				<input type="text" name="title" placeholder="Write a title..."><br><br> 
				<textarea name="text" rows="18" cols="60" placeholder="Write an article..."></textarea><br><br>
				<label>Upload image: </label><input type="file" name="fup_image"><br><br>
				<input type="submit" name="post" value="Post"><br><br>
				
			</form><br>	
			
		</div>
		
<?php

	include("footer.php");

?>