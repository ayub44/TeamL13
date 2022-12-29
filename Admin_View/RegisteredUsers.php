<?php
ob_start();
session_start();
require_once "CurrentUsersFiles/dbutilsCreateUsertable.php";
?>
<!--Start of file-->
<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./JS/sortingtable.js"></script>
    <title>Issues Reported By Registered Users | RapidReps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSSFILES/css/loginstylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSSFILES/css/Applications.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
    <style>
#myInput, #search {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  color: #0E1111;
}
</style>
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
                                            <li><a href="#">Manage Users <i class="fa fa-angle-down"> </i> </a>
                                                <ul class="submenu">
                                                    <li><a href="CurrentUsers.php">Current Users</a></li>
                                                    <li><a href="NewApplicants.php">New Applicants</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="current" href="#">Queries <i class="fa fa-angle-down"> </i> </a>
                                                <ul class="submenu">
                                                    <li><a href="RegisteredUsers.php">Registed Users</a></li>
                                                    <li><a href="UnregisteredUsers.php">Unregistered Users</a></li>
                                                </ul>
                                            </li>
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
  <!-- ================ contact section start ================= -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3 style="text-align:center;">Quaries of registered users</h3>
                        <p style="text-align:center;">Below Are The quaries submitted by registered users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <section class="contact-section section_padding">
    <div class="container">

    <main>

<input type="text" id="search" placeholder="Live Search"></input>
<table id="myTable" class="sortable">
    <thead >
        <tr class="header">
            <th title="Sort Table by First Name">First Name</th>
            <th title="Sort Table by Last Name">Last Name</th>
            <th title="Sort Table by Phone Number">Phone Number</th> 
            <th title="Sort Table by Email Address">Email Address</th>   
            <th title="Sort Table by Issue Summary">Issue Summary</th>
            <th title="Sort Table by Date Reported">Date Reported</th>
            <th>Respond to issue Joined</th>
            <th>Delete issue</th>
        </tr>
        </thead>
    <tbody>
        <?php
        if(isset($_SESSION['user']))
        {
          $firstname = $_SESSION['user'];
           $lastname =  $_SESSION['user2'];
           $USERID =  $_SESSION['user3'];
        
           //print "<h1 class='welcometext'>Dear $firstname $lastname Welcome to AIM93</h1>";
           //print "<p class='rom'>This website is under construction.</p>";
$pdo = connect();

$results = $pdo->query("SELECT * FROM reportissuetable", PDO::FETCH_ASSOC);
foreach( $results as $row) {
print("<tr class='item'>");
("<td data-label='Date'>".$row['issueID']."</td>");
print("<td data-label='Name'>".$row['firstname']."</td>");
print("<td data-label='Name'>".$row['lastname']."</td>");
print("<td data-label='EmailAdd'>".$row['phoneNumber']."</td>");
print("<td data-label='Date'>".$row['emailAddress']."</td>");
print("<td data-label='EmailAdd'>".$row['issueSummary']."</td>");
print("<td data-label='Date'>".$row['dateReported']."</td>");


print("<td data-label='Date'><a href='RegisteredUsersIssues/RespondToIssue.php? 
&issueID=$row[issueID]
&firstname=$row[firstname]
&lastname=$row[lastname]
&phoneNumber=$row[phoneNumber]
&emailAddress=$row[emailAddress]
&issueSummary=$row[issueSummary]
&dateReported=$row[dateReported]'><span class='yes' title='Respond to Issue'>&#10003;</span></a>
</td>");

print("<td data-label='Date'><a href='RegisteredUsersIssues/DeleteIssue.php?
&issueID=$row[issueID]
&firstname=$row[firstname]
&lastname=$row[lastname]
&phoneNumber=$row[phoneNumber]
&emailAddress=$row[emailAddress]
&issueSummary=$row[issueSummary]
&dateReported=$row[dateReported]'><span class='no' title='Delete Issue'>&#10007;</span></a>
</td>");  
print("</tr>");
};
}
?>
    </tbody>
</table>

</main>

<script>
$(function(){
$('table').tablesorter(); 
});
</script>

<script>
$("#search").keyup(function () {
var value = this.value.toLowerCase().trim();

$("table tr").each(function (index) {
    if (!index) return;
    $(this).find("td").each(function () {
        var id = $(this).text().toLowerCase().trim();
        var not_found = (id.indexOf(value) == -1);
        $(this).closest('tr').toggle(!not_found);
        return not_found;
    });
});
});
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