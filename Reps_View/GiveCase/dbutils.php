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

// creating registration table
function createReportIssuesTable( $pdo) {  
  if ( !tableExists( $pdo, 'reportIssueTable')) {    
    $sql = "CREATE TABLE IF NOT EXISTS `reportIssueTable` (
      `issueID` int(11) NOT NULL auto_increment,
      `firstname` varchar(255) NOT NULL,
      `lastname` varchar(255) NOT NULL,
      `phoneNumber` varchar(255) NOT NULL,
      `emailAddress` varchar(255) NOT NULL,
      `issueSummary` varchar(255) NOT NULL,
      `dateReported` timestamp Not Null,
      PRIMARY KEY  (`issueID`)
    )"; 
    $pdo->exec( $sql);
  }
} 
?>