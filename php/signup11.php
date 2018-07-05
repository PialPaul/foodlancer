<?php
session_start();

    // print_r($GLOBALS);
    // print_r($_SESSION);

    $usernameErr = $emailErr = $passwordErr = $confirmpasswordErr = "";
    $username = $email = $password = $confirmpassword = "";
    if(isset($_POST["submit"])) {
      	$flag=true;
        $username = ($_POST["username"]);
        $email = ($_POST["email"]);
        $password = ($_POST["password"]);
        $confirmpassword = ($_POST["confirmpassword"]);

        if (empty($_POST["username"])) {
          $usernameErr = "Username is required";
          $flag=false;
        }else if(strlen($username)<6){
             $usernameErr = "Username is too short, must have atleast 6 characters";
             $flag=false;
         }
         if (empty($_POST["email"])) {
           $emailErr = "Email is required";
           $flag=false;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $emailErr = "Invalid email format";
             $flag=false;
        }
        if (empty($_POST["password"])) {
           $passwordErr = "Password is required";
           $flag=false;
        }  else if(strlen($password)<8){
             $passwordErr = "Password must have atleast 8 characters";
             $flag=false;
         }
         if (empty($_POST["confirmpassword"])) {
            $confirmpasswordErr = "This field is required";
            $flag=false;
         } else if($password!=$confirmpassword){
             $confirmpasswordErr = "Password does not match";
             $flag=false;
         }

         if($flag==false){
         	 $_SESSION["flagErr"] = 1;
         	
         	$_SESSION["usernameErr"]  = $usernameErr;
            $_SESSION["emailErr"]  = $emailErr;
           	$_SESSION["passwordErr"]  = $passwordErr;
           	$_SESSION["confirmpasswordErr"]=$confirmpasswordErr;
           	header("location:../signup1.php");
         }
         else if($flag==true){
           // session_start();
         	 $v=$_SESSION["type"];
         	session_unset();
  			$_SESSION["type"] = $v;
            $_SESSION["username"]  = $username;
            $_SESSION["email"]  = $email;
            $_SESSION["password"]  = $password;
           $_SESSION["type_flag"]=1;
           $_SESSION["flagErr"] = 1;

           $conn = mysqli_connect("localhost", "root", "", "foodlancer");
    			if (!$conn) {
    				die("Connection failed: " . mysqli_connect_error());
    			}

			//print_r($_REQUEST);
			if(isset($_SESSION["username"]) && isset($_SESSION["email"])  && isset($_SESSION["password"])  && isset($_SESSION["type"])){

				$sql="INSERT INTO login VALUES (NULL,'".$_SESSION['email']."','".$_SESSION['username']."','".$_SESSION['password']."','".$_SESSION['type']."')";
				// echo $sql;
				if(mysqli_query($conn, $sql)){
			    echo "New records updated successfully";
				}
			}
			else{
				echo "Invalid parameter !";
			}

           header("location:../signup2.php");
         }
       }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    // }
   

?>
