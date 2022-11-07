<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        <div class="container">
            <div class="line1">
                <h1 style="font-size: 40px;">Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="email"><b>name</b></label>
                <input type="text" placeholder=" your name" name="yourname" id="name" required>
                
                <label for="email"><b>username</b></label>
                <input type="text" placeholder="Enter Email" name="username" id="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="confirm_password" id="psw-repeat"
                    required>
                <hr>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <button type="submit" class="registerbtn">Register</button>


                <div class="container-signin">
                    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                </div>
            </div>
    </form>
</body>
</html>





