<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniCourse</title>
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
          UNICOURSE
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
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <h2 class="h2 section-title" style="margin-bottom: 50px; margin-top: -50px;">Popular Visualisation tools</h2>


          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="../img/popular-1.jpg" alt="San miguel, italy" loading="lazy">
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
                    <a href="#">AlgoExpert</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="searchvisualiser.html">Search Algorithms</a>
                  </h3>

                  <p class="card-text">
                    Visualisations like linear, binary, ternary are covered step by step iteration.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="../img/popular-2.jpg" alt="" loading="lazy">
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
                    <a href="#">AlTcher</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="sortvisualiser.html">Sorting Algorithms</a>
                  </h3>

                  <p class="card-text">
                    Algorithms like bubble, insertion, merge quick and many more are covered in this visualisation
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="../img/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
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
                    <a href="#">TahmeedAlgo</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="searchvisualiser.html">Path Algorithms</a>
                  </h3>

                  <p class="card-text">
                    Traversal and pathfinding algorithms that are crucial for understanding flow and connectiviity.
                  </p>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

  <?php
  include("footer.php");
  ?>
</body>
</html>