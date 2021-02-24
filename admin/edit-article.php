<?php
include('../functions.php');
include('includes/User.php');
include('includes/Produkti.php');
global $UserLogin, $user;
if (!$UserLogin->isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: registration.php');
}
if (!$UserLogin->isAdmin()) {
    header('location: ../index.php');
}

$article->edit_article();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard.css" type="text/css">
    <link rel="stylesheet" href="css/edit-user.css" type="text/css">

</head>

<body>

    <!--header start--->
    <?php include("components/header.php"); ?>
    <!--header end--->
    <!--slidebar start--->
    <?php include("components/sidenavbar.php"); ?>
    <!--slidebar end--->

    <div class="edit-area">
        <?php
        global $db;
        $id = $_GET['id'];
        $sql = "SELECT * FROM articles WHERE id = {$id}";
        $result = $db->query($sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="edit-group">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>
                    </div>
                    <div class="edit-group"><br>
                        <label>Name</label><br><br>
                        <input type="text" name="emri" value="<?php echo $row['emri']; ?>" required>
                    </div>
                    <div class="edit-group"><br>
                        <label>Price</label><br><br>
                        <input type="text" name="price" value="<?php echo $row['price']; ?>" required>
                    </div>
                    <div class="edit-group"><br>
                        <label>Color</label><br><br>
                        <input type="text" name="color" value="<?php echo $row['color']; ?>" required>
                    </div>
                    <div class="edit-group"><br>
                        <label>Size</label><br><br>
                        <input type="text" name="size" value="<?php echo $row['size']; ?>" required>
                    </div>
                  <div class="edit-group"><br>
                    <label>Image</label><br><br>
                    <input type="text" name="image" value="<?php echo $row['image']; ?>" required>
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
