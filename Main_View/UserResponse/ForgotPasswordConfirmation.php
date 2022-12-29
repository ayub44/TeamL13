<?php
session_start();
include("../../Data_Management/dbutilsLogin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Confirmation | AIM93</title>
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
  font-size:4em;
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
    font-size:4.5em;
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
       // checling if connected to dbutilsSignUp
        //   if ( $pdo) {
        //      print "<h1>Successfully connected!</h1>\n";
        //  } else {
        //      print "<h1>Did not connect.</h1>\n";
        //  }   

            
       // Set content-type header for sending HTML email 

    





        // Collecting data from RemoveCurrentUser form
        $EmailAddress = trim($_POST['EmailAddress']); 


        $to = $EmailAddress; 
        $from = "Ayubtesting101@gmail.com"; 
        $fromName = 'AIM93'; 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
       


    //    $firstname    =  $_SESSION['fname'];
    //    $lastname    =  $_SESSION['lname'];
    //    $emailaddress =  $_SESSION['EmailAdd'];
    //    $password     = $_SESSION['password'];


    $sql = "SELECT `Password` from `UserTable` where `EmailAddress` = '$EmailAddress'";
    $result = $pdo->query($sql);

    if($result->rowCount() > 0){
        print "<h1>Dear User!</h1>\n";
        print "<p>Your password has being sent</p>\n";

        $pwd = $pdo->query("SELECT `Password` FROM `UserTable` where `EmailAddress` = '$EmailAddress' ", PDO::FETCH_ASSOC);
        foreach( $pwd as $row){
             $forgotPWD= $row['Password'];
            // print "<h1>Your password is $forgotPWD</h1>\n";
        }
            //sending mail to user            
             $subject = "Dear User!. Below are your login details";
             $body = "Your Email is: $EmailAddress \r\n\r\n Your Password is: $forgotPWD";
             $headers = "MIME-Version: 1.0" . "\r\n"; 
             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
             $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
             $to = $EmailAddress; 
             $from = "Ayubtesting101@gmail.com"; 
             $fromName = 'AIM93'; 
             mail($to, $subject, $body, $headers);
    } else{
        print "<h1>Dear User!</h1>\n";
        print "<p>The Email Address you have provided is not recognised</p>\n";
    }
            
 ?>
     <a href=".././Loginpage.php"><button class="go-home">Go To Login Page</button></a>



    </div>
   
    <div class="footer-like">
      <p>
      </p>
    </div>
</div>
 
   
</body>
</html>