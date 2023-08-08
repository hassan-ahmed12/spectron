<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/allstyle.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Poppins:wght@400;500;600&family=Bungee+Shade&display=swap" rel="stylesheet">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="assets/fonts/stylesheet.css" type="text/css" charset="utf-8" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" type="image" href="https://i.postimg.cc/hj1D6KKB/favicon.png">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
    <div class="header-main" id="myHeader">
        <div class="fl-row top-bar">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="fl-row hdr-row">
            <div class="container">
                <div class="row">
                    <div class="col col-9 col-sm-9 col-lg-3">
                        <div class="main-logo">
                            <a href="/spectron" class="menu-logo" id="menu-logo">
                                <img src="https://i.postimg.cc/054d53QQ/spectron-logo.png" alt="logo" width="200px">
                            </a>
                        </div>
                    </div>
                    <div class="col col-3 col-sm-3 col-lg-6">
                        <nav class="head-menu" id="hdr-menu">
                            <ul>
                                <li><a href="#about">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="m-nav-btn" id="m-nav-btn" onclick="MobileMenu()">
                            <img src="https://i.postimg.cc/j5kY8tST/menu.png" class="hamburger" id="hamburger">
                            <img src="https://i.postimg.cc/XJ54JCCJ/close.png" class="menu-close"  id="menu-close">
                        </div>
                    </div>
                    <div class="col col-lg-3">
                        <div class="btn-box hdr-btn">
                            <a href="" onclick="btnfun()">
                                <div class="btn-icon">
                                    <img src="https://i.postimg.cc/q7HZFm2d/shuttle-fill.png" height="16" width="16" alt="Shuttle Icon">
                                    
                                </div>
                                <div class="btn-txt">Get Started</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>

    <main>