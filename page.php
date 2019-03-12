<?php 

	include("header.php");
	
	$id = $_GET['id'];

	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$query = "SELECT * FROM articles WHERE id='{$id}'";
	
	$result = mysqli_query($conn, $query);
	
	for($i=0; $i<=mysqli_num_rows($result);$i++){
		while($row = mysqli_fetch_assoc($result)){
			echo "<div class='page'><p>".$row['date']." ".$row['category']."</p><h2>".$row['title']."</h2><img src='img/".$row['image']."' width='600' height='300'><p>".$row['text']."</p><hr>";
		}	
	}

	if((isset($_SESSION['user_status']) && $_SESSION['user_status'] == true) || ((isset($_SESSION['status']) && $_SESSION['status'] == true))) { ?>
	
	<h3>Leave a comment</h3>
	
			<form action="comment_post.php" method="POST" name="text">
				
				<textarea name="message" rows="18" cols="60" placeholder="Write a comment..."></textarea><br><br>
				<input type="submit" name="post" value="Post">
		
			</form>

	<?php } else {
		
		echo "<a href='user_login.php'>Login to comment</a>";
		
	}

	include("comments.php");
	include("footer.php"); 

?>