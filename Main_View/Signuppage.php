<?php
ob_start();
session_start();
include("SignupFormFiles/dbutilsSignUp.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signuppage | RapidReps</title>

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
                                        <li><a class="current" href="Signuppage.php">Signup</a></li>
                                        <li><a href="Loginpage.php">Login</a></li>
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
    
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3 style="text-align:center;">Signup</h3>
                        <p style="text-align:center;">Fill in the form below to sign up as a Solicitor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
    
    <div class="signupForm">    
    <form onsubmit="return handleData()" action="" method="post" enctype="multipart/form-data">
    <?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $_SESSION['fname'] =  $firstname    =  $_POST['fname'];
  $_SESSION['lname'] =  $lastname    =  $_POST['lname'];
  
  $_SESSION['EmailAdd'] = $emailaddress =  $_POST['EmailAdd'];
  $_SESSION['password'] = $password     = $_POST['password'];
  $passwordc    = $_POST['passwordc'];

  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);

  $pdo = connect();
  if (strlen($password) < '8') {
    print "<h1 id ='error'>Your Password Must Contain At Least 8 Characters! </h1>";
  }
  elseif(!preg_match("#[A-Z]+#",$password)) {
    print "<h1 id ='error'>Your Password Must Contain At Least 1 Upper case letter!</h1>";
  }
  elseif(!preg_match("#[a-z]+#",$password)) {
    print "<h1 id ='error'>Your Password Must Contain At Least 1 Lower case letter!</h1>";
  }
  elseif(!preg_match("#[0-9]+#",$password)) {
    print "<h1 id ='error'>Your Password Must Contain At Least 1 Number!</h1>";
  }
  elseif(!preg_match("@[^\w]@",$password)) {
      print "<h1 id ='error'>Your Password Must Contain At Least 1 Special Character!</h1>";
    }

  elseif($passwordc != $password){
  print "<h1 id='error'>Your password does not match</h1>";
}
elseif(!is_numeric($emailaddress))
{
    //check if username already exists
    //read data, check usernames against the entry
    $results = $pdo->query("SELECT * FROM SignUpTable", PDO::FETCH_ASSOC);
    $count = 0;
    foreach( $results as $row) 
    {
        if ($row['EmailAddress'] == $emailaddress)
        {
            $count = $count + 1;
        }
    }
    if ($count == 0)
    {
        // $encpass = password_hash($password, PASSWORD_BCRYPT);
        // $code = rand(999999, 111111);
        $status = "Not Verified";
        $Role = "Solicitor";
       strtoupper($emailaddress);
    //    $encpass = password_hash($password, PASSWORD_BCRYPT);


        $sql = "INSERT into `SignUpTable` 
        (`FirstName`, `LastName`, 
        `EmailAddress`, `Password`, `Role`, `Status`) 
        values 
        ('$firstname', '$lastname', 
        '$emailaddress', '$password', '$Role', '$status')";
         $data_check= $pdo->exec($sql);

        if($data_check){
                 header('location:SignupFormFiles/WelcomePage.php');
                exit();
            }else{
               print "<h1 id='error'>Failed while inserting data into database!</h1>";
            }
    }
    else{
        print "<h1 id='error'>The Email already exists. Please enter a different Email</h1>";
    }
}
else{
   print "<h1 id='error'>Numeric values for username are not acceptable</h1>";
}
}

?>
<div class="clearfix">
      <button type="button" class="SOLISIGNUP">Signup as a Solicitor</button>
      <a href="SignupRep.php"><button type="button" class="REPSIGNUP">Signup as a Rep</button></a>
    </div>
    	<h4 class="formTitle">Fill in the form below to join us a Solicitor</h4>
        <p><span style="color:#d22d2d">*</span> Indicates required field</p>

        <div class="form-group"> <label for="fname">First Name:<span style="color:#d22d2d">*</span></label>
            <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name" required value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ?>">
        </div>

        <div class="form-group"><label for="lname">Last Name:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name" required value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ?>">
        </div>
 

        <div class="form-group"><label for="EmailAdd">Email Address:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="email" id="EmailAdd" name="EmailAdd" placeholder="Email Address" onKeyup="this.value = this.value.toUpperCase()" required="required" value="<?php echo isset($_POST['EmailAdd']) ? $_POST['EmailAdd'] : '' ?>">
        </div> 

        <div class="form-group"><label for="Password">Password:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="password" id="password" name="password" placeholder="Password" required="required" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
            <label class="checkbox-inline"><input type="checkbox" onclick="firstpwd()">Show Password</label><br>
        </div>
    <div>
       <P><span style="color:#d22d2d">Please ensure your <span style="text-decoration: underline;">Password</span> meets the format below:</span><br>
        1) Be atleast 8 characters in length<br>
        2) Has 1 Upper case letter<br>
        3) Has 1 Lower case letter<br>
        3) Has 1 number<br>
        4) Has 1 special character</p>
    </div>

        <div class="form-group"><label for="passwordc">Confirm Password:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="password" id="passwordc" name="passwordc" placeholder="Confirm Password" required="required" value="<?php echo isset($_POST['passwordc']) ? $_POST['passwordc'] : '' ?>">
            <label class="checkbox-inline"><input type="checkbox" onclick="secondpwd()">Show Password</label><br>
        </div>
        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Sign Up">  
        <br>
        <p>By creating an account you agree to our <a href="Terms&Privacy.pdf" target="_blank" style="color:dodgerblue">Terms & Privacy</a>.</p>            
    </form>			
    <div class="text-center small">Already have an account? <a href="Loginpage.php">Login</a></div>
</div>

<script>
function handleData()
{
    var form_data = new FormData(document.querySelector("form"));
    if(!form_data.has("Speciality[]"))
    {
        document.getElementById("chk_option_error").style.visibility = "visible";
      return false;      
    }
    else
    {
        document.getElementById("chk_option_error").style.visibility = "hidden";
      return true;
    }
}

function firstpwd() {
    var x = document.getElementById("password");
    if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
    }
    }

    function secondpwd() {
    var x = document.getElementById("passwordc");
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