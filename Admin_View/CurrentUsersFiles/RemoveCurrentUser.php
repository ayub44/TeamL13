<?php
session_start();
include("dbutilsCreateUsertable.php");
?>
<!--Start of file-->
<!DOCTYPE html>
<html lang="en">

<!--Start head section-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Remove User Confirmation | RapidReps</title>
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
    <form action="RemovalOfCurrentUserConfirmation.php" method="get" enctype="multipart/form-data">

    	<h4 class="formTitle">Please Read through user details before removing them from the Website</h4>
        <p><span style="color:#d22d2d">Important Note:</span> Below is the current information of the user</p>
  

        <div class="form-group"> <label for="UserID">User ID:</label>
            <input class="form-control" type="text" id="UserID" name="UserID" value="<?php echo $_GET['UserID'];?>" readonly>
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

        <div class="form-group"><label for="role">Role:</label> 
            <input class="form-control" type="text" id="role" name="role" value="<?php echo $_GET['role'];?>" readonly>
        </div>
        
        <div class="form-group"><label for="DateJoined">Date Joined:</label> 
            <input class="form-control" type="text" id="DateJoined" name="DateJoined" value="<?php echo $_GET['DateJoined'];?>" readonly>
        </div>

        <div>
       <P><span style="color:#d22d2d">Important Note:</span><br>
        1) Please provide below the reason for removing the user</p>
    </div>

        <div class="form-group"><label for="ReasonforRemoval">Reason for Removal:</label> 
            <input class="form-control" type="text" id="ReasonforRemoval" name="ReasonforRemoval" required>
        </div>
       
    <div>
       <P><span style="color:#d22d2d">Important Note:</span><br>
        1) Once you click confirm user, user would be removed from the website</p>
    </div>
        
        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Remove User">   
        
    
    </form>		
    

    <div class="text-center small">Don't want to remove user <a href="../CurrentUsers.php">Go Back</a></div>
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