<?php
    session_start();

    include "inputCheck.php";
    include "connectToDatabase.php";

    if(!$_POST)
        die("Security breach detected. Attempt to change data submission");

    if(!$_POST['uname'])
        die("Security breach detected. Internal HTML changed. Please reset and try again.");
    
    $uname = $_POST['uname'];
    
    if(validateUsername($uname))
    {
        $_SESSION['username'] = $uname;
        session_write_close();
        checkUsername($uname);
    }

    
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

    function checkUsername($uname)
    {
        $conn = connect();
        if(!$conn)
            die("Internal server error 500.");

        $stmt = $conn->prepare("SELECT * FROM LMS_user WHERE username= ?");
        $stmt->bind_param("s", $uname);

        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0)
            die("EXISTS");
        else
            die("Username not registered");
    }
?>
