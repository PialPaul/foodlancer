<!DOCTYPE html>
<html>
<head>
   <title>FoodLancer | Chef's Profile</title>
 
 <style>
    body{
      margin: 0;
      padding: 0;
      width: 100%;
      background-color: #f5f5f5;
      color:  #3e4c5a;
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
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    	  font-size: 20px;
        font-weight: bolder;
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
        border-radius: 3px;
        /*font-weight: 550;*/
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
      padding-top: 25px;
      padding-bottom: 20px;
      padding-left: 150px;
      padding-right: 150px;
      margin-left: 100px;
      float: left;
      background-color: #E0E0FF ;
      /*margin: 0;*/
    }
    .div3{
      padding-top: 25px;
      padding-bottom: 20px;
      padding-left: 150px;
      padding-right: 150px;
      margin-right: 90px;
      float: right;
      background-color: #E0E0FF   ;
      /*margin: 0;*/
      
    }
    
  </style>
</head>
<body>
<div class="wrapper">
  <?php 
    session_start();
   ?>

    <!-- START HEADER -->
    <ul>
      <li style="float:left;" id="logo"> <a href="home2.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
      <li style="float:right;width:120px;height:45px;" ><a href="php/logout.php">Log out</a> </li>
      <li style="float:right;width:120px;height:45px;"><a href="search.php">Search</a></li>
      
    </ul>
      <!-- END HEADER -->

    <!-- START DIVISION 1 -->
    <div class="home_div1" style="padding-bottom: 10px">
      <p style="font-size:250%; text-align:center; ">Chef's Profile</p>

      <table style="width: 85%; align:center; padding: 30px 100px;margin:0 100px; height:150px; background-color: #FFEBD8;">
        <tr>
          <td  >
            <div style="background-color: white;">
            <tr>
              <?php  $propic=$_SESSION["profilepic"];?>
              <td><img src="<?php echo $propic ?>" alt="Chef's pic" style="width:50%;"></td>
              
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
                  <tr> <td><h3> Name </h3></td>
                   <td><p  class="form-control" name="name" ><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"];?> </p></td></tr>

                   <tr> <td><h3> Email ID </h3></td>
                   <td><p  class="form-control" name="email" ><?php echo $_SESSION["email"];?> </p></td></tr>

                    <tr> <td> <h3>  Phone Number </h3></td>
                   <td><p  class="form-control" name="phone" ><?php echo $_SESSION["phone"];?> </p></td></tr>

                    <tr> <td> <h3>  Date of Birth </h3></td>
                   <td> <p  class="form-control" name="phone" ><?php echo $_SESSION["dob"];?> </p></td></tr>
                   <tr><td><h3> Gender </h3></td>
                   <td><p  class="form-control" name="lastname" ><?php echo $_SESSION["gender"];?> </p></td></tr>
                   <tr> <td> <h3>  Area </h3></td>
                   <td> <p  class="form-control" name="phone" ><?php echo $_SESSION["area"];?> </p></td></tr>
                    <tr> <td> <h3>  Address </h3></td>
                   <td> <p  class="form-control" name="phone" ><?php echo $_SESSION["address"];?> </p></td></tr>
                </table>
              </td>
              <td>
                <form action="php/profileEdit.php" method="post">
                  <button type="submit" class="pic_button" name="edit" value="edit" style="margin-top: 400px;">Edit Profile</button>
                </form>
               </td>
             </tr>
            
            </td>
          </tr>
        </table>
      </div>
      <!-- END DIVISION 1 -->

    <!-- START DIVISION 2 -->
    <div class="division2" >
      <!-- <div class="div1" ><br></div> -->
      <div class="div2" align="center">
        <h2 > My Menu</h2>
        <h4>My menu I want to prepare.</h4>
        <form action="newdish.php" method="post">
          <button type="submit"  name="submit" value="submit">Prepare a new dish</button>
        </form>
      </div>
      <div class="div3" align="center" >
        <h2 >Today's Orders</h2>
        <h4>The dishes that needs to be prepared!</h4>
        <form action="chef_orderlist.php" method="post">
          <button type="submit" name="submit" value="submit">View Order List</button>
        </form>
      </div>
      <!-- <div class="div4" ><br></div> -->
    </div>

  </div>
</body>


</html>
