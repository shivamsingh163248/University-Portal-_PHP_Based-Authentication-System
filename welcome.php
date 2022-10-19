<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>zero one organization</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="section1.css">
  <link rel="stylesheet" href="welcome.css">
  <script src="main.js"></script>

</head>

<body>
  <div class="topnav" id="nevigation">
    <a href="#home" class="active">Home</a>
    <a href="login.php" class="login">services</a>
    <a href="register.php" class="register">contacts</a>
    <div class="dropdown">
      <button class="dropbtn">services
        <i class="fas fa-angle-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="logout.php">logout</a>
        <a href="#">link2</a>
        <a href="#">link 3</a>
      </div>

    </div>
    <a href="#call">call</a>
    <a id="nav_link"><?php echo "Welcome : " . $_SESSION['username'] ?></a>
   
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

  </div>
  <section class="section1">
  <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://wallpaperaccess.com/full/497913.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://wallpaperaccess.com/full/497915.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://wallpaperaccess.com/full/497918.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
  </section>

 


</body>
<script src="welcome.js"></script>
</html>