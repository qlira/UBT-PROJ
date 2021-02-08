<?php
include('../functions.php');
include('includes/User.php');
global $UserLogin, $user;
if (!$UserLogin->isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: registration.php');
}
if(!$UserLogin->isAdmin()){
  header('location: ../index.php');
}

$user->edit_user();

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

<!--header start--->
<?php include("components/header.php");?>
<!--header end--->
<!--slidebar start--->
<?php include("components/sidenavbar.php"); ?>
<!--slidebar end--->

<div class="edit-area">
  <?php
  global $db;
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = {$user_id}";
    $result = $db->query($sql);
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
