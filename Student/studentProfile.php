<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include("stuinclude/header.php");
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
    $stuId = $row['stu_id'];
    $stu_name = $row['stu_name'];
    $stu_occ = $row['stu_occ'];
    $stu_img = $row['stu_img'];
}

if(isset($_REQUEST['updateStuNameBtn'])){
    if(($_REQUEST['stu_name'] == "")){
        $passmsg = '<div class="alert alert-warning mt-2" role="alert">Fill all fields</div>';
    } else {
        $stu_name = $_REQUEST['stu_name'];
        $stu_occ = $_REQUEST['stu_occ'];
        $stu_img = $_FILES['stu_img']['name'];
        $stu_img_tmp = $_FILES['stu_img']['tmp_name'];
        $img_folder = '../img/stu'.$stu_img;
        move_uploaded_file($stu_img_tmp, $img_folder);
        $sql = "UPDATE student SET stu_name = '$stu_name', stu_occ = '$stu_occ', stu_img = '$img_folder' WHERE stu_email = '$stuEmail'";
        if($conn->query($sql) == TRUE) {
            $passmsg = '<div class="alert alert-success mt-2" role="alert">Updated Successfully</div>';
        } else {
            $passmsg = '<div class="alert alert-danger mt-2" role="alert">Unable to Update</div>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
  }

  .main-content {
    margin-left: 250px;
    padding: 40px;
    width: 100%;
    background-color: #f8f9fa;
    min-height: 100vh;
  }

  .profile-form {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: auto;
  }

  .profile-form h2 {
    margin-bottom: 20px;
    text-align: center;
  }

  .profile-form label {
    font-weight: bold;
  }

  .profile-form img {
    margin-top: 10px;
    width: 100px;
    border-radius: 8px;
  }

  .profile-form .form-group {
    margin-bottom: 20px;
  }

  .profile-form .btn {
    width: 100%;
  }
</style>
</head>
<body>

<div class="main-content">
  <div class="profile-form">
    <h2>Student Profile</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Student ID</label>
        <input type="text" class="form-control" id="stuId" name="stuId" value="<?php if(isset($row['stu_id'])){echo $row['stu_id'];} ?>" readonly>
      </div>
      <div class="form-group">
        <label>Student Email</label>
        <input type="email" class="form-control" value="<?php echo $stuEmail; ?>" readonly>
      </div>
      <div class="form-group">
        <label>Student Name</label>
        <input type="text" class="form-control" name="stu_name" value="<?php if(isset($stu_name)){echo $stu_name;} ?>">
      </div>
      <div class="form-group">
        <label>Student Occupation</label>
        <input type="text" class="form-control" name="stu_occ" value="<?php if(isset($stu_occ)){echo $stu_occ;} ?>">
      </div>
      <div class="form-group">
        <label>Upload Image</label>
        <input type="file" class="form-control" name="stu_img">
        <img src="<?php if(isset($stu_img)){echo $stu_img;} ?>">
      </div>
      <button type="submit" class="btn" style="background-color: hsl(214, 57%, 51%); color: white;" name="updateStuNameBtn">Update</button>
      
      <div class="mt-3">
        <?php if(isset($passmsg)) { echo $passmsg; } ?>
      </div>
    </form>
  </div>
</div>
</body>
</html>