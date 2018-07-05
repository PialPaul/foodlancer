<!DOCTYPE html>
<html>
<head>
  <title>FoodLancer | My Orders</title>
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
    require_once("php/db.php");
    $ar_item=getDataFromDB("select * from item");
    $ar_order=getDataFromDB("select * from order");
    $ar_chef=getDataFromDB("select * from chefprofile");
    $ar_itemPic=getDataFromDB("select * from foodpic");
   ?>

<div class="wrapper">

    <div class="home_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left;" id="logo"> <a href="home2.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
        <li style="float:right;width:100px;height:45px;" ><a href="php/logout.php">Logout</a> </li>
        <li style="float:right;width:120px;height:45px;"><a href="php/goProfile.php">Profile</a></li>
        <li style="float:right;width:120px;height:45px;"><a href="search.php">Search</a></li>
        
      </ul>

      <h1 align="center" style=" font-family: century gothic; font-size:270%;color: #3e4c5a;"> My Orders </h1>

      <?php 
        $flag=false;
        foreach($ar_order as $v){
          if($_SESSION["loginid"]==$v["loginId"]){
            if($v["delivered"]==0){
              $itemid=$v["itemId"];
              $time=$v["time"];
              $quantity=$v["quantity"];

              $flag=true;
              foreach($ar_item as $x){
                if($itemid==$x["itemId"]){
                  $itemname=$x["itemName"];
                  $cost=$x["cost"];

                }
              }
              foreach($ar_itemPic as $y){
                if($itemid==$y["itemId"]){
                  $itemPic=$x["foodPic"];

                }
              } ?>

              <div style="padding: 25ox 30px;">

                <img src="$itemPic" alt="Image" style=" padding-left: 20px; width:35%;float:left;">
                <h3>Item Name</h3>
                <?php echo $itemname; ?>
                <h3>Quantity</h3>
                <?php echo $quantity; ?>
                <h3>Cost</h3>
                <?php echo $cost; ?>
                <h3>Time of Delivery</h3>
                <?php echo $time; ?>
                <h3>Total Price</h3>
                <?php echo $quantity*$cost; ?>

              </div>


           <?php }              
          }
          else  ?>
            <h3 style="padding: 50px 100px;">You have not ordered anything yet.<h3>"

              <form action="order.php" method="post">
            <button type="submit" name="submit" value="submit">Order Now!</button>
          </form>
       <?php } ?>
     </div>
    </div>

</body>
</html>