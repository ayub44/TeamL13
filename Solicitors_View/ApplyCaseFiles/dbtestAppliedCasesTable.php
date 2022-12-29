<?php
session_start();
include("dbutilsApplyCaseTable.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Case Confirmation| RapidReps</title>
    <link rel="stylesheet" href="dbtestStyleSheet.css">
</head>

<body>
    <div class=thankyoucontent>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <?php
                $pdo = connect();
                // // checling if connected to dbutilsCreateCasesTable
                //  if ( $pdo) {
                //      print "<h1>Successfully connected!</h1>\n";
                //  } else {
                //      print "<h1>Failed to connect.</h1>\n";
                //  }   
                
                // // // executing table creation
                // createAppliedCasesTable( $pdo);
                //  $table = 'AppliedCasesTable';
                
                // // // Checking if table exists
                //  if ( tableExists( $pdo, 'AppliedCasesTable')) {    
                //      print "<p>$table exists</p>\n";
                //  } else {
                //      print "<p>$table does not exist</p>\n";
                //  }

                if(isset($_SESSION['user']))
{
  $firstname = $_SESSION['user'];
   $lastname =  $_SESSION['user2'];
   $USERID =  $_SESSION['user3'];

$results = $pdo->query("SELECT * FROM UserTable Where UserID='$USERID'", PDO::FETCH_ASSOC);
foreach( $results as $row) {
  print("<tr class='item'>");
  $current_userID= trim($row['UserID']);
  $AppliedSoliFirstName= trim($row['FirstName']);
  $AppliedSoliLastName= trim($row['LastName']);
  $AppliedSoliEmailAddress= trim($row['EmailAddress']);
}
}           
              
                $CaseId = $_POST['CaseId'];
                $ClientFirstName = $_POST['ClientFirstName'];
                $ClientLastName = $_POST['ClientLastName'];
                $Location = $_POST['Location'];
                $Fee =$_POST['Fee'];
                $Describtion =$_POST['Describtion'];
             
                $sql = "INSERT INTO `AppliedCasesTable` 
                (`CaseId`,`ClientFirstName`, `ClientLastName`,`Location`, `Fee`, `AppliedSoliFirstName`, `AppliedSoliLastName`, `AppliedSoliEmailAddress`)
                VALUES    
                ('$CaseId', '$ClientFirstName', '$ClientLastName', ' $Location', '$Fee', '$AppliedSoliFirstName', '$AppliedSoliLastName', '$AppliedSoliEmailAddress')";
 
                $result = $pdo->query($sql);

            
                if ($result->rowCount() > 0){
                    print "<h1> Successfuly Applied For Case</h1>\n";
                   
                } else{
                    print "<h1>Failed to Apply for case/h1>\n";
               
                }
                ?>
                 <a href="../ViewCase.php"><button class="go-home">Apply for more Cases</button></a>


            </div>
            
            <div class="footer-like">
                <p></p>
        </div>
    </div>
</body>
</html>





