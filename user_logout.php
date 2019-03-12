<?php

	session_start();
	unset($_SESSION['user_status']);
	session_destroy();
	header("location: {$_SERVER['HTTP_REFERER']}");

?>