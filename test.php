<?php
  print_r($GLOBALS);
  // echo $_REQUEST["type"];
  
  session_start();

print_r($_SESSION);
// session_unset();

// destroy the session
// session_destroy();
// print_r($_SESSION);
// $conn = mysqli_connect("localhost", "root", "", "foodlancer");
//       			if (!$conn) {
//       				die("Connection failed: " . mysqli_connect_error());
//       			}

//             $uname=$_SESSION["username"];
//             $area=$_SESSION["area"];


//       			// if($_SESSION["type"]==1){

//               $areaid="SELECT areaId FROM area WHERE areaName = $area ";
//               $loginid="SELECT loginId FROM login WHERE username = $uname ";
//               echo $areaid;
//               echo $loginid;
              
//               $x=mysqli_query($conn, $areaid);
//               $y=mysqli_query($conn, $loginid);
//               echo $x;
//               echo $y;

//               $a=getDataFromDB($areaid);
//               $b=getDataFromDB($loginid);

//               echo $a;
//               echo $b;

//   print_r($GLOBALS);


 ?>
