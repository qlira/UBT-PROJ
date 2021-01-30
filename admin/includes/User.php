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
}
$user = new User();
?>
