<?php 
if (!isset($_SESSION)) {
    session_start();
}

include("../dbConnection.php");

if (isset($_SESSION['is_login'])) {
    $stuLogEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script>alert('Login to access this page');</script>";
    echo "<script>location.href='../index.php'</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Courses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #playlist li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
        }
        #playlist li:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar: Lessons -->
            <div class="col-sm-3 border-right">
                <h4 class="text-center my-3">Lessons</h4>
                <ul id="playlist" class="nav flex-column">
                    <?php
                    if (isset($_GET['course_id'])) {
                        $course_id = $_GET['course_id'];

                        // ✅ FIXED: Correct SQL syntax
                        $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                        $result = $conn->query($sql);

                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<li class="nav-item" movieurl="' . $row['lesson_link'] . '">' . $row['lesson_name'] . '</li>';
                            }
                        } else {
                            echo '<li class="nav-item text-muted">No lessons available</li>';
                        }
                    } else {
                        echo '<li class="nav-item text-danger">Invalid course selected.</li>';
                    }
                    ?>
                </ul>
            </div>

            <!-- Main video player -->
            <div class="col-sm-9 d-flex justify-content-center align-items-center flex-column">
                <video id="videoarea" class="mt-5 w-75" controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p class="text-muted mt-2">Click a lesson on the left to start watching.</p>
            </div>
        </div>
    </div>

    <script>
        // Handle lesson clicks to play video
        document.addEventListener('DOMContentLoaded', function() {
            const lessons = document.querySelectorAll('#playlist li');
            const videoPlayer = document.getElementById('videoarea');

            lessons.forEach(function(item) {
                item.addEventListener('click', function() {
                    const videoSrc = this.getAttribute('movieurl');
                    if (videoSrc) {
                        videoPlayer.src = videoSrc;
                        videoPlayer.play();
                    }
                });
            });
        });
    </script>
</body>
</html>
