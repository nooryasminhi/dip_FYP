<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="style.css">

        <title>G&G</title>
    </head>
    <body>

    <?php include 'database.php';

$sql = "SELECT title, description, image_url FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<img src='images/" . $row['image'] . "' class='card-img-top' alt='" . $row['title'] . "'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
        echo "<p class='card-text'>" . $row['description'] . "</p>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>


        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="Index.php" class="nav__logo">GIVE & GATHER</a>

                <div class="nav__donor" id="nav-donor">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="services.html" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="Donation.html" class="nav__link">Donation</a></li>
                        <li class="nav__item"><a href="contactUs.php" class="nav__link">Contact us</a></li>

                        <li class="nav__item"><a href="userDahsboard.php" class="nav__link"><i class='bx bx-user nav__icon' id="user-icon"></a></i></li>
                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-donor'></i>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
          <h1 style="padding: 50px;">Services We Offer</h1>
      </div>
      <!-- Carousel container for "Servcies We Offer" -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="image/school.png" class="d-block w-100" alt="School">
                  <div class="carousel-caption d-none d-md-block">
                      <h5>Advancement of Education</h5>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="image/surau1.png" class="d-block w-100" alt="Masjid">
                  <div class="carousel-caption d-none d-md-block">
                      <h5>Religious Institution</h5>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="image/healthcare1.png" class="d-block w-100" alt="Patients">
                  <div class="carousel-caption d-none d-md-block">
                      <h5>Medical Aid for Serious Diseases
                      </h5>
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>

      <section class="ongoing-projects">
          <h2 style="text-align: center; padding: 50px;">Some of Our Projects</h2>
          <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <img src="image/Project01.png" class="card-img-top" alt="Project 1">
                      <div class="card-body">
                          <p class="card-text">Little Scholars Society</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img src="image/Proj2.png" class="card-img-top" alt="Project 2">
                      <div class="card-body">
                          <p class="card-text">Youth Learning Alliance</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4" class="w3-center w3-animate-left">
                  <div class="card">
                      <img src="image/Proj3.png" class="card-img-top" alt="Project 3">
                      <div class="card-body">
                          <p class="card-text">Bright Future Foundation</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      </div>

      <h2 style="text-align: center; margin: 50px; padding: 50px;">What we thrive for?</h2>

      <section class="community">
          <div class="commProj">
              <div class="commProj1">
                  <h2>Our Mission!</h2>
                  <p>Our charity community is dedicated to providing quality education and resources to underprivileged children around the world, empowering them to break the cycle of poverty and build a brighter future for themselves and their communities</p>
                  <img src="image/mission.png" alt="mission">        
              </div>    
              <div class="commProj2">
                  <div class="project-description"></div>
                  <h2>Our Vision!</h2>
                  <p>Our charity community is dedicated to providing quality education and resources to underprivileged children around the world, empowering them to break the cycle of poverty and build a brighter future for themselves and their communities</p>
                  <img src="image/vision.png" alt="vision">
              </div>    
          </div>
      </section>

      <!-- Internal CSS-->
      <style>
          .container-fluid{
              margin: 40px;
          }
          .container-fluid h1 {
              text-align: center;
          }
          /* Carousel for "Servoces We Offer" */
          .carousel-item img {
              max-width: 80%;
              height: 60%;
              margin: auto; 
              border-radius: 10px;
          }
          .ongoing-projects h2{
              margin: 40px;
          }
          /* Card showing some of our projects */
          .card{
              background-color: #649765;
              width: 50%;
              height: auto;
              margin: auto;
              opacity: 0;
              transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
          }
          .card.visible{
              animation: fadeInFromTop 2s ease-in-out;
              opacity: 1;
          }
          .card p{
              white-space: nowrap;
          }
          .card img{
              width: 500px;
              height: 150px;
          }
          /* commProj is for "What we thrive for?" */
          .commProj{
              border-radius: 5px;
          }
          .commProj1{
              display: grid;
              margin: 100px;
              background-color: #649765;
              border-radius: 5px;
              grid-template-rows: auto;
              animation: scrollReveal ease-in-out both;
              animation-timeline: view();
              animation-range: entry 50% cover 50%;
          }
          .commProj1 img{
              grid-row: 3/4;
              grid-column: 3/3;
              border-radius: 5px;
              margin: 20px -20px;
          }
          .commProj1 h2{
              grid-row: 1;
              grid-column: 1/4;
              display: block;
              text-align: center;
              margin: 20px;
          }
          .commProj1 p{
              grid-row: 3/4;
              grid-column: 1;
              position:relative;
              text-align: justify;
              margin: 20px;
              padding-right: 20px;
          }
          .commProj2{
              display: grid;
              margin: 100px;
              background-color: #649765;
              border-radius: 5px;
              grid-template-rows: auto;
              animation: scrollReveal ease-in-out both;
              animation-timeline: view();
              animation-range: entry 50% cover 50%;
          }
          .commProj2 img{
              grid-row: 3/4;
              grid-column: 3/3;
              border-radius: 5px;
              margin: 20px -20px;
          }           
          .commProj2 h2{
              grid-row: 1;
              grid-column: 1/4;
              display: block;
              text-align: center;
              margin: 20px;
          } 
          .commProj2 p{
              grid-row: 3/4;
              grid-column: 1;
              position:relative;
              text-align: justify;
              margin: 20px;
              padding-right: 20px;
          }  
          @keyframes scrollReveal{
              from{
                  opacity: 0;
                  transform: translateY(100px);
              }
              to{
                  opacity: 1;
                  transform: translateY(0);
              }
          }
          @keyframes fadeInFromTop {
              0% {
                  opacity: 0;
                  transform: translateY(-20px);
              }
              100% {
                  opacity: 1;
                  transform: translateY(0);
              }
              }
      </style>
      </main>
      <!--========== FOOTER ==========-->
      <footer class="footer section bd-container">
                  <div class="footer__container bd-grid">
                      <div class="footer__content">
                          <a href="#" class="footer__logo">GIVE & GATHER</a>
                          <span class="footer__description">Charity</span>
                          <div>
                              <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                              <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                              <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                          </div>
                      </div>

                      <div class="footer__content">
                          <h3 class="footer__title">Services</h3>
                          <ul>
                              <li><a href="#" class="footer__link">Projects</a></li>
                              <li><a href="#" class="footer__link">Ongoing Project</a></li>
                              <li><a href="#" class="footer__link">Charity cases</a></li>
                              <li><a href="#" class="footer__link">Statistics</a></li>
                          </ul>
                      </div>

                      <div class="footer__content">
                          <h3 class="footer__title">Information</h3>
                          <ul>
                              <li><a href="#" class="footer__link">Event</a></li>
                              <li><a href="contactUs.php" class="footer__link">Contact us</a></li>
                              <li><a href="privacyPolicy.php" class="footer__link">Privacy policy</a></li>
                              <li><a href="TermService.php" class="footer__link">Terms of services</a></li>
                          </ul>
                      </div>

                      <div class="footer__content">
                          <h3 class="footer__title">Address</h3>
                          <ul>
                              <li>MultiMedia University</li>
                              <li>Cyberjaya, Selangor</li>
                              <li>+601-116622710</li>
                              <li>1201201826@student.mmu.edu.my</li>
                          </ul>
                      </div>
                  </div>

                  <p class="footer__copy">&#169; 2023 4q!d$. All right reserved</p>
      </footer>
      <!-- Internal JS -->
      <script>
          // Animation for card
          document.addEventListener('DOMContentLoaded', function() {
              const cards = document.querySelectorAll('.card');
          
              function checkVisibility() {
                  cards.forEach(card => {
                      const rect = card.getBoundingClientRect();
                      const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
          
                      if (rect.top <= windowHeight) {
                          card.classList.add('visible');
                      }
                  });
              }
          
              window.addEventListener('scroll', checkVisibility);
              checkVisibility(); // Initial check in case the element is already in view
          });
          </script>
        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">GIVE & GATHER</a>
                    <span class="footer__description">Charity</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Projects</a></li>
                        <li><a href="#" class="footer__link">Ongoing Project</a></li>
                        <li><a href="#" class="footer__link">Charity cases</a></li>
                        <li><a href="#" class="footer__link">Statistics</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Event</a></li>
                        <li><a href="#" class="footer__link">Contact us</a></li>
                        <li><a href="#" class="footer__link">Privacy policy</a></li>
                        <li><a href="#" class="footer__link">Terms of services</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Address</h3>
                    <ul>
                        <li>MultiMedia University</li>
                        <li>Cyberjaya, Selangor</li>
                        <li>+601-116622710</li>
                        <li>1201201826@student.mmu.edu.my</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2023 4q!d$. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="javascript.js"></script>
    </body>
</html>
