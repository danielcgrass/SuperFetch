<?php
  function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
  }
  function sanitizeFormString($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText= ucfirst(strtolower($inputText));
    return $inputText;
  }
  function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
  }

  if(isset($_POST['submitRegister'])){
    
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['fName']);
    $lastName = sanitizeFormString($_POST['lName']);
    $email = sanitizeFormString($_POST['email']);
    $pass = sanitizeFormPassword($_POST['pass']);
    $pass2 = sanitizeFormPassword($_POST['pass2']);

    $wasSuccessful = $account->register($username, $fName, $lName, $email, $pass, $pass2);

    if($wasSuccessful == true) {
        header("Location: index.php");    }
  }
?>
