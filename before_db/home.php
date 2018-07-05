<!DOCTYPE html>
<html>
<head>

  <title>FoodLancer</title>

  <style>
    body{
      margin: 0;
    	padding: 0;
    	width: 100%;
      background-color: #f5f5f5;
      color: #3e4c5a;
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
        padding: 10px 0;
        overflow: hidden;
        background-color: #fff97d;
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
    /*div.home_div2{
    background:#bdbdbd;
    }*/

    /*div.home_div2{
      background:  #fff97d;
    }*/
    div.gallery {
        margin: 10px;
        border: 1px solid #ccc;
        float: left;
        width: 500px;
    }
    div.gallery:hover {
        border: 1px solid #777;
    }
    div.gallery img {
        width: 100%;
        height: auto;
        margin: 0px;
    }
    div.description {
        padding: 15px;
        text-align: center;
        background-color: white;
    }
    div.sign {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 300px;
        background-color: white;
    }
    div.sign:hover {
        border: 1px solid #777;
    }
    div.sign img {
        width: 100%;
        height: auto;
    }
    div.signdescription {
        padding: 15px;
        text-align: center;
    }
    input{
      width: 220px;
      height: 40px;
      font-size: 15px;
      align: center;
      border-radius: 3px;
      background-color: #FFF365;
    }
  </style>
</head>

<body>
  <div class="wrapper">

    <div class="home_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left;" id="logo"> <a href="home.html"> <h3><span>F</span>oodLancer</h3> </a> </li>
        <li style="float:right;width:100px;height:45px;" ><a href="signin.html">Login</a> </li>
        <li style="float:right;width:180px;height:45px;"><a href="#contact">Apply As A Chef</a></li>
        <li style="float:right;width:140px;height:45px;"><a href="#news">01738291879</a></li>
      </ul>
      <!-- END HEADER -->

      <!-- START DIVISION 1 -->
      <p style="font-size:300%; text-align:center; ">Order Homemade Meals from your neighbors</p>
      <table align="center">
        <tr>
          <form class="" action="order.html" method="post">
            <td style="padding :0px; height: auto;">
              <div style="margin :0px;" class="gallery">
                <img src="images/home_set1.jpg" alt="food1" width="300" height="200">
                <div class="description"><p> Chicken Meal</p>
            	     <p>Price : 99TK/meal (90tk/meal when you order 3 or more)</p>
            	      <input type="submit" name="order" value="Order Now" align="right">
                </div>
              </div>
            </td>
            <td>
              <div class="gallery">
                <img src="images/home_set2.jpg" alt="Food2" width="300" height="200">
                <div class="description"><p> Fish Meal</p>
        	          <p>Price : 99TK/meal (90tk/meal when you order 3 or more)</p>
        	          <input type="submit" name="order" value="Order Now" align="right">
                </div>
              </div>
            </td>
          </form>
        </tr>
      </table>
    </div>
    <!-- END DIVISION 1 -->

    <!-- START DIVISION 2 -->
    <div class="home_div2">
      <p style="font-size:300%; text-align:center; ">Sign up now to sell your food or get homemade food! </p>
      <table align="center" >

        <tr>
          <form class="" action="signup1.html" method="post">
            <td>
              <div class="sign">
                <img src="images/chef.jpg" alt="food1" width="300" height="200">
                <div class="signdescription">
            	     <input type="submit" name="signin" value="SIGN UP AS A CHEF" >
                 </div>
              </div>
            </td>

            <td>
              <div class="sign">
                <img src="images/user.jpg" alt="Food2" width="300" height="200">
                <div class="signdescription">
          	       <input type="submit" name="signin" value="SIGN UP AS A USER"  >
                 </div>
              </div>
            </td>
          </form>
        </tr>
      </table>
    </div>
    <!-- END DIVISION 2 -->

    <!-- START DIVISION 3 -->
    <div class="home_div3">
      <p style=";font-size:300%; text-align:center; ">Order Lunch and Dinner from your Neighbors </p>
      <table align="center" >
        <tr>
          <td>
            <div class="sign">
              <img src="images/home_pic1.jpg" alt="step1" align="center" width="50" height="50">
              <div class="description"><h3>Pick a Meal and Order</h3>
  	             <p>We offer different meals, order the one that suits your taste</p>
  	          </div>
            </div>
          </td>
          <td>
            <div class="sign">
              <img src="images/home_pic2.jpg" alt="step2" align="center" width="50" height="50">
              <div class="description"><h3>Search for nearby chef</h3>
  	             <p>The best chef living nearby will accept your order</p>
  	          </div>
            </div>
          </td>

  	      <td>
            <div class="sign">
              <img src="images/home_pic3.png" alt="step3" align="center" width="50" height="50">
              <div class="description"><h3>Get Home Delivery</h3>
  	             <p>Get the freshly cooked meal delivered right at your door</p>
  	          </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <!-- END DIVISION 3 -->

  </div>
</body>

</html>
