<!DOCTYPE html>
<html>
<head>
   <title>FoodLancer | Order</title>
   
<style>
    body{
      margin: 0;
      padding: 0;
      width: 100%;
      background-color: #f5f5f5;
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
    }
    li a:hover {
        background-color: #fdc854;
    }
    li h3{
      margin: 0px;
      padding: 0px;
    }
    H2{
      padding-top: 10px;
    }
    table{
        width: 400px;
        height: 320px;
        margin-top: -20px;
        border-radius: 2px;
        padding: 20px 30px;
        border: 1px solid #dddddd;
        background-color: #ffffff;
        align:center;
    }
    td{
      padding: 0;
    }
    .error
      {color: #FF0000;}

    .form-control {
        margin-top: 8px;
        width: 250px;
        height: 20px;
        align: center;
        padding: 5px 15px;
        font-size: 15px;
        color: #202c45;
        border: 1px solid #bdbdbd;
        border-radius: 3px;
        font-family: century gothic;
        font-weight: bolder;
    }
    #time_select{
      height: 28px;
      padding: 03px 12px;
    }

    button{
      width: 220px;
      height: 40px;
      margin-top: 10px;
      font-size: 15px;
      border-radius: 4px;
      align :center;
      background-color: #FFED8E;

      /*background-color: #FFE066;
      font-family: cursive;
      font-weight: 550;
      color: #333333 ;*/
    }
    #next{
      align:center;
    }

  </style>
</head>
<body>
  
<div class="wrapper">

    <div class="home_div1" >

      <!-- START HEADER -->
      <ul>
        <li style="float:left;" id="logo"> <a href="home2.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
        <li style="float:right;width:120px;height:45px;" ><a href="php/logout.php">Log out</a> </li>
        <li style="float:right;width:120px;height:45px;"><a href="php/goProfile.php">Profile</a></li>
        <li style="float:right;width:120px;height:45px;"><a href="search.php">Search</a></li>
      </ul>
      <!-- END HEADER -->

      <!-- START BODY CONTENT -->
      <?php
      session_start();
     require("db_rw.php");
     require("php/db.php");

     $conn = mysqli_connect("localhost", "root", "", "foodlancer");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $cfirstname=$clastname="";

     $ar_item=getDataFromDB("select * from item");
     $ar_foodPic=getDataFromDB("select * from foodpic");
     $ar_chef=getDataFromDB("select * from chefprofile");
    // $ar_a=getDataFromDB("select * from area");
      $itemid=$_POST["order"];

      foreach($ar_item as $v){
        if($itemid ==$v["itemId"]){
          $cost=$v["cost"];
          $itemname=$v["itemName"];
          $chefid=$v["chefId"];
          $_SESSION["itemid"]=$itemid;
          $_SESSION["chefid"]=$chefid;

          
        }
      }
    
    ?>
      <div  >
        <h2 align="center">ORDER FORM</h2>
        <table class="table" align="center" >

          <!-- FORM START  -->
          <form class="signup" action="php/order1.php" method="post">
            
            
           <tr> <td>Customer's Name</td>
           <td> <p  class="form-control" name="customername" ><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"];?> </p></td></tr>
           
           <tr> <td>Phone Number</td>
           <td> <p  class="form-control" name="phone" ><?php echo $_SESSION["phone"];?> </p></td></tr>
           
           <tr> <td> Email Id</td>
           <td> <p  class="form-control" name="email" ><?php echo $_SESSION["email"];?> </p></td></tr>

           <!-- <tr> <td> Chef's Name</td>
           <td> <p  class="form-control" name="phone" ><?php echo $cfirname." ".$clastname;?> </p></td></tr>
 -->
           <tr> <td>Meet Up Address</td>
           <td> <input name="address" class="form-control"  id="address" placeholder="Address" value="<?php echo $_SESSION['address'];?>"></tr>

           <tr> <td> Item</td>
           <td> <p  class="form-control" name="phone" ><?php echo $itemname;?> </p></td></tr>

            <tr> <td>Quantity</td>
           <td> <input type="number"  class="form-control" name="quantity" onkeyup="totalprice()" value="1"></td></tr>

            <tr> <td>Price</td>
           <td> <p  class="form-control" name="price"   > <?php echo $cost;?>/= </p></td></tr>

            <tr><td>Meal Time</td>
            <td><select name="meal_time" class="form-control" id="time_select" >
              <option value="1">9 AM - Breakfast</option>
              <option value="2">1 PM - Lunch</option>
              <option value="3">8PM - Dinner</option>
             </select>
            </td>
            
          </tr>
          <tr> <td>Delivery Fee</td>
           <td> <p   class="form-control" name="fee"   >50/= </p> </td></tr>
          <br>
          <tr><td><button type="submit" class="button " name="submit" value="submit" >Submit</button></td></tr>

        </form>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">
     function totalprice() {
        var quantity=document.getElementByName("quantity");
        var total = quantity * cost;
      } 
   </script>
</body>
</html>