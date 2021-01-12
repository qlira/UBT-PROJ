<?php
include('functions.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign in | Register</title>
  <link rel="stylesheet" type="text/css" href="css/registration.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
<nav>
  <div class="logo">
    <h1><a href="#hero-image"> NASA </a></h1>
  </div>

  <div class="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="produktet.php">Products</a></li>
      <li><a href="360.php">360° <i class="fas fa-globe-americas"></i> </a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="registration.php">Sign In</a></li>
      <li><a href="contact.php"><i class="fas fa-share-alt"></i></a></li>
      <li><a href="museum.php">Museum</a></li>

    </ul>
  </div>
</nav>
<section>
  <div class="container">
    <div class="user signinBx">
      <div class="imgBx"><img src="img/img1.jpg" alt="img1"></div>
      <div class="formBx">
        <form class="form" onsubmit="return validation()">
          <h2 class="error"></h2>
          <h2>Sign In</h2>
          <input type="text" name="username" placeholder="Username" required>
          <input type="password" name="email" placeholder="Password" required>
          <input type="submit" name="" value="Login">
          <p class="signup">Not a member ? <a href="#" onclick="toggleForm();">Sign Up</a></p>
        </form>
      </div>
    </div>
    <div class="user signupBx">
      <div class="formBx">
        <form id="form" action="#" onsubmit="return validation()">
          <h2>Become a member! Create your Account</h2>
          <input class="username" type="text" name="username" placeholder="Username" required>
          <input class="email" type="email" name="email" placeholder="Email" required>
          <input id="pw1" type="password" name="password" placeholder="Password" required onkeydown="validation()">
          <input id="pw2" type="password" name="confpass" placeholder="Confirm Password" required>
          <input type="submit" name="" value="Sign Up">
          <p class="signup">Already a member ? <a href="#" onclick="toggleForm();">Sign In</a></p>
          <p class="signup" id="text"></p>
        </form>
      </div>
      <div class="imgBx"><img src="img/img2.jpg" alt="img2"></div>
    </div>
  </div>
</section>
<footer>
  <ul>
    <li><a href="">No Fear Act</a></li>
    <li><a href="">Privacy</a></li>
    <li><a href="">Office of Inspector General</a></li>
    <li><a href="contact.php">Contact NASA</a></li>
  </ul>
</footer>
<script type="text/javascript" src="js/main.js"></script>
<script defer type="text/javascript">
  function toggleForm() {
    let container = document.querySelector('.container');
    container.classList.toggle('active');
  }
</script>
</body>
</html>