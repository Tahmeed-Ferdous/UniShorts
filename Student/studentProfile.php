<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include_once("../dbConnection.php");

if(isset($_SESSION['is_login'])) {
    $stuEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script>location.href='../index.php';</script>";
}

?>