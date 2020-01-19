 <!DOCTYPE html>
<html>
<head>
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
   <button type="button" onclick="document.getElementById('demo').innerHTML = you are watching the homepage already please refresh your brouser tom get new updates">
     HOME
    </button>
    <p id="demo"></p>
    <a href="uklogin.php">LOGIN</a> <br> <br>
    <a href="ukRegistration.php">REGISTER</a> <br> <br>
    <a href="Group2.php">Meet the Group 2 squad</a> <br> <br>
  </div>
  </div> <br>
  <h1>CSC ASSIGNMENT  </h1> <br> <br>
  <h3>
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
</h3>
<div class="background">
  <div class="transbox">
    <marquee> Welcome to Group two Official website </marquee>
  </div>
</dIV>
<div class="intro">
        <p> MAKE MONEY WITH UK49'S BOOMING (8-10 TIMES IN A WEEK) ONLY BY JOINING OUR FORUM</p>      
    </div>
<p> People are becoming 
  <strong>'millionaires'</strong> on 
  <strong> Uk Boomer Time</strong> 
  through our daily forecast of Uk49's, Goslotto, Powerball, Megamillion and SA lotto.</p>
<p> with the help of the platform, all members will be getting 100% winning numbers on  all games listed above.
    <h2> FREQUENTLY ASKED QUESTIONS 
      (<strong class="span"> please read to the end</strong>)
    </h2>
    <h3> HOW DO I BOOM ON UK BOOMER? </h3>
    <p> you only need to get our coupon code and register with us and you check our daily forecast
    <h3> WILL I BOOM EVERYDAY? </h3>
    <p> We can't assure you everyday booming, 
      because there might be some problem from the technical crew but you boom 8-10 times weekly. 
      Only the scammers will assure you 100% booming.</p>
    <h3> HOW'S THE SUBSCRIPTION PACKAGE? </h3>
    <p>2 Week's Subscription package - <e class="before">R500</e> R300 <br>
     class="p">1 month coupon package - <e class="before">R800</e> R400 <br>
    1<sup>1</Sup>/<sub>2</sub> month coupon package -<e class="before">R1000</e> R600 <br>
    2 months coupon package - <e class="before">R1500 </e> R700 <br>
    <h3> HOW DO I MAKE PAYMENT?</h3>
    <p> you make your payment by purchasing coupon code from our authorized coupon agent via bank or paying in a store, preferably.
    <h3> HOW TO REGISTER?<h3>
    <strong>UK BOOMER </strong> registration is easy as ABC, see steps below. 
    <pre>
    <ol>
      <li> Click on registration at the top navigation menu or click <a href="ukRegistration.php">here</a></li>
      <li> Fill the form</li>
      <li> Input your purchased coupon code and sign up </li>
      <li> That's all. Your account has been activated. </li>
    </ol>
    </pre>
    <h2> MEMBERSHIP BENEFIT:
      <ul>
        <li> You Boom!!!</li>
        <li> Free voucher as bonus sometimes by admin </li>
        </ul>
        
      <strong class="error" > NOTE </strong>
    <pre>
    <ul>
    <li> We don't share numbers on sunday</li>
    <li> All members can check games daily basis from 9.00am</li>
    </ul>
    <pre> <br>
     <a href="ukcoupon.php"> GET COUPON CODE HERE </a> <br> <br>
    <a href="ukregistration.php"> REGISTER HERE </a> <br>
</body>
<footer  class="center">
  <img src="download.png" alt="logo">
<?php
$created = date("y");
echo ("copyright: 2019 -".  $created) 
?>
</html>