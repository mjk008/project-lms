<?php
    include "php/connectToDatabase.php";

    $conn = connect();
    if(!$conn)
        die("A fatal error occured. Please contact system adminstrator");
    
    $sql = "SELECT quote, author FROM LMS_quotes ORDER BY RAND() LIMIT 1;";

    $query = $conn->query($sql);
    while($res = $query->fetch_assoc())
    {
        $author = $res['author'];
        $quote = $res['quote'];
    }
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Learning Management System</title>
        <link rel="stylesheet" href="css/indexStyles.css">
        <link rel="stylesheet" href="css/commonStyles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/indexAnimation.js"></script>
        <script type="text/javascript" src="js/footerAnimation.js"></script>
    </head>
    <body>
        <div class="navbar">
            <img src="assets/logo.jpg" height="100px" width="200px" >
            <button class="button button1">Login</button>
        </div>
        <div class="header">
            <h3>Learning Management System</h3>
        </div>
        <div class="quote-container">
            <div class="quote" id="quote"><?php echo $quote ?></div>
            <div class="author" id="author">~<?php echo $author ?></div>
        </div>
        <div class="contribute">
            <p>Wanna contribute a quote? Click <a href="contributeQuote.html">here</a></p>
        </div>
        <div class="footer">
            <p>Made with <span class="footer-container"><i class="fa fa-heart" aria-hidden="true"></i></span>by Mind Labs</p>
        </div>
    </body>
</html>