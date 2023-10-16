<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stadium Ticket Booking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar" id="navbar" style="height: 90px; border-bottom: 6px solid orangered;">
        <div class="navbar1">
            <div class="nav-center">
                <div class="nav-header">
                    <div class="logo"><span class="first-letter">O</span>NLINE <span class="first-letter">S</span>TADIUM <span class="first-letter">T</span>ICKETS
                    </div>
                    <button class="bars" id="nav-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="active">
                            <a href="index.php#home">Home</a>
                        </li>
                        <li>
                            <a href="index.php#about">About</a>
                        </li>
                        <li>
                            <a href="index.php#contact">Contact Us</a>
                        </li>
                        <li>
                            <a href="admin/index.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <aside class="sidebar" id="sidebar">
    </nav>
    <div>
        <button id="close-btn" class="close-btn">
            <i class="fa fa-times"></i>
        </button>
        <ul class="sidebar-links">
            <li>
                <a href="index.php#home">Home</a>
            </li>
            <li>
                <a href="index.php#about">About</a>
            </li>
            <li>
                <a href="index.php#contact">Contact Us</a>
            </li>
            <li>
                <a href="admin/index.php">Admin Login</a>
            </li>
        </ul>
        <p class="social-icons">
            <a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
            <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in"><i class="fa fa-linkedin"></i></a>
        </p>
    </div>
    </aside>

    <section id="home">
        <div class="header">
            <div class="header-content">
                <div class="header-title">
                    <h1>Welcome to <span style="color: orangered;"><b>INEN</b></span> Online Ticketing</h1>
                </div>
                <a href="reserved.php"><button class="btn">RESERVE NOW</button></a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="aboutus">
            <h1>About Us</h1>
            <p><b style="color:orangered;">INEN Online Ticketing</b> is a Stadium ticket booking company. We build your trust on us and gives fast service.</p>
            <p>It is affiliated to the Board of Control for Football in Rwanda and following Football Stadiums:</p>
            <ul>
                <li><b><i class="fa fa-angle-double-right"></i></b> HUYE International Stadium, Huye</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> KIGALI PELE Stadium, Kigali-Nyamirambo</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> AMAHORO International Stadium, Kigali-Remera</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> BUGESERA Stadium, Bugesera</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> UMUGANDA Stadium, Rubavu</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> UBWOROHERANE Stadium, Musanze</li>
                <li><b><i class="fa fa-angle-double-right"></i></b> NGOMA Stadium, Ngoma</li>
            </ul>
        </div>
    </section>

    <section id="contact">
        <div class="contactus">
            <h1>Contact Us</h1>
            <h2><b style="color:red;">INEN</b> Online Ticketing</h2>
            <p><b>Contact:</b> +250 786 788 071</p>
            <p><b>Email: </b>inen@gmail.com</p>
            <p class="social-links">
                <a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/tanmay_v_thole"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in"><i class="fa fa-linkedin"></i></a>
            </p>
        </div>

    </section>

    <!--Footer-->
    <footer class="footer" id="footer">
        <div class="footer-text">
            <div class="cr-section">&copy; 2020 by <b>INEN</b></div>
            <div class="developer-section">
                <b>Designed & Developed by:</b>
                <br>
                1. Iradukunda<br>&nbsp;&nbsp;&nbsp; Mugisha<br>&nbsp;&nbsp;&nbsp; Enock
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>

</html>