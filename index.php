<?php
include('functions.php');
global $UserLogin;
if (!$UserLogin->isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: registration.php');
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>NASA</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">


  <!-- FontAwesome Import -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>


  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">


  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>
<body>
<div id="hero-image">
  <?php include ('components/navbar.php');?>

  <div class="hero-text">
    <h1>Welcome Home, Earthling</h1>

  </div>
</div>
<div class="about">
  <h1>What Did We Do?</h1>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quam ipsum, blandit vel molestie sed,
    tristique sit amet felis. Proin iaculis mattis lectus at scelerisque.
    Aenean varius et odio ut vestibulum. Curabitur ac fermentum lectus, a pellentesque ante.
    Vivamus feugiat ipsum id massa ultricies, non auctor libero luctus. Vivamus ac ante feugiat, dapibus leo in, egestas
    quam. Etiam vel lobortis sem, ut dignissim lectus. Integer ac laoreet justo, sit amet scelerisque sem.
  </p>

</div>
<div class="end">
  <?php include "components/footer.php";?>
</div>


<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>

</html>
