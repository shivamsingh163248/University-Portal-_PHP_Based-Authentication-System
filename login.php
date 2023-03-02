<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;

}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM vbspu WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


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
    <script src="main.js"></script>

</head>

<body>
    <div class="topnav" id="nevigation">
        <a href="#home" class="active">Home</a>
        <a href="service.php" class="services">services</a>
        <a href="#contact" class="contacts">contacts</a>
        <div class="dropdown">
            <button class="dropbtn">services
                <i class="fas fa-angle-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=login&table=users&pos=0">deta base downlode</a>
                <a href="#">link2</a>
                <a href="#">link 3</a>
            </div>

        </div>
        <a href="#call">call</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

    </div>
    <section class="section1">
        <div class="row">
            <div class="column left" style="background-color:inherit;">


                <img src="logo.png" alt="logo" width="100" height="100" id="sectionlogo">
                <div class="linesize">
                    <h1 id="h1font">VBSPU</h1>
                     <br>
                     <h1 id="organization">purvanchal university</h1>
                </div>
                <hr>
                <h1>
                    <p>Our organization with you </p>
                </h1>


            </div>
            <div class="column right" style="background-color: inherit;">

                <form action="" method="POST">
                    <div class="container">
                        <div class="line1">
                            <h1 style="font-size: 40px;">Log In</h1>
                            <p>Welocome in vbspu</p>
                            <hr>

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="username" id="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" id="psw" required>

                            
                            <hr>
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                            <button type="submit" class="registerbtn">Login</button>


                            <div class="container-signin">
                                <p>You have Not Account Creat here? <a href="index.php">Register</a>.</p>
                            </div>
                        </div>
                </form>
            </div>
    </section>
    <section class="section2">
        <img src="loo.png" alt="">
    </section>


</body>

</html>