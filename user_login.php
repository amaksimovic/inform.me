<?php 

	include("header.php");

?>
	<div class="login">
	
		<h3>Login</h3>
		
		<form action="user_process.php" method="POST">
		
		Username:<br>
			<input type="text" name="Username">
			<br>
		Password:<br>
			<input type="password" name="Password">
			<br><br>
			<input type="submit" name="submit" value="Submit">
		
		</form><br>
						
		<p>If you are not registered with INFORM.ME, you can do that <a href="user_register.php">here</a></p>	
	
	</div>

<?php
					
	include("footer.php"); 

?>