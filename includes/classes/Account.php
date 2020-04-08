<?php
    class Account{
        private $con;
        private $errorArray;

        public function login($un, $pw) {
            $pw = md5($pw);

            $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");
            if(mysqli_num_rows($query) == 1) {
                return true;
            }
            else {
                array_push($this->errorArray, Constants::loginFailed);
                return false;
            }
        }

        public function __construct($con) {
            $this->con = $con;
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
                return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
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

        private function insertUserDetails($un, $fn, $ln, $em, $pw){
            $encryptedPw = md5($pw); //md 5 method is a 32 character encryption

            $profilePic = "assets/images/profile-pics/blank.png";

            $date = date("Y-m-d");

            $results = mysqli_query($this->con, "INSERT INTO users VALUES (NULL, '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic')");

            return $results;
        } 

        private function validateUsername($un){
            if(strlen($un) > 25 || strlen($un) < 5){
                array_push($this->errorArray, Constants::$usernameNotEnough);
                return;
            }
            $checkUser = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
            if(mysqli_num_rows($checkUser) != 0) {
                array_push($this->errorArray, Constants::$usernameStolen);
            }
        }
        private function validateFirstname($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2){
                array_push($this->errorArray, Constants::$firstNameNotEnough);
                return;
            }
        }
        private function validateLastname($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2){
                array_push($this->errorArray, Constants::$lastNameNotEnough);
                return;
            }
        }
        private function validateEmail($em){
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray, Constants::$emailNotValid); 
            return;
            }
            $checkEmail = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
            if(mysqli_num_rows($checkEmail) != 0){
                array_push($this->errorArray, Constants::$emailStolen);
            }
        }
        
        private function validatePasswords($pw, $pw2){
            if($pw != $pw2){
                array_push($this->errorArray, Constants::$passwordsDoNotMatch);
                return;
            }
            if(preg_match('/[^A-Za-z0-9]/', $pw)){
                array_push($this->errorArray, Constants::$passwordMustContain);
                return;
            }
            if(strlen($pw) > 30 || strlen($pw) < 5){
                array_push($this->errorArray, Constants::$passwordNotEnough);
                return;
            }
        }
    }
?>