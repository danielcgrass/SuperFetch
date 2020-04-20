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
    
    $un = sanitizeFormUsername($_POST['username']);
    $fn = sanitizeFormString($_POST['firstName']);
    $ln = sanitizeFormString($_POST['lastName']);
    $em = sanitizeFormString($_POST['email']);
    $pw = sanitizeFormPassword($_POST['pass']);
    $pw2 = sanitizeFormPassword($_POST['pass2']);

    $wasSuccessful = $account->register($un, $fn, $ln, $em, $pw, $pw2);

    if($wasSuccessful == true) {
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
      }
  }
?>
