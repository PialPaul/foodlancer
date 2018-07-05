<!DOCTYPE html>
<html>
<head>
  <title>FoodLancer | Order List</title>
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
    .error
      {color: #FF0000;}
    .name{
      padding: 0;
      width: 20px;
    }
    .form-control {
        margin-top: 0px;
        width: 200px;
        height: 20px;
        align: center;
        padding: 5px 12px;
        font-size: 15px;
        color: #202c45;
        border: 1px solid #bdbdbd;
        border-radius: 3px;
    }
    #area_select{
      width: 250;
      height: 28px;
      padding: 03px 12px;
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
      width: 250px;
      height: 35px;
      font-size: 15px;
      border-radius: 3px;
      align: right;
       background-color: #FFED8E;
      font-family: century gothic;
    }
  </style>    
</head>
<body>
  <?php 
    session_start();
     require("db_rw.php");
     // require("php/db.php");

     $conn = mysqli_connect("localhost", "root", "", "foodlancer");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $ar_item=getDataFromDB("select * from item");
    $ar_order=getDataFromDB("select * from order");
    $ar_chef=getDataFromDB("select * from chef");
    $ar_foodpic=getDataFromDB("select * from foodpic");
    $ar_cuisine=getDataFromDB("select * from cuisine");
    $orderlist=false;
   ?>

<div class="wrapper">

    <div class="home_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left;" id="logo"> <a href="home2.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
        <li style="float:right;width:120px;height:45px;" ><a href="php/logout.php">Logout</a> </li>
        <li style="float:right;width:120px;height:45px;"><a href="php/goProfile.php">Profile</a></li>
        <li style="float:right;width:120px;height:45px;"><a href="search.php">Search</a></li>
      </ul>

      <h1 align="center" style=" font-family: century gothic; font-size:270%;color: #3e4c5a;"> Order List </h1>

      <?php 
      $chefid=$itemid=$itemname=$cuisineid=$description=$cuisineName=$foodpic="";
       foreach($ar_chef as $v){
          if($_SESSION["loginid"]==$v["loginId"]){
            $chefid=$v["chefId"];
          }
        }
        foreach($ar_item as $v){
          if($chefid==$v["chefId"]){
            $itemid=$v["itemId"];
            $itemname=$v["itemName"];
            $cuisineid=$v["cuisineId"];
            $description=$v["description"];

            foreach($ar_cuisine as $x){
            if($cuisineid==$x["cuisineId"]){
              $cuisineName=$x["cuisineName"];
              }
            }

            foreach($ar_foodpic as $y){
            if($itemid==$y["itemId"]){
              $foodpic=$y["foodPic"]; ?> 

            <div>
              <table>
                <tr>
                  <td><img src="<?php echo $foodpic ?>" alt="User's pic"  style="width:50%;" ></td>
                  <td>
                    <h3><?php echo $itename ?></h3>
                    <p><?php echo $description." Cuisine" ?></p>
                    <p><?php echo $description ?></p>
                  </td>
                </tr>
              </table>
            </div>

       <?php 
              $orderlist=true;
            } 
          }
        }
      }
       
       if (!$orderlist) { ?>
          <h3>You have no orders yet.</h3>
        <?php } 

      ?>      



</body>
</html>