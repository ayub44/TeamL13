<?php 
  require_once('dbutilsForm.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Confirmation</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="dbtestStyleSheet.css">
</head>

<body>
    <div class=thankyoucontent>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <?php
                $pdo = connect();
                //checling if connected to dbutilsForm
                // if ( $pdo) {
                //     print "<h1>Successfully connected!</h1>\n";
                // } else {
                //     print "<h1>Failed to connect.</h1>\n";
                // }   
                
                // // executing table creation
                // create_Contact_Form_Table( $pdo);
                // $table = 'Contact_Form_Table';
                
                // // Checking if table exists
                // if ( tableExists( $pdo, 'Contact_Form_Table')) {    
                //     print "<p>$table exists</p>\n";
                // } else {
                //     print "<p>$table does not exist</p>\n";
                // }     

               //Collecting values from the form
                $fname                        =  trim($_POST['fname']);
                $lname                        =  trim($_POST['lname']);
                $EmailAdd                     =  trim($_POST['EmailAdd']);
                $Message                      =  trim($_POST['Message']);

  

                //Inserting values from the form into database
                $sql = "INSERT into `Contact_Form_Table` 
                (`fname`, `lname`, `EmailAdd`, `Message`) 
                values 
                ('$fname', '$lname', '$EmailAdd', '$Message')";
                 $data_check= $pdo->exec($sql);

        
                if($data_check){

                    header("Location:Confirmation.php");

                    }else{
                      print "<h1>Failed to submit the form</h1>\n";
                    }

                
        
                ?>
                <a href="http://localhost/Mid_Semester_Feedback/Mid_Semester_Feedback.php"><button class="go-home">Go back to the form</button></a>
            </div>
            
            <div class="footer-like">
                <div class="text-center small"><a href="https://www.linkedin.com/in/ayubyusuf44" target="_blank" title="Contact me via LinkedIn">RapidReps | Made By Team L13</a></div>
        </div>
    </div>
</body>
</html>


