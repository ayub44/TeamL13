<?php
session_start();
include("dbutils.php");
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
</head>
<!--End head section-->

<!--Start body section-->
<body>
<!--  Request me for a signup form or any type of help  -->
<div class="signupForm">    
    <form action="Givesolicitorcaseconfirmation.php" method="Post" enctype="multipart/form-data">

    	<h4 class="formTitle">Please Read through user details before giving them permission to join the Website</h4>
        <p><span style="color:#d22d2d">Important Note:</span> Below is the information they have submitted</p>
  

        <div class="form-group"> <label for="CaseId">Case ID:</label>
            <input class="form-control" type="text" id="CaseId" name="CaseId" value="<?php echo $_GET['CaseId'];?>" readonly>
        </div>
        
        <div class="form-group"> <label for="ClientFirstName">Client First Name:</label>
            <input class="form-control" type="text" id="ClientFirstName" name="ClientFirstName" value="<?php echo $_GET['ClientFirstName'];?>" readonly>
        </div>

        <div class="form-group"><label for="ClientLastName">Client Last Name:</label> 
            <input class="form-control" type="text" id="ClientLastName" name="ClientLastName"  value="<?php echo $_GET['ClientLastName'];?>" readonly>
        </div>

        <div class="form-group"><label for="Location">Location:</label> 
            <input class="form-control" type="text" id="Location" name="Location"  value="<?php echo $_GET['Location'];?>" readonly>
        </div>


        <div class="form-group"><label for="Fee">Fee per hour:</label> 
            <input class="form-control" type="text" id="Fee" name="Fee"  value="<?php echo $_GET['Fee'];?>" readonly>
        </div>

        <div class="form-group"><label for="Describtion">Describtion :</label> 
            <input class="form-control" type="text" id="Describtion" name="Describtion"  value="<?php echo $_GET['Describtion'];?>" readonly>
        </div>

        <div class="form-group"><label for="AppliedSoliFirstName">Applied Solicitor First Name:</label> 
            <input class="form-control" type="text" id="AppliedSoliFirstName" name="AppliedSoliFirstName"  value="<?php echo $_GET['AppliedSoliFirstName'];?>" readonly>
        </div>

        <div class="form-group"><label for="AppliedSoliLastName">Applied Solicitor Last Name:</label> 
            <input class="form-control" type="text" id="AppliedSoliLastName" name="AppliedSoliLastName"  value="<?php echo $_GET['AppliedSoliLastName'];?>" readonly>
        </div>

        <div class="form-group"><label for="AppliedSoliEmailAddress">Applied Solicitor Email Address:</label> 
            <input class="form-control" type="text" id="AppliedSoliEmailAddress" name="AppliedSoliEmailAddress"  value="<?php echo $_GET['AppliedSoliEmailAddress'];?>" readonly>
        </div>
        
        
        <div>
            <P><span style="color:#d22d2d">Important Note:</span><br>
             1) Once you click assign case, solicior would instructed to start working on the case.</p>
        </div>

        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Assign Case">              
    </form>	
    
    

    <div class="text-center small">Don't want to assign solicitor case <a href="../ViewCassesPosted.php">Go Back</a></div>
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

  
  
  
  