<?php 
  require_once('dbutilsLogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Login Table | RapidReps</title>
    <link rel="stylesheet" href="dbtestStyleSheet.css">
</head>

<body>
    <div class=thankyoucontent>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <?php
                $pdo = connect();
                // checling if connected to dbutilsUserTable
                if ( $pdo) {
                    print "<h1>Successfully connected!</h1>\n";
                } else {
                    print "<h1>Failed to connect.</h1>\n";
                }   
                
                // executing table creation
                createUserTable( $pdo);
                $table = 'UserTable';
                
                // Checking if table exists
                if ( tableExists( $pdo, 'UserTable')) {    
                    print "<p>$table exists</p>\n";
                } else {
                    print "<p>$table does not exist</p>\n";
                }     

                ?>
            </div>
            
            <div class="footer-like">
                <p></p>
        </div>
    </div>
</body>
</html>


