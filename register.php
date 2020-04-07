<?php
  include("includes/classes/Account.php");

  $account = new Account();

  include("includes/handlers/register-handler.php");
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
          <form class="login100-form validate-form" method="POST">
            <span class="login100-form-title p-b-43">
              Register Account
            </span>

            <div
              class="wrap-input100 rs1 validate-input"
              data-validate="First name is required"
            >
              <input class="input100" type="text" name="fName" />
              <span class="label-input100">First Name</span>
            </div>

            <div
              class="wrap-input100 rs2 validate-input"
              data-validate="Last Name is required"
            >
              <input class="input100" type="text" name="lName" />
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

            <div class="text-center w-full p-t-23">
             <?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
             <?php echo $account->getError("Your first name must be between 2 and 25 characters"); ?>
             <?php echo $account->getError("Your last name must be between 2 and 25 characters"); ?>
             <?php echo $account->getError("Email is invalid"); ?>
             <?php echo $account->getError("Your passwords don't match"); ?>
             <?php echo $account->getError("Your password can only contain numbers and letters"); ?>
             <?php echo $account->getError("Your password must be between 5 and 30 characters"); ?>
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
