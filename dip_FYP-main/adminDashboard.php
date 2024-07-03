<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="index.css">

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
                        <li class="nav__item"><a href="manageUser.php" class="nav__link">Manage User</a></li>
                        <li class="nav__item"><a href="manageCharity.php" class="nav__link">Manage Charity</a></li>
                        <li class="nav__item"><a href="adminDashboard.php" class="nav__link">Dashboard</a></li>
                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-donor'></i>
                </div>
            </nav>
        </header>

        <section class="admin">
            <div class="admin-details">
                <img src="#" alt="Admin Photo">
                <p>Admin Name</p>
                <div class="admin-statistics">
                    <h3 id="charity-managed">Charity Managed<br/>30</h3>
                    <h3 id="ongoing-charity">Ongoing Charity<br/>30</h3>
                    <h3 id="donation-collected">Donation Collected<br/>30</h3>
                    <p id="button"><button class="button1" type="button">Logout</button></p>
                </div>
            </div>
        </section>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="javascript.js"></script>
    </body>
    
    <style>
        .admin-details{
            display: grid;
            margin: 50px;
        }
        .admin-details img{
            display: block;
            padding: 50px 50px 20px 50px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            margin-right: auto;
            margin-left: auto;
            border-style: solid;
        }
        .admin-details p{
            text-align: center;
            padding: 5px;
        }
        .admin-details h3{
            text-align: center;
            padding: 20px;
        }
        .admin-statistics{
            display: grid;
            gap: 70px;
            margin: 10px;
        }
        #charity-managed{
            grid-row: 1/4;
            grid-column: 1/2;
            background-color: #D9D9D9;
        }
        #ongoing-charity{
            grid-row: 1/4;
            grid-column: 2/3;
            background-color: #D9D9D9;
        }
        #donation-collected{
            grid-row: 1/4;
            grid-column: 3/4;
            background-color: #D9D9D9;
        }
        #button{
            grid-row: 4/6;
            grid-column: 2/3;
        }
    </style>

</html>