<?php
include('functions.php');
global $UserLogin;
if (!$UserLogin->isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: registration.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ABOUT NASA</title>
  <link rel="stylesheet" href="css/about.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
<?php  include ('components/navbar.php');?>
<div class="somth">
  <div class="descp">
    <img src="img/nasaleader.jpg">
    <h2>NASA Leadership</h2>
    <p>NASA is led by Administrator Jim Bridenstine, NASA's 13th administrator.
      Before joining NASA, Bridenstine served in the U.S. Congress, representing Oklahoma’s First Congressional District, serving on the Armed Services Committee and the Science, Space and Technology Committee.
      Bridenstine’s career in federal service began in the U.S. Navy, flying the E-2C Hawkeye off the USS Abraham Lincoln aircraft carrier. </p>
  </div>
  <div class="descp">
    <img src="img/astronautmoon.jpg">
    <h2>Careers @NASA</h2>
    <p>we are constantly bettering ourselves through career-long learning opportunities.
      We offer career counseling, tuition assistance, extensive onsite training,
      and other educational programs to ensure you continue to grow and expand your knowledge and skills.
      Depending on your own career path, you’ll have the opportunity to take on new roles across the agency—when filling many positions,
      NASA considers current employees first—or take on roles with more managerial responsibility.</p>
  </div>
  <div class="descp">
    <img src="img/smallbiz.jpg">
    <h2>NASA & Small Businesses</h2>
    <p>NASA is committed to providing all categories of small businesses an
      opportunity to participate in both NASA prime contracts and subcontracts.
      To do this we need to ensure that the lines of communication are open and effective.
      This website is key to that open communication.</p>
  </div>
</div>
<div id="vision">
  <img src="img/nasalogo.jpg">
  <h2>Vision</h2>
  <p>To discover and expand knowledge for the benefit of humanity.</p>
</div>
<div id="location" onclick="openVideo()">
  <a onclick="openVideo()" id="play"><h2>We Are Nasa</h2><i class="fab fa-youtube"></i></a>
</div>
<div id="centered-video" style="display: none;">
  <div id="close" onclick="closeVideo()"><i class="fas fa-times"></i></div>
<div id="video">
  <iframe id="embeddedVideo"
          src="https://www.youtube.com/embed/WeA7edXsU40?playlist=WeA7edXsU40&loop=1"
          frameborder="0" allowfullscreen>
  </iframe>
</div>
</div>
<?php include ('components/footer.php');?>
<script src="js/about.js"></script>
</body>
</html>
