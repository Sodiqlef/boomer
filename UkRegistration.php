<!DOCTYPE html>
<html>
<head>
  <script>
    function matricNo() {
      var y = document.forms["register"] 
      ["matric"].value;
        if (y != 20182919 && y != 20182921 && y!= 20182754 && y!= "18feab9d4c56") {
          alert(" matric number doesnt exist");
          return false;
        }
    }
    </script>
<script src="https://kit.fontawesome.com/2869995a6a.js" crossorigin="anonymous"></script>
<link rel="stylesheet"
type="text/css"
href="ukdesign.css">
<link rel="stylesheet"> 
<img src="download.png" alt="logo" class="center" >
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
<form action="Home.php" method="post" name="register" onsubmit="return matricNo()">
  If you are yet to register as a nember of this group, please click <a  href="" >here. </a>
  <fieldset> 
    <legend> Register here </legend>
      Surname: <input type="text" name="sname" placeholder="Surname" required><br> <br>
      First Name: <input type="text" name="fname" placeholder="First name" required><br> <br>
      Last Name: <input type="text" name="lname" placeholder="Last name" required><br> <br>
      Department<select name="dept" required>
        <option value="CSC" selected> Computer science (CSC)</option>
        <option value="MTS"> Mathematics (MTS) </option>
        <option value="PHS"> Physics (PHS) </option>
        <option value="STS"> Statistics (STS) </option>
        </select> <br> <br>
      matricNo: <input type="text" name="matric" placeholder="2018...."><br> <br>

      Gender: <br>
              <input type="radio" name="gender" value="male" checked> Male <br>
              <input type="radio" name="gender" value="Female"> Female <br>
      <input type="submit" VAlue="Sign Up">
      </fieldset>
      Already have an account?<br>
      <a href="loginpage.php"> Login Here </a>
        </body>
      <footer  class="center"> <br>
<?php
$created = date("y");
echo ("copyright: 2019 -".  $created) 
?>
        </html>
