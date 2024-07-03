<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!--========== BOOTSTRAP CSS ==========-->
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="style.css">
    <title>G&G</title>
  </head>
  <body>
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
            <li class="nav__item"><a href="Index.php" class="nav__link">Home</a></li>
            <li class="nav__item"><a href="aboutUs.php" class="nav__link">About</a></li>
            <li class="nav__item"><a href="services.php" class="nav__link">Services</a></li>
            <li class="nav__item"><a href="Donation.php" class="nav__link">Donation</a></li>
            <li class="nav__item"><a href="contactUs.php" class="nav__link">Contact us</a></li>
            <li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>

            <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
          </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class='bx bx-menu'></i>
        </div>
      </nav>
    </header>

    <!--========== LOGIN ==========-->
    <div class="wrapper">
      <div class="container">
        <div class="col-left">
          <div class="login-text">
            <h2>Welcome Back</h2>
            <p>Create your account.<br>It's totally free.</p>
            <a class="btn" href="userreg.php">Sign Up</a>
          </div>
        </div>
        <div class="col-right">
          <div class="login-form">
            <h2>Login</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <p>
                <label>Username or email address<span>*</span></label>
                <input type="text" name="username_email" placeholder="Username or Email" required>
              </p>
              <p>
                <label>Password<span>*</span></label>
                <input type="password" name="password" placeholder="Password" required>
              </p>
              <p>
                <input type="submit" value="Sign In" />
              </p>
              <p>
                <a href="">Forget Password?</a>
              </p>
            </form>
            <?php
            // Database credentials
            $servername = "localhost";  
            $username = "root";         
            $password = "";             
            $dbname = "give&gatherdb";     

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Process form data when form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username_email = $_POST['username_email'];
                $password = $_POST['password'];

                // Check if the input is an email or a username
                if (filter_var($username_email, FILTER_VALIDATE_EMAIL)) {
                    $sql = "SELECT * FROM usersreg WHERE email = '$email'";
                } else {
                    $sql = "SELECT * FROM usersreg WHERE username = '$username'";
                }

                $result = $conn->query($sql);

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    // Verify the password
                    if (password_verify($password, $row['password'])) {
                        echo "Login successful!";
                        // Optionally, redirect the user to another page after successful login
                        // header("Location: userDashboard.php");
                        // exit();
                        header("Location: Index.php");
                        exit();
                    } else {
                        echo "Invalid password.";
                    }
                } else {
                    echo "No account found with that username/email.";
                }
            }

            // Close connection
            $conn->close();
            ?>
          </div>
        </div>
      </div>
    </div>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
      <div class="footer__container bd-grid">
        <div class="footer__content">
          <a href="Index.php" class="footer__logo">GIVE & GATHER</a>
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

    <!--========== SWIPER JS ==========-->
    <script src="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--========== MAIN JS ==========-->
    <script src="JavaScript/javascript.js"></script>
  </body>
</html>
