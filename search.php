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
        font-weight: bolder;
    }
    li a:hover {
        background-color: #fdc854;
    }
    li h3{
      margin: 0px;
      padding: 0px;
    }

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
        
        float: right;
        background-color: white;
    }
    div.sign {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 300px;
        height: auto;
        background-color: white;
        border-radius: 3px; 
    box-shadow: 0 0 black;
    

    }
    div.sign:hover {
        border: 1px solid #777;
    }
    div.sign img {
        display: block;
    margin: auto;
    width: 100%;
    height: 100%;
    vertical-align: middle;
    float: left;
    }
    div.signdescription {
        padding: 15px;
        text-align: center;
    }
     .form-control {
        margin-top: 0px;
        margin-left: 124PX;
        width: 280px;
        height: 30px;
        align: center;
        padding: 5px 12px;
        font-size: 15px;
        color: #202c45;
        background-color: white;
        border: 1px solid #bdbdbd;
        border-radius: 3px;
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

  <?php
include("db_rw.php");
  session_start();
// print_r($GLOBALS);
?>

  <div class="wrapper">

    <div class="home_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left;" id="logo"> <a href="home2.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
      <li style="float:right;width:120px;height:45px;" ><a href="php/logout.php">Log out</a> </li>
      <li style="float:right;width:120px;height:45px;"><a href="php/goProfile.php">Profile</a></li>
        
      </ul>
      <table align="center">
    <br>
    <br>
   
    <tr> <td class="name">Search Area</td>
              <td>
                <form action="" method="post">
                <select name="area" class="form-control" id="area_select" onchange="showItems(this.value)">
                  <option value="">Choose an area </option>
                  <option value="1">Banani </option>
                  <option value="2">Dhanmondi</option>
                  <option value="3">Mirpur</option>
                  <option value="4">Bashundhara</option>
                  <option value="5">Rampura</option>
                  <option value="6">Uttara</option>
               </select>
               <!-- <button type="submit" name="submit" value="submit">Search</button> -->
             </form>
             </td></tr>
             <tr><td>
               <div id="txtHint">Items</div>
            </div>
             </td></tr>
             
            
           </table>
                
			<div class="home_div3">
      <p style="font-size:270%; text-align:center;color: #3e4c5a;font-family: century gothic;" >Always Available Items </p>
      <table align="center">
        <tr>
         <form class="" action="order.php" method="post">
             <td>
              <div class="sign">
                <img src="images/home_set1.jpg" alt="food1" width="300" height="200">
                <div class="description">
                  <h3 align="center">Set Menu 1</h3>      
                  <p align="center"> Rice, Chicken Fry, Chicken Curry and Vegetable </p>
                  <p align="center"> Cost: 150/= </p>
                  <div class="signdescription">
                    <button type="submit" name="order" value="1" >Order Now</button>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="sign">
                <img src="images/home_set2.jpg" alt="food1" width="300" height="200">
                <div class="description">
                  <h3 align="center">Set Menu 2</h3>      
                  <p align="center"> Vaat, Vaja, Mach, Dal and Chatni</p>
                  <p align="center"> Cost: 120/= </p>
                  <div class="signdescription">
                    <button type="submit" name="order" value="2" >Order Now</button>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="sign">
                <img src="images/home_set3.jpg" alt="food1" width="300" height="200">
                <div class="description">
                  <h3 align="center">Set Menu 3</h3>      
                  <p align="center"> Chicken Biriyani </p>
                  <p align="center"> Cost: 150/= </p>
                  <div class="signdescription">
                    <button type="submit" name="order" value="3" >Order Now</button>
                  </div>
                </div>
              </div>
            </td>
          </form>
        </tr>
      </table>
    </form>
    </div>
		   
<script type="text/javascript">
  
  // function showHint() {
  //     var  xmlhttp = new XMLHttpRequest();
  //     var str=document.getElementById('area').value;
  //     //document.getElementById("spinner").style.visibility= "visible";
  //     xmlhttp.onreadystatechange = function() {
  //       //alert(xmlhttp.rxmlhttpeadyState);
  //       if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
  //         //document.getElementById("spinner").style.visibility= "hidden";
  //         var m=document.getElementById("txtHint");
  //         m.innerHTML=xmlhttp.responseText;
  //       }
  //     };
  //     var url="server.php?area="+str;
  //     console.log("query: " + str);
  //     xmlhttp.open("GET",url,true);
  //     xmlhttp.send();
  //   }

    function showItems(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  var url="server.php?area="+str;
  xhttp.open("GET", url, true);
  xhttp.send();
}
</script>


		   </body>
		   </html>