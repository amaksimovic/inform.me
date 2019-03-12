<?php
	
	require "config.php";
	
	if(isset($_POST["Insert"])){
		if(isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['Email'])){
			if (!empty($_POST["Username"]) && !empty($_POST["Password"]) && !empty($_POST["Email"])) {
				$username = trim($_POST["Username"]);
				$password = trim($_POST["Password"]);
	
			$username = strip_tags($_POST['Username']);
			$password = strip_tags($_POST['Password']);  
			$email = strip_tags($_POST['Email']);  
			$username = str_replace("'","",$username);
			$username = str_replace("-","",$username);
			$password = str_replace("'","",$password);
			$password = str_replace("-","",$password);
			$email = str_replace("'","",$email);
			$email = str_replace("-","",$email);
			
			$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			$query = "INSERT INTO users (id, username, password, email) VALUES (null,'{$username}', '{$password}', '{$email}')";
			$user_check = "SELECT * FROM users WHERE username='$username' LIMIT 1";
			
			$result = mysqli_query($conn, $user_check);			
			$user = mysqli_fetch_assoc($result);
									
			if (mysqli_query($conn, $query) === TRUE){
				if ($user['username'] === $username){
					echo "Choose another username. This one is already taken.<a href='user_register.php'>Try again!</a>";
				} else {
					echo "You have successfully registered. Login <a href='user_login.php'>here</a>";
				} 
			} 
			} else {
				echo "<br>It is required to fill out all the input fields! <a href='user_register.php'>Try again!</a>";
			}
		}
	}

?>