<?php

    /**
     * A class used to validate data.
     * 
     * The InputCheck class is used to validate input data.
     * No error handling is done in the this class. It returns if the data is valid or not.
     * This class always has to be instantiated after user input is done.
     *
     * @author Udam Liyanage (udam1998@gmail.com)
     * @copyright 2017. Mind Labs.
     * @license  https://github.com/UdamLiyanage/project-lms/blob/master/LICENSE MIT License
    */

    class InputCheck
    {
        /**
         * @var $checkVal is the input that is checked by each instantiation of the class 
        */
        private $checkVal;

        public function setInput($input)
        {
            $this->checkVal = $input;
        }

        public function lengthCheck($max, $min)
        {
            if(strlen($this->checkVal) > $max || strlen($this->checkVal) < $min)    
                return 0; //Not in range
            else
                return 1;
        }

        public function typeCheckAlpha()
        {
            if(ctype_alpha($this->checkVal))
                return 1; //All alphabetic characters
            else
                return 0;
        }

        public function typeCheckNumeric()
        {
            if(ctype_digit($this->checkVal))
                return 1; //All numeric characters
            else
                return 0;
        }

        public function typeCheckAlnum()
        {
            if(ctype_alnum($this->checkVal))
                return 1; //Alphanumeric Characters
            else
                return 0;
        }

        public function typeCheckControl()
        {
            if(ctype_cntrl($this->checkVal))
                return 1; //Contains control characters
            else
                return 0;
        }

        public function typeCheckLowerCase()
        {
            if(ctype_lower($this->checkVal))
                return 1; //contains only lower case characters
            else
                return 0;
        }

        public function typeCheckUpperCase()
        {
            if(ctype_upper($this->checkVal))
                return 1; //Contains only upper case letter
            else
                return 0;
        }

        public function checkWhitespace()
        {
            if(preg_match('/\s/', $this->checkVal))
                return 1; //Contains whitespaces
            else
                return 0;
        }
    }

?>
