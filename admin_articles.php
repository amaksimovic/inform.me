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
					<li>all articles</li>
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
		
		<h3>All articles</h3>
	
			<?php
			
				require("config.php");
				
				$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
				$query = "SELECT * FROM articles";				
				$result = mysqli_query($conn, $query);
				
				if (mysqli_num_rows($result) > 0) {
				?>
				<table>
					<tr>
						<th>Title</th>
						<th>Category</th>
						<th>Date</th>
						<th>Delete</th>
					</tr>
				<?php
					while($row = mysqli_fetch_assoc($result)) { 
						echo "<tr>" . 
						"<td><a href='page.php?id=".$row['id']."'>".$row['title'] . "</a></td>" . 
						"<td>" . $row['category'] . "</td>" . 
						"<td>" . $row['date'] . "</td>" . 
						"<td>" . "<a href='admin_delete.php?id=" . $row['id'] . "'>Delete</a>" . "</td></tr>";} 									
				?>
				</table>
				<?php
				
					} else {
						echo "<section>Database is empty!</section>";
					}	
				?>
		
	</div>
		
<?php

	include("footer.php");

?>