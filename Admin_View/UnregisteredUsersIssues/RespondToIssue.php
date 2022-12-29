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
    <title>Issue Response Confirmation | RapidReps</title>
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
    <form action="RespondIssueConfirmation.php" method="get" enctype="multipart/form-data">

    	<h4 class="formTitle">Please Read through issue details before responding to it</h4>
        <p><span style="color:#d22d2d">Important Note:</span> Below is the information related to the issue</p>
  
        <div class="form-group"> <label for="FormID">Issue ID:</label>
            <input class="form-control" type="text" id="FormID" name="FormID" value="<?php echo $_GET['FormID'];?>" readonly>
        </div>
        
        <div class="form-group"> <label for="fname">First Name:</label>
            <input class="form-control" type="text" id="fname" name="fname" value="<?php echo $_GET['fname'];?>" readonly>
        </div>

        <div class="form-group"><label for="lname">Last Name:</label> 
            <input class="form-control" type="text" id="lname" name="lname"  value="<?php echo $_GET['lname'];?>" readonly>
        </div>


        
        <div class="form-group"><label for="EmailAdd">Email Address:</label> 
            <input class="form-control" type="text" id="EmailAdd" name="EmailAdd" value="<?php echo $_GET['EmailAdd'];?>" readonly>
        </div>

        <div class="form-group"><label for="Message">Message:</label> 
            <input class="form-control" type="text" id="Message" name="Message" value="<?php echo $_GET['Message'];?>" readonly>
        </div> 
        
        <div class="form-group"><label for="DateSubmitted">Date Submitted:</label> 
            <input class="form-control" type="text" id="DateSubmitted" name="DateSubmitted" value="<?php echo $_GET['DateSubmitted'];?>" readonly>
        </div>

        <div class="form-group"> <label for="response"  style="text-align: justify;">Response:<span style="color:#d22d2d">*</span></label>
         <textarea class="form-control" type="text" id="response" name="response" placeholder="Type in here..." required style="height:150px"></textarea>
        </div>

       
        
        
        <div>
            <P><span style="color:#d22d2d">Important Note:</span><br>
            1) Once you click respond to issue, the response of the issue would be sent to the user who reported the issue.</p>
        </div>

        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Respond To Issue">              
    </form>			
    <div class="text-center small">Don't want to respond to issue <a href="../UnregisteredUsers.php">Go Back</a></div>
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