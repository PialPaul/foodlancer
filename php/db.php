<?php 
	$conn = mysqli_connect("localhost", "root", "", "foodlancer");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

 ?>