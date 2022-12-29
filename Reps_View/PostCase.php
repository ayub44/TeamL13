<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Case | RapidReps</title>

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
                                            <li><a class="current" href="#">Cases<i class="fa fa-angle-down"> </i> </a>
                                                <ul class="submenu">
                                                    <li><a href="PostCase.php">Post a Case</a></li>
                                                    <li><a href="ViewCassesPosted.php">View Cases Posted</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="ReportIssue.php">Report Issue</a></li>
                                            <li><a href="ManageProfile.php">Manage Profile</a></li>
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
                        <h3 style="text-align:center;">Post A New Case</h3>
                        <p style="text-align:center;">Fill In The Form Below To Post A New Case.</p>
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
    <form action="PostCaseFiles/dbtestForm.php" method="post" enctype="multipart/form-data">

    <h4 class="formTitle">Fill in the form below to create a new case</h4>
        <p><span style="color:#d22d2d">*</span> Indicates required field</p>

        <div class="form-group"> <label for="ClientFirstName">Client First Name:</label>
            <input class="form-control" type="text" id="FirstClientFirstNameName" name="ClientFirstName" placeholder="Enter client first name here.." >
        </div>

        <div class="form-group"><label for="ClientLastName">Client Last Name:</label> 
            <input class="form-control" type="text" id="ClientLastName" name="ClientLastName"  placeholder="Enter client last name here.." >
        </div>
        
        <div class="form-group"><label for="Location">Location (Postcode of police station):</label> 
            <input class="form-control" type="text" id="Location" name="Location" placeholder="Enter police station postcode here..">
        </div>

        <div class="form-group"><label for="Fee">Case Fee (£ per hour):</label> 
            <input class="form-control" type="number" min="1" step="any" id="Fee" name="Fee" placeholder="Enter case fee here..">
        </div> 
             
        <div class="form-group"> <label for="Describtion"  style="text-align: justify;">Case Describtion:<span style="color:#d22d2d">*</span></label>
         <textarea class="form-control" type="text" id="Describtion" name="Describtion" placeholder="Type in here..." required style="height:150px"></textarea>
        <div>
            <P><span style="color:#d22d2d">Important Note:</span><br>
            1) Once you click create case, the case would be added to the database.</p>
        </div>

        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Create Case">              
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