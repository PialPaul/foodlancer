<?php
session_start();
require("../db_rw.php");
$ar_l=getDataFromDB("select * from login");
$ar_i=getDataFromDB("select * from item");

    // print_r($GLOBALS);
    // print_r($_SESSION);

    if(isset($_POST["submit"])) {
      	$flag=true;
       
        $conn = mysqli_connect("localhost", "root", "", "foodlancer");
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			if(!empty($_POST["address"]) && !empty($_POST["quantity"]) && !empty($_POST["meal_time"]) ){


				$sql="INSERT INTO order VALUES (NULL,'".$_POST['quantity']."','".$_POST['address']."','".$_POST['meal_time']."', '0', '".$_SESSION['itemid']."','".$_SESSION['loginid']."')";
				// echo $sql;
				if(mysqli_query($conn, $sql)){
			    echo "New records updated successfully";
				}
			}
			else{
				echo "Incomplete Form!";
				header("location:../order.php");
			}

           header("location:../home2.php");
        }
	   

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
