<?php
include('../functions.php');
global $UserLogin;
if (!$UserLogin->isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: registration.php');
}

if(isset($_POST['add-btn'])){
  $conn = mysqli_connect("localhost", "root", "", "multi_login");
  if($conn-> connect_error){
    die("Connection failed". $conn-> connect_error);
  }
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $confpass = mysqli_real_escape_string($conn,md5($_POST['confpass']));
  $userType = mysqli_real_escape_string($conn,$_POST['user_type']);

  $sql = "SELECT username FROM users WHERE username = {$username}";
  $result = mysqli_query($conn, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
    echo "<p style='color: red;text-align: center;margin: 10px 0;'>Username already Exists.</p>";
  }else{
    $sql1 = "INSERT INTO users (username, email, user_type, password)
             VALUES ('{$username}', '{$email}', '{$userType}', '{$password}')";
    if(mysqli_query($conn, $sql1)){
      header("Location: users.php");
    }
  }
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
  <link rel="stylesheet" href="css/add-user.css" type="text/css">

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
    <?php
    if (!isLoggedIn()) {
      echo '<li><a href="registration.php">Sign In</a></li>';
    }else {
      echo '<a id="logout_btn" href="../index.php?logout=1" style="cursor: pointer;">Logout</a>';
    }
    ?>
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
  <a href="users.php"><i class="fas fa-users"></i><span>Users</span></a>
  <a href="#"><i class="fas fa-users"></i><span>Products</span></a>
  <a href="#"><i class="fas fa-share-alt"></i><span>Orders</span></a>
  <a href="#"><i class="fas fa-share-alt"></i><span>Contacts</span></a>

</div>
<!--slidebar end--->

<!--<div class="content"></div>-->

<div class="add-user-area">
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
    <div class="add-group">
        <label>Username</label><br><br>
        <input type="text" name="username" placeholder="Username" required>
    </div><br><br>
    <div class="add-group">
      <label>Email</label><br><br>
      <input type="email" name="email" placeholder="Email" required>
    </div><br><br>
    <div class="add-group">
      <label>Password</label><br><br>
      <input type="password" name="password" placeholder="Password" required>
    </div><br>
    <div class="add-group">
      <input type="password" name="confpass" placeholder="ConfirmPassword" required>
    </div><br><br>
    <div class="add-group">
      <label>User Type</label><br><br>
      <select name="user_type">
        <option value="user">Normal User</option>
        <option value="admin">Admin</option>
      </select>
    </div><br><br>
    <input id="adduser-btn" type="submit" name="add-btn" value="Add">

  </form>

</div>

</body>
</html>
