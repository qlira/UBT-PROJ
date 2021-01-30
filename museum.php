<?php
include('functions.php');
global $UserLogin;
if (!$UserLogin->isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: registration.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MUSEUM</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
  <link rel="stylesheet" href="css/museum.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>



</head>

<body>
<?php  include ('components/navbar.php');?>
<div class="panel">
  <div class="pricing-plan">
    <h2 class="pricing-header"><i class="fas fa-child"></i> Kid</h2>
    <ul class="pricing-features">
      <li class="pricing-features-item">age 4-11</li>
      <li class="pricing-features-item">ticket</li>
    </ul>
    <spam class="pricing-price">Free</spam>
  </div>

  <div class="pricing-plan">
    <h2 class="pricing-header"><i class="fas fa-male"></i> Adult</h2>
    <ul class="pricing-features">
      <li class="pricing-features-item">age 12 & older</li>
      <li class="pricing-features-item">ticket</li>
    </ul>
    <spam class="pricing-price">$29.95</spam>
  </div>

  <div class="pricing-plan">
    <h2 class="pricing-header"><i class="fab fa-redhat"></i> Senior</h2>
    <ul class="pricing-features">
      <li class="pricing-features-item">age 65 & older</li>
      <li class="pricing-features-item">ticket</li>
    </ul>
    <spam class="pricing-price">$27.95</spam>
  </div>

</div>
<div id="visit">
  <h2>You're Welcome To Visit Us At <a href="https://www.google.com/maps/place/Patricia+Huffman+Smith+NASA+Museum/@31.3458606,-93.8448935,15z/data=!4m5!3m4!1s0x0:0xc08a91adaa9f2e1!8m2!3d31.3458606!4d-93.8448935" target="_blank"><i class="fas fa-map-marked-alt"></i></a></h2>
</div>
<?php  include ('components/footer.php');?>
</body>

</html>
