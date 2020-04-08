<?php
  if(isset($_POST['submitMe'])) {
   $un = $_POST['username'];
   $pw= $_POST['pass'];

   $result = $account->login($un, $pw);

   if($result == true) {
     echo "SUCCESS";
   }
   else {
     echo "Failure";
   }
   }
?>