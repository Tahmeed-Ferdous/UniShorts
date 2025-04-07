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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="admininclude/headerstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<?php include("admininclude/header.php") ?>

<div class="container mt-5">
    <form action="" method="POST" class="mt-3">
        <div class="mb-3">
            <label for="courseID" class="form-label">Enter Course ID:</label>
            <input type="text" name="checkid" id="checkid" class="form-control w-50" required>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <?php 
if(isset($_POST['delete'])){
    $lesson_id = $_POST['id'];
    $sql = "DELETE FROM lesson WHERE lesson_id = '$lesson_id'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert('Lesson Deleted'); window.location.href=window.location.href;</script>";
        exit;
    } else {
        echo "<script>alert('Unable to Delete Lesson');</script>";
    }
}


if(isset($_POST['checkid'])) {
    $checkid = $_POST['checkid'];
    $sql = "SELECT * FROM course WHERE course_id = '$checkid'";
    $result = $conn->query($sql);
    
    if($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
        
        $_SESSION['course_id'] = $row['course_id'];
        $_SESSION['course_name'] = $row['course_name'];
        
        echo "<h3>Course ID: " . $row['course_id'] . " | Course Name: " . $row['course_name'] . "</h3>";

        $sql = "SELECT * FROM lesson WHERE course_id = '$checkid'";
        $result = $conn->query($sql);
        echo '<table class="table table-bordered table-striped mt-3">
            <tr>
                <th>Lesson ID</th>
                <th>Lesson Name</th>
                <th>Course ID</th>
                <th>Action</th>
            </tr>
        <tbody>';
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['lesson_id'] . "</td>";
            echo "<td>" . $row['lesson_name'] . "</td>";
            echo "<td>" . $row['lesson_link'] . "</td>";
            echo "<td>
        <form action='' method='POST' style='display: inline-block; margin-right: 5px;'>
            <input type='hidden' name='id' value='" . $row['lesson_id'] . "'>
            <button type='submit' name='delete' value='Delete' class='btn btn-danger'>Delete</button>
        </form>
        <form method='POST' action='editlesson.php' style='display: inline-block;'>
        <input type='hidden' name='id' value='" . $row['lesson_id'] . "'> 
        <button class='btn btn-secondary' type='submit' name='view' value='View'>Edit</button>
        </form>
        </td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<div class='alert alert-warning mt-3'>Course not found.</div>";
    }
}
?>

</div>

<style>
 .course-add-button {
  position: fixed;
  left: 1230px; 
  bottom: 20px;
  background-color: var(--primary-color);
  color: #fff;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  text-decoration: none;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease;
  z-index: 200;
}

.course-add-button:hover {
  background-color: var(--primary-color-light);
}

</style>

<?php 
if(isset($_SESSION['course_id'])) {
 echo "
<a href='addlesson.php' class='course-add-button'>
  <i class='bx bx-plus'></i>
</a>
";

}
?>




<script src="../js/adminscript.js"></script>
<script src="../js/adminajaxrequest.js"></script>

</body>
</html>
