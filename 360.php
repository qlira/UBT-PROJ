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
  <!--  <meta charset="UTF-8">-->
  <title>About Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multiple.js/0.0.1/multiple.css"
        integrity="sha512-oXriCA6uhRjv4Lk/s7ViqAnb6SMDN4Bzaup0ijGV9GdpKtJ202SZhwtqDSq5YB45gVfVwnDjMqg2KeST2HCKgg=="
        crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous"/>
  <link rel="stylesheet" href="css/360.css" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="presentation">

  <?php  include ('components/navbar.php');?>
  <iframe allowfullscreen src="https://pchen66.github.io/Panolens/examples/littleplanet_image.html"
          style="width: 1916px; height: 99%"></iframe>
</div>

<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/about.js"></script>
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script src="js/three.min.js"></script>
<script src="js/panolens.min.js"></script>
</body>
</html>
