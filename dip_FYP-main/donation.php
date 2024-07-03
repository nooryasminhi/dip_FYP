<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="style.css">

        <title>G&G Donation</title>
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
                        <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="services.php" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="Donation.php" class="nav__link">Donation</a></li>
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

        <main class="l-main">
            <!--========== DONATION SECTION ==========-->
            <div class="donate-header">
                <h1 style="color: #45a049; margin: 70px;">Donation</h1>   
            </div>

            <div class="donation-form">
                <h2>Make a Donation</h2>
                <form action="/your-donation-processing-page" method="post">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Donation Amount:</label>
                        <input type="number" id="amount" name="amount" min="1" required>
                    </div>
                        <div class="form-group">
                        <label for="category">Donation Category:</label>
                        <select id="category" name="category" required>
                            <option value="">Select a category</option>
                            <option value="education">Advancement of Education</option>
                            <option value="religious">Religious Institution</option>
                            <option value="medical">Medical Aid for Serious Diseases</option>
                        </select>
                    </div>
                    <div>
                        <img style="height: 500px;" src="image/qr.jpg" alt="vision">
                    </div>
                    <div style="margin: 20px;">
                        <label style="margin: 20px;" for="myfile">Upload your proof of payment:</label>
                        <input type="file" id="myfile" name="myfile">
                    </div>
                    <div class="form-group">
                        <button type="submit">Donate Now</button>
                    </div>

                </form>
            </div>
        </main>

        <style>
             body {
            text-align: center;
            }
            .donate-header{
                margin: 70px;
            }
            .donation-form {
                max-width: 600px;
                margin: auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            .form-group label {
                display: block;
                margin-bottom: 5px;
            }
            .form-group input[type="text"],
            .form-group input[type="email"],
            .form-group input[type="number"],
            .form-group select,
            .form-group button {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .form-group button {
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
                margin-top: 10px;
            }
            .form-group button:hover {
                background-color: #45a049;
            }
        </style>

        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="Index.html" class="footer__logo">GIVE & GATHER</a>
                    <span class="footer__description">Charity</span>
                    <!-- <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div> -->
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="services.html" class="footer__link">Projects</a></li>
                        <li><a href="services.html" class="footer__link">Mission</a></li>
                        <li><a href="services.html" class="footer__link">Vision</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="aboutUs.css" class="footer__link">About Us</a></li>
                        <li><a href="contactUs.html" class="footer__link">Contact us</a></li>
                        <li><a href="p&p.html" class="footer__link">Privacy policy</a></li>
                        <li><a href="t&c.html" class="footer__link">Terms of services</a></li>
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

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>