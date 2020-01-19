<!DOCTYPE html>
<html>
<head>



<script>
    function matricNo() {
      var y = document.forms["login"] 
      ["matric"].value;
        if (y != 20182919 && y != 24434) {
          alert(" matric number doesnt exist");
          return false;
        }
    }
    function matricNo() {
      var z = document.forms["login"] 
      ["password"].value;
        if (z != 99542 && z != 24434) {
          alert("incorrect password");
          return false;
        }
    }
    </script>



<script src="https://kit.fontawesome.com/2869995a6a.js" crossorigin="anonymous"></script>
<link rel="stylesheet"
type="text/css"
href="ukdesign.css">
<link rel="stylesheet"> 
<title> CSC ASSIGNMENT</title>
</head>
<body>
<img src="download.png" alt="logo" class="center" > <br> <br>
<div class="dropdown">  <span class="menu">MENU</span>  <div class="dropdown-content">
   <a href="ukHome.php">HOME</a> <br> <br>
    <a href="uklogin.php">LOGIN</a> <br> <br>
    <a href="ukRegistration.php">REGISTER</a> <br> <br>
    <a href="Group2.php">Meet the Group 2 members</a> <br> <br>
  </div>
  </div> <br>
  <h1>CSC ASSIGNMENT  </h1> <br> <br>
  <?php
$greet = date("H");
if ($greet < "12") {
  $x = "Good Morning";
  echo $x;
}
else if ($greet > "12" && $greet <"16") {

  echo "Good Afternoon";
}
else{
  echo "Good Evening";
}
echo " And Happy " . date("l");
?>

<div class="background">
  <div class="transbox">
    <marquee> Welcome to Group two Official website </marquee>
  </div>
</dIV>
<form action="ukHome.php" method="post" name="login" onsubmit="return matricNo()">
  <fieldset> 
    <legend> Register here </legend>
    
      Matric Number: <div class="input-container">
    <i class="fas fa-cloud icon"></i> <input class="input-field" type="text" name="matric" maxlength="8"required autocomplete><br> <br>
      </div>
      Password: <div class="input-container">
    <i class="fas fa-key icon"></i> <input class="input-field" type="password" name="password" required id="check"> <br>
     </div> <input type="checkbox" onclick="checker()"> Show Password <br>
      <script>
        function checker() {
          var x = document.getElementById("check");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
          }
      </script>
      <input type="submit" VAlue="Sign Up">
      </fieldset>
      Don't have an account?<br>
      <a href="registrationpage.php"> Register Here </a>
      </form>
        </body>
      <footer  class="center"> <br>
<?php
$created = date("y");
echo ("copyright: 2019 -".  $created) 
?>
</footer>
</html>
