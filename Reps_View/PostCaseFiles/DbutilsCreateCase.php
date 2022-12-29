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
  // creating User table
  function creatCasetable( $pdo) { 
    if ( !tableExists( $pdo, 'CasesTable')) {  
      $sql = "CREATE TABLE IF NOT EXISTS `CasesTable` (
        `CaseId` int(11) NOT NULL auto_increment,
        `ClientFirstName` varchar(255) NOT NULL,
        `ClientLastName` varchar(255) NOT NULL,
        `Location` varchar(255) NOT NULL,
        `Fee` varchar(255) NOT NULL,
        `Describtion` varchar(255) NOT NULL,
        `DateAdded` timestamp Not Null,
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