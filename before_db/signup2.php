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
  <div class="wrapper">

    <div class="signup_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left;" id="logo"> <a href="home.html"> <h3><span>F</span>oodLancer</h3> </a> </li>
      </ul>
      <!-- END HEADER -->

      <!-- START BODY CONTENT -->
      <div  >
        <h2 align="center">SIGN UP</h2>
        <table class="table" align="center" >

          <!-- FORM START  -->
          <form class="signup" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <p><span class="error">* required field.</span></p>
            <tr> <td class="name">First Name</td>
              <td> <input type="text" class="form-control" name="firstname" placeholder="First Name"></td>
            </tr>
            <tr> <td class="name">Last Name</td>
              <td> <input type="text" class="form-control"  name="lastname" placeholder="Last Name"></td>
            </tr>
            <tr> <td class="name"> Email ID</td>
              <td> <input type="email" class="form-control"  name="email" placeholder="Email ID"></td>
            </tr>
            <tr> <td class="name">Phone</td>
              <td> <input type="number" class="form-control"  name="phone"  placeholder="Phone Number" maxlength="11"></td>
            </tr>
            <tr> <td class="name">Date of Birth</td>
              <td> <input type="date" class="form-control"  name="dob" id="dob" min="1957-01-02" max="2002-01-02"></td>
            </tr>
            <tr> <td class="name">Gender</td>
              <td> <input type="radio" name="gender" value="male" checked>Male</td>
              <td> <input type="radio" name="gender" value="female">Female</td>
            </tr>
            <tr> <td class="name"> Area</td>
              <td>
                <select name="area" class="form-control" id="area_select" autofocus="Choose an area">
                  <!-- <option value="0">Choose an area </option> -->
                  <option value="1">Banani </option>
                  <option value="2">Dhanmondi</option>
                  <option value="3">Mirpur</option>
                  <option value="4">Bashundhara</option>
                  <option value="5">Rampura</option>
                  <option value="6">Uttara</option>
                  <option value="7">Malibagh</option>
               </select>
             </td>
           </tr>
            <tr>
              <td class="name">Address</td>
              <td><textarea name="address" class="form-control"  id="address" rows="2" placeholder="Address"></textarea></td>
            </tr>
            <tr>

              <td >
                <button type="submit" class="btn " id="signup">Sign Up </button>
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
