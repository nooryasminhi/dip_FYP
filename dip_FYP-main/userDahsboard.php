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
                        <li class="nav__item"><a href="#Donation.php" class="nav__link">Donation</a></li>
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

        <div class="content">
            <div class="user">
                <div class="user-details">
                    <img src="#" alt="User Image">
                    <div class="user-details-item">
                        <p class="user-name">User Name</p>
                        <p class="user-email">User E-mail</p>
                        <p class="user-phone">User Phone</p>
                    </div>
                </div>
                <div class="user-statistic">
                    <div class="user-statistic-details">
                        <p style="text-align: center;">Donation Statistic</p>
                    </div>
                </div>
            </div>
        </div>

    <style>
        .user{
            display: grid;
            margin: 100px 50px 50px 50px;
            gap: 20px;
            grid-template-columns: max-content;
        }

        .user-details{
            display: grid;
            padding: 80px;
            margin: 30px;
            border-radius: 10px;
            border-style: solid;
            grid-row: 1/6;
            grid-column: 1/4;
        }

        .user-details img{
            width: 300px;
            height: 300px;
            border-radius: 100%;
            border-style: solid;
        }

        .user-details-item{
            display: grid;
            grid-column: 2/6;
        }

        .user-name{
            border-style: solid;
            grid-row: 1/2;
        }

        .user-email{
            border-style: solid;
            grid-row: 2/3;
        }

        .user-phone{
            border-style: solid;
            grid-row: 3/4;
        }
        .user-statistic {
            display: grid;
            grid-row: 1/6;
            grid-column: 4/6;
        }
        .user-statistic-details{
            border-radius: 10px;
            border-style: solid;
            grid-row: 1/4;
            grid-column: 1/10;
        }
    </style>
 
           
 

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