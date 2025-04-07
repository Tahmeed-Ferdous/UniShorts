<?php 
if(!isset($_SESSION)) { 
    session_start(); 
}
include("../dbConnection.php"); 

if(isset($_SESSION['is_admin_login'])) {
    $adminemail = $_SESSION['adminemail'];
} else {
    echo "<script>location.href='../index.php';</script>";
}

// update lesson
if(isset($_REQUEST['requpdate'])){
    if(empty($_REQUEST['lesson_name']) || empty($_REQUEST['lesson_desc']) || empty($_REQUEST['lesson_id']) || empty($_REQUEST['course_id']) || empty($_REQUEST['course_name'])){
        $msg = "<div class='alert alert-warning'>Fill All Fields</div>";
    } else {
        $lesson_id = $_REQUEST['lesson_id'];
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        $course_id = $_REQUEST['course_id'];
        $course_name = $_REQUEST['course_name'];

        // Check if a new file has been uploaded
        if(isset($_FILES['lesson_link']) && $_FILES['lesson_link']['name'] != ""){
            $target_dir = "../lessonvid/";
            $file_name = basename($_FILES['lesson_link']['name']);
            $lesson_link = $target_dir . $file_name;

            // Move the file to the desired directory
            if(!move_uploaded_file($_FILES['lesson_link']['tmp_name'], $lesson_link)){
                $msg = "<div class='alert alert-danger'>Failed to upload video.</div>";
            }
        } else {
            // If no new file is uploaded, keep the current link (you might want to fetch it from DB)
            $lesson_link = $_REQUEST['current_lesson_link'] ?? '';
        }

        $sql = "UPDATE lesson 
                SET lesson_name = '$lesson_name', lesson_desc = '$lesson_desc', 
                    course_id = '$course_id', course_name = '$course_name', lesson_link='$lesson_link' 
                WHERE lesson_id = $lesson_id";

        if($conn->query($sql) === TRUE){
            $msg = "<div class='alert alert-success'>Lesson Updated</div>";
        } else {
            $msg = "<div class='alert alert-danger'>Unable to Update Lesson</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
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
  <?php include("admininclude/header.php") ?>

  <div class="form-container">
      <h2>Update Lessons</h2>
      <?php 
      if(isset($_REQUEST['view'])) {
          $sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
      }
      ?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="lesson_id">Lesson ID</label>
            <input type="text" id="lesson_id" name="lesson_id" value="<?php echo $row['lesson_id'] ?? ''; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" id="lesson_name" name="lesson_name" value="<?php echo $row['lesson_name'] ?? ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea id="lesson_desc" name="lesson_desc" required><?php echo $row['lesson_desc'] ?? ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" id="course_id" name="course_id" value="<?php echo $row['course_id'] ?? ''; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" id="course_name" name="course_name" value="<?php echo $row['course_name'] ?? ''; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_link">Lesson Link</label>
            <div>
                <iframe src="<?php echo $row['lesson_link'] ?? ''; ?>" allowfullscreen></iframe>
            </div>
            <input type="file" id="lesson_link" name="lesson_link">
            <input type="hidden" name="current_lesson_link" value="<?php echo $row['lesson_link'] ?? ''; ?>">
        </div>
        <div class="button-group">

            <button type="submit" class="btn btn-submit" id="requpdate" name="requpdate">Update</button>
            <a class="btn btn-close" href='lessons.php'>Close</a>
        </div>
        <?php if(isset($msg)) { echo $msg; } ?>
      </form>
  </div>

  <script src="../js/adminscript.js"></script>
  <script src="../js/adminajaxrequest.js"></script>
</body>
</html>
