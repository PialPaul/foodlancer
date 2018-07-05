<!DOCTYPE html>
<html>
<head>

  <title>FoodLancer | Sign In</title>
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
      padding-top: 30px;
      /*font-family: monospace;*/
    }
    table{
        width: 400px;
        height: 400px;
        margin-top: -40px;
        border-radius: 2px;
        padding: 20px 30px;
        border: 1px solid #dddddd;
        background-color: #ffffff;
        align:center;
    }
    .error{
        color: #FF0000;
    }
    td{
      padding: 0;
    }
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
      font-size: 15px;
      border-radius: 8px;
      background-color: #FFED8E;
      font-family: cursive;
    }
    p{
      text-decoration: none;
      text-shadow: 1px 1px 1px black;
      font-size: 14px;
      font-family: sans-serif;
      padding-bottom: 0;
      color: #f8901f;
    }
    #login{
      align:center;
    }
    .signas{
      width: 140px;
      height: 35px;
      margin: 0 10px;
      font-size: 14px;
      background-color: #fdf7ad;
      border-radius: 7px;
      align:right;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  $_SESSION["type_flag"] = 0;
  if ($_SESSION["login_flag"] == 0) {
    $_SESSION["loginErr"]="";
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
        <h2 align="center">LOG IN</h2>
        <table class="table1" align="center" >
          <!-- FORM 1  -->
          <form class="signin" action="php/login1.php" method="post">
            <tr>
               <td align="center"><span class="error"> <?php echo $_SESSION["loginErr"];?></span></td>
            </tr>
            <tr>
               <td>
                  <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
               </td>
            </tr> <br>
            <tr>
              <td>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </td>
            </tr>
            <tr>
              <td align="center">
                <button type="submit" class="submit" name="submit" value="submit" id="login">  Log In </button>
              </td>
            </tr>
          </form>
          <!-- FORM 1 END -->

          <br><br>

          <!-- FORM 2 -->
          <form class="signup" action="signup1.php" method="post">
          <!-- <form class="signup" action="test.php" method="post"> -->
            <tr>
              <br>
            </tr>
            <tr>
              <td align="center">
                <p>New to FoodLancer?</p>
              </td>
            </tr>
            <tr>
              <td align="center">
                <button type="submit" class="signas " id="signaschef" name="signas" value="chef">  Sign Up As Chef</button>

                <button type="submit" class="signas " id="signasuser" name="signas" value="user"> Sign Up As User</button>
              </td>
            </tr>
          </form>
          <!-- FORM 2 END -->

        </table>
      </div>
      <!-- END BODY CONTENT -->

    </div>
  </div>
</body>

</html>
