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
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <h2 class="h2 section-title" style="margin-top: -50px; margin-bottom: 50px;">Checkout Our Courses</h2>


          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="../img/package-1.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
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

                  <a href="coursedetails.php" class="btn btn-secondary">Buy Now</a>


                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="../img/packege-2.jpg" alt="Summer Holiday To The Oxolotan River" loading="lazy">
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
                  <img src="../img/packege-3.jpg" alt="Santorini Island's Weekend Vacation" loading="lazy">
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

        </div>
      </section>

  <?php
  include("footer.php");
  ?>
</body>
</html>