<?php 
include("../dbConnection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniShort</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="#" class="logo">
          UNISHORT
        </a>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="https://www.facebook.com/profile.php?id=100085270215151" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://github.com/Tahmeed-Ferdous" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://linkedin.com/in/tahmeed-bus" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <ul class="navbar-list">

            <li>
              <a href="../index.php" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="visualisation.php" class="navbar-link" data-nav-link>Visualisation</a>
            </li>

            <li>
              <a href="courses.php" class="navbar-link" data-nav-link>Courses</a>
            </li>

            <li>
              <a href="payment.php" class="navbar-link" data-nav-link>Payment</a>
            </li>

            <li>
              <a href="index.html" class="navbar-link" data-nav-link>Feedback</a>
            </li>

            <li>
              <a href="index.html" class="navbar-link" data-nav-link>contact us</a>
            </li>

          </ul>

        </nav>

        <button class="btn btn-primary">Login</button>

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="min-height: 200px;">
        <!-- Background Video -->
        <video class="hero-video" autoplay muted loop playsinline>
          <source src="../img/0215.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      <br>

        <div class="container">
          <p style="color: rgb(213, 213, 213);">Scroll Down</p>
          <a href="#package" style="color: rgb(213, 213, 213);">
            <i class="fas fa-arrow-down"></i>
          </a>
        </div>
      </section>
    





      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <h2 class="h2 section-title" style="margin-top: -50px; margin-bottom: 50px;">Checkout Our Courses</h2>


          <ul class="package-list">
            <?php 
            $sql = "SELECT * FROM course LIMIT 3";
            $result = $conn->query($sql);
            if($result->num_rows>0){
              while($row=$result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '
              <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="'.str_replace('..', '.', $row['course_img']).'" alt="Course Image" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">'.$row['course_name'].'</h3>

                  <p class="card-text">
                    '.$row['course_desc'].'
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">'.$row['course_duration'].'</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">'.$row['course_author'].'</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Colab</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                    <p class="price">
                    $'.$row['course_price'].'
                    <span style="text-decoration: line-through; color: white; font-size: medium;">'.$row['course_original_price'].'</span>
                    </p>

                  <a class="btn btn-secondary" href="pages/coursedetails.php?course_id='.$course_id.'" >Enroll</a>

                </div>

              </div>
            </li>
                ';
              }
            }

            ?>

          </ul>

        </div>
      </section>

  <?php
  include("footer.php");
  ?>
</body>
</html>