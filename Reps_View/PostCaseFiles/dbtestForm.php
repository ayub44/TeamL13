<?php 
  require_once('DbutilsCreateCase.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating  A New Case | RapidReps</title>
    <link rel="stylesheet" href="dbtestStyleSheet.css">
</head>

<body>
    <div class=thankyoucontent>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <?php
                $pdo = connect();
                // checling if connected to dbutilsCreateCasesTable
                // if ( $pdo) {
                //     print "<h1>Successfully connected!</h1>\n";
                // } else {
                //     print "<h1>Failed to connect.</h1>\n";
                // }   
                
                // // executing table creation
                // creatCasetable( $pdo);
                // $table = 'CasesTable';
                
                // // Checking if table exists
                // if ( tableExists( $pdo, 'CasesTable')) {    
                //     print "<p>$table exists</p>\n";
                // } else {
                //     print "<p>$table does not exist</p>\n";
                // }
                
              
                $ClientFirstName = $_POST['ClientFirstName'];
                $ClientLastName = $_POST['ClientLastName'];
                $Location = $_POST['Location'];
                $Fee =$_POST['Fee'];
                $Describtion =$_POST['Describtion'];
             
                $sql = "INSERT INTO `CasesTable` 
                (`ClientFirstName`, `ClientLastName`,`Location`, `Describtion`, `Fee`)
                VALUES    
                ('$ClientFirstName', '$ClientLastName', '$Location', ' $Describtion', '$Fee')";
 
                $result = $pdo->query($sql);
            
                if ($result->rowCount() > 0){
                    print "<h1>Case Successfuly Created</h1>\n";
                   
                } else{
                    print "<h1>Failed to create case/h1>\n";
               
                }
                ?>
                <a href="../PostCase.php"><button class="go-home">Create More Cases</button></a>


            </div>
            
            <div class="footer-like">
                <p></p>
        </div>
    </div>
</body>
</html>





