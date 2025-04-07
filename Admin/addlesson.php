<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
include("admininclude/header.php");
include("../dbConnection.php"); 

if(isset($_SESSION['is_admin_login'])) {
    $adminemail = $_SESSION['adminemail'];}
else {
    echo "<script>location.href='../index.php';</script>";
  }
  
  if(isset($_REQUEST['lessonSubmitBtn'])){
    // checking for empty fields
    if(($_REQUEST['lesson_name'] == "" ) || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
      $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all fields</div>';
    }else{
      // Assigning user values to variables
      $lesson_name = $_REQUEST['lesson_name'];
      $lesson_desc = $_REQUEST['lesson_desc'];
      $course_id = $_REQUEST['course_id'];
      $course_name = $_REQUEST['course_name'];
      $lesson_link = $_FILES['lesson_link']['name'];
      $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
      $link_folder = "../lessonvid/".$lesson_link;
      move_uploaded_file($lesson_link_temp, $link_folder);

      $sql = "INSERT INTO lesson (lesson_name, lesson_desc, course_id, course_name, lesson_link) VALUES ('$lesson_name', '$lesson_desc', '$course_id', '$course_name', '$link_folder')";

      if($conn->query($sql) == TRUE){
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">lesson Added Successfully</div>';
      }else{
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add lesson</div>';
      }
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Courses</title>
  <link rel="stylesheet" href="admininclude/headerstyle.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background: #f0f2f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

      height: 100vh;
      margin: 20px;
    }
    .form-container {
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
      font-weight: bold;
    }
    input[type="text"],
    input[type="number"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
      box-sizing: border-box;
    }
    textarea {
      resize: vertical;
      min-height: 80px;
    }
    .button-group {
      display: flex;
      justify-content: space-between;
      margin-top: 1.5rem;
    }
    .btn {
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .btn-submit {
      background: #28a745;
      color: #fff;
    }
    .btn-submit:hover {
      background: #218838;
    }
    .btn-close {
      background: #dc3545;
      color: #fff;
    }
    .btn-close:hover {
      background: #c82333;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Add New Lesson</h2>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="courseID">Course ID</label>
        <input type="text" id="course_id" name="course_id" value="<?php if(isset($_SESSION['course_id'])){echo $_SESSION['course_id'];} ?>" required>
      </div>
      <div class="form-group">
        <label for="courseName">Course Name</label>
        <input type="text" id="course_name" name="course_name" value="<?php if(isset($_SESSION['course_name'])){echo $_SESSION['course_name'];} ?>" required></input>
      </div>
      <div class="form-group">
        <label for="Lesson Name">Lesson Name</label>
        <input type="text" id="lesson_name" name="lesson_name" required>
      </div>
      <div class="form-group">
        <label for="lessonDescription">Lesson Description</label>
        <textarea type="text" id="lesson_desc" name="lesson_desc" required></textarea>
      </div>
      <div class="form-group">
        <label for="Lesson Video Link">Lesson Video Link</label>
        <input type="file" id="lesson_link" name="lesson_link" required>
      </div>
      <div class="button-group">
        <button type="submit" class="btn btn-submit" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
        <a class="btn btn-close" href='lessons.php'>Close</a>
      </div>
    <?php if(isset($msg)) { echo $msg; } ?>

    </form>
  </div>
  <script src="../js/adminscript.js"></script>
  <script src="../js/adminajaxrequest.js"></script>
</body>
</html>
