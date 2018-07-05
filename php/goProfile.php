<?php 
	session_start();

	if($_SESSION["type"]==1){
		header("location:../chefprofile.php");
	}
	else if($_SESSION["type"]==2){
		header("location:../userprofile.php");
	}
 ?>