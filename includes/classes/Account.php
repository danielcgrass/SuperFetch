<?php
    class Account{

        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }
        public function register($un, $fn, $ln, $em, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstname($fn);
            $this->validateLastname($ln);
            $this->validateEmail($em);
            $this->validatePasswords($pw, $pw2);

            if(empty($this->errorArray) == true){
                //insert into DB
                return true;
            }
            else{
                return false;
            }
        }

        public function getError($error){
            if(!in_array($error, $this->errorArray)){
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }

        private function validateUsername($un){
            if(strlen($un) > 25 || strlen($un) < 5){
                array_push($this->errorArray, "Your username must be between 5 and 25 characters");
                return;
            }
            //TODO: check if username exists
        }
        private function validateFirstname($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2){
                array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
                return;
            }
        }
        private function validateLastname($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2){
                array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
                return;
            }
        }
        private function validateEmail($em){
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray, "Email is invalid"); 
            return;
            }
        }
        
        private function validatePasswords($pw, $pw2){
            if($pw != $pw2){
                array_push($this->errorArray, "Your passwords don't match");
                return;
            }
            if(preg_match('/[^A-Za-z0-9]/', $pw)){
                array_push($this->errorArray, "Your password can only contain numbers and letters");
                return;
            }
            if(strlen($pw) > 30 || strlen($pw) < 5){
                array_push($this->errorArray, "Your password must be between 5 and 30 characters");
                return;
            }
        }
    }
?>