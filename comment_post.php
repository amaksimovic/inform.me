<?php

	session_start();
	require "config.php";
	
	if(isset($_POST["post"])){
			if(isset($_POST['message'])){
				if (!empty($_POST["message"])) {
					$password = trim($_POST["message"]);
	
			$user = $_SESSION['username'];
			$message = strip_tags($_POST['message']);
			$message = addslashes($message);
			$time = new DateTime();
			$timestamp = date_format($time,'Y-m-d H:i:s');
			$page_url = $_SERVER['HTTP_REFERER'];
			
			$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			$query = "INSERT INTO comments (id, user, message, date, page_url) VALUES (null,'{$user}', '{$message}','{$timestamp}','{$page_url}')";
			
			if (mysqli_query($conn, $query) === TRUE){
				header("Location: " . $_SERVER['HTTP_REFERER']);
				} else {
				echo "Error. <a href='{$_SERVER['HTTP_REFERER']}'>Try again!</a>";
				}
			} else {
			echo "<br>It is required to fill out all the input fields! <a href='{$_SERVER['HTTP_REFERER']}'>Try again!</a>";
			}
		}
	}

?>