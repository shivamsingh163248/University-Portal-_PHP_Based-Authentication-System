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
<link rel="preconnect" href="https://fonts.googleapis.com">



    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <!-- Link to css -->
    <link rel="stylesheet" href="musicstyles.css">
    <!-- link to bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


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
            <a href="" class="typewrite" data-period="2000" data-type='[ "komal", "now i will connect to you", "always something update for you ", "check website reguraly" ]'>
              <span class="wrap"></span>
            </a>
          </h1>
          <h3>congrualtion if you are present hear </h3>





          <a href="#containerse"><button><i class="fa fa-chevron-down">  Down  </i></button></a>
       
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

<div class="music">
<div id="containerse">
        
        <div id="img">
            <img id="track_cover" src="images/music.png" alt="disc" width="250">
        </div>
        <div id="title">
            <h3 id="track_title">track title</h3>
            <p id="track_artist">track artist</p>
        </div>
        <div id="music_time">
            <p id="track_current_time"><span id="current_time_mins">00</span>:<span id="current_time_secs">00</span></p>
            <input type="range" name="range" class="slider" onchange="seek()" id="range" min="0" max="300" value="0">
            <p id="track_fulltime"><span id="track_mins">00</span>:<span id="track_secs">00</span></p>
        </div>
        <div id="music_functions">
            <div class="function">
                <i id="prev" onclick="prev()" class="bi bi-skip-backward-circle"></i>
            </div>
            <div class="function">
                <i id="play_pause" onclick="play_pause()" class="bi bi-play-circle"></i>
            </div>
            <div class="function">
                <i id="next" onclick="next()" class="bi bi-skip-forward-circle"></i>

            </div>
        </div>
        <div id="volume">
            <i class="bi bi-volume-down"></i>
            <input type="range" name="volume" onchange="volume()" class="slider" value="8" id="vol" min="0" max="10">
            <i class="bi bi-volume-up"></i>
        </div>
    </div>
    
</div>
   

</section>

<section> <p>DON'T FORGOT TO LOGOUT</p></section>






</body>
<script src="app.js" charset="utf-8"></script>
<script src="welce.js"></script>

</html>