<?php
session_start();
include("../Data_Management/dbutilsLogin.php");
?>
<!--Start of file-->
<!DOCTYPE html>
<html lang="en">

<!--Start head section-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password Page | RapidReps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSSFILES/css/loginstylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!--End head section-->

<!--Start body section-->
<body>

<div class="loginForm">    

    <form action="./UserConfig/ForgotPasswordConfirmation.php" method="POST"> 
		<div class="userAvatar"><i title="Forgot Password" class="userIcon">&#xe7ff;</i></div>
    	<h4 class="formTitle">Enter your Email to recieve your password</h4>
        <!-- <p><span style="color:#d22d2d">Enter your Email to reset your password</span></p> -->
        
        <div class="form-group">      
            <i class="fa fa-envelope"></i>
            <input class="form-control" type="email" id="EmailAddress" onKeyup="this.value = this.value.toUpperCase()" name="EmailAddress"  placeholder="Enter your Email" required>
        </div>
        
        <input type="submit" class="submitButton btn-primary btn-block btn-lg" value="Forgot Password">              
    </form>			
    <div class="text-center small">Remembered your password? <a href="Loginpage.php">Login</a></div>
</div>

</body>
<!--End body section-->

</html>       
<!--End of file-->