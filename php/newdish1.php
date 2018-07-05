<?php
session_start();
require("../db_rw.php");
$chef=getDataFromDB("select * from chefprofile");
$item=getDataFromDB("select * from item");

	$inputErr =  "";

    if(isset($_POST["submit"])) {
      	$flag1 = $flag2=false;
       
        $conn = mysqli_connect("localhost", "root", "", "foodlancer");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		if(!empty($_POST["cuisine"]) && !empty($_POST["description"]) && !empty($_POST["itemName"]) && !empty($_POST["cost"] ) ){
			if($_SESSION["newItemPic"]!="images/item.jpg"){

			$chefid= $areaid=$itemid="";
			$cuisine=$_POST["cuisine"];
      $description=$_POST["description"];
			$itemName=$_POST["itemName"];
			$cost=$_POST["cost"];


          foreach($chef as $v){
            if($_SESSION["loginid"]==$v["loginId"]){
            	$chefid=$v["chefId"];
            	$areaid=$v["areaId"];
            	$flag1=true;
              	
            }
          }
	          
          if($flag1){
          	$sql="INSERT INTO item VALUES (NULL,'$cuisine','$itemName','$cost','1','$description', '$areaid','$chefid')";

			 if(mysqli_query($conn, $sql)){
      			echo "New records updated successfully";
      				}
      		$flag2=true;
          }

			$item=getDataFromDB("select * from item");

          if($flag2){

          	foreach($item as $v){
            if($chefid==$v["chefId"]){
            	$itemid=$v["itemId"];
	            }
	          }

          	$sql="INSERT INTO foodpic VALUES (NULL,'".$_SESSION['newItemPic']."','$itemid')";
          	if(mysqli_query($conn, $sql)){
      			echo "New records updated successfully";
      				}
          }
          	$_SESSION["firstnameErr"]  = "";
          	$_SESSION["upload"]=false;
          	$_SESSION["newItemPic"]="images/item.jpg";
             header("location:../chefprofile.php");
          }
      }
          else{
          	$loginErr="Incomplete Form";
          	// $_SESSION["login_flag"] = 1;
          	$_SESSION["firstnameErr"]  = $loginErr;
	          	header("location:../newdish.php");
	          	$_SESSION["upload"]=false;
          }
      }
      	   
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
