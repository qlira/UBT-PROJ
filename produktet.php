<?php
include('functions.php');
include('admin/includes/Produkti.php');
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
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
<?php include('components/navbar.php'); ?>
<section class="slider">
  <ul id="autoWidth" class="cs-hidden">
    <!--1---->
    <?php
    foreach ($articles as $article){?>
      <li class="item-a">
        <!--box-slider--->
        <div class="box">
          <!--img-box--->
          <div class="slide-img">
            <img src="<?php  $article->img() ?>">
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
              <a href="#"><?php $article->emri() ?></a>
              <span>New Arrival</span>
            </div>
            <!--price--->
            <a href="#" class="price"><?php $article->price() ?></a>

          </div>
        </div>

      </li>
    <?php } ?>
  </ul>
</section>

<?php include('components/footer.php'); ?>

<script type="text/javascript" src="js/produktet.js"></script>
</body>
</html>
