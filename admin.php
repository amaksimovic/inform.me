<?php include("config.php");?>
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
		
		</header>
		
		<section>
				
			<div class="login">
			
				<h3>Login</h3>
				<form action="admin_process.php" method="POST">
					Username:<br>
					<input type="text" name="Username">
					<br>
					Password:<br>
					<input type="password" name="Password">
					<br><br>
					<input type="submit" name="submit" value="Submit">
				</form>
			
			</div>
				
<?php include("footer.php"); ?>