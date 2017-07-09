<?php

    include "inputCheck.php";
    include "connectToDatabase.php";

    if(!$_POST)
        die("Security breach detected. Attempt to change data submission");

    if(!$_POST['uname'])
        die("Security breach detected. Internal HTML changed. Please reset and try again.");
    
    $uname = $_POST['uname'];
    
    if(validateUsername($uname))
        checkUsername($uname, $pw);

    
    function validateUsername($uname)
    {
        $usernameChecker = new InputCheck;
        $usernameChecker->setInput($uname);

        if($usernameChecker->lengthCheck(20, 5)) //In range of 5 and 20
        {
            if(!$usernameChecker->checkWhitespace()) //Does not contain whitespace characters
            {
                if(!$usernameChecker->typeCheckNumeric()) //Does not contain all numbers.
                {
                    if(!$usernameChecker->typeCheckUpperCase()) //Does not contain all uppercase characters
                    {
                        if(preg_match('/^([a-zA-Z0-9@*#?()<>])+$/', $uname))
                            return 1;
                        else
                            die("Username contains illegal characters");
                    }
                    else
                        die("Username cannot contain all uppercase letters");
                }
                else
                    die("Username cannot contain all numbers");
            }
            else
                die("Username cannot contain whitespaces");
        }
        else
            die("Username has to be in range 5-20");
    }

    /*function validatePassword($pw)
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
    }*/

    function checkUsername($uname, $pw)
    {
        $conn = connect();
        if(!$conn)
            die("Internal server error 500.");

        $stmt = $conn->prepare("SELECT * FROM LMS_user WHERE username= ?");
        $stmt->bind_param("s", $uname);

        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0)
            return ("EXISTS");
        else
            die("Username not registered");
    }
?>