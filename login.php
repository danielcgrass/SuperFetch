<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  
  $account = new Account($con);
  
  include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SuperFetch - Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.css"
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
          <form class="login100-form validate-form" method="POST" action="login.php">
            <span class="login100-form-title p-b-43">
              Account Login
            </span>

            <div
              class="wrap-input100 rs1 validate-input"
              data-validate="Username is required"
            >
              <input class="input100" type="text" name="loginUsername" id="loginUsername" />
              <span class="label-input100">Username</span>
            </div>

            <div
              class="wrap-input100 rs2 validate-input"
              data-validate="Password is required"
            >
              <input class="input100" type="password" name="loginPassword" id="loginPassword" />
              <span class="label-input100">Password</span>
            </div>

            <div class="container-login100-form-btn">
              <button type="submit" value="Submit" name="submitMe" class="login100-form-btn" >
                Sign in
              </button>
            </div>
            
            <div class="text-center w-full p-t-23">
              <a href="#" class="txt1">
                Forgot password?
              </a>
              <br />
              <a href="register.php" class="txt1">
                Register
              </a>
            </div>

            <div class="text-center text-white w-full p-t-23">
             <?php echo $account->getError(Constants::$loginFailed); ?>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!--===============================================================================================-->

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
