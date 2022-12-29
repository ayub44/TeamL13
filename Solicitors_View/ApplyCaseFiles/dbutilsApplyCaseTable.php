<?php

function connect() {
    $username = 'AyubY';
    $password = 'Ayub1444';
    $mysqlhost = 'localhost';
    $dbname = 'RapidReps';
  
    $pdo = new PDO('mysql:host='.$mysqlhost.';dbname='.$dbname.';charset=utf8', $username, $password);
    
    // checking connection works
    if ( $pdo) {
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } else {
      die("Could not create PDO connection.");
    }
  }


  // creating applied casses table
function createAppliedCasesTable( $pdo) {  
  if ( !tableExists( $pdo, 'AppliedCasesTable')) {    
    $sql = "CREATE TABLE IF NOT EXISTS `AppliedCasesTable` (
      `CaseId` int(11) NOT NULL auto_increment,
      `ClientFirstName` varchar(255) NOT NULL,
      `ClientLastName` varchar(255) NOT NULL,
      `Location` varchar(255) NOT NULL,
      `Fee` varchar(255) NOT NULL,
      `Describtion` varchar(255) NOT NULL,
      `AppliedSoliFirstName` varchar(255) NOT NULL,
      `AppliedSoliLastName` varchar(255) NOT NULL,
      `AppliedSoliEmailAddress` varchar(255) NOT NULL,
      PRIMARY KEY  (`CaseId`)
    )"; 
    $pdo->exec( $sql);
  }
} 


// checing if table exists
function tableExists( $pdo, $table) {
  $sql = "SHOW TABLES LIKE '$table'";
  return ( $pdo->query( $sql)->rowCount() > 0);    
}  
?>