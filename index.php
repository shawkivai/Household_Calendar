<?php

session_start();

if(isset($_SESSION['user'])){
    header("Location:calendar_dashboard.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>W3 Lunch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script rel="stylesheet" type="text/javascript" src="Js/login.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand w3_engineers" href="#">W3 Engineers Ltd.</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<br><br>
<div class="container">
    <div class="row">

        <center><h1 class="lunch_header">Welcome to Household Schedular</h1></center></div>
    </div>


    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img class="card_image" src="images/calendar_logo.png">
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" method="post" action="login_check.php">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="" class="form-control" placeholder="username" name="username" required autofocus>
            <input type="password" id="inputPassword" class="form-control" placeholder="password" name="password" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Login</button>
        </form><!-- /form -->
        <a href="signup.php" class="forgot-password">
            Create an Account
        </a>
    </div><!-- /card-container -->
</div>

</body>
</html>
