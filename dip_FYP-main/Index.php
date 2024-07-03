<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                        <li class="nav__item"><a href="donation.php" class="nav__link">Donation</a></li>
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
                        <!--========== HOME ==========-->
                        <section class="home" id="home">
                            <div class="home__container bd-container bd-grid">
                                <div class="home__data">
                                    <h1 class="home__title">G I V E &<br>G A T H E R</h1>
                                    <h2 class="home__subtitle">Change is within reach when we unite and take action together.</h2>
                                    <!-- <a href="userlogin.html" class="button">Login Here!</a> -->
                                </div>
                                <img src="IMG/Charity.jpg" alt="" class="home__img">
                            </div>
                        </section>
                        
                        <!--========== ABOUT ==========-->
                        <section class="about section bd-container" id="about">
                            <div class="about__container  bd-grid">
                                <div class="about__data">
                                    <span class="section-subtitle about__initial">About us</span>
                                    <h2 class="section-title about__initial">Meet our little family with big ambition!</h2>
                                    <p class="about__description">Meet the Three Robin Hoods: Yasmin, Adam, and Afiqah. United by their passion for aiding those in need, they harness their individual talents to make a positive impact.</p>
                                    <a href="aboutUs.html" class="button">Explore history</a>
                                </div>
                                <img src="IMG/3_idiots.gif" alt="" class="about__img">
                            </div>
                        </section>
            
                        <!--========== SERVICES ==========-->
                        <section class="services section bd-container" id="services">
                            <span class="section-subtitle">Target</span>
                            <h2 class="section-title">Our Goals</h2>
            
                            <div class="services__container  bd-grid">
                                <div class="services__content">
                                   <svg height="95px" width="95px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#7AB6DE;" d="M372.671,201.935v211.151c0,50.122-64.272,90.744-116.671,90.744s-116.671-40.622-116.671-90.744 V201.935H372.671z"></path> <path style="fill:#4693BD;" d="M388.837,201.935v211.151c0,50.122-59.468,90.744-132.837,90.744 c52.398,0,94.883-40.622,94.883-90.744V201.935H388.837z"></path> <path style="fill:#94C8EF;" d="M161.117,413.086c0,50.122,42.485,90.744,94.883,90.744c-73.369,0-132.837-40.622-132.837-90.744 V201.935h37.953V413.086z"></path> <ellipse style="fill:#ADD9FF;" cx="256" cy="201.935" rx="132.837" ry="90.744"></ellipse> <path style="fill:#4693BD;" d="M316.136,210.107H195.864c-4.513,0-8.17-3.658-8.17-8.17c0-4.512,3.657-8.17,8.17-8.17h120.272 c4.513,0,8.17,3.658,8.17,8.17S320.649,210.107,316.136,210.107z"></path> <path style="fill:#94C8EF;" d="M188.798,323.149c-0.838,0-1.691-0.13-2.531-0.403c-12.201-3.971-23.782-9.008-34.421-14.972 c-3.936-2.206-5.338-7.185-3.132-11.121c2.206-3.936,7.188-5.337,11.121-3.132c9.708,5.441,20.302,10.046,31.488,13.687 c4.29,1.397,6.637,6.007,5.241,10.298C195.442,320.955,192.241,323.149,188.798,323.149z"></path> <path style="fill:#4693BD;" d="M256,333.53c-12.365,0-24.717-0.968-36.708-2.877c-4.457-0.709-7.494-4.897-6.786-9.353 c0.709-4.455,4.897-7.493,9.353-6.785c11.146,1.775,22.633,2.674,34.141,2.674c35.289,0,68.539-8.184,96.16-23.669 c3.938-2.207,8.916-0.804,11.122,3.132c2.206,3.936,0.804,8.915-3.132,11.121C330.095,324.624,294.08,333.53,256,333.53z"></path> <circle style="fill:#FFBB02;" cx="256" cy="88.729" r="80.56"></circle> <path style="fill:#FFDD77;" d="M298.3,71.798c0-12.467-10.106-22.573-22.573-22.573c-8.487,0-15.873,4.686-19.727,11.61 c-3.854-6.924-11.241-11.61-19.727-11.61c-12.467,0-22.573,10.106-22.573,22.573c0,5.11,1.699,9.823,4.562,13.606L256,135.286 l37.739-49.881C296.602,81.62,298.3,76.909,298.3,71.798z"></path> <g> <path style="fill:#1D2328;" d="M195.864,193.767c-4.513,0-8.17,3.658-8.17,8.17c0,4.512,3.657,8.17,8.17,8.17h120.272 c4.513,0,8.17-3.658,8.17-8.17c0-4.512-3.657-8.17-8.17-8.17H195.864z"></path> <path style="fill:#1D2328;" d="M191.326,307.208c-11.187-3.641-21.78-8.245-31.488-13.687c-3.934-2.205-8.915-0.805-11.121,3.132 c-2.206,3.937-0.804,8.915,3.132,11.121c10.639,5.964,22.219,11.001,34.421,14.972c0.84,0.273,1.693,0.403,2.531,0.403 c3.441,0,6.644-2.194,7.767-5.644C197.963,313.215,195.616,308.604,191.326,307.208z"></path> <path style="fill:#1D2328;" d="M352.16,293.522c-27.621,15.483-60.871,23.667-96.16,23.667c-11.508,0-22.993-0.9-34.141-2.674 c-4.457-0.709-8.644,2.329-9.353,6.785c-0.708,4.457,2.329,8.644,6.786,9.353c11.993,1.909,24.344,2.877,36.708,2.877 c38.08,0,74.095-8.906,104.15-25.756c3.936-2.206,5.338-7.185,3.132-11.121C361.077,292.718,356.098,291.315,352.16,293.522z"></path> <path style="fill:#1D2328;" d="M360.871,135.648c-3.561-2.77-8.693-2.131-11.464,1.43c-2.771,3.561-2.131,8.694,1.43,11.466 c19.236,14.967,29.83,33.929,29.83,53.392c0,45.53-55.925,82.573-124.667,82.573s-124.665-37.042-124.665-82.573 c0-19.457,10.595-38.416,29.833-53.386c3.562-2.771,4.202-7.904,1.43-11.466c-2.77-3.561-7.906-4.199-11.464-1.43 c-23.306,18.134-36.14,41.674-36.14,66.282v211.151c0,27.019,15.082,52.203,42.468,70.911C183.896,502.055,218.891,512,256,512 s72.105-9.945,98.538-28.002c27.387-18.708,42.468-43.891,42.468-70.911V201.936C397.007,177.322,384.173,153.78,360.871,135.648z M380.667,413.087c0,45.531-55.925,82.573-124.667,82.573s-124.665-37.042-124.665-82.573V248.443 c6.756,8.927,15.513,17.154,26.127,24.405c26.434,18.057,61.429,28.002,98.538,28.002s72.105-9.945,98.538-28.002 c10.615-7.251,19.371-15.479,26.127-24.405v164.644H380.667z"></path> <path style="fill:#1D2328;" d="M256,177.461c48.926,0,88.731-39.804,88.731-88.731S304.926,0,256,0s-88.731,39.804-88.731,88.731 S207.073,177.461,256,177.461z M256,16.34c39.916,0,72.39,32.474,72.39,72.39s-32.474,72.39-72.39,72.39s-72.39-32.474-72.39-72.39 S216.084,16.34,256,16.34z"></path> <path style="fill:#1D2328;" d="M249.485,140.215c1.545,2.041,3.957,3.241,6.515,3.241s4.972-1.199,6.515-3.241l37.738-49.881 c4.067-5.375,6.217-11.785,6.217-18.535c0-16.952-13.791-30.743-30.743-30.743c-7.324,0-14.278,2.614-19.727,7.175 c-5.449-4.56-12.405-7.175-19.727-7.175c-16.952,0-30.743,13.791-30.743,30.743c0,6.752,2.15,13.161,6.216,18.535L249.485,140.215z M236.273,57.396c5.219,0,10.044,2.841,12.59,7.414c1.441,2.59,4.173,4.196,7.139,4.196c2.965,0,5.697-1.606,7.139-4.196 c2.546-4.573,7.371-7.414,12.59-7.414c7.941,0,14.402,6.461,14.402,14.402c0,3.162-1.005,6.164-2.908,8.677L256,121.744 l-31.223-41.269c-1.901-2.513-2.906-5.513-2.906-8.677C221.87,63.856,228.331,57.396,236.273,57.396z"></path> </g> </g></svg>
                                    <h3 class="services__title">Target Donation</h3>
                                    <p class="services__description">RM 100,000</p>
                                </div>
            
                                <div class="services__content">
                                    <svg height="95px" width="95px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#FCD5A2;" d="M257.103,8.159c33.436,0,80.523,40.521,80.523,90.516c0,49.984-47.087,90.506-80.523,90.506 c-49.984,0-90.516-40.521-90.516-90.506C166.587,48.68,207.119,8.159,257.103,8.159z"></path> <path style="fill:#FEBB8E;" d="M259.282,8.159c49.984,0,88.337,40.521,88.337,90.516c0,49.984-38.353,90.506-88.337,90.506 c33.436,0,60.537-40.521,60.537-90.506C319.82,48.68,292.719,8.159,259.282,8.159z"></path> <path style="fill:#A0613C;" d="M257.269,238.2c-0.418-0.011-0.848-0.011-1.266-0.011c-0.418,0-0.848,0-1.266,0.011 c-53.587,1.013-108.439,66.211-108.439,146.486v38.182l109.705,64.512l109.705-64.512v-38.182 C365.708,304.411,310.855,239.213,257.269,238.2z"></path> <path style="fill:#804E30;" d="M402.49,384.686l-54.457,38.182v-38.182c0-80.275-40.568-145.473-90.842-146.486 C337.552,238.832,402.49,304.172,402.49,384.686z"></path> <path style="fill:#BF7447;" d="M109.517,384.686l54.457,38.182v-38.182c0-80.275,40.568-145.473,90.842-146.486 C174.454,238.832,109.517,304.172,109.517,384.686z"></path> <path style="fill:#FFCC3D;" d="M376.651,376.647c-52.191,0-120.647,61.498-94.502,127.183h189.004 C497.297,438.145,428.841,376.647,376.651,376.647z"></path> <path style="fill:#FFBB02;" d="M503.834,503.83h-32.681c0-70.242-42.311-127.183-94.502-127.183 C446.893,376.647,503.834,433.588,503.834,503.83z"></path> <path style="fill:#FFDD77;" d="M250.183,490.253l12.351,13.577h19.614c0-70.242,42.311-127.183,94.502-127.183 C310.995,376.647,256.959,426.395,250.183,490.253z"></path> <path style="fill:#BF7447;" d="M376.651,216.097c24.934,0,54.977,29.018,54.977,64.817c0,35.808-30.042,64.827-54.977,64.827 c-35.799,0-64.817-29.018-64.817-64.827C311.834,245.116,340.852,216.097,376.651,216.097z"></path> <path style="fill:#A0613C;" d="M376.651,216.097c35.799,0,64.817,29.018,64.817,64.817c0,35.808-29.018,64.827-64.817,64.827 c24.934,0,45.137-29.018,45.137-64.827C421.787,245.116,401.585,216.097,376.651,216.097z"></path> <path style="fill:#FF7A2F;" d="M135.35,376.647c-52.191,0-120.647,61.498-94.502,127.183h189.004 C255.997,438.145,187.542,376.647,135.35,376.647z"></path> <path style="fill:#F06B22;" d="M262.533,503.83h-32.681c0-70.242-42.311-127.183-94.502-127.183 C205.593,376.647,262.533,433.588,262.533,503.83z"></path> <path style="fill:#FF9B5F;" d="M8.167,503.83h32.681c0-70.242,42.311-127.183,94.502-127.183 C65.11,376.647,8.167,433.588,8.167,503.83z"></path> <path style="fill:#FEAB75;" d="M136.44,215.007c24.934,0,54.977,29.018,54.977,64.817c0,35.808-30.042,64.827-54.977,64.827 c-35.799,0-64.817-29.018-64.817-64.827C71.623,244.027,100.642,215.007,136.44,215.007z"></path> <path style="fill:#FF9B5F;" d="M135.35,215.007c35.799,0,64.817,29.018,64.817,64.817c0,35.808-29.018,64.827-64.817,64.827 c24.934,0,45.137-29.018,45.137-64.827C180.488,244.027,160.286,215.007,135.35,215.007z"></path> <g> <path style="fill:#1D2328;" d="M256.001,197.341c-54.406,0-98.67-44.263-98.67-98.67S201.595,0,256.001,0s98.67,44.263,98.67,98.67 S310.407,197.341,256.001,197.341z M256.001,16.34c-45.397,0-82.33,36.933-82.33,82.33S210.604,181,256.001,181 s82.33-36.933,82.33-82.33S301.398,16.34,256.001,16.34z"></path> <path style="fill:#1D2328;" d="M221.991,247.04c-3.845,0-7.273-2.729-8.017-6.646c-0.842-4.433,2.068-8.709,6.501-9.552 c23.197-4.409,47.649-4.422,70.85-0.038c4.434,0.838,7.349,5.111,6.511,9.545c-0.837,4.435-5.117,7.348-9.545,6.511 c-21.199-4.006-43.568-3.995-64.765,0.035C223.011,246.993,222.497,247.04,221.991,247.04z"></path> <path style="fill:#1D2328;" d="M256.001,150.624c-17.397,0-33.62-8.632-43.398-23.092c-2.527-3.738-1.547-8.817,2.192-11.345 c3.74-2.527,8.818-1.547,11.345,2.192c6.734,9.959,17.898,15.905,29.862,15.905c11.964,0,23.127-5.946,29.862-15.904 c2.527-3.738,7.606-4.719,11.345-2.192c3.739,2.527,4.719,7.607,2.192,11.345C289.62,141.992,273.398,150.624,256.001,150.624z"></path> <path style="fill:#1D2328;" d="M376.647,352.136c-39.569,0-71.762-32.192-71.762-71.762s32.193-71.762,71.762-71.762 s71.762,32.192,71.762,71.762S416.216,352.136,376.647,352.136z M376.647,224.953c-30.56,0-55.421,24.861-55.421,55.421 s24.861,55.421,55.421,55.421s55.421-24.861,55.421-55.421S407.207,224.953,376.647,224.953z"></path> <path style="fill:#1D2328;" d="M376.647,319.31c-13.032,0-25.184-6.465-32.507-17.295c-2.527-3.739-1.547-8.817,2.192-11.345 c3.74-2.527,8.818-1.546,11.345,2.192c4.28,6.329,11.372,10.107,18.97,10.107s14.691-3.778,18.97-10.107 c2.527-3.738,7.606-4.72,11.345-2.192c3.739,2.527,4.719,7.607,2.192,11.345C401.831,312.845,389.679,319.31,376.647,319.31z"></path> <path style="fill:#1D2328;" d="M135.354,352.136c-39.569,0-71.762-32.192-71.762-71.762s32.193-71.762,71.762-71.762 s71.762,32.192,71.762,71.762S174.923,352.136,135.354,352.136z M135.354,224.953c-30.56,0-55.421,24.861-55.421,55.421 s24.861,55.421,55.421,55.421s55.421-24.861,55.421-55.421S165.914,224.953,135.354,224.953z"></path> <path style="fill:#1D2328;" d="M135.354,319.31c-13.032,0-25.184-6.465-32.507-17.295c-2.527-3.739-1.547-8.817,2.192-11.345 c3.74-2.527,8.818-1.546,11.345,2.192c4.28,6.329,11.371,10.107,18.97,10.107s14.691-3.778,18.97-10.107 c2.527-3.738,7.606-4.72,11.345-2.192c3.739,2.527,4.719,7.607,2.192,11.345C160.538,312.845,148.386,319.31,135.354,319.31z"></path> <path style="fill:#1D2328;" d="M262.537,512c-4.513,0-8.17-3.658-8.17-8.17c0-65.624-53.39-119.013-119.013-119.013 S16.341,438.206,16.341,503.83c0,4.512-3.657,8.17-8.17,8.17s-8.17-3.658-8.17-8.17c0-74.634,60.719-135.353,135.353-135.353 s135.353,60.719,135.353,135.353C270.707,508.342,267.05,512,262.537,512z"></path> <path style="fill:#1D2328;" d="M503.83,512c-4.513,0-8.17-3.658-8.17-8.17c0-65.624-53.39-119.013-119.013-119.013 c-37.471,0-72.001,17.119-94.739,46.968c-2.735,3.588-7.859,4.283-11.45,1.548c-3.589-2.734-4.283-7.861-1.548-11.45 c25.854-33.94,65.122-53.406,107.736-53.406c74.634,0,135.353,60.719,135.353,135.353C512.001,508.342,508.344,512,503.83,512z"></path> </g> </g></svg>
                                    <h3 class="services__title">Number of Donors</h3>
                                    <p class="services__description">10000</p>
                                </div>
            
                                <div class="services__content">
                                    <svg height="95px" width="95px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#CEE8FA;" cx="255.997" cy="255.997" r="167.991"></circle> <g> <path style="fill:#2D527C;" d="M255.999,0c-7.663,0-13.877,6.213-13.877,13.877s6.214,13.877,13.877,13.877 c57.945,0,110.905,21.716,151.199,57.422l-32.782,32.781c-32.95-28.356-74.49-43.824-118.416-43.824 c-45.157,0-86.517,16.549-118.35,43.892L95.044,75.42c-0.074-0.074-0.155-0.136-0.23-0.208c-0.072-0.075-0.135-0.157-0.208-0.23 c-5.42-5.419-14.204-5.419-19.626,0C26.628,123.334,0,187.622,0,255.999c0,141.159,114.842,255.999,255.999,255.999 c68.38,0,132.668-26.628,181.02-74.981s74.98-112.64,74.98-181.018C512,114.842,397.158,0,255.999,0z M365.043,147.093 c5.415,5.423,14.2,5.427,19.624,0.011c0.402-0.402,0.766-0.828,1.109-1.264c0.029-0.029,0.061-0.053,0.09-0.082l40.958-40.957 c32.834,37.053,53.823,84.82,56.987,137.322h-15.439c-7.663,0-13.877,6.213-13.877,13.877s6.214,13.877,13.877,13.877h15.445 c-3.047,51.144-22.905,99.081-56.914,137.401l-32.929-32.929c27.344-31.832,43.892-73.192,43.892-118.35 c0-7.664-6.214-13.877-13.877-13.877s-13.877,6.213-13.877,13.877c0,84.978-69.135,154.114-154.114,154.114 s-154.114-69.135-154.114-154.114s69.135-154.114,154.114-154.114C297.201,101.887,335.926,117.942,365.043,147.093z M255.999,453.157c-7.663,0-13.877,6.213-13.877,13.877v16.777c-52.502-3.165-100.27-24.154-137.322-56.987l32.85-32.849 c31.833,27.344,73.192,43.892,118.35,43.892s86.517-16.549,118.35-43.892l32.929,32.929 c-38.319,34.009-86.257,53.866-137.402,56.912v-16.782C269.876,459.37,263.663,453.157,255.999,453.157z M28.188,269.876h46.47 c3.011,39.73,18.85,75.932,43.367,104.473l-32.85,32.849C52.341,370.146,31.353,322.38,28.188,269.876z M85.096,104.722 l32.929,32.929c-24.516,28.542-40.355,64.743-43.367,104.473H28.182C31.229,190.98,51.087,143.042,85.096,104.722z"></path> <path style="fill:#2D527C;" d="M236.351,256.54c8.744-8.053,13.728-19.341,13.728-31.217c0-23.389-19.029-42.418-42.418-42.418 l-33.512,0.004c-4.918,0-8.906,3.988-8.906,8.906v133.353c0,2.169,1.758,3.926,3.926,3.926h14.55c2.169,0,3.926-1.758,3.926-3.926 v-57.423h20.039l0.167-0.003c10.933,0.101,19.828,9.079,19.828,20.016v37.411c0,2.169,1.758,3.926,3.926,3.926h14.548 c2.169,0,3.926-1.758,3.926-3.926v-37.411C250.081,275.88,245.096,264.593,236.351,256.54z M225.39,234.912 c-3.132,6.446-9.8,10.428-16.966,10.428h-20.78v-40.029h20.035l0.183-0.003C221.882,205.444,232.546,220.184,225.39,234.912z"></path> <path style="fill:#2D527C;" d="M341.205,183.22h-11.537c-2.14,0-4.112,1.243-5.022,3.165l-21.111,44.541L282.81,186.42 c-0.903-1.944-2.881-3.2-5.037-3.2h-11.885c-3.061,0-5.551,2.474-5.551,5.515v134.497c0,3.04,2.489,5.515,5.551,5.515h10.234 c3.061,0,5.552-2.474,5.552-5.515v-88.68l14.4,30.645c0.649,1.384,2.04,2.266,3.568,2.266h7.574c1.528,0,2.918-0.883,3.568-2.266 l14.637-31.159v89.194c0,3.04,2.489,5.515,5.551,5.515h10.235c3.061,0,5.552-2.474,5.552-5.515V188.735 C346.757,185.695,344.266,183.22,341.205,183.22z"></path> </g> </g></svg>
                                    <h3 class="services__title">Donation Collected</h3>
                                    <p class="services__description">RM 10000</p>
                                </div>
                            </div>
                        </section>
            
                        <!--========== DONOR ==========-->
                        <section class="donor section bd-container" id="donors">
                            <span class="section-subtitle">Donors</span>
                            <h2 class="section-title">A Special Thank You</h2>
            
                            <div class="donor__container bd-grid">
                                <div class="donor__content">
                                    <img src="" alt="" class="donor__img">
                                    <h3 class="donor__name">Individuals</h3>
                                    <span class="donor__detail">Donation amount</span>
                                    <span class="donor__preci">RM 2500</span>
                                    
                                </div>
            
                                <div class="donor__content">
                                    <img src="" alt="" class="donor__img">
                                    <h3 class="donor__name">Companies</h3>
                                    <span class="donor__detail">Donation amount</span>
                                    <span class="donor__preci">RM 5000</span>
                                </div>
                                
                                <div class="donor__content">
                                    <img src="" alt="" class="donor__img">
                                    <h3 class="donor__name">Others</h3>
                                    <span class="donor__detail">Donation amount</span>
                                    <span class="donor__preci">RM 2500</span>
                                
                                </div>
                            </div>
                        </section>
                       
                        <!--========== CONTACT US ==========-->
                        <section class="contact section bd-container" id="contact">
                            <div class="contact__container bd-grid">
                                <div class="contact__data">
                                    <span class="section-subtitle contact__initial">Let's talk</span>
                                    <h2 class="section-title contact__initial">Contact us</h2>
                                    <p class="contact__description">We are always available to talk and 
                                        answer any of your enquiries. </p>
                                </div>
            
                                <div class="contact__button">
                                    <a href="contactUs.php" class="button">Contact us now</a>
                                </div>
                            </div>
                        </section>

        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="Index.php" class="footer__logo">GIVE & GATHER</a>
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
                        <li><a href="services.php" class="footer__link">Projects</a></li>
                        <li><a href="services.php" class="footer__link">Mission</a></li>
                        <li><a href="services.php" class="footer__link">Vision</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="aboutUs.css" class="footer__link">About Us</a></li>
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

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="javascript.js"></script>
    </body>
</html>