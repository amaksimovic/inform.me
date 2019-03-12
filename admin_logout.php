<?php

	session_start();
	unset($_SESSION['status']);
	session_destroy();
	header("location: {$_SERVER['HTTP_REFERER']}");

?>