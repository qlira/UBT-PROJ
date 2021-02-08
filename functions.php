<?php
include_once('admin/includes/database.php');
session_start();
// call the register() function if register_btn is clicked

$UserRegister = new RegisterUser();
if (isset($_POST['register_btn'])) {
  $UserRegister->register();
}
// connect to database
class RegisterUser{




// REGISTER USER
 public function register(){
  // call these variables with the global keyword to make them available in function
global $db;
  // receive all input values from the form. Call the e() function
  // defined below to escape form values
  $username =  $_POST['username'];
  $email    =  $_POST['email'];
  $password =  $_POST['password'];
  $confpass =  $_POST['confpass'];

   $db->escape_string($username);
   $db->escape_string($email);
   $db->escape_string($password);
   $db->escape_string($confpass);

  // form validation: ensure that the form is correctly filled
  if (empty($username) || empty($email) || empty($password) || $password != $confpass) {
      return false;
  }
  // register user if there are no errors in the form
  else{
    $password = md5($password);//encrypt the password before saving in the database

//    if (isset($_POST['user_type'])) {
//      $user_type = $_POST['user_type'];
//      $query = "INSERT INTO users (username, email, user_type, password)
//					  VALUES('$username', '$email', '$user_type', '$password')";
//      mysqli_query($db, $query);
//      $_SESSION['success']  = "New user successfully created!!";
//      header('location: home.php');

      $query = "INSERT INTO users (username, email, user_type, password)
					  VALUES('$username', '$email', 'user', '$password')";
      $db->query($query);
    header('location: index.php');


//      // get id of the created user
      $logged_in_user_id = $db->the_insert_id();

      $_SESSION['user'] = $this->get_user_by_id($logged_in_user_id); // put logged in user in session
    }
  }
  public function get_user_by_id($user_id){
   global $db;
   $db->query("SELECT * FROM users WHERE id = $user_id");
  }

}

// return user array from their id
//function getUserById($id){
//  global $db;
//  $query = "SELECT * FROM users WHERE id=" . $id;
//  $result = mysqli_query($db, $query);
//
//  $user = mysqli_fetch_assoc($result);
//  return $user;
//}
//
//
//

// call the login() function if register_btn is clicked
$UserLogin = new LoginUser();
if (isset($_POST['submit'])) {
 $UserLogin->login();
}
$UserLogin->log_out();
class LoginUser
{

  function isLoggedIn()
  {
    if (isset($_SESSION['user'])) {
      return true;
    } else {
      return false;
    }
  }
  function isAdmin()
  {
    if ($_SESSION['user']['user_type'] =='admin') {
      return true;
    } else {
      return false;
    }
  }
  public function log_out()
  {
    if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['user']);
      header("location: registration.php");
    }
  }
// LOGIN USER
function login()
{
  global $db;

  // grap form values
  $username = $_POST['username'];
  $password = $_POST['password'];

  // make sure form is filled properly
  if (empty($username) || empty($password)) {
    echo "Empty Form";
  }else{

    $password = md5($password);

    $results = $db->query("SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1");

    if (mysqli_num_rows($results) == 1) { // user found
      // check if user is admin or user
      $logged_in_user = mysqli_fetch_assoc($results);
      if ($logged_in_user['user_type'] == 'admin') {

        $_SESSION['user'] = $logged_in_user;
        header('location: admin/dashboard.php');
      } else {
        $_SESSION['user'] = $logged_in_user;
        header('location: index.php');
      }
    } else {
      echo "Wrong Username/Password";
    }
  }
}
}













//public function UserRegister($username, $email, $password){
//  $password = md5($password);
//  $qr = mysqli_query("INSERT INTO users(username,  email, password) VALUES('".$username."','".$email."','".$password."')")
//  or die(mysqli_error());
//  return $qr;
//}
//public function Login($username, $password){
//  $res = mysqli_query("SELECT * FROM users WHERE username = '".$username."' AND password = '".md5($password)."'");
//  $user_data = mysqli_fetch_array($res);
//  $no_rows = mysqli_num_rows($res);
//
//  if($no_rows == 1){
//    $_SESSION['submit'] = true;
//    $_SESSION['userid'] = $user_data['id'];
//    $_SESSION['username'] = $user_data['username'];
//    $_SESSION['email'] = $user_data['email'];
//    return true;
//  }
//  else{
//    return false;
//  }
//}
//public function isUserExist($username){
//  $qr = mysqli_query("SELECT * FROM users WHERE username = '".$username."'");
//  $row = mysqli_num_rows($qr);
//  if($row > 0){
//    return true;
//  }
//  else{
//    return false;
//  }
//}
