<?php

	header('Content-Type: text/html; charset=utf-8');
	require "config.php";
	
	if(isset($_POST["post"])){
			if(isset($_POST['category']) && isset($_POST['title']) && isset($_POST['text']) && isset($_FILES['fup_image'])){
				if (!empty($_POST['category']) && !empty($_POST['title']) && !empty($_POST['text']) && !empty($_FILES['fup_image'])) {
					$title = addslashes($_POST["title"]);
					$text = addslashes($_POST["text"]);			
			
			$category = $_POST['category'];
			
			$time = new DateTime();
			$timestamp = date_format($time,'Y-m-d H:i:s');
			move_uploaded_file($_FILES['fup_image']['tmp_name'],"img/".$_FILES['fup_image']['name']);
			$image = $_FILES['fup_image']['name'];		 
						
			$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			$query = "INSERT INTO articles (id, category, title, text, image, date) VALUES (null,'{$category}', '{$title}','{$text}', '{$image}', '{$timestamp}')";
			
			if (mysqli_query($conn, $query) === TRUE){
				header("Location: admin_articles.php");
				} else {
				echo "Error. <a href='{$_SERVER['HTTP_REFERER']}'>Try again!</a>";
				}
			} else {
			echo "<br>It is required to fill out all the input fields! <a href='{$_SERVER['HTTP_REFERER']}'>Try again!</a>";
			}
		}
	}

?>

