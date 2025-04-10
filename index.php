<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="img/popular-1.jpg" alt="San miguel, italy" loading="lazy">
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
                    <a href="pages/searchvisualiser.html">Search Algorithms</a>
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
                  <img src="img/popular-2.jpg" alt="" loading="lazy">
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
                    <a href="pages/sortvisualiser.html">Sorting Algorithms</a>
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
                  <img src="img/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
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
                    <a href="pages/pathvisualiser.html">Path Algorithms</a>
                  </h3>

                  <p class="card-text">
                    Traversal and pathfinding algorithms that are crucial for understanding flow and connectiviity.
                  </p>

                </div>

              </div>
            </li>

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

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="img/package-1.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Object-Oriented Programming</h3>

                  <p class="card-text">
                    Dive into the core principles of OOP including classes, objects, inheritance, polymorphism, and encapsulation to build robust software.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">1 week</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">rating: 5</p>
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
                    $10
                    <span>/ access forever</span>
                  </p>

                  <button class="btn btn-secondary">Buy Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="img/packege-2.jpg" alt="Summer Holiday To The Oxolotan River" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Data Structures</h3>

                  <p class="card-text">
                    Master the fundamentals of data structures like arrays, linked lists, trees, and graphs, along with efficient algorithms for searching, sorting, and optimization.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">2 weeks</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">rating: 4</p>
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

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    $20
                    <span>/ access forever</span>
                  </p>

                  <button class="btn btn-secondary">Buy Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="img/packege-3.jpg" alt="Santorini Island's Weekend Vacation" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Databases with SQL</h3>

                  <p class="card-text">
                    Learn how to design, query, and manage databases with SQL, covering database design, normalization, and advanced management techniques.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">1 week</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">rating: 5</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">SQL</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    $10
                    <span>/ access forever</span>
                  </p>

                  <button class="btn btn-secondary">BUY Now</button>

                </div>

              </div>
            </li>

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