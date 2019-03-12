<?php include("header.php"); ?>

	<div class="login">
					
		<h3>Register</h3>
		<form action="user_insert.php" method="POST">
			Username:<br>
			<input type="text" name="Username">
			<br>
			Password:<br>
			<input type="password" name="Password">
			<br>
			E-mail:<br>
			<input type="text" name="Email">
			<br><br>
			<input type="submit" name="Insert" value="Submit">
		</form>
		
	</div>
					
<?php include("footer.php"); ?>