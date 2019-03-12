<?php

	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		require "config.php";
		$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$query = "DELETE FROM articles WHERE id = {$id}";		
		mysqli_query($conn, $query);
		header("Location: admin_articles.php");
	}
	
?>