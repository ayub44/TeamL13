<?php
session_start();
include("../../Data_Management/dbutilsSignUp.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for joining us | RapidReps</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:400,600,900');

*{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
        background: #d9d9d9;;
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}
a {
  color: #111;
  text-decoration: none;
  transition: all 0.30s linear 0s;
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding: 30px;
  text-align:center;
}
h1{
  font-family: 'Raleway', Arial Black, Sans-Serif;
  font-size:22px;
  font-weight: 900;
  letter-spacing:3px;
  color: #111;
  margin:0;
  margin-top: 40px;
  margin-bottom:40px;
}
h3{
  font-family: 'Raleway', Arial Black, Sans-Serif;
  font-size:2em;
  font-weight: 400;
  color: #111;
  /* text-align:left; */
  text-decoration: underline;
  -webkit-text-decoration-color:  #0E1111;; /* Safari */  
  text-decoration-color:  #0E1111;;

}

.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#111;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
  line-height: 1.5;
}
.go-home{
  border:none;
  padding: 25px 30px;
  margin: 30px 0;
  border-radius: 5px;
  background:#0E1111;
  border: 2px solid #ADC4D6;
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
  color: white;
  color: white;
  font-size: 1rem;
font-weight: 700;
text-transform: uppercase;
letter-spacing: 2px;
}
.go-home:hover{
  opacity: 0.9;
  background: #ADC4D6;
  color: #0E1111;
  font-size: 1rem;
font-weight: 700;
text-transform: uppercase;
letter-spacing: 2px;
}
.go-home a{
    color: white;
    font-size: 1rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  
}
.go-home a:hover{
  background: #ADC4D6;
  color: #0E1111;
}
.footer-like{
  margin-top: auto; 
  background: #ADC4D6;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#fafafa;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight: 600;
}

.footer-like p a:hover{
  color:#FFF;
 }

@media (min-width:360px){
  h1{
    font-size:22px;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .thankyoucontent{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  }
  
  
}
 img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
.disclaimer{
    display: none;
}
/* styling scroll bar */
::-webkit-scrollbar {
    width: 17px; /* width */
}
::-webkit-scrollbar-track {
    background: #0E1111; /* Track */
}
::-webkit-scrollbar-thumb {
    background: #ADC4D6; /* Handle */
}
::selection{
    background: rgb(0,123,255,0.3);
}
/* styling scroll bar End*/
</style>
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


       $firstname    =  $_SESSION['fname'];
       $lastname    =  $_SESSION['lname'];
       $emailaddress =  $_SESSION['EmailAdd'];
       $password     = $_SESSION['password'];

       $to = $emailaddress; 
       $from = "Ayubtesting101@gmail.com"; 
       $fromName = 'RapidReps'; 

       $subject = "Thank you for Signing Up!";


       $htmlContent = ' 
       <html> 
       <head> 
       <title>Welcome to RapidReps</title> 
       </head> 
       <body> 
             <h1>Thank You For Signing Up! &#128522;</h1> 
             
             <h3>Next steps & what to expect:</h3>

             <h5>-- The administrator would review the information you have supplied.</h5>
             <h5>-- Once the administrator has finished reviewing your application, you will be notified through your email if you have been approved to join RapidReps.</h5>
             <h5>-- If granted permission, you would be able to use your email and password to login.</h5>
             <h5>-- If you are not granted permission, you would not be able to log in.</h5>
             <h5>Do you have any question? </th><td><a href="http://localhost/RapidReps/Main_View/Pages/loginpage.php">Contact Us!</a></h5> 
       </body> 
       </html>'; 
       
       // Set content-type header for sending HTML email 
       $headers = "MIME-Version: 1.0" . "\r\n"; 
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
       $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 


    // first mail to user
       if(mail($to, $subject, $htmlContent, $headers)){
        print "<h1>Dear $firstname  $lastname. Thank you for signing-up &#128522;</h1>\n";

        print "<h3>Next steps & what to expect:</h3>\n";

        print "<p>-- The administrator would review the information you have supplied.</p>";
        print "<p>-- Once the administrator has finished reviewing your application, you will be notified through your email if you have been approved to join RapidReps.<p>";
        print "<p>-- If granted permission, you would be able to use your email and password to login.</p>";
        print "<p>-- If you are not granted permission, you would not be able to log in.</p>";
        
    }else{
        echo "<p>Sorry, failed while sending mail!</p>";
    }

    //second mail to user
    $subject = "Dear $firstname $lastname. Below are your login details";
    $body = "Your Email is: $emailaddress \r\n\r\n Your Password is: $password";
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
    $to = $emailaddress; 
    $from = "Ayubtesting101@gmail.com"; 
    $fromName = 'RapidReps'; 
    mail($to, $subject, $body, $headers)      
             
 ?>
     <a href=".././Loginpage.php"><button class="go-home">Do you have any question? Contact Us!</button></a>


    </div>
   
    <div class="footer-like">
      <p>
      </p>
    </div>
</div>
 
   
</body>
</html>


