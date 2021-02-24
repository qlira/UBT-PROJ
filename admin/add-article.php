<?php
include('../functions.php');
include('includes/Produkti.php');
global $UserLogin, $user;
if (!$UserLogin->isLoggedIn()) {
  header('location: registration.php');
}
if (!$UserLogin->isAdmin()) {
  header('location: ../index.php');
}
$article->add_articles();

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link rel="stylesheet" href="css/dashboard.css" type="text/css">
  <link rel="stylesheet" href="css/add-user.css" type="text/css">

</head>

<body>
<!--header start--->
<?php include("components/header.php"); ?>
<!--header end--->
<!--slidebar start--->
<?php include("components/sidenavbar.php"); ?>
<!--slidebar end--->

<!--<div class="content"></div>-->

<div class="add-user-area">
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
    <div class="add-group">
      <label>Emri</label><br><br>
      <input type="text" name="emri" placeholder="Name" required>
    </div>
    <br><br>
    <div class="add-group">
      <label>Price</label><br><br>
      <input type="text" name="price" placeholder="Price" required>
    </div>
    <br><br>
    <div class="add-group">
      <label>Color</label><br><br>
      <input type="color" name="color" placeholder="Color" required>
    </div>
    <br>
    <div class=add-group">
      <label>Image</label><br><br>
      <input type="file" name="image" placeholder="Choose an Image " required>
    </div>
    <br>
    <div class="add-group">
      <input type="text" name="size" placeholder="Size: Choose betweem S, M, L, XL" required>
    </div>
    <br><br>
    <input id="adduser-btn" type="submit" name="add-btn" value="Add">
  </form>

</div>

</body>

</html>
