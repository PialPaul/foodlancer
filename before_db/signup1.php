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
    }
    table{
        width: 400px;
        height: 380px;
        margin-top: -40px;
        border-radius: 2px;
        padding: 20px 30px;
        border: 1px solid #dddddd;
        background-color: #ffffff;
        align:center;
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
      /* padding: 10px 12px; */
      margin-top: 10px;
      font-size: 15px;
      border-radius: 4px;
      background-color: #FFED8E;
    }
    #next{
      align:center;
    }

  </style>
</head>

<body>
  <div class="wrapper">

    <div class="signin_div1" >
      <!-- START HEADER -->
      <ul>
        <li style="float:left; color:#cc5127" id="logo"> <a href="home.html"> <h3><span>F</span>oodLancer</h3> </a> </li>
      </ul>
      <!-- END HEADER -->

      <!-- START BODY CONTENT -->
      <div  >
        <h2 align="center">SIGN UP</h2>
        <table class="table1" align="center" >
          <!-- FORM START  -->
          <form class="signin" action="signup1.php" method="post">
            <tr>
               <td>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email ID">
               </td>
            </tr> <br>
            <tr>
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
              <td>
                <input type="password" class="form-control" name="password" id="confirmpassword" placeholder="Confirm Password">
              </td>
            </tr>
            <tr>
              <td align="center">
                <button type="submit" class="btn " id="next">NEXT</button>
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
