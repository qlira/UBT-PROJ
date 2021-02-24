<?php
include('../functions.php');
include('includes/User.php');
include('includes/Produkti.php');
global $UserLogin;
if (!$UserLogin->isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: registration.php');
}
if(!$UserLogin->isAdmin()){
  header('location: ../index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="css/dashboard.css" type="text/css">
  <link rel="stylesheet" href="css/users.css" type="text/css">
</head>
<body>
<!--header start--->
<?php include("components/header.php");?>
<!--header end--->
<!--slidebar start--->
<?php include("components/sidenavbar.php"); ?>
<!--slidebar end--->

<!--<div class="content"></div>-->
<div class="table-area">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Color</th>
      <th>Size</th>
      <th>Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <?php
    global $article;
    $article->show_articles();
    ?>
  </table>
</div>
</body>
</html>
