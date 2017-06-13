<?php

    /**
     * A class to hold the data of a general user.
     * 
     * The GeneralUser class holds data about a general user. This class can be used for both User Login and User Register.
     * All the error handling is also implemented in the class GeneralUser.
     * A different class "InputCheck" is used for is used for input checking and sanitizing.
     *
     * @author Udam Liyanage (udam1998@gmail.com)
     * @copyright 2017. Mind Labs.
     * @license  https://github.com/UdamLiyanage/project-lms/blob/master/LICENSE MIT License
    */

    class GeneralUser
    {
        /**
         * @var String $username, @var $name, @var $dob, @var $email, @var $Contact_No are private properties. Thus increasing security of the 
         * program and increasing the accuracy of the data that is finally entered to the database.
        */
        private $username, $name, $dob, $email, $Contact_No;

        /**
         * @var String $indexNumber and @var String $password are declared as protected properties to protect it from any
         * external interfearences. All the changes to these two proerties needs to made inside the GeneralUser class.
        */
        protected $indexNumber, $password;

        /**
         * In all the setters @param $input is the value of the particular property set by the function. The second part
         * (the word after 'set') gives the property name that is being set by that particular functions. @var $input is
         * passed by the calling program.
        */

        public function setUsername($input) 
        {
            $this->username = $input;
        }

        public function setName($input) 
        {
            $this->name = $input;
        }

        public function setDob($input)
        {
            $this->dob = $input;
        }

        public function setEmail($input)
        {
            $this->email = $input;
        }
        
        public function Contact_No($input)
        {
            $this->Contact_No = $input;
        }

        private function setPassword($input)
        {
            $this->password = $input;
        }

        private function setUniqueID($input) //To set the unique number. The index number.
        {
            $this->indexNumber = $input;
        }

        public function tempSetIndex($input) //Temp function to set IndexNumber
        {
            $this->setUniqueID($input);
        }

        public function tempSetPassword($input) //Temp function to set the Password.
        {
            $this->setPassword($input);
        }

        /**
         * All the getters are public except the getters for the protected properties. The getters for the protected properties
         * are made private to access them only within the GeneralUser class and its children. This is done to stop from
         * external files or code from altering or displaying the protected properties @var $indexNumber @var password.
        */

        public function getUsername()
        {
            return $this->username;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getDob()
        {
            return $this->dob;
        }

        public function getEmail()
        {
            return $this->email;
        }
        
        public function getContact_No()
        {
            return $this->Contact_No;
        }

        private function getIndexNumber()
        {
            return $this->indexNumber;
        }

        private function getPassword()
        {
            return $this->password;
        }
    }

?>
