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

// checing if table exists
function tableExists( $pdo, $table) {
  $sql = "SHOW TABLES LIKE '$table'";
  return ( $pdo->query( $sql)->rowCount() > 0);    
} 

function getSingleValue($conn, $sql, $parameters)
{
    $q = $conn->prepare($sql);
    $q->execute($parameters);
    return $q->fetchColumn();
}
// creating signup table
function createUserTable( $pdo) {  
  if ( !tableExists( $pdo, 'UserTable')) {    
    $sql = "CREATE TABLE IF NOT EXISTS `UserTable` (
      `UserID` int(11) NOT NULL auto_increment,
      `FirstName` varchar(255) NOT NULL,
      `LastName` varchar(255) NOT NULL,
      `EmailAddress` varchar(255) NOT NULL,
      `Password` varchar(255) NOT NULL,
      `role` enum('Admin','AdminAssistant', 'User') NOT NULL,
      `DateSignedUp` timestamp Not Null,
      PRIMARY KEY  (`UserID`)
    )"; 
    $pdo->exec( $sql);
  }
} 
?>