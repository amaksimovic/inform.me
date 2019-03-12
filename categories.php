<?php 

	include("header.php");
	
	$category = $_GET['category'];
	
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$query = "SELECT * FROM articles WHERE category='{$category}'";
	
	$result = mysqli_query($conn, $query);
	
	for($i=0; $i<=mysqli_num_rows($result);$i++){
		while($row = mysqli_fetch_assoc($result)){
			echo "<article><p>".$row['date']." ".$row['category']."</p><h3><a href='page.php?id=".$row['id']."'>".$row['title']."</a></h3><img src='img/".$row['image']."' width='400' height='200'><p>".$row['text']."</p></article>";	
		}							
	}
	
	include("footer.php"); 

?>