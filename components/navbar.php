<nav>
  <div class="logo">
    <h1><a href="#hero-image"> NASA </a></h1>
  </div>

  <div class="menu">
    <ul>
      <?php
        global $UserLogin;
        if($UserLogin->isLoggedIn() && $_SESSION['user']['user_type'] == 'user'){
          echo '<li><a href="index.php">home</a></li>';
        }else if($UserLogin->isLoggedIn() && $_SESSION['user']['user_type'] == 'admin'){
          echo '<li><a href="admin/dashboard.php">dashboard</a>';
        }
        else{
          echo '<li><a href="index.php">home</a></li>';
        }
      ?>
<!--      <li><a href="index.php">home</a></li>-->
      <li><a href="produktet.php">products</a></li>
      <li><a href="360.php">360° <i class="fas fa-globe-americas"></i> </a></li>
      <li><a href="about.php">about</a></li>
      <li><a href="contact.php"><i class="fas fa-share-alt"></i></a></li>
      <li><a href="museum.php">museum</a></li>
<!--      --><?php
          global $UserLogin;
      if (!$UserLogin->isLoggedIn()) {
        echo '<li><a href="registration.php">Sign In</a></li>';
      }else {
        echo '<li><span style="font-size: 20px; color: white; border-left: 1px solid white; padding-left: 3em;">' . $_SESSION['user']['username'] . '</span></li>';
        echo '<a href="index.php?logout=1" style="cursor: pointer;"><i style="color: white;" class="fas fa-sign-out-alt"></i></a>';
      }
//      ?>
    </ul>
  </div>
</nav>
