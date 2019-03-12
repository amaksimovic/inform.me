<?php

	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	$query = "SELECT * FROM articles";
	
	$result = mysqli_query($conn, $query);
	
	for($i=0; $i<=mysqli_num_rows($result);$i++){
		while($row = mysqli_fetch_assoc($result)){
			echo "<article><p>".$row['date']." ".$row['category']."</p><div class='title'><h3><a href='page.php?id=".$row['id']."'>".$row['title']."</a></h3></div><img src='img/".$row['image']."' width='400' height='200'>";
			if(strlen($row['text']) > 150) echo "<p>".$row['text'] = substr($row['text'],0,150)."...</p><a href='page.php?id=".$row['id']."'>Read more</a></article>";
		}							
	}
	
?>