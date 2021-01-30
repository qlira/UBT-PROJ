<?php
include('../functions.php');
global $UserLogin;
if (!$UserLogin->isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: registration.php');
}

if(isset($_POST['update-btn'])){
  $conn = mysqli_connect("localhost", "root", "", "multi_login");
  if($conn-> connect_error){
    die("Connection failed". $conn-> connect_error);
  }
  $userid = mysqli_real_escape_string($conn,$_POST['id']);
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $usertype = mysqli_real_escape_string($conn,$_POST['user_type']);

  $sql = "UPDATE users SET username = '{$username}', email = '{$email}', user_type = '{$usertype}' WHERE id = '{$userid}'";

    if(mysqli_query($conn,$sql)){
      header("Location: users.php");
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
  <link rel="stylesheet" href="css/edit-user.css" type="text/css">

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

<div class="edit-area">
  <?php
  $conn = mysqli_connect("localhost", "root", "", "multi_login");
  if($conn-> connect_error){
    die("Connection failed". $conn-> connect_error);
  }
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = {$user_id}";
    $result = mysqli_query($conn, $sql) or die("Query Failed.");
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){

  ?>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="edit-group">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>
    </div>
    <div class="edit-group"><br>
        <label>Username</label><br><br>
        <input type="text" name="username" value="<?php echo $row['username']; ?>" required>
    </div>
    <div class="edit-group"><br>
      <label>Email</label><br><br>
      <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    </div>
    <div class="edit-group"><br>
      <label>User Type</label><br><br>
      <select name="user_type" value="<?php echo $row['user_type']; ?>" ><br>
        <?php
        if($row['user_type'] == 'admin'){
         echo "<option value='user'>Normal User</option>
              <option value='admin' selected>Admin</option>";
        }else{
         echo "<option value='user' selected>Normal User</option>
               <option value='admin'>Admin</option>";
        }
        ?>
      </select>
    </div>
    <div class="edit-group"><br>
      <input id="save-btn" type="submit" name="update-btn" value="Save">
    </div>
  </form>
  <?php
      }
    }
  ?>






</div>
</body>
</html>
