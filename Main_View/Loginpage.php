<?php
ob_start();
session_start();
include("dbutilsLogin.php");
?>
<!--Start of file-->
<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page | RapidReps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSSFILES/css/loginstylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS here -->
    <link rel="stylesheet" href="CSSFILES/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSSFILES/css/owl.carousel.min.css">
    <link rel="stylesheet" href="CSSFILES/css/magnific-popup.css">
    <link rel="stylesheet" href="CSSFILES/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSSFILES/css/themify-icons.css">
    <link rel="stylesheet" href="CSSFILES/css/nice-select.css">
    <link rel="stylesheet" href="CSSFILES/css/flaticon.css">
    <link rel="stylesheet" href="CSSFILES/css/gijgo.css">
    <link rel="stylesheet" href="CSSFILES/css/animate.min.css">
    <link rel="stylesheet" href="CSSFILES/css/slicknav.css">

    <link rel="stylesheet" href="CSSFILES/css/style.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
   

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="Homepage.php">
                                        <img src="CSSFILES/img/logo.png" alt="RapidReps Logo" title="RapidReps Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                        <li><a href="Homepage.php">home</a></li>
                                        <li><a href="Aboutuspage.php">About Us</a></li>
                                        <li><a href="Contactuspage.php">Contact Us</a></li>
                                        <li><a href="Signuppage.php">Signup</a></li>
                                        <li><a class="current" href="Loginpage.php">Login</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
    
    <div class="loginForm">    

<form action="" method="post"> 
<?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
      $EmailAddress = $_POST['EmailAddress'];
      strtoupper($EmailAddress);
      $password = $_POST['Password'];
    //   $_SESSION['fname'] =  $firstname    =  $_POST['fname'];
  
      $pdo = connect();
      if(!is_numeric($EmailAddress))
      {
          $sql = "SELECT * from `UserTable` where `EmailAddress` = '$EmailAddress'";
          $result = $pdo->query($sql);
  
          if ($result->rowCount() == 1)
          {
              $user = getSingleValue($pdo, "SELECT `EmailAddress` FROM `UserTable` WHERE `EmailAddress`=?", [$EmailAddress]);

              $firstname = getSingleValue($pdo, "SELECT `FirstName` FROM `UserTable` WHERE `EmailAddress`=?", [$EmailAddress]);
              $lastname = getSingleValue($pdo, "SELECT `LastName` FROM `UserTable` WHERE `EmailAddress`=?", [$EmailAddress]);
              $USERID = getSingleValue($pdo, "SELECT `UserID` FROM `UserTable` WHERE `EmailAddress`=?", [$EmailAddress]);

              //$user = $username;
              $pass = getSingleValue($pdo, "SELECT `Password` FROM `UserTable` WHERE `EmailAddress`=?", [$EmailAddress]);

              $role = getSingleValue($pdo, "SELECT `role` FROM `UserTable` WHERE `EmailAddress`=?", [$EmailAddress]);
              
          
              if ($pass == $password && $role == 'Admin')
              {
                  $_SESSION['user']= $firstname;
                  $_SESSION['user2']= $lastname;
                  $_SESSION['user3']= $USERID;
                  header("Location:/RapidReps/Admin_View/Homepage.php");
                  die;
              }
              elseif ($pass == $password && $role == 'Rep')
              {
                  $_SESSION['user']= $firstname;
                  $_SESSION['user2']= $lastname;
                  $_SESSION['user3']= $USERID;
                  header("Location:/RapidReps/Reps_View/Homepage.php");
                  die;
              }
              elseif ($pass == $password && $role == 'Solicitor')
              {
                  $_SESSION['user']= $firstname;
                  $_SESSION['user2']= $lastname;
                  $_SESSION['user3']= $USERID;
                  header("Location:/RapidReps/Solicitors_View/Homepage.php");
                  die;
              }
              else{
                print "<h1 id='error'>Please enter valid password</h1>";
              }  
          }
          else{
            print "<h1 id='error'>Username not found</h1>";

          }
      }
      else{
        print "<h1 id='error'>Numeric values for username are not acceptable</h1>";
      }
  }

  ?>
    <h4 class="formTitle">Login To Your Account</h4>
    
    <div class="form-group">      
        <i class="fa fa-envelope"></i>
        <input class="form-control" type="email" id="EmailAddress" onKeyup="this.value = this.value.toUpperCase()" name="EmailAddress"  placeholder="Enter your Email" required>
    </div>


    <div class="form-group">      
        <i class="fa fa-key"></i>
        <input class="form-control" type="password" id="Password" name="Password" placeholder="Enter your password" required>
        <label class="checkbox-inline"><input type="checkbox" style="cursor: pointer;" onclick="firstpwd()"> Show Password</label><br>
    </div>
    
    <div class="form-group small clearfix">
        <!-- <label class="checkbox-inline" title="Note: Cookies must be enabled in your browser"><input style="cursor: pointer;" title="Note: Cookies must be enabled in your browser" type="checkbox"> Remember me</label> -->
        <a href="ForgotPasswordPage.php" class="forgotLink">Forgot Password?</a>
    </div> 
    <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Login">              
</form>			
<div class="text-center small">Don't have an account? <a href="Signuppage.php">Sign up</a></div>
</div>

<script>
function firstpwd() {
  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>



    </div>
  </section>
  <!-- ================ contact section end ================= -->
    <!-- footer start -->
    <footer class="footer">
        <br>
        <br>
        <div class="copy-right_text wow fadeInUp">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">RapidReps | Made by Team L13</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->


  <!-- JS here -->
   <script src="CSSFILES/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="CSSFILES/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="CSSFILES/js/popper.min.js"></script>
    <script src="CSSFILES/js/bootstrap.min.js"></script>
    <script src="CSSFILES/js/owl.carousel.min.js"></script>
    <script src="CSSFILES/js/isotope.pkgd.min.js"></script>
    <script src="CSSFILES/js/ajax-form.js"></script>
    <script src="CSSFILES/js/waypoints.min.js"></script>
    <script src="CSSFILES/js/jquery.counterup.min.js"></script>
    <script src="CSSFILES/js/imagesloaded.pkgd.min.js"></script>
    <script src="CSSFILES/js/scrollIt.js"></script>
    <script src="CSSFILES/js/jquery.scrollUp.min.js"></script>
    <script src="CSSFILES/js/wow.min.js"></script>
    <script src="CSSFILES/js/nice-select.min.js"></script>
    <script src="CSSFILES/js/jquery.slicknav.min.js"></script>
    <script src="CSSFILES/js/jquery.magnific-popup.min.js"></script>
    <script src="CSSFILES/js/plugins.js"></script>
    <script src="CSSFILES/js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="CSSFILES/js/contact.js"></script>
    <script src="CSSFILES/js/jquery.ajaxchimp.min.js"></script>
    <script src="CSSFILES/js/jquery.form.js"></script>
    <script src="CSSFILES/js/jquery.validate.min.js"></script>
    <script src="CSSFILES/js/mail-script.js"></script>


    <script src="CSSFILES/js/main.js"></script>
</body>

</html>