<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8 />
    <title>We Buy DFW Houses!</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css"/>
    <link type="text/css" rel="stylesheet" href="css/mainstylesheet.css"/>
  </head>

  <body>
    <div class="contactinfo"></div>
      <div class="line"></div>

          <div class="nav">
            <ul class="navlist">
              
              <a href="index.html#sell"><li class="navitem blognav">SELL YOUR HOUSE FAST</li></a>
              <a href="index.html#how"><li class="navitem blognav">HOW IT WORKS</li></a>
              <a href="testimonials.html"><li class="navitem blognav">TESTIMONIALS</li></a>
              <a href="index.html"><li class="navitem blognav">HOMEPAGE</li></a>
              
            </ul>
          </div>

    <div class="content">
      <div class="spacersmall"></div>
      <div class="spacersmall"></div>
      
     

      
      <img class="intext up" src="logo120v2.png" height="120px" width="120px;">
      
      <h2 class="bigtext blogtitle">
<!--Title goes here-->Submission Accepted!
      </h2>
      
      <div class="spacer"></div>
      

    </div>
    
  


<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $from = 'From: We Buy DFW Houses'; 
  $to = 'henryn817@gmail.com'; 
  $subject = 'Property Information';

  $body = "Name: $name\n E-Mail: $email\n Phone: $phone\n Address: $address\n City: $city\n State: $state\n ZIP: $zip";

  if ($_POST['submit']) {
   mail($to, $subject, $body, $from);
    echo '<div class="contactinfo"></div>';
  }

?>


</body>
</html>