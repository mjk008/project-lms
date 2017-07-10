<?php
    session_start();

    include "inputCheck.php";
    include "connectToDatabase.php";

    /*if(!$_POST)
        die("Security breach detected. Attempt to change data submission");

    if(!$_POST['pw'])
        die("Security breach detected. Internal HTML changed. Please reset and try again.");*/
    
    $pw = $_POST['pw'];
    $uname = $_SESSION['username'];

    session_write_close();

    if(validatePassword($pw))
        checkPassword($uname, $pw);

    function validatePassword($pw)
    {
        $passwordChecker = new InputCheck;
        $passwordChecker->setInput($pw);

        if($passwordChecker->lengthCheck(25, 5)) //In range of 5 and 25
        {
                if(!$passwordChecker->checkWhitespace()) //Does not contain whitespaces
                {
                    if($passwordChecker->typeCheckAlnum()) //Contain alphanumeric characters
                    {
                        if(preg_match('/^([a-zA-Z0-9@#?_()<>])+$/', $pw))
                            return 1;
                        else   
                            die("Password contains illegal characters.");
                    }
                    else
                        die("Password has to contain alphanumeric characters");
                }
                else
                    die("Password contains whitespace charactes");
        }
        else
            die("Password must be in range 5-25");
    }

    function checkPassword($uname, $pw)
    {
        $conn = connect();
        if(!$conn)
            die("Internal server error 500.");

        $stmt = $conn->prepare("SELECT password FROM LMS_user_data WHERE username= ?");
        $stmt->bind_param("s", $uname);

        $stmt->execute();
        $stmt->bind_result($rPw);

        while($stmt->fetch())
            $npw = $rPw;

        if(password_verify($pw, $npw))
            die("VALID");
        else
            die("Wrong password. Please try again");
    }

?>