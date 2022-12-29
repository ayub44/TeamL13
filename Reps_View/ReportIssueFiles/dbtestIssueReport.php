<?php 
  require_once('dbutils.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for reporitng the issue</title>
    <link rel="stylesheet" href="dbtestStyleSheet.css">
</head>
<body>
<div class=thankyoucontent>
        <div class="wrapper-1">
            <div class="wrapper-2">
        <?php
     $pdo = connect();
     //checling if connected to dbutilsCreateCasesTable
    //  if ( $pdo) {
    //      print "<h1>Successfully connected!</h1>\n";
    //  } else {
    //      print "<h1>Failed to connect.</h1>\n";
    //  }     


    //  //executing table creation
    // createReportIssuesTable($pdo);
    // $table = 'reportIssueTable';
                
    // //Checking if table exists
    // if ( tableExists( $pdo, 'reportIssueTable')) {    
    //     print "<p>$table exists</p>\n";
    //     } else {
    //     print "<p>$table does not exist</p>\n";
    // }
         
    //   Collecting data from the form
      $firstname      = $_POST['fname'];
      $lastname       =  $_POST['lname'];
      $phonenumber    =  $_POST['pnumber'];
      $emailaddress  =  $_POST['emailadd'];
      $issuesum  =  $_POST['issuesum']; 

    //   inserting data into registrationTable
        $sql = "INSERT INTO `reportIssueTable` 
        (`firstname`, `lastname`, `phoneNumber`, `emailAddress`, `issueSummary`)
        VALUES    
        ('$firstname', '$lastname', '$phonenumber', '$emailaddress', '$issuesum')";
      $pdo->exec( $sql);  
     
        
    //      //respodning to user via email straigt away
        $receiver = $emailaddress;
         $subject = "Thank you for reporting the issue";
         $body = "Dear $firstname, we would deal with the issue that you have reported as soon as possible";
         $sender = "From:Ayubyusuf90@gmail.com"; 

        if(mail($receiver, $subject, $body, $sender)){
             print "<h1>Dear $firstname, You have succesfully reported the issue</h1>\n";
         }else{
             echo "<h1>Sorry, failed to report the issue</h1>";
         }                           
        ?>
        

        <a href="../ReportIssue.php"><button class="go-home">Go back to Report Issue form</button></a>

        </div>
            
            <div class="footer-like">
                <p></p>
        </div>
    </div>
</body>
</html>


