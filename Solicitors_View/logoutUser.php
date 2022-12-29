<?php
require_once("dbutilsLogout.php");
$pdo = connect();
session_start();

if(isset($_SESSION['user']))
{
    unset($_SESSION['user']);
    //echo session_id();
}
session_destroy();
header('Location:http://localhost/RapidReps/Main_View/Homepage.php'); 
//die;
?>