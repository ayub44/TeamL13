<!--Start of file-->
<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!--Start of head section-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage | RapidReps</title>

    <!-- CSS start here -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
     <!-- CSS ends here -->
</head>

<body>
  
    <!-- header start here-->
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
                                            <li><a class="current" href="Homepage.php">home</a></li>
                                            <li><a href="Aboutuspage.php">About Us</a></li>
                                            <li><a href="ViewCase.php">View Cases</a></li>
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
     <!-- header end here-->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                        <?php 
if(isset($_SESSION['user']))
    {
        $user = $_SESSION['user'];
        print "<h5 class='wow fadeInLeft'>Welcome to RapidReps</h5>";
        print "<h3 class='wow fadeInLeft'>Dear  $user. We hope you are having a wonderful day.</h3>";
    }         
?>
             
                            <div class="sldier_btn wow fadeInLeft">
                                <a href="Logout.php" class="boxed-btn3">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right">
            <img src="CSSFILES/img/banner/illustration.png">
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- job_listing_area_start  -->
    <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <br>
                        <br>
                        <br>
                        <h3>Latest Cases</h3>
                    </div>
                </div>
               
            </div>
            <div class="job_lists">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="CSSFILES/img/TheMet/Police.png" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="Loginpage.php"><h4>Case Number: 1</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> Battersea, London</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                            
                                    <a href="Loginpage.php" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Deadline: 10 Dec 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="CSSFILES/img/TheMet/Police.png" alt="">
                                </div>
                                <div class="jobs_conetent">
                                   <a href="Loginpage.php"><h4>Case Number: 2</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> Merton, London</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    
                                    <a href="Loginpage.php" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Deadline: 12 Dec 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="CSSFILES/img/TheMet/Police.png" alt="">
                                </div>
                                <div class="jobs_conetent">
                                <a href="Loginpage.php"><h4>Case Number: 3</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> Ealing, London</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                
                                    <a href="Loginpage.php" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Deadline: 15 Dec 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="CSSFILES/img/TheMet/Police.png" alt="">
                                </div>
                                <div class="jobs_conetent">
                                <a href="Loginpage.php"><h4>Case Number: 4</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> Southwark, London</p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    
                                    <a href="Loginpage.php" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Deadline: 4 Dec 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="CSSFILES/img/TheMet/Police.png" alt="">
                                </div>
                                <div class="jobs_conetent">
                                <a href="Loginpage.php"><h4>Case Number: 5</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> Hammersmith, London</p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                   
                                    <a href="Loginpage.php" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Deadline: 5 Dec 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="CSSFILES/img/TheMet/Police.png" alt="">
                                </div>
                                <div class="jobs_conetent">
                                <a href="Loginpage.php"><h4>Case Number: 5</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> Kensignton, London</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    
                                    <a href="Loginpage.php" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Deadline: 7 Dec 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->

    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Featured Solicitors</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="CSSFILES/img/Solicitors/MadlynShanon.png" alt="">
                            </div>
                            <h5>Madlyn Shanon</h5>
                            <p>Solicitor</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="CSSFILES/img/Solicitors/PhilipOrrell.png" alt="">
                            </div>
                            <h5>Philip Orrell</h5>
                            <p>Solicitor</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="CSSFILES/img/Solicitors/IzabelleRichelle.png" alt="">
                            </div>
                            <h5>Izabelle Richelle</h5>
                            <p>Solicitor</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="CSSFILES/img/Solicitors/JaydenDelmar.png" alt="">
                            </div>
                            <h5>Jayden Delmar</h5>
                            <p>Solicitor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_end  -->

    <div class="top_companies_area">
        <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-lg-6 col-md-6">
                    <div class="section_title">
                        <h3 style="text-align:center;">Trending Police Stations</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="CSSFILES/img/TheMet/Police.png" alt="">
                        </div>
                        <a href="jobs.html"><h3>Battersea Police Station</h3></a>
                        <p> <span>4</span> Cases Available</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="CSSFILES/img/TheMet/Police.png" alt="">
                        </div>
                        <a href="jobs.html"><h3>Paddington Green Police Station</h3></a>
                        <p> <span>3</span> Cases Available</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="CSSFILES/img/TheMet/Police.png" alt="">
                        </div>
                        <a href="jobs.html"><h3>Shoreditch Police Station</h3></a>
                        <p> <span>2</span> Cases Available</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="CSSFILES/img/TheMet/Police.png" alt="">
                        </div>
                        <a href="jobs.html"><h3>Southwark Police Station</h3></a>
                        <p> <span>1</span> Cases Available</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- job_searcing_wrap  -->
    <div class="job_searcing_wrap overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Looking for a Case?</h3>
                        <p>Find a case to work on immedietly </p>
                        <a href="#" class="boxed-btn3">Browse Cases</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Looking for a solicitor?</h3>
                        <p>Find a local solicitor immedietly</p>
                        <a href="#" class="boxed-btn3">Post A Case</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job_searcing_wrap end  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Testimonials</h3>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="CSSFILES/img/testmonial/Abdi.png" alt="">
                                          
                                        </div>
                                        <div class="info">
                                            <p>"RapidReps is great. I couldn't have asked for more than this. Without RapidReps, we would have gone bankrupt by now. RapidReps is the most valuable business resource we have EVER purchased."</p>
                                            <span>- Abdi Mohamed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="CSSFILES/img/testmonial/Sarah.png" alt="">

                                        </div>
                                        <div class="info">
                                            <p>"Definitely worth using it. I STRONGLY recommend RapidReps to EVERYONE interested in running a successful online business! I'd be lost without RapidReps."</p>
                                            <span>- Sarah James</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="CSSFILES/img/testmonial/Debbie.png" alt="">
                                            
                                        </div>
                                        <div class="info">
                                            <p>"You guys rock! RapidReps has completely surpassed our expectations. Keep up the excellent work. I have gotten at least 50 times the value from RapidReps."</p>
                                            <span>- Debbie Stones</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="CSSFILES/img/testmonial/John.png" alt="">
                                            
                                        </div>
                                        <div class="info">
                                            <p>"I would like to personally thank you for your outstanding product. If you aren't sure, always go for RapidReps."</p>
                                            <span>- John Brown</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->


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

    <!-- link that opens popup -->
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