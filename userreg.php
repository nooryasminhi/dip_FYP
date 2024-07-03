<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G&G</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
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
                <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                <li class="nav__item"><a href="services.php" class="nav__link">Services</a></li>
                <li class="nav__item"><a href="Donation.php" class="nav__link">Donation</a></li>
                <li class="nav__item"><a href="#contactUs.php" class="nav__link">Contact us</a></li>
                <li class="nav__item"><a href="userlogin.php" class="nav__link">Login</a></li>
                <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-donor'></i>
        </div>
    </nav>
</header>

<!--===== SIGN UP FORM =====-->
<div class="signupFrm">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
        <h1 class="title">Sign up</h1>

        <div class="inputContainer">
            <input type="email" class="input" placeholder="Enter your email" name="email" required>
            <label for="" class="label">Email</label>
        </div>

        <div class="inputContainer">
            <input type="text" class="input" placeholder="Enter your username" name="username" required>
            <label for="" class="label">Username</label>
        </div>

        <div class="inputContainer">
            <input type="password" class="input" placeholder="Enter your password" name="password" required>
            <label for="" class="label">Password</label>
        </div>

        <div class="inputContainer">
            <input type="password" class="input" placeholder="Confirm your password" name="confirm_password" required>
            <label for="" class="label">Confirm Password</label>
        </div>

        <button type="submit" class="button">Sign Up</button>
    </form>
</div>

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
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You should perform proper validation and sanitization here

    // Insert user data into database
    $sql = "INSERT INTO usersreg (email, username, password) VALUES ('$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Optionally, redirect the user to the login page after successful registration
        header("Location: userlogin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    } else {
        echo "Passwords do not match.";
    }



// Close connection
$conn->close();
?>

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
                <li><a href="#event" class="footer__link">Event</a></li>
                <li><a href="#contact" class="contactUs.php">Contact us</a></li>
                <li><a href="#about" class="privacyPolicy.php">Privacy policy</a></li>
                <li><a href="#about" class="TermService.php">Terms of services</a></li>
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
<script src="JavaScript/javascript.js"></script>
</body>
</html>
