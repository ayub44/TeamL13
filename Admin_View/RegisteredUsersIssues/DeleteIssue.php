<?php
session_start();
include("dbutilsNewApplicantsTable.php");
?>
<!--Start of file-->
<!DOCTYPE html>
<html lang="en">

<!--Start head section-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Rejection Confirmation | RapidReps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="signupstylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!--End head section-->

<!--Start body section-->
<body>
<!--  Request me for a signup form or any type of help  -->
<div class="signupForm">    
    <form action="DeleteIssueConfirmation.php" method="get" enctype="multipart/form-data">

    	<h4 class="formTitle">Please Read through issue details before deleting from the Website</h4>
        <p><span style="color:#d22d2d">Important Note:</span> Below is the information related to the issue</p>
  
        <div class="form-group"> <label for="issueID">Issue ID:</label>
            <input class="form-control" type="text" id="issueID" name="issueID" value="<?php echo $_GET['issueID'];?>" readonly>
        </div>
        
        <div class="form-group"> <label for="FirstName">First Name:</label>
            <input class="form-control" type="text" id="FirstName" name="FirstName" value="<?php echo $_GET['firstname'];?>" readonly>
        </div>

        <div class="form-group"><label for="LastName">Last Name:</label> 
            <input class="form-control" type="text" id="LastName" name="LastName"  value="<?php echo $_GET['lastname'];?>" readonly>
        </div>

        <div class="form-group"><label for="phoneNumber">Phone Number:</label> 
            <input class="form-control" type="text" id="phoneNumber" name="phoneNumber" value="<?php echo $_GET['phoneNumber'];?>" readonly>
        </div> 
        
        <div class="form-group"><label for="emailAddress">Email Address:</label> 
            <input class="form-control" type="text" id="emailAddress" name="emailAddress" value="<?php echo $_GET['emailAddress'];?>" readonly>
        </div>

        <div class="form-group"><label for="issueSummary">Issue Summary:</label> 
            <input class="form-control" type="text" id="issueSummary" name="issueSummary" value="<?php echo $_GET['issueSummary'];?>" readonly>
        </div> 
        
        <div class="form-group"><label for="dateReported">Date Reported:</label> 
            <input class="form-control" type="text" id="dateReported" name="dateReported" value="<?php echo $_GET['dateReported'];?>" readonly>
        </div>
        
        <div>
            <P><span style="color:#d22d2d">Important Note:</span><br>
            1) Once you click delete issue, issue would be deleted from the website.</p>
        </div>

        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Delete Issue">              
    </form>			
    <div class="text-center small">Don't want to delete issue <a href="../RegisteredUsers.php">Go Back</a></div>
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
</body>
<!--End body section-->

</html>       
<!--End of file-->