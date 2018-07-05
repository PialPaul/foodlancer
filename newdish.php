<!DOCTYPE html>
<html>
<head>
  <title>FoodLancer | New Dish</title>
<style>
    body{
      margin: 0;
      padding: 0;
      width: 100%;
      background-color: #f5f5f5;
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
        color: #333333;
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
    table{
        width: 400px;
        /*height: 400px;*/
        /*margin-top: -40px;*/
        border-radius: 2px;
        padding: 20px 30px;
        border: 1px solid #dddddd;
        background-color: #ffffff;
        align:center;
    }
   
	img {
    display: block;
    margin: 0 auto;
}
    .error
      {color: #FF0000;}
    .name{
      padding: 0;
      width: 20px;
    }
    .form-control {
        margin-top: 0px;
        width: 250px;
        height: 25px;
        align: center;
        padding: 5px 12px;
        font-size: 15px;
        color: #202c45;
        border: 1px solid #bdbdbd;
        border-radius: 9px;
    }
    .cuisineName{
       margin-top: 0px;
        width: 280px;
        height: 35px;
        align: center;
        padding: 3px 12px;
        font-size: 15px;
        color: #202c45;
        border: 1px solid #bdbdbd;
        border-radius: 6px;
    }
    .content{
      top:0cm;
      position: relative;
      margin-right: 10px;
      padding: 5px;
      margin-bottom:10px;
      display: inline-block;
    }
    button{
     width: 180px;
      height: 35px;
      font-size: 15px;
      border-radius: 10px;
      background-color: #FFE066;
      font-family: cursive;
      font-weight: 550;
      color: #333333 ;
    }
  </style>    
</head>

<body>
  <?php
    session_start();
  
  ?>

  <div class="wrapper">

    <div class="signin_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left;" id="logo"> <a href="home2.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
        <li style="float:right;width:100px;height:45px;" ><a href="php/logout.php">Logout</a> </li>
        <li style="float:right;width:120px;height:45px;"><a href="php/goProfile.php">Profile</a></li>
        <li style="float:right;width:120px;height:45px;"><a href="search.php">Search</a></li>
        
      </ul>
      <!-- END HEADER -->

      <!-- START BODY CONTENT -->
      <div  >
        <h2 align="center">Create a New Dish</h2>

      <table align="center">
        
        <tr>
          <td  >
            <div >
            <tr>
              <?php  $foodpic=$_SESSION["newItemPic"];?>
              <td><img src="<?php echo $foodpic ?>" alt="User's pic"  style="width:50%;" ></td>
              
              <td>
                <form action="php/uploadItemPic.php" method="post" enctype="multipart/form-data">

                  <?php if ($_SESSION["upload"]) { ?>
                     <p style="padding-top: 180px;">Choose File </p> 
                     <input type="file" class="upload" name="fileToUpload" id="fileToUpload" ><?php } ?>

                  <button type="submit" class="pic_button" name="submit" value="submit" >Upload Picture</button>
                </form>
              
                  <?php if ($_SESSION["upload"]) { ?>
                  <span class="error"> <?php echo $_SESSION["uploadErr"];?></span> <?php } ?>
               </td>
            </tr>
            </div>
          </td>
        </tr>
        <form action="php/newdish1.php" method="post">
        <tr>
          <tr>
          <td class="">Cuisine:</td>
              <td>
                <select name="cuisine" class="cuisineName" id="cuisine_select" >
                  <option value="1">Indian</option>
                  <option value="2">Mexican</option>
                  <option value="3">Italian</option>
                  <option value="4">Chinese</option>
                  <option value="5">Bengali</option>
                  <option value="6">Others</option>
               </select>
             </td>
           </tr>
            <tr>
              <td>Item Name </td>
              <td><input type="text"  class="form-control" name="itemName" id="itemName"></td>
            </tr>
            <tr>
              <td>Description</td>
              <td><input type="text" class="form-control"  name="description"></td>
            </tr>
            <tr>
              <td>Cost</td>
              <td><input type="number" class="form-control"  name="cost" min="20"></td>
            </tr>
            <tr>
              <td><button type="submit" name="submit" value ="submit">DONE</button></td>
            </tr>
            <tr>
              <td><span class="error"> <?php echo $_SESSION["firstnameErr"];?></span></td>
            </tr>
        </tr>
        </form>
        </table>
      </div>
      <!-- END BODY CONTENT -->

    </div>
  </div>
</body>
</html>





