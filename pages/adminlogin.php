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
              <a href="#destination" class="navbar-link" data-nav-link>Visualisation</a>
            </li>

            <li>
              <a href="courses.html" class="navbar-link" data-nav-link>Courses</a>
            </li>

            <li>
              <a href="" class="navbar-link" data-nav-link>Payment</a>
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

        <div class="admin-form-container" style="display: flex; justify-content: center; align-items: center; min-height: 60vh;">
            <div style="background-color: #f9f9f9; padding: 30px; border-radius: 10px; width: 100%; max-width: 400px;">
                <h2 style="text-align: center; margin-bottom: 20px; color: #333;">Admin Login</h2>
                <form>
                    <div style="margin-bottom: 15px;">
                        <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Email:</label>
                        <input type="email" id="adminemail" name="adminemail" placeholder="Enter your email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="password" style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Password:</label>
                        <input type="password" id="adminpassword" name="adminpassword" placeholder="Enter your password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    </div>

                    <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">Login</button>
                </form>
            </div>
        </div>
    </article>
</main>



<!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

            <a href="#" class="logo" style="font-weight: bold; color: white; font-size: 24px;">
            UniCourse
            </a>

          <p class="footer-text">
            This course provides a fundamental understanding of data organization and efficient problem-solving techniques in computer science. It covers essential data structures such as arrays, linked lists, stacks, queues, trees, and graphs, along with their applications. 
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+880 (163) 1511 325</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info.tourly.com" class="contact-link">tahmeedferdous.netlify.app</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>H-3/4 R-7/A Kaderabad Housing Mohammadpur</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Subscribe our newsletter for more update & news !!
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2025 <a href="">UniCourse</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>

      
  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>


  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  

  <script src="../js/app.js"></script>
</body>
</html>
