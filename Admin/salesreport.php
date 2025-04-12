<?php 
if(!isset($_SESSION)){ 
    session_start(); 
}

include("admininclude/header.php");
include("../dbConnection.php");

if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['adminemail'];
} else {
    echo "<script>location.href='../index.php';</script>";
}
?>
<link rel="stylesheet" href="admininclude/headerstyle.css">
 <!-- box icon link -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<script src="../js/adminscript.js"></script>
