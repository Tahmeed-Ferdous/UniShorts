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

$sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $stu_id = $row['stu_id'];
    $stu_name = $row['stu_name'];
    $stu_occ = $row['stu_occ'];
    $stu_img = $row['img'];
} else {
    echo "<script>location.href='../index.php';</script>";
}

?>