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
    fieldset{
      width: 330px;
      height: auto;
      align: center;
      padding: 30px 30px;
      margin-top: 20px;
      margin-left: 490px;
      background-color: white;
      border-color: white;
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
      border-radius: 3px;
      background-color: #FFED8E;
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
    #signup{
      width: 150px;
      height: 30px;
      font-size: 14px;
      background-color: #fdf7ad;
      border-radius: 3px;
      align:right;
    }
    /*html {
      background: url(in.png) no-repeat center fixed;
      background-size: cover;
    }*/
  </style>
</head>

<body>
  <div class="wrapper">

    <div class="signin_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left; color:#cc5127" id="logo"> <a href="home.html"> <h3><span>F</span>oodLancer</h3> </a> </li>
        <!-- <li style="float:right;width:100px;height:45px;" ><a href="#about">Login</a> </li>
        <li style="float:right;width:180px;height:45px;"><a href="#contact">Apply As A Chef</a></li>
        <li style="float:right;width:140px;height:45px;"><a href="#news">01738291879</a></li> -->
      </ul>
      <!-- END HEADER -->

      <!-- START BODY CONTENT -->
      <div  >
        <h2 align="center">LOG IN</h2>
        <table class="table1" align="center" >
          <!-- FORM 1  -->
          <form class="signin" action="signin.php" method="post">
            <tr>
               <td>
                  <input type="text" class="form-control" name="UserName" id="username" placeholder="User Name">
               </td>
            </tr> <br>
            <tr>
              <td>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </td>
            </tr>
            <tr>
              <td align="center">
                <button type="submit" class="btn " id="login">  Log In </button>
              </td>
            </tr>
          </form>
          <!-- FORM 1 END -->

          <br><br>
        <!-- </table> -->

          <!-- FORM 2 -->
          <form class="signup" action="signup1.html" method="post">
                <!-- <fieldset>
                  <legend>New to FoodLancer?</legend>
                    <button type="submit" class="btn " id="signup"> Sign Up </button>
                </fieldset> -->
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
                <button type="submit" class="btn " id="signup"> Sign Up </button>
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
