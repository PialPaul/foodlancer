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
    h2{
      padding-top: 10px;
    }
    table{
        width: 420px;
        height: 500px;
        margin-top: -50px;
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
        margin-top: 10px;
        width: 300px;
        height: 25px;
        align: center;
        padding: 10px 12px;
        font-size: 15px;
        color: #202c45;
        border: 1px solid #bdbdbd;
        border-radius: 3px;
    }
    button{
      width: 324px;
      height: 40px;
      /* padding: 10px 12px; */
      margin-top: 10px;
      font-size: 15px;
      border-radius: 8px;
      /*background-color: #FFED8E;*/
      
      background-color: #FFE066;
      font-family: cursive;
      font-weight: 550;
      color: #333333 ;
    }
    #next{
      align:center;
    }

  </style>
</head>

<body>

  <?php

    session_start();
    if($_SESSION["type_flag"]==0){
      if($_REQUEST["signas"]=="chef"){
        $_SESSION["type"] = 1;
        $_SESSION["flagErr"] = 0;
        $_SESSION["type_flag"]=1;
      }
      else if($_REQUEST["signas"]=="user"){
          $_SESSION["type"] = 2;
          $_SESSION["flagErr"] = 0;
          $_SESSION["type_flag"]=1;
      }
    }

    // print_r($GLOBALS);
    // print_r($_SESSION);

    if($_SESSION["flagErr"] == 0){

      $_SESSION["usernameErr"] = $_SESSION["emailErr"] = $_SESSION["passwordErr"] = $_SESSION["confirmpasswordErr"] = "";
    }
    
  ?>

  <div class="wrapper">

    <div class="signin_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left; color:#cc5127" id="logo"> <a href="home.php"> <h3><span>F</span>oodLancer</h3> </a> </li>
      </ul>
      <!-- END HEADER -->

      <!-- START BODY CONTENT -->
      <div  >
        <h2 align="center">SIGN UP</h2>
        <table class="table1" align="center" >
          <!-- FORM START  -->
          <form class="signin" action="php/signup11.php" method="post">

            <tr>
               <td>
                  <p><span class="error">* required field.</span></p>
               </td>
            </tr>
            <tr>
               <td><span class="error">   *</span>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email ID" >
               </td>
            </tr>
            <tr>
               <td>
                  <span class="error"> <?php echo $_SESSION["emailErr"];?></span>
               </td>
            </tr>
            <tr>
            <tr>
               <td><span class="error">   *</span>
                  <input type="text" class="form-control" name="username" id="username" placeholder="User Name"> 
               </td>
            </tr>
            <tr>
               <td>
                  <span class="error"> <?php echo $_SESSION["usernameErr"];?></span>
               </td>
            </tr>
            <tr>
              <td><span class="error">   *</span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </td>
            </tr>
            <tr>
               <td>
                  <span class="error"> <?php echo $_SESSION["passwordErr"];;?></span>
               </td>
            </tr>
            <tr>
              <td><span class="error">   *</span>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password"> 
              </td>
            </tr>
            <tr>
               <td>
                  <span class="error"> <?php echo $_SESSION["confirmpasswordErr"];;?></span>
               </td>
            </tr>
            <tr>
              <td align="center">
                <button type="submit" class="btn " name="submit" value="submit" id="next">NEXT</button>
              </td>
            </tr>
            <tr>
              <td align="center">
                <p > Already a member? <a href="login.php"> <b >Sign in</b></a></p>
              </td>
            </tr>
          </form>
          <!-- FORM 1 END -->
        </table>
      </div>
      <!-- END BODY CONTENT -->

    </div>
  </div>
</body>

</html>
