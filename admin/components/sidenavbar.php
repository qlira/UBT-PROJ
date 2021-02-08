<div class="sidebar">
  <center>
    <img src="../img/user_profile.png" class="profile_image">
    <?php
      echo '<h4>'. $_SESSION['user']['username'] . '</h4>'
    ?>
<!--    <h4>Jessica</h4>-->
  </center>
  <a href="users.php"><i class="fas fa-users"></i><span>Users</span></a>
  <a href="#"><i class="fas fa-database"></i><span>Products</span></a>
  <a href="#"><i class="fas fa-truck"></i><span>Orders</span></a>
  <a href="#"><i class="fas fa-share-alt"></i><span>Contacts</span></a>
  <a href="../index.php"><i class="fas fa-home"></i><span>Home</span></a>

</div>








