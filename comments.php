<hr><h3>Comments</h3>
<?php
		
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id=".$_GET['id'];
	
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$query = "SELECT * FROM comments WHERE page_url = '{$url}'";						
	
	$result = mysqli_query($conn, $query);
				
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<b>".$row['user']."</b> wrote on ".$row['date'].":<br><br>".$row['message'];
			if(isset($_SESSION['user_status']) && ($_SESSION['user_status'] == true) && ($row['user']===($_SESSION['username']))) {				
				echo "<br><br><a href='comment_delete.php?id=".$row['id']."'>Delete</a>";
			} else if(isset($_SESSION['status']) && $_SESSION['status'] == true) {				
				echo "<br><br><a href='comment_delete.php?id=".$row['id']."'>Delete</a>";				
			} echo "<hr>";
		} 
	} else {
		echo "No comments";
	}
			
?>
</div>