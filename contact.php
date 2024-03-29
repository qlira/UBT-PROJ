<?php include ('functions.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <!--using fontawesome-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
          integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ=="
          crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
</head>
<body>
<?php  include ('components/navbar.php');?>
<!--contact-from-container-->
<section id="contact">
  <!--social-->
  <div class="social">
    <!--icons-->
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-dribbble"></i></a>
    <a href="#"><i class="fab fa-behance"></i></a>

  </div>
  <!--contact-box-->
  <div class="contact-box">
    <!--heading-->
    <div class="c-heading">
      <h1>Get In Touch</h1>
      <p>Call or Email Us Regarding Question Or Issues</p>
    </div>
    <!--inputs------->
    <div class="c-inputs">
      <input type="text" placeholder="Full Name"/>
      <input type="email" value="<?php
      global $UserLogin;
      echo $UserLogin->isLoggedIn()? $_SESSION['user']['email']:'';
      ?>" placeholder="Example@gmail.com"/>
      <textarea name="message" placeholder="Write Message"></textarea>
      <!--submit-btn---------->
      <button>SEND</button>

    </div>
  </div>
  <!--map---------->
  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.283904532673!2d21.153770415362736!3d42.655338779168225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549eefac31ff91%3A0x1b7c0190fe9e278d!2sSach%20Caffe!5e0!3m2!1sen!2s!4v1608387380402!5m2!1sen!2s"
      width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe>
  </div>
  <?php  include ('components/footer.php');?>
</section>
</body>
</html>
