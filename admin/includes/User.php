<?php
include_once ("database.php");
class User
{
  public function show_users()
  {
    global $db;

    $sql = "SELECT id, username, email, user_type from users";
    $result = $db->query($sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["user_type"] . "</td><td>" . "<a href='edit-user.php?id={$row["id"]}'><i class='fas fa-edit'></i></a>" . "</td><td>" . "<a href='delete-user.php?id={$row["id"]}'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 result";
    }
  }

  public function edit_user(){
    if(isset($_POST['update-btn'])){
      global $db;

      $userid = $db->escape_string($_POST['id']);
      $username = $db->escape_string($_POST['username']);
      $email = $db->escape_string($_POST['email']);
      $usertype = $db->escape_string($_POST['user_type']);

      $sql = "UPDATE users SET username = '{$username}', email = '{$email}', user_type = '{$usertype}' WHERE id = '{$userid}'";

      if($db->query($sql)){
        header("Location: users.php");
      }
    }


  }

  public function delete_user(){

    global $db;
    $userid = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = {$userid}";

    if($db->query($sql)){
      header("Location: users.php");
    }else{
      echo "<script>alert('Cant delete user record!)</script>";
    }

    mysqli_close($db);
  }

  public function add_user(){
    global $db;

    if(isset($_POST['add-btn'])){

      $username = $db->escape_string($_POST['username']);
      $email = $db->escape_string($_POST['email']);
      $password = $db->escape_string($_POST['password']);
      $confpass = $db->escape_string(md5($_POST['confpass']));
      $userType = $db->escape_string($_POST['user_type']);

      $sql = "SELECT username FROM users WHERE username = '{$username}'";
      $result = $db->query($sql);

      if(mysqli_num_rows($result) > 0){
        echo "<script>alert('User already exists');</script>";
      }else{
        $sql1 = "INSERT INTO users (username, email, user_type, password)
             VALUES ('{$username}', '{$email}', '{$userType}', '{$password}')";
        if($db->query($sql1)){
          header("Location: users.php");
        }
      }
    }
  }

}
$user = new User();
?>
