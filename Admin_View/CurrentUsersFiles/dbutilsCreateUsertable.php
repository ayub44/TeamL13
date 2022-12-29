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

  // creating User table
function creatusertable( $pdo) { 
    if ( !tableExists( $pdo, 'UserTable')) {  
      $sql = "CREATE TABLE IF NOT EXISTS `UserTable` (
        `UserID` int(11) NOT NULL auto_increment,
        `FirstName` varchar(255) NOT NULL,
        `LastName` varchar(255) NOT NULL,
        `EmailAddress` varchar(255) NOT NULL,
        `Password` varchar(255) NOT NULL,
        `role` enum('Admin','AdminAssistant','User') NOT NULL,
        `DateJoined` timestamp Not Null,
        PRIMARY KEY  (`userid`)
      )";
      $pdo->exec( $sql);
      $sql = "INSERT INTO `UserTable` 
      (`FirstName`,`LastName`,
       `EmailAddress`, `Password`, `role`)
      VALUES
      ('Ayub', 'Yusuf','Ayubyusuf90@gmail.com', 'Ayub1@44', 'Admin'),

      ('Abdi', 'Ali','Abdi@gmail.com', 'Abdione@#19', 'AdminAssistant'),

      ('Mohamed', 'Hassan','mo@gmail.com', 'mo12345', 'User')";
      $pdo->exec( $sql); 
      }
    }
?>