<!DOCTYPE html>
<html>
<head>

  <title>FoodLancer | Menu</title>

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
      width: 200px;
      height: 30px;
      font-size: 15px;
      align: center;
      border-radius: 3px;
      background-color:#d6d6d6;
    }
    button{
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
    
      <!-- START HEADER -->
    <ul>
      <li style="float:left;" id="logo"> <a href="home.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
      <li style="float:right;width:100px;height:45px;" ><a href="login.php">Login</a> </li>
     <!--  <li style="float:right;width:180px;height:45px;"><a href="#contact">Apply As A Chef</a></li>
      <li style="float:right;width:140px;height:45px;"><a href="#news">01738291879</a></li> -->
    </ul>
    <!-- END HEADER -->
    <div class="home_div1" >

      <!-- START DIVISION 1 -->
      <p style="font-size:300%; text-align:center; ">Menu</p>
      <br>
       <p style="font-size:100%; text-align:center; ">History of your sold items:</p>


      <table align="center">
        <tr>
         <form class="" action="login.php" method="post">
             <td>
              <div class="sign">
                <img src="images/home_set1.jpg" alt="food1" width="300" height="200">
                <div class="description">
                Name:
                  <input type="text" name="signin" >
                  <div class="signdescription">
                    <button type="submit" name="signin">Update</button> <br>
                    <button type="submit" name="signin">Remove</button>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="sign">
                <img src="images/home_set2.jpg" alt="food1" width="300" height="200">
                <div class="description">
                Name:
                  <input type="text" name="signin" >
                  <div class="signdescription">
                    <button type="submit" name="signin">Update</button> <br>
                    <button type="submit" name="signin">Remove</button>
                  </div>
                </div>
              </div>
              </div>
              </form>
              
              </table>
              <br>
              <table align="center">
              <div class="home_div2" >
              <td >
                <button type="submit" name="signin" width="100px">Prepare a new dish</button>
              </td>
            </div>
            </td>
            <td>
            </td>
          
        </tr>
      </table>
    
    <!-- END DIVISION 1 -->