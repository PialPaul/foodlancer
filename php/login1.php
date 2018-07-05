<?php
session_start();
require("../db_rw.php");
$ar=getDataFromDB("select * from login");
$user=getDataFromDB("select * from userprofile");
$chef=getDataFromDB("select * from chefprofile");
$area=getDataFromDB("select * from area");
$ar_profilepic=getDataFromDB("select * from profilepic");

    // print_r($GLOBALS);
    // print_r($_SESSION);
	$loginErr =  "";
	$_SESSION["firstnameErr"]="";
	$_SESSION["flagErr"] == 0;
    if(isset($_POST["submit"])) {
      	$flag=false;
       
        $conn = mysqli_connect("localhost", "root", "", "foodlancer");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		//print_r($_REQUEST);
		if(isset($_POST["username"]) && isset($_POST["password"]) ){

			$uname=$_POST["username"];
			$pass=$_POST["password"];

	          foreach($ar as $v){
	            if($uname==$v["username"] && $pass==$v["password"]){
	            	$_SESSION["username"]=$uname;
	            	$_SESSION["email"]=$v["email"];
	            	$_SESSION["type"]=$v["type"];
	            	$_SESSION["loginid"]=$v["loginId"];
	            	$flag=true;
	              	
	            }
	          }
	          
	          if($flag){
	          	$_SESSION["upload"]=false;

	          	if($_SESSION["type"]==1){
	          		
	          		foreach($chef as $v){

		            if($_SESSION["loginid"]==$v["loginId"]){
		            	$_SESSION["firstname"]=$v["firstname"];
		            	$_SESSION["lastname"]=$v["lastname"];
		            	$_SESSION["phone"]=$v["phone"];
		            	$_SESSION["areaid"]=$v["areaId"];
		            	$_SESSION["address"]=$v["address"];
		            	$_SESSION["gender"]=$v["gender"];
		            	$_SESSION["dob"]=$v["dateOfBirth"];
		             	} 
		            }
		            foreach($area as $v){
		            if($_SESSION["areaid"]==$v["areaId"]){
		            	$_SESSION["area"]=$v["areaName"];
		              	}
		            }
		            $pic=false;
		            foreach($ar_profilepic as $v){
		            	if($_SESSION["loginid"]==$v["loginId"]){
		            		if ($v["deletepic"]==1) {
				            	$_SESSION["profilepic"]=$v["profilePic"];
				            	$pic=true;
				            }
		              	}
		            }
		            if (!$pic) {
		              	$_SESSION["profilepic"]="images/user.jpg";
		            }

		            $_SESSION["newItemPic"]="images/item.jpg";
	          		header("location:../chefprofile.php");
	          	}
	          	else if ($_SESSION["type"]==2) {
	          		foreach($user as $v){
		            if($_SESSION["loginid"]==$v["loginId"]){
		            	$_SESSION["firstname"]=$v["firstname"];
		            	$_SESSION["lastname"]=$v["lastname"];
		            	$_SESSION["phone"]=$v["phone"];
		            	$_SESSION["areaid"]=$v["areaId"];
		            	$_SESSION["address"]=$v["address"];
		            	$_SESSION["gender"]=$v["gender"];
		            	$_SESSION["dob"]=$v["dateOfBirth"];
		              	}
		            }
		            foreach($area as $v){
		            if($_SESSION["areaid"]==$v["areaId"]){
		            	$_SESSION["area"]=$v["areaName"];
		              	}
		            }
		            $pic=false;
		            foreach($ar_profilepic as $v){
		            	if($_SESSION["loginid"]==$v["loginId"]){
		            		if ($v["deletepic"]==1) {
				            	$_SESSION["profilepic"]=$v["profilePic"];
				            	$pic=true;
				            }
		              	}
		            }
		            if (!$pic) {
		              	$_SESSION["profilepic"]="images/user.jpg";
		            }
		            $_SESSION["newItemPic"]="images/item.jpg";
	          		header("location:../userprofile.php");
	          	}
	          }
	          else{
	          	$loginErr="Incorrect Username or Password";
	          	$_SESSION["login_flag"] = 1;
	          	$_SESSION["loginErr"]  = $loginErr;
	          	header("location:../login.php");
              }
          }
          else{
          	$loginErr="Incomplete Form";
          	$_SESSION["login_flag"] = 1;
          	$_SESSION["loginErr"]  = $loginErr;
	          	header("location:../login.php");
          }
      }
	   
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
