<?php 
require("../db_rw.php");
$ar_foodpic=getDataFromDB("select * from foodpic");

	  // print_r($GLOBALS);

	session_start();
	if($_SESSION["upload"]==false){
		$_SESSION["upload"]=true;
		$_SESSION["uploadErr"]="";
		header("location:../newdish.php");
	}

	else{
		$uploadErr="";

		$target_dir = "../images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$okay=true;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        // $uploadErr= "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        $uploadErr= "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 1000000) {
		    $uploadErr= "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
		    $uploadErr= "Sorry, only JPG, JPEG & PNG files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded";
		// if everything is ok, try to upload file
		} 
		else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      			$_SESSION["newItemPic"]="images/".$_FILES["fileToUpload"]["name"];
      			$_SESSION["upload"]=false;
					$_SESSION["uploadErr"]=$uploadErr="";
		    } 
		    else {
		        $uploadErr= "Sorry, there was an error uploading your file.";
		    }
		}
		$_SESSION["uploadErr"]=$uploadErr;
		header("location:../newdish.php");

	}
 ?>