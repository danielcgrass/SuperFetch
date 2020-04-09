<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include("includes/handlers/register-handler.php");

  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SuperFetch - Register</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
        <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
        <link rel="manifest" href="images/icons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="images/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--===============================================================================================-->
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100 p-b-160 p-t-50">
          <form class="login100-form validate-form" action="register.php" method="POST">
            <span class="login100-form-title p-b-43">
              Register Account
            </span>

            <div
              class="wrap-input100 rs1 validate-input"
              data-validate="First name is required"
            >
              <input class="input100" type="text" name="firstName"/>
              <span class="label-input100">First Name</span>
            </div>

            <div
              class="wrap-input100 rs2 validate-input"
              data-validate="Last Name is required"
            >
              <input class="input100" type="text" name="lastName" />
              <span class="label-input100">Last Name</span>
            </div>


            <div
              class="wrap-input100  validate-input"
              data-validate="Username is required"
            >
              <input class="input100" type="text" name="username" />
              <span class="label-input100">Username</span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Email is required"
            >
              <input class="input100" type="email" name="email" />
              <span class="label-input100">Email</span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <input class="input100" type="password" name="pass" />
              <span class="label-input100">Password</span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <input class="input100" type="password" name="pass2" />
              <span class="label-input100">Confirm Password</span>
            </div>
            

            <div class="container-login100-form-btn">
              <button type="submit" value="Submit" name="submitRegister" class="login100-form-btn">
                Register
              </button>
            </div>
            
            <div class="text-center w-full p-t-23">
              <a href="#" class="txt1">
                Forgot password?
              </a>
              <br />
              <a href="login.php" class="txt1">
                Login?
              </a>
            </div>

            <div class="text-center text-white w-full p-t-23">
             <?php echo $account->getError(Constants::$usernameNotEnough); ?>
             <?php echo $account->getError(Constants::$firstNameNotEnough); ?>
             <?php echo $account->getError(Constants::$lastNameNotEnough); ?>
             <?php echo $account->getError(Constants::$emailNotValid); ?>
             <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
             <?php echo $account->getError(Constants::$passwordMustContain); ?>
             <?php echo $account->getError(Constants::$passwordNotEnough); ?>
             <?php echo $account->getError(Constants::$usernameStolen); ?>
             <?php echo $account->getError(Constants::$emailStolen); ?>
            </div>
         
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
  </body>
</html>
