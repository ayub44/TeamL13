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
    <title>User Addition To Current Users Confirmation | RapidReps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="signupstylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
img{
    /* width:80%; */
    display: block;
    height:150px; 
    width:150px;
    vertical-align: bottom;
}

</style>
</head>
<!--End head section-->

<!--Start body section-->
<body>
<!--  Request me for a signup form or any type of help  -->
<div class="signupForm">    
    <form action="AddNewApplicantToCurrentUsersConfirmation.php" method="get" enctype="multipart/form-data">

    	<h4 class="formTitle">Please Read through user details before giving them permission to join the Website</h4>
        <p><span style="color:#d22d2d">Important Note:</span> Below is the information they have submitted</p>
  

        <div class="form-group"> <label for="SignUpID">Sign Up ID:</label>
            <input class="form-control" type="text" id="SignUpID" name="SignUpID" value="<?php echo $_GET['SignUpID'];?>" readonly>
        </div>
        
        <div class="form-group"> <label for="FirstName">First Name:</label>
            <input class="form-control" type="text" id="FirstName" name="FirstName" value="<?php echo $_GET['FirstName'];?>" readonly>
        </div>

        <div class="form-group"><label for="LastName">Last Name:</label> 
            <input class="form-control" type="text" id="LastName" name="LastName"  value="<?php echo $_GET['LastName'];?>" readonly>
        </div>

        <div class="form-group"><label for="EmailAddress">Email Address:</label> 
            <input class="form-control" type="text" id="EmailAddress" name="EmailAddress" value="<?php echo $_GET['EmailAddress'];?>" readonly>
        </div>

        <div class="form-group"><label for="Password">Password:</label> 
            <input class="form-control" type="text" id="Password" name="Password" value="<?php echo $_GET['Password'];?>" readonly>
        </div> 

        <div class="form-group"><label for="Role">Role:</label> 
            <input class="form-control" type="text" id="Role" name="Role" value="<?php echo $_GET['Role'];?>" readonly>
        </div> 
        
        <div class="form-group"><label for="DateSignedUp">Date Signed Up:</label> 
            <input class="form-control" type="text" id="DateSignedUp" name="DateSignedUp" value="<?php echo $_GET['DateSignedUp'];?>" readonly>
        </div>
        
        <div>
            <P><span style="color:#d22d2d">Important Note:</span><br>
             1) Once you click confirm user, user would have access to the website.</p>
        </div>

        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Confirm User">              
    </form>	
    
    

    <div class="text-center small">Don't want to add user <a href="../NewApplicants.php">Go Back</a></div>
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

  
  
  
  