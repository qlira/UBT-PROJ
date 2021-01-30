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
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produktet</title>
  <!--icons--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!--produktet.css--->
  <link rel="stylesheet" href="css/produktet.css" type="text/css">
  <!--light-slider.css--->
  <link rel="stylesheet" href="css/lightslider.css" type="text/css">
  <!--Jquery--->
  <script type="text/javascript" src="js/Jquery.js"></script>
  <!--light-slider.js--->
  <script type="text/javascript" src="js/lightslider.js"></script>
</head>
<body>
<?php  include ('components/navbar.php');?>
<section class="slider">
<ul id="autoWidth" class="cs-hidden">
  <!--1---->
  <li class="item-a">
<!--box-slider--->
  <div class="box">
    <!--img-box--->
    <div class="slide-img">
      <img src="img/blacktshirt.jpg">
      <!--overlayer--->
      <div class="overlay">
        <!--buy-btn--->
        <a href="#" class="buy-btn">Buy Now</a>

      </div>
    </div>
    <!--detail-box--->
    <div class="detail-box">
      <!--type--->
      <div class="type">
        <a href="#">NASA T SHIRT</a>
        <span>New Arrival</span>
      </div>
        <!--price--->
      <a href="#" class="price">$23</a>

    </div>
  </div>

  </li>
  <!--2---->
  <li class="item-b">
    <!--box-slider--->
    <div class="box">
      <!--img-box--->
      <div class="slide-img">
        <img src="img/nasahoodie.jpg">
        <!--overlayer--->
        <div class="overlay">
          <!--buy-btn--->
          <a href="#" class="buy-btn">Buy Now</a>

        </div>
      </div>
      <!--detail-box--->
      <div class="detail-box">
        <!--type--->
        <div class="type">
          <a href="#">CREW 1 HOODIE</a>
          <span>New Arrival</span>
        </div>
        <!--price--->
        <a href="#" class="price">$34.95</a>

      </div>
    </div>

  </li>
  <!--3---->
  <li class="item-c">
    <!--box-slider--->
    <div class="box">
      <!--img-box--->
      <div class="slide-img">
        <img src="img/whiteduks.jpg">
        <!--overlayer--->
        <div class="overlay">
          <!--buy-btn--->
          <a href="#" class="buy-btn">Buy Now</a>

        </div>
      </div>
      <!--detail-box--->
      <div class="detail-box">
        <!--type--->
        <div class="type">
          <a href="#">NASA HOODIE</a>
          <span>New Arrival</span>
        </div>
        <!--price--->
        <a href="#" class="price">$30.99</a>

      </div>
    </div>

  </li>
  <!--4---->
  <li class="item-d">
    <!--box-slider--->
    <div class="box">
      <!--img-box--->
      <div class="slide-img">
        <img src="img/Crew.jpg">
        <!--overlayer--->
        <div class="overlay">
          <!--buy-btn--->
          <a href="#" class="buy-btn">Buy Now</a>

        </div>
      </div>
      <!--detail-box--->
      <div class="detail-box">
        <!--type--->
        <div class="type">
          <a href="#">CREW T SHIRT</a>
          <span>New Arrival</span>
        </div>
        <!--price--->
        <a href="#" class="price">$13.99</a>

      </div>
    </div>

  </li>
  <!--5---->
  <li class="item-e">
    <!--box-slider--->
    <div class="box">
      <!--img-box--->
      <div class="slide-img">
        <img src="img/Crew1.jpg">
        <!--overlayer--->
        <div class="overlay">
          <!--buy-btn--->
          <a href="#" class="buy-btn">Buy Now</a>

        </div>
      </div>
      <!--detail-box--->
      <div class="detail-box">
        <!--type--->
        <div class="type">
          <a href="#">CREW 1 T SHIRT</a>
          <span>New Arrival</span>
        </div>
        <!--price--->
        <a href="#" class="price">$15.95</a>

      </div>
    </div>

  </li>
  <!--6---->
  <li class="item-f">
    <!--box-slider--->
    <div class="box">
      <!--img-box--->
      <div class="slide-img">
        <img src="img/flightjacket.jpg">
        <!--overlayer--->
        <div class="overlay">
          <!--buy-btn--->
          <a href="#" class="buy-btn">Buy Now</a>

        </div>
      </div>
      <!--detail-box--->
      <div class="detail-box">
        <!--type--->
        <div class="type">
          <a href="#">APOLLO FLIGHT JACKET</a>
          <span>New Arrival</span>
        </div>
        <!--price--->
        <a href="#" class="price">$64.95</a>

      </div>
    </div>

  </li>
  <!--7---->
  <li class="item-g">
    <!--box-slider--->
    <div class="box">
      <!--img-box--->
      <div class="slide-img">
        <img src="img/apollohat.jpg">
        <!--overlayer--->
        <div class="overlay">
          <!--buy-btn--->
          <a href="#" class="buy-btn">Buy Now</a>

        </div>
      </div>
      <!--detail-box--->
      <div class="detail-box">
        <!--type--->
        <div class="type">
          <a href="#">APOLLO 11 NASA CAP</a>
          <span>New Arrival</span>
        </div>
        <!--price--->
        <a href="#" class="price">$24.95</a>

      </div>
    </div>

  </li>
  <!--8---->
  <li class="item-h">
    <!--box-slider--->
    <div class="box">
      <!--img-box--->
      <div class="slide-img">
        <img src="img/apollobottle.jpg">
        <!--overlayer--->
        <div class="overlay">
          <!--buy-btn--->
          <a href="#" class="buy-btn">Buy Now</a>

        </div>
      </div>
      <!--detail-box--->
      <div class="detail-box">
        <!--type--->
        <div class="type">
          <a href="#">apollo bottle</a>
          <span>New Arrival</span>
        </div>
        <!--price--->
        <a href="#" class="price">$7.95</a>

      </div>
    </div>

  </li>
  <!--9---->
  <li class="item-a">
    <!--box-slider--->
    <div class="box">
      <!--img-box--->
      <div class="slide-img">
        <img src="img/nutcracker.jpg">
        <!--overlayer--->
        <div class="overlay">
          <!--buy-btn--->
          <a href="#" class="buy-btn">Buy Now</a>

        </div>
      </div>
      <!--detail-box--->
      <div class="detail-box">
        <!--type--->
        <div class="type">
          <a href="#">ASTRONAUT NUTCRACKER</a>
          <span>New Arrival</span>
        </div>
        <!--price--->
        <a href="#" class="price">$12.95</a>

      </div>
    </div>

  </li>
</ul>
</section>

<?php  include ('components/footer.php');?>

<script type="text/javascript" src="js/produktet.js"></script>
</body>
</html>
