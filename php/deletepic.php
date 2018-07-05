<?php 
	session_start();
require("../db_rw.php");
require_once("db.php");
$ar_profilepic=getDataFromDB("select * from profilepic");
	
    foreach($ar_profilepic as $v){
    	if($_SESSION["loginid"]==$v["loginId"]){
    		$loginid=$_SESSION["loginid"];

    		$sql="UPDATE profilepic SET deletepic='2' WHERE   loginId=loginid";
            updateDB($sql);

            if(mysqli_query($conn, $sql)){
			    echo "New records updated successfully";
			     
			}
			else{
				echo "Invalid parameter !";
			}
      	}
    }
    if ($_SESSION["type"]==1) {
        $_SESSION["profilepic"]="images/chef.jpg"; 
        header("location:../chefprofile.php");
    }
    else if ($_SESSION["type"]==2) {
        $_SESSION["profilepic"]="images/user.jpg"; 
        header("location:../userprofile.php");
    }
    

 ?>