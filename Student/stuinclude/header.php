<?php 
include_once('../dbConnection.php');
if(!isset($_SESSION)) { 
    session_start(); 
}
if(isset($_SESSION['is_login'])) {
    $stuLogEmail = $_SESSION['stuLogEmail'];
}

if(isset($stuLogEmail)){
    $sql = "SELECT stu_img FROM student WHERE stu_email = '".$stuLogEmail."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Sidebar</title>
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Sidebar container */
    .sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background: #343a40;
      color: #fff;
      padding: 20px;
      transition: all 0.3s;
    }
    /* Logo and Title */
    .sidebar .brand {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
    }
    .sidebar .brand i {
      font-size: 2rem;
      margin-right: 10px;
      color: #ffc107;
    }
    .sidebar .brand h2 {
      font-size: 1.5rem;
      margin: 0;
    }
    /* Profile Section */
    .sidebar .profile {
      text-align: center;
      margin-bottom: 30px;
    }
    .sidebar .profile img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 2px solid #ffc107;
    }
    .sidebar .profile p {
      margin-top: 10px;
      font-size: 0.9rem;
    }
    /* Navigation Links */
    .sidebar ul.nav {
      list-style: none;
      padding: 0;
    }
    .sidebar ul.nav li {
      margin-bottom: 15px;
    }
    .sidebar ul.nav li a {
      text-decoration: none;
      color: #ddd;
      display: flex;
      align-items: center;
      padding: 10px 15px;
      border-radius: 5px;
      transition: background 0.3s;
    }
    .sidebar ul.nav li a i {
      font-size: 1.2rem;
      margin-right: 10px;
    }
    .sidebar ul.nav li a:hover {
      background: #495057;
      color: #fff;
    }
    /* Current indicator style */
    .sidebar ul.nav li a span {
      font-size: 0.8rem;
      margin-left: 5px;
      color: #ffc107;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <!-- Logo & Title -->
    <div class="brand">
      <i class='bx bxs-graduation'></i>
      <h2>E-learning</h2>
    </div>
    
    <!-- Profile Section -->
    <div class="profile">
      <img src="<?php echo $stu_img; ?>" alt="Student Profile">
      <p><?php echo $stuLogEmail; ?></p>
    </div>
    
    <!-- Navigation Links -->
    <ul class="nav">
      <!-- Profile Link with (current) indicator -->
      <li>
        <a href="profile.php">
          <i class='bx bx-user'></i>
          Profile <span>(current)</span>
        </a>
      </li>
      <!-- My Courses Link -->
      <li>
        <a href="courses.php">
          <i class='bx bx-book'></i>
          My Courses
        </a>
      </li>
      <!-- Feedback Link -->
      <li>
        <a href="feedback.php">
          <i class='bx bx-message-square-edit'></i>
          Feedback
        </a>
      </li>
      <!-- Change Password Link -->
      <li>
        <a href="change_password.php">
          <i class='bx bx-lock'></i>
          Change Password
        </a>
      </li>
      <!-- Logout Link -->
      <li>
        <a href="logout.php">
          <i class='bx bx-log-out'></i>
          Logout
        </a>
      </li>
    </ul>
  </div>
  
  <!-- Optional: Content Area -->
  <div style="margin-left: 270px; padding: 20px;">
    <h1>Welcome to your dashboard</h1>
    <p>This is your main content area.</p>
  </div>
  
  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoPSd3ZH8oMBYd2Fv6j2lF8cqUgiGnyxHr4WM8WJb3g5vZ" crossorigin="anonymous"></script>
</body>
</html>
