<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title> Ionic SmartWatch - LandingPage</title>
  <link rel="stylesheet" href="wel.css">
  <link rel="stylesheet" href="welcomesec2.css">
  <script src="https://kit.fontawesome.com/a2291e6430.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="style.css" /> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<script src="usincplyaer.js"></script>
<link rel="stylesheet" href="musicplayer.css">

</head>

<body>


 <section class="header">

  <div class="container">
    <header class="nav" id="and_menor">
      <div class="nav-container-content">
        <nav class="navbar">
          <a href="welcome.php">Home</a>
          <a href=" ">Massage</a>
          <a href="logout.php">Log Out</a>
        </nav>
      </div>
    </header>


    <div class="section-container-items">
      <div class="section-items-col-12">
        <div class="section">

  <h1>Hi !</h1>

          <h1>
            <a href="" class="typewrite" data-period="2000" data-type='[ "itisha ", "now i will connect to you", "always something update for you ", "check website reguraly" ]'>
              <span class="wrap"></span>
            </a>
          </h1>
          <h3>congrualtion if you are present hear </h3>





          <a href="#"><button><i class="fa fa-chevron-down">  Down  </i></button></a>
       
        </div>



      </div>
    </div>
  </div>
 </section>


<section class="welcomesection2">


<h1 class="massage">Massage </h1>

  <div  id="typedtext" > </div>




</section>



<section class="thirdsecton">

<h1 class="massageE">SONG FOR YOU </h1>



<h1>Music Player</h1>
<div class="music-container" id="music-container">
<div class="music-info">
<h4 class="title" id="title"></h4>
<div class="progress-container" id="progress-container">
<div class="progress" id="progress"></div>
</div>
</div>
<audio src="./music/heeriye.mp3" id="audio"></audio>
<div class="img-container">
<img src="./images/unnamed.png" alt="music-cover" id="cover" />
</div>
<div class="navigation">
<button id="prev" class="action-btn">
<i class="fa fa-backward" aria-hidden="true"></i>
</button>
<button id="play" class="action-btn action-btn-big">
<i class="fa fa-play" aria-hidden="true"></i>
</button>
<button id="next" class="action-btn">
<i class="fa fa-forward" aria-hidden="true"></i>
</button>
</div>
</div>




</section>






</body>
<script src="welce.js"></script>

</html>