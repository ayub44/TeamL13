<?php
session_start();
include("dbutilsUser.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Confirmation | RapidReps</title>
    <link rel="stylesheet" href="dbtestStyleSheet.css">
</head>
<body>


<div class=thankyoucontent>
 <div class="wrapper-1">
    <div class="wrapper-2">
    <?php
       $pdo = connect();
       // checling if connected to Main_dbutils
        //   if ( $pdo) {
        //      print "<h1>Successfully connected!</h1>\n";
        //  } else {
        //      print "<h1>Did not connect.</h1>\n";
        //  }   


    //    $firstname    =  $_SESSION['fname'];
    //    $lastname    =  $_SESSION['lname'];
    //    $emailaddress =  $_SESSION['EmailAdd'];
    //    $password     = $_SESSION['password'];
    if(isset($_SESSION['user']))
    {
      $firstname = $_SESSION['user'];
       $lastname =  $_SESSION['user2'];
       $USERID =  $_SESSION['user3'];
    }   

    $EmailAddress = $_POST['EmailAddress'];
    $Password = $_POST['Password'];
 
    $sql = "UPDATE `usertable` SET 
    `EmailAddress`='$EmailAddress', `Password`='$Password'
      WHERE `UserID`='$USERID'";
    $data_check = $pdo->exec( $sql);
    
    if ($data_check)
    {
        print "<h1>Dear $firstname $lastname </h1>";
        print "<p>You have  secessfuly updated your profile</p>";

        $to = $EmailAddress; 
        $from = "Ayubtesting101@gmail.com"; 
        $fromName = 'RapidReps'; 
 
        $subject = "Your profile has being updated updated!";

        $htmlContent = ' 
        <html> 
        <head> 
        <title>Welcome to RapidReps</title> 
        </head> 
        <body> 
              <h1>Dear user, your profile was successfully updated! &#128522;</h1> 
              
              <h5>Do you have any question? </th><td><a href="http:Aim93.com">Contact Us!</a></h5> 
        </body> 
        </html>'; 

               // Set content-type header for sending HTML email 
       $headers = "MIME-Version: 1.0" . "\r\n"; 
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
       $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 


       mail($to, $subject, $htmlContent, $headers);

    }
    
    else 
    {
        print "<h1>Dear $firstname $lastname </h1>";
        print "<p>Failed to update your profile!</p>";
    } 
   
             
 ?>
     <a href=".././ManageProfile.php"><button class="go-home">View your Profile</button></a>


    </div>
   
    <div class="footer-like">
      <p>
      </p>
    </div>
</div>
 
   
</body>
</html>


