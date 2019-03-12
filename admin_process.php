<?php

	require "config.php";
	
	if(!isset($_POST['Username'])||!isset($_POST['Password'])){
		die("Wrong username or password");
	}	
	
	$username = strip_tags($_POST['Username']);
	$password = strip_tags($_POST['Password']);  
	$username = str_replace("'","",$username);
	$username = str_replace("-","",$username);
	$password = str_replace("'","",$password);
	$password = str_replace("-","",$password);

	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
	$query = "select * from admins where username='{$username}' and password='{$password}' limit 1";
	 
	$res = mysqli_query($conn,$query);
	$user = mysqli_fetch_object($res);
	
	if($user){
		session_start();
		$_SESSION['status'] = true;
		$_SESSION['username'] = $username;
		header("location: admin_articles.php");
	} else {
		echo "Wrong username or password, " . "<a href='admin.php'>Try again</a>";
	}

?>