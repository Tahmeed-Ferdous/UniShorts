<?php 

include_once('../dbConnection.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if(isset($_SESSION['is_login'])) {
    $stuLogEmail = $_SESSION['stuLogEmail'];
} 
// else {
//     echo "<script>location.href='../index.php';</script>";
// }

if(isset($stuLogEmail)){
    $sql = "SELECT stu_img FROM student WHERE stu_email = '".$stuLogEmail."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stuImg = $row['stu_img'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="stuinclude/headerstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    


</body>
</html>