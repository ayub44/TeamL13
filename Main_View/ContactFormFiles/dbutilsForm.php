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

// creating contact form table
function create_Contact_Form_Table( $pdo) {  
    if ( !tableExists( $pdo, 'Contact_Form_Table')) {    
      $sql = "CREATE TABLE IF NOT EXISTS `Contact_Form_Table` (
        `FormID` int(11) NOT NULL auto_increment,
        `fname`  varchar(255) NOT NULL,
        `lname`  varchar(255) NOT NULL,
        `EmailAdd` varchar(255) NOT NULL,
        `Message` varchar(255) NOT NULL,
        `DateSubmitted` timestamp Not Null,
        PRIMARY KEY  (`FormID`)
      )"; 
      $pdo->exec( $sql);
    }
  }




?>