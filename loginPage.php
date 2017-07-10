<?php
    session_start();
    if(!isset($_SESSION['username']))
        die("Security breach detected. Please restart browser and try again");
    else
    {
        $uname = $_SESSION['username'];
        //session_unset();
        session_write_close();
    }
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Login - Learning Management System</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/loginAnimation.js"></script>
        <script type="text/javascript" src="js/footerAnimation.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/loginStyles.css">
        <link rel="stylesheet" href="css/commonStyles.css">
    </head>
    <body>
        <div class="body-container">
            <div class="common-header">
                <img src="assets/logo.jpg" height="100px" width="200px" >
                <p></p>
            </div>
            <div class="login-intro">
                <h4>Hello there!</h4> 
                <h3>Enter the password for <span class="uname-container"><?php echo $uname; ?></span></h3> 
            </div>
            <div class="form-container">
                <form id="passwordForm">
                    <input type="password" name="pw" id="pw">
                </form>
            </div>
            <div class="button-container">
                <button class="button" id="loginButton">Login</button>
            </div>
            <span class="error"></span>
            <div class="footer">
                <p>Made with <span class="footer-container"><i class="fa fa-heart" aria-hidden="true"></i></span>by Mind Labs</p>
            </div>
        </div>
    </body>