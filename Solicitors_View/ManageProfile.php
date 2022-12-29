<?php
ob_start();
session_start();
include("dbutilsLogout.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Profile  | RapidReps</title>

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
                                            <li><a href="ViewCase.php">View Cases</a></li>
                                            <li><a href="ReportIssue.php">Report Issue</a></li>
                                            <li><a class="current" href="ManageProfile.php">Manage Profile</a></li>
                                            <li><a href="Logout.php">Logout</a></li>
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
                        <h3 style="text-align:center;">Manage your profile</h3>
                        <p style="text-align:center;">Use the form below to update either your password or email address.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
    <?php 
if(isset($_SESSION['user']))
{
  $firstname = $_SESSION['user'];
   $lastname =  $_SESSION['user2'];
   $USERID =  $_SESSION['user3'];


$pdo = connect();
$results = $pdo->query("SELECT * FROM usertable Where UserID='$USERID'", PDO::FETCH_ASSOC);
foreach( $results as $row) {
  print("<tr class='item'>");
  $current_userID= trim($row['UserID']);
  $current_userfirstname= trim($row['FirstName']);
  $current_userlastname= trim($row['LastName']);
  $current_userEmailAddress= trim($row['EmailAddress']);
  $current_userPassword= trim($row['Password']);
  $current_userrole= trim($row['role']);
  $current_userDateJoined= trim($row['DateJoined']);}
}
?>
    
    <div class="signupForm">    
    <form action="Manageprofilefiles/UpdateProfileConfirmation.php" method="POST" enctype="multipart/form-data">

        <h4 class="formTitle">Please read through your details before updating them.</h4>
        <p><span style="color:#d22d2d">*</span> Indicates detail cannot be changed for secuirty reason</p>
        
        <div class="form-group"> <label for="FirstName">First Name:<span style="color:#d22d2d">*</span></label>
            <input class="form-control" type="text" id="FirstName" name="FirstName" value="<?php echo $current_userfirstname?>" readonly>
        </div>
        

        <div class="form-group"><label for="LastName">Last Name:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="text" id="LastName" name="LastName"  value="<?php echo $current_userlastname?>" readonly>
        </div>

        <div class="form-group"><label for="EmailAddress">Email Address:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="email" id="EmailAddress" name="EmailAddress" value="<?php echo $current_userEmailAddress?>">
        </div>

        <div class="form-group"><label for="Password">Password:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="text" id="Password" name="Password" value="<?php echo $current_userPassword?>">
        </div> 

        <div class="form-group"><label for="role">Role:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="text" id="role" name="role" value="<?php echo $current_userrole?>" readonly>
        </div>
        
        <div class="form-group"><label for="DateJoined">Date Joined:<span style="color:#d22d2d">*</span></label> 
            <input class="form-control" type="text" id="DateJoined" name="DateJoined" value="<?php echo $current_userDateJoined?>" readonly>
        </div>

        <div>
            <P><span style="color:#d22d2d">Important Note:</span><br>
            1) To update your profile, click on the button below.</p>
        </div>

        
       
        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Update Profile">   
    </form>			
</div>

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