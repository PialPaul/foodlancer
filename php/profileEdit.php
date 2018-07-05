<?php 
	session_start();
	 $_SESSION["firstnameErr"] = $_SESSION["lastnameErr"] = $_SESSION["phoneErr"] = $_SESSION["dobErr"] = $_SESSION["genderErr"] =$_SESSION["areaErr"] =$_SESSION["addressErr"] = "";
	 $_SESSION["edit"]=1;
	 header("location:../signup2.php");
 ?>