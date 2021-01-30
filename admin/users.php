<?php
include('../functions.php');
include('includes/User.php');
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
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="css/dashboard.css" type="text/css">
  <link rel="stylesheet" href="css/users.css" type="text/css">
</head>
<body>

<input type="checkbox" id="check">
<!--header start--->
<header>
  <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
  </label>
  <div class="left-area">
    <h3>Nasa<span> Admin</span></h3>
  </div>
  <div class="right-area">
    <a id="add-btn" href="add-user.php">Add User</a>
    <a id="logout_btn" href="../index.php?logout=1" style="cursor: pointer;">Logout</a>
  </div>
</header>
<!--header end--->
<!--slidebar start--->
<div class="sidebar">
  <center>
    <img src="../img/user_profile.png" class="profile_image">
    <?php
    echo '<h4>'. $_SESSION['user']['username'] . '</h4>'
    ?>
    <!--    <h4>Jessica</h4>-->
  </center>
  <a href="#"><i class="fas fa-users"></i><span>Users</span></a>
  <a href="#"><i class="fas fa-users"></i><span>Products</span></a>
  <a href="#"><i class="fas fa-share-alt"></i><span>Orders</span></a>
  <a href="#"><i class="fas fa-share-alt"></i><span>Contacts</span></a>

</div>
<!--slidebar end--->

<!--<div class="content"></div>-->
<div class="table-area">
  <table>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>User_Type</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <?php
    global $user;
    $user->show_users();
    ?>
  </table>
</div>
</body>
</html>
