<!DOCTYPE html>
<html>
<head>
   <title>FoodLancer | User Profile</title>
 
 <style>
    body{
      margin: 0;
      padding: 0;
      width: 100%;
      background-color: #f5f5f5;
      color: #3e4c5a;
      font-family: century gothic;
    }
    #logo {
      padding-left: 100px;
      font-family: monospace;
    }
    #logo span {
      color: #cc5127;
      font-weight: 900;
      font-size: 39px;
      font-family: cursive;
    }
    #logo a{
      padding: 0px;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color:  #fff97d;
    }
    li {
        float: left;
    }
    li a {
        display: inline-block;
        /*color: black;*/
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
        font-weight: bolder;
        color: #333333 ;
    }
    li a:hover {
        background-color: #fdc854;
    }
    li h3{
      margin: 0px;
      padding: 0px;
    }
    H2{
      padding-top: 15px;
    }
   
  img {
    display: block;
    margin: 0 auto;
}
    .error{
        color: #FF0000;
    }

    .form-control {
        margin-top: 0px;
        margin-left: 24PX;
        width: 320px;
        height: 23px;
        align: center;
        padding: 5px 12px;
        font-size: 15px;
        color: #202c45;
        background-color: white;
        border: 1px solid #bdbdbd;
        border-radius: 6px;
        font-weight: bolder;
      }
      .upload{
        width: 320px;
        height: 23px;
        align: center;
        padding: 5px 12px;
        font-size: 15px;
        color: #202c45;
        background-color: white;
        border-radius: 10px;
      }
    button{
      width: 180px;
      height: 40px;
      font-size: 15px;
      border-radius: 10px;
      background-color: #FFE066;
      font-family: cursive;
      font-weight: 550;
      color: #333333 ;
    }
    .pic_button{
      margin-top: 220px;
    }
    .div2{
      border-top: 1px solid pink;
      padding-top: 25px;
      padding-bottom: 20px;
      padding-left: 50px;
      margin: 0 100px;
      /*float: left;*/
      background-color: #E6DFF7 ;
      /*margin: 0;*/
    }
  </style>
</head>
<body>
<div class="wrapper">
  <?php 
    session_start();
    require("db_rw.php");
    require_once("php/db.php");
    // print_r($_SESSION);
    // print_r($GLOBALS);
    $ar_profilepic=getDataFromDB("select * from profilepic");

   ?>
    <!-- START HEADER -->
    <ul>
      <li style="float:left;" id="logo"> <a href="home2.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
      <li style="float:right;width:120px;height:45px;" ><a href="php/logout.php">Log out</a> </li>
      <li style="float:right;width:120px;height:45px;"><a href="search.php">Search</a></li>
      
    </ul>
      <!-- END HEADER -->

    <!-- START DIVISION 1 -->
    <div class="home_div1" >
      <p style="font-size:250%; text-align:center; ">User's Profile</p>

      <table style="width: 85%; align:center; padding: 30px 100px;margin:0 100px; height:150px; background-color: #FFEBD8;">
        <tr>
          <td  >
            <div style="background-color: white;">
            <tr>
              <?php  $propic=$_SESSION["profilepic"];?>
              <td><img src="<?php echo $propic ?>" alt="User's pic" style="width:50%;"></td>
              
              <td>
                <form action="php/upload.php" method="post" enctype="multipart/form-data">

                  <?php if ($_SESSION["upload"]) { ?>
                     <p style="padding-top: 180px;">Choose File </p> 
                     <input type="file" class="upload" name="fileToUpload" id="fileToUpload" ><?php } ?>

                  <button type="submit" class="pic_button" name="submit" value="submit" >Upload Picture</button>
                </form>
                <form action="php/deletepic.php" method="post">
                  <button type="submit" name="deletepic" value="deletepic" style="margin-top: 15px;">Delete Picture</button><br>

                  <?php if ($_SESSION["upload"]) { ?>
                  <span class="error"> <?php echo $_SESSION["uploadErr"];?></span> <?php } ?>
                </form>
               </td>
            </tr>
            </div>
          </td> 
          <td >
            <tr>
              <td>
                <table style="font-family: century gothic; ">
                  <tr> <td><h3> First Name: </h3></td>
                   <td><p  class="form-control" name="firstname" ><?php echo $_SESSION["firstname"];?> </p></td></tr>

                   <tr><td><h3> Last Name: </h3></td>
                   <td><p  class="form-control" name="lastname" ><?php echo $_SESSION["lastname"];?> </p></td></tr>

                   <tr> <td><h3> Email ID: </h3></td>
                   <td><p  class="form-control" name="email" ><?php echo $_SESSION["email"];?> </p></td></tr>

                    <tr> <td> <h3>  Phone Number: </h3></td>
                   <td><p  class="form-control" name="phone" ><?php echo $_SESSION["phone"];?> </p></td></tr>

                    <tr> <td> <h3>  Date of Birth: </h3></td>
                   <td> <p  class="form-control" name="phone" ><?php echo $_SESSION["dob"];?> </p></td></tr>
                   <tr> <td> <h3>  Area: </h3></td>
                   <td> <p  class="form-control" name="phone" ><?php echo $_SESSION["area"];?> </p></td></tr>
                    <tr> <td> <h3>  Address: </h3></td>
                   <td> <p  class="form-control" name="phone" ><?php echo $_SESSION["address"];?> </p></td></tr>
                </table>
              </td>
              <td>
                <form action="php/profileEdit.php" method="post">
                  <button type="submit" class="pic_button" name="edit" value="edit" style="margin-top: 400px;">Edit Profile  </button>
                </form>
               </td>
             </tr>
            
            </td>
          </tr>
        </table>
      </div>
      <!-- END DIVISION 1 -->

    <!-- START DIVISION 2 -->
    <div class="div2" align="center">
      <h2 > My Orders</h2>
      <h4>The Dishes I have ordered.</h4>
      <form action="user_myorder.php" method="post">
        <button type="submit"  name="submit" value="submit">View My Orders</button> <br><br> <br>
      </form>
      <form action="search.php" method="post">
        <button type="submit"  name="submit" value="submit">Order Now!</button>
      </form>
     </div>

    </div>
  </body>


</html>
