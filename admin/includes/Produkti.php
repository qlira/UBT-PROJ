<?php
include_once("database.php");

class Article
{
  public function show_articles()
  {
    global $db;

    $sql = "SELECT id, emri, price, size,img, color from articles";
    $result = $db->query($sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["emri"] . "</td><td>" . $row["price"] . "</td><td>" . $row["color"] . "</td><td>" . $row["size"] . "</td><td>" . $row["img"] . "</td><td>" . "<a href='edit-article.php?id={$row["id"]}'><i class='fas fa-edit'></i></a>" . "</td><td>" . "<a href='delete-article.php?id={$row["id"]}'><i class='fas fa-trash-alt'></i></a>" . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 result";
    }
  }

  public function edit_article()
  {
    if (isset($_POST['update-btn'])) {
      global $db;

      $id = $db->escape_string($_POST['id']);
      $emri = $db->escape_string($_POST['emri']);
      $image = $db->escape_string($_POST['img']);
      $price = $db->escape_string($_POST['price']);
      $color = $db->escape_string($_POST['color']);

      $sql = "UPDATE articles SET emri = '{$emri}', price = '{$price}', color = '{$color}' WHERE id = '{$id}'";

      if ($db->query($sql)) {
        header("Location: articles.php");
      }
    }


  }

  public function delete_article()
  {

    global $db;
    $id = $_GET['id'];

    $sql = "DELETE FROM articles WHERE id = {$id}";

    if ($db->query($sql)) {
      header("Location: articles.php");
    } else {
      echo "<script>alert('Cant delete article record!)</script>";
    }

    mysqli_close($db);
  }

  public function add_articles()
  {
    global $db;

    if (isset($_POST['add-btn'])) {

      $emri = $db->escape_string($_POST['emri']);
      $price = $db->escape_string($_POST['price']);
      $color = $db->escape_string($_POST['color']);
      $size = $db->escape_string(($_POST['size']));
      $sql = "SELECT emri FROM articles WHERE emri = '{$emri}'";
      $result = $db->query($sql);
      $v1 = rand(1111, 9999);
      $v2 = rand(1111, 9999);

      $v3 = $v1 . $v2;

      $v3 = md5($v3);

      $fnm = $_FILES["image"]["jpg"];
      $dst = "/upload" . $v3 . $fnm;
      $dst1 = "upload/" . $v3 . $fnm;
      move_uploaded_file($_FILES["image"]["tmp_name"], $dst1);
      if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Article already exists');</script>";
      } else {
        $sql1 = "INSERT INTO articles (emri, price, color, size, img)
             VALUES ('{$emri}', '{$price}', '{$color}', '{$size}','{$dst1}')";
        if ($db->query($sql1)) {
          header("Location: produktet.php");
        }
      }


    }
  }

}

$article = new Article();
