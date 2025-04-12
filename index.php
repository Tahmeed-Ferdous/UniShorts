<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('./dbConnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniShort</title>
  <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/css/ionicons.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="#" class="logo">
          UNISHORTS
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
              <a href="#home" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="pages/visualisation.php" class="navbar-link" data-nav-link>Visualisation</a>
            </li>

            <li>
              <a href="pages/courses.php" class="navbar-link" data-nav-link>Courses</a>
            </li>

            <li>
              <a href="pages/payment.php" class="navbar-link" data-nav-link>Payment</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>Feedback</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
            </li>

            </nav>
            <!-- Login Modal  -->
            <?php
            if (file_exists("pages/login.php") && filesize("pages/login.php") > 0) {
                include("pages/login.php");
            } elseif (file_exists("./login.php") && filesize("./login.php") > 0) {
                include("./login.php");
            } else {
                echo "<p>Login module is not available.</p>";
            }
            ?>
            <!-- Login Modal  -->


          </div>
    </div>

  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <!-- Background Video -->
        <video class="hero-video" autoplay muted loop playsinline>
          <source src="img/0215.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      
        <div class="container">
          <h2 class="h1 hero-title">Explore your algorithm</h2>
      
          <p class="hero-text">
            Master Data Structures and Algorithms: Elevate Your Coding Skills with Our Expert-Led Courses.
            <br> Unlock the power of efficient problem-solving with our comprehensive Data Structures and Algorithms courses.
          </p>
      
            <div class="btn-group">
            <!-- Sign up modal -->
            <?php
            if (isset($_SESSION['is_login'])) {
              echo '<button class="btn btn-primary"><a href="student/studentProfile.php" style="color: aliceblue;">Profile</a></button>';
            } else {
              include("pages/signup.php");
            }
            ?>
            <!-- Sign up modal -->


            <button class="btn btn-secondary"><a href="pages/courses.php" style="color: aliceblue;">Courses</a></button>
          </div>
        </div>
      </section>
      
          



      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="visualisations">
        <div class="container">

          <p class="section-subtitle">Uncover the secrets</p>

          <h2 class="h2 section-title">Popular Visualisation tools</h2>

          <p class="section-text">
            Atmost 80% algorithm visualisation tools that are needed by the students to study algorithms are the search, sort and find algorithm
          </p>

            <ul class="popular-list" style="display: flex; flex-wrap: wrap; gap: 20px;">

            <?php 
            $sql = "SELECT stu_name, stu_occ, stu_img, f_content FROM student JOIN feedback ON student.stu_id = feedback.stu_id LIMIT 3";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
              $stu_img = $row['stu_img'];
              $n_img = str_replace('..', '.', $stu_img);
            ?>

            <li style="flex: 1 1 calc(33.333% - 20px); box-sizing: border-box;">

              <div class="popular-card">

              <figure class="card-img">
                <img src="<?php echo $n_img ?>" alt="" loading="lazy">
              </figure>

              <div class="card-content">

                <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                </div>

                <p class="card-subtitle">
                <a href=""><?php echo $row['stu_name'] ?></a>
                </p>

                <h3 class="h3 card-title">
                <a href="pages/searchvisualiser.html"><?php echo $row['stu_occ']; ?></a>
                </h3>

                <p class="card-text">
                <?php echo $row['f_content']; ?>
                </p>

              </div>

              </div>

            </li>

            <?php }
            } ?>

            </ul>

          <button class="btn btn-primary"><a href="pages/visualisation.php" style="color: aliceblue;">More Tools</a></button>

        </div>
      </section>





      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="courses">
        <div class="container">

          <p class="section-subtitle">Popular Courses</p>

          <h2 class="h2 section-title">Checkout Our Courses</h2>

          <p class="section-text">
            It covers essential data structures such as arrays, linked lists, stacks, queues, trees, and graphs, along with their applications. Additionally, it explores algorithmic paradigms
          </p>

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

          <button class="btn btn-primary"><a style="color: aliceblue;" href="pages/courses.php">View All Courses</a></button>

        </div>
      </section>





      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Feedback</p>

          <h2 class="h2 section-title">User's feedback</h2>

          <p class="section-text">
            The thoughtful comments arround the globe with positive review and appreciation for the courses and features 
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/gallery-1.png" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/gallery-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/gallery-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/gallery-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/gallery-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">UniCourse</p>

            <h2 class="h2 section-title">Ready To Take The First Step?</h2>

            <p class="section-text">
              An all in one platform for your computer science study with first class videos, notes, tools and many more.
            </p>
          </div>

          <button class="btn btn-secondary">Contact Us !</button>

        </div>
      </section>

    </article>
  </main>

  <?php
  include("pages/footer.php");
  ?>
</body>
</html>