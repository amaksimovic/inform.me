<?php require("config.php");?>
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
			<?php
				
				$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

				$query = "SELECT * FROM categories";
				
				$result = mysqli_query($conn, $query);
				
				for($i=0; $i<=mysqli_num_rows($result);$i++){
					while($row = mysqli_fetch_assoc($result)){
						echo "<li><a href='categories.php?category=".$row['category']."'>".$row['category']."</a></li>";
					}
				}
			?>
				</ul>
			</nav>

			<?php session_start(); if((isset($_SESSION['user_status']) && $_SESSION['user_status'] == true)){ ?>
			
			<div id="user">
				
				<span><?php echo "You are logged in, ".$_SESSION['username']."!"; ?></span>
				<a href="user_logout.php">Logout</a>			
				
			</div>
			
			<?php } else if ((isset($_SESSION['status']) && $_SESSION['status'] == true)){ ?>
				
				<div id="user">
			
					<span><?php echo "You are logged in, ".$_SESSION['username']."!"; ?></span>
					<a href="admin_logout.php">Logout</a><span> or get back to </span><a href="admin_articles.php">admin page</a>					
				
				</div>
				
			<?php } else { ?>
			
				<div id="user">
					
						<span><a href="user_register.php">Register</a></span>
						<span><a href="user_login.php">Login</a></span>				
						
				</div>
				
			<?php } ?>				
		
		</header>
		
		<section>