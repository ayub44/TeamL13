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

// creating signup table
function createSignUpTable( $pdo) {  
    if ( !tableExists( $pdo, 'SignUpTable')) {    
      $sql = "CREATE TABLE IF NOT EXISTS `SignUpTable` (
        `SignUpID` int(11) NOT NULL auto_increment,
        `FirstName` varchar(255) NOT NULL,
        `LastName` varchar(255) NOT NULL,
        `EmailAddress` varchar(255) NOT NULL,
        `Password` varchar(255) NOT NULL,
        `Role` enum('User','AdminAssistant') NOT NULL,
        `Status` enum('Verified','Not Verified') NOT NULL,
        `DateSignedUp` timestamp Not Null,
        PRIMARY KEY  (`SignUpID`)
      )"; 
      $pdo->exec( $sql);
    }
  } 
?>