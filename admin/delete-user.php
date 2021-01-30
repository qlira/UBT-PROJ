<?php
//$conn = mysqli_connect('localhost', 'root', '', 'multi_login');
//if($conn-> connect_error){
//  die("Connection failed". $conn-> connect_error);
//}
global $db;
$userid = $_GET['id'];

$sql = "DELETE FROM users WHERE id = {$userid}";

if($db->query($sql)){
  header("Location: users.php");
}else{
  echo "<p style='color: red;margin: 10px 0;'>Can\'t Delete the User Record</p>";
}

//mysqli_close($db);
?>
