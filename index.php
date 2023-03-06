<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

    <!-- bootstrap -->
  </head>
  <body>
    <!-- ===== NAV ===== -->
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Servicing</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>

      <div>
        <button class="btn-login">
          <a href="./admin-panel/login.php">Login</a>
        </button>
        <button class="btn-register">
          <a href="./admin-panel/signup.php">Sign Up</a>
        </button>
      </div>
    </nav>
    <!-- ===== NAV END ===== -->
    <!-- ===== CAROUSAL ===== -->
    <div class="carousal-container">
      <div class="slider">
        <div class="slide-track">
          <div class="slide">
            <img src="./assets/images/c1.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c2.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c3.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c4.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c5.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c6.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c7.jpeg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c1.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c2.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c3.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c4.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c5.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c6.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c7.jpeg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c1.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c2.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c3.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c4.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c5.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c6.jpg" />
          </div>
          <div class="slide">
            <img src="./assets/images/c7.jpeg" />
          </div>
        </div>
      </div>
    </div>
    <!-- ===== END OF CAROUSAL ===== -->
    <!-- ===== ABOUT US SECTION ===== -->
    <section class="about-us">
      <div class="about-us-img">
        <img src="./assets/images/a1.jpg" />
      </div>

      <div class="about-us-info">
        <h1>About Us</h1>

        <div>
          <p>
            Our Software is the ideal way to manage complete garage workshop.
          </p>
          <p>
            The software has capability to generate jobcard for vehicle repair,
            <br />
            process that and generate invoice and quotation for tha vehicle
            service repairs.
          </p>
        </div>
      </div>
    </section>
    <!-- ===== ABOUT US SECTION END ===== -->

    <!-- ===== SERVICES SECTION ===== -->
    <section class="services">
      <h1>Services We Provide</h1>
      <div class="card-container">
        <div class="card">
          <img src="./assets/images/s1.jpg" />
          <h1>Lorem, ipsum.</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum,
            accusamus?
          </p>
          <a class="btn" href="./admin-panel/book-now/job-card.php">Book Now</a>
        </div>
        <div class="card">
          <img src="./assets/images/s2.jpg" />
          <h1>Lorem, ipsum.</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum,
            accusamus?
          </p>
          <a class="btn" href="./admin-panel/book-now/job-card.php">Book Now</a>
        </div>
        <div class="card">
          <img src="./assets/images/s3.jpg" />
          <h1>Lorem, ipsum.</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum,
            accusamus?
          </p>
          <a class="btn" href="./admin-panel/book-now/job-card.php">Book Now</a>
        </div>
      </div>
    </section>
    <!-- ===== SERVICES SECTION END ===== -->

    <!-- ===== MAP SECTION ===== -->
    <?php 
    //  include('./new-section/blogs/blog.html') 
    ?>
    <?php  include('map.php') ?>
    <?php  include('contact.html') ?>
    <?php  include('footer.php') ?>
    <!-- ===== MAP SECTION END ===== -->
  </body>
</html>
