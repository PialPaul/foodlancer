<?php
session_start();
require("../db_rw.php");
// require_once("db.php");
$ar_l=getDataFromDB("select * from login");
$ar_a=getDataFromDB("select * from area");
$ar_chef=getDataFromDB("select * from chefprofile");
$ar_user=getDataFromDB("select * from userprofile");



    // print_r($GLOBALS);
    // print_r($_SESSION);

    $firstnameErr = $lastnameErr = $phoneErr = $dobErr = $genderErr = $areaErr = $addressErr =  "";
    $firstname = $lastname = $phone = $dob = $gender = $area = $address =  "";
    if(isset($_POST["submit"])) {
      	$flag=true;
        $firstname = ($_POST["firstname"]);
        $lastname = ($_POST["lastname"]);
        $phone = ($_POST["phone"]);
        $dob = ($_POST["dob"]);
        $gender = ($_POST["gender"]);
        $area = ($_POST["area"]);
        $address = ($_POST["address"]);

        $_SESSION["firstname"]  =ucfirst($firstname) ;
            $_SESSION["lastname"]  = ucfirst( $lastname);
            $_SESSION["phone"]  = $phone;
            $_SESSION["dob"]=$dob;
            $_SESSION["gender"]  = $gender;
            $_SESSION["area"]  = $area;
            $_SESSION["address"]  = $address;

        if (empty($_POST["firstname"])) {
          $firstnameErr = "First Name is required";
          $flag=false;
        }
         if (empty($_POST["lastname"])) {
           $lastnameErr = "Last Name is required";
           $flag=false;
        }
        if (empty($_POST["phone"])) {
           $phoneErr = "Phone Number is required";
           $flag=false;
        }  else if(strlen($phone)<9 || strlen($phone)==10 || strlen($phone)>11){
             $phoneErr = "Phone Number is Invalid";
             $_SESSION["phone"]=""; 
             $flag=false;
         }  else if ( strpos($phone,"0")!=0 && (strpos($phone,"1")!=1 )) {
             $phoneErr = "Phone Number is Invalid";
             $_SESSION["phone"]=""; 
             $flag=false;
         }
         if (empty($_POST["dob"])) {
            $dobErr = "Date of Birth is required";
            $flag=false;
         } 
         if (empty($_POST["gender"])) {
           $genderErr = "Gender is required";
           $flag=false;
        }  
         if (empty($_POST["area"])) {
            $areaErr = "Area is required";
            $flag=false;
         } 
         if (empty($_POST["address"])) {
            $addressErr = "Address is required";
            $flag=false;
         }

         if($flag==false){
         	 $_SESSION["flagErr"] = 2;
         	
         	$_SESSION["firstnameErr"]  = $firstnameErr;
            $_SESSION["lastnameErr"]  = $lastnameErr;
           	$_SESSION["phoneErr"]  = $phoneErr;
           	$_SESSION["dobErr"]=$dobErr;
            $_SESSION["genderErr"]  = $genderErr;
            $_SESSION["areaErr"]  = $areaErr;
            $_SESSION["addressErr"]=$addressErr;
           	header("location:../signup2.php");
         }
         else if($flag==true){
            $_SESSION["firstname"]  =ucfirst($firstname) ;
            $_SESSION["lastname"]  = ucfirst( $lastname);
            $_SESSION["phone"]  = $phone;
            $_SESSION["dob"]=$dob;
            $_SESSION["gender"]  = $gender;
            $_SESSION["area"]  = $area;
            $_SESSION["address"]  = $address;
            $_SESSION["upload"] =false;

            // print_r($GLOBALS);
            // print_r($_SESSION);

          $conn = mysqli_connect("localhost", "root", "", "foodlancer");
      			if (!$conn) {
      				die("Connection failed: " . mysqli_connect_error());
      			}

            $uname=$_SESSION["username"];

             foreach($ar_l as $v){
                if($uname==$v["username"]){
                  $loginid=$v["loginId"];
                  $_SESSION["loginid"]  = $loginid;
                }
              }
              foreach($ar_a as $v){
                if($area==$v["areaName"]){
                  $areaid=$v["areaId"];
                  $_SESSION["areaid"]  = $areaid;
                }
              }

      			if($_SESSION["type"]==1){

              if($_SESSION["edit"]==1){
                foreach($ar_chef as $v){
                  if($uname==$v["username"]){
                    $chefid=$v["chefId"];
                  }
                }
                $sql="UPDATE chefprofile SET firstname='".$_SESSION['firstname']."', lastname='".$_SESSION['lastname']."', phone='".$_SESSION['phone']."', address='".$_SESSION['address']."', dob='".$_SESSION['dob']."', gender='".$_SESSION['gender']."' WHERE chefId=chefid";
                updateDB($sql);

              }
              else{
                $sql="INSERT INTO chefprofile VALUES (NULL,'".$_SESSION['firstname']."','".$_SESSION['lastname']."','".$_SESSION['phone']."','".$_SESSION['address']."','".$_SESSION['dob']."','".$_SESSION['gender']."','$areaid','$loginid')";

                $_SESSION["profilepic"]="images/chef.jpg";
              }
      				

      				if(mysqli_query($conn, $sql)){
      			    echo "New records updated successfully";
                $_SESSION["newItemPic"]="images/item.jpg";
      				}
              header("location:../chefprofile.php");
			      }

            else if($_SESSION["type"]==2){

              if($_SESSION["edit"]==1){
                foreach($ar_user as $v){
                  if($uname==$v["username"]){
                    $userid=$v["userId"];
                  }
                }
                $sql="UPDATE userprofile SET firstname='".$_SESSION['firstname']."', lastname='".$_SESSION['lastname']."', phone='".$_SESSION['phone']."', address='".$_SESSION['address']."', dob='".$_SESSION['dob']."', gender='".$_SESSION['gender']."' WHERE userId=suserid";
                updateDB($sql);

              }
              else{
                $sql="INSERT INTO userprofile VALUES (NULL,'".$_SESSION['firstname']."','".$_SESSION['lastname']."','".$_SESSION['phone']."','".$_SESSION['address']."','".$_SESSION['dob']."','".$_SESSION['gender']."','$areaid','$loginid')";
              }
              

              if(mysqli_query($conn, $sql)){
                echo "New records updated successfully";
              }
              header("location:../userprofile.php");
            }
      			else{
      				echo "Invalid parameter !";
      			}

            
         }
       }
       

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
