<!DOCTYPE html>
<html>
<head>

  <title>FoodLancer | Sign Up</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      width: 100%;
      background-color: #f5f5f5;
      font-family: sans-serif;
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
    table{
        /* width: 550px; */
        height: 600px;
        margin-top: -10px;
        border-radius: 3px;
        padding: 20px 30px;
        border: 1px solid #dddddd;
        background-color: #ffffff;
        /*align:center;*/
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
    }
  </style>
</head>

<body>

  <?php
  require("db_rw.php");
    session_start();
    
    if($_SESSION["flagErr"] == 1){

      $_SESSION["firstnameErr"] = $_SESSION["lastnameErr"] = $_SESSION["phoneErr"] = $_SESSION["dobErr"] = $_SESSION["genderErr"] =$_SESSION["areaErr"] =$_SESSION["addressErr"] = "";

      $_SESSION["firstname"] = $_SESSION["lastname"] = $_SESSION["phone"] = $_SESSION["dob"]  = $_SESSION["area"]   = $_SESSION["address"] = "";
    }
    
  ?>
  <div class="wrapper">

    <div class="signup_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left;" id="logo"> <a href="home.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
      </ul>
      <!-- END HEADER -->

      <!-- START BODY CONTENT -->
      <div  >
        <h2 align="center">SIGN UP</h2>
        <table class="table" align="center" >

          <!-- FORM START  -->
          <form class="signup" action="php/signup22.php" method="post">
            
            <tr>
              <td><p><span class="error">* required field.</span></p> </td> 
            </tr>
            <tr> 
              <td class="name"><span class="error">*  </span>First Name</td>
              <td>
               <input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo $_SESSION["firstname"];?>">
            </tr>
            <tr>
              <td></td>
               <td><span class="error"> <?php echo $_SESSION["firstnameErr"];?></span></td>
            </tr>
            <tr> 
              <td class="name"><span class="error">*  </span>Last Name</td>
              <td> <input type="text" class="form-control"  name="lastname" placeholder="Last Name" value="<?php echo $_SESSION["lastname"];?>">
            </tr>
            <tr>
              <td></td>
               <td><span class="error"> <?php echo $_SESSION["lastnameErr"];?></span></td>
            </tr>
            <tr> 
              <td class="name"><span class="error">*  </span>Phone</td>
              <td> <input type="number" class="form-control"  name="phone" min="0" placeholder="Phone Number" maxlength="11" value="<?php echo $_SESSION["phone"];?>">
            </tr>
            <tr>
              <td></td>
               <td><span class="error">  <?php echo $_SESSION["phoneErr"];?></span></td>
            </tr>
            <tr> 
              <td class="name"><span class="error">*  </span>Date of Birth</td>
              <td> <input type="date" class="form-control"  name="dob" id="dob" min="1957-01-02" max="2002-01-02" value="<?php echo $_SESSION["dob"];?>">
            </tr>
            <tr>
              <td></td>
               <td><span class="error">  <?php echo $_SESSION["dobErr"];?></span></td>
            </tr>
            <tr> 
              <td class="name"><span class="error">*  </span>Gender</td>
              <td> <input type="radio" name="gender" value="male" >Male</td>
              <td> <input type="radio" name="gender" value="female">Female</td>
            </tr>
            <tr>
              <td></td>
               <td><span class="error"> <?php echo $_SESSION["genderErr"];?></span></td>
            </tr>
            <tr> 
              <td class="name"> <span class="error">*  </span>Area</td>
              <td>
                <select name="area" class="form-control" id="area_select"  value="<?php echo $_SESSION["area"];?>">
                  <!-- <option value="0">Choose an area </option> -->
                  <option value="Banani">Banani </option>
                  <option value="Dhanmondi">Dhanmondi</option>
                  <option value="Mirpur">Mirpur</option>
                  <option value="Bashundhara">Bashundhara</option>
                  <option value="Malibagh">Malibagh</option>
                  <option value="Uttara">Uttara</option>
                  <option value="Rampura">Rampura</option>
                </select>
              </td>
            </tr>
            <tr>
              <td> </td>
               <td><span class="error">  <?php echo $_SESSION["areaErr"];?></span></td>
            </tr>
            <tr>
              <td class="name"><span class="error">*  </span>Address</td>
              <td><input name="address" class="form-control"  id="address" placeholder="Address" value="<?php echo $_SESSION["address"];?>"></td>
            </tr>
            <tr>
              <td></td>
               <td><span class="error">  <?php echo $_SESSION["addressErr"];?></span></td>
            </tr>
            <tr>
              <td >
                <button type="submit" class="submit" name="submit" value="submit" id="signup" >Done</button>
              </td>
            </tr>
          </form>
          <!-- FORM  END -->

        </table>
      </div>
      <!-- END BODY CONTENT -->

    </div>
  </div>
</body>

</html>
