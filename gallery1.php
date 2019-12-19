<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="img/flaticon.png" type="image/x-icon" />
    <title>Gallery</title>
    <!--=== Bootstrap CSS ===-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--=== Animate CSS ===-->
    <link href="css/plugins/animate.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="img/preloader.gif" alt="Voyager">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

<?php include('includes/header.php');?>

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i>Ngong Rd, Nairobi, Kenya
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +254 020 666 699
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="home.html" class="logo">
                            <img src="img/logo.png" alt="Voyager">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="home.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li class="active"><a href="gallery.html">Gallery</a>
                                    <ul>

                                        <li><a href="suvgallery.html">SUV</a></li>
                                        <li><a href="sedangallery.html">Sedan</a></li>
                                        <li><a href="vangallery.html">Minivan</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">More</a>
                                    <ul>
                                        <li><a href="#">Articles</a></li>
                                        <li><a href="#">Help?</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Cars</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p id="welcome-title">WELCOME. Feel free to browse over our vast collection of vehicles until you find the one that makes your heart 'Rev'.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Page mapping starts here ==-->
    <div class="page-pagi">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="gallery.html">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="gallery2.html">Next</a></li>
            </ul>
        </nav>
    </div>
    <!--== Page mapping ends here ==-->
    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">

                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="x1">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/bmw-x1.jpg" alt="BMWx1">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">BMW X1</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>RWD</li>
                                            <li>Petrol</li>
                                            <li>Auto</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="x3">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/bmw-x3.png" alt="BMWx3">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">BMW X3</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>RWD</li>
                                            <li>Petrol</li>
                                            <li>Auto</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="x4">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/bmw-x4.jpg" alt="BMWx4">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">BMW X4</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>RWD</li>
                                            <li>Petrol</li>
                                            <li>Auto-Manual</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="x5">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/bmw-x5.jpg" alt="BMWx5">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">BMW X5</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>AWD</li>
                                            <li>Petrol</li>
                                            <li>Auto</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="x6">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/bmw-x6.jpg" alt="BMWx6">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">BMW X6</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>AWD</li>
                                            <li>Petrol</li>
                                            <li>Auto</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="city">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/honda-city.jpg" alt="Hondacity">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">HONDA CITY</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>AWD</li>
                                            <li>Petrol</li>
                                            <li>Auto-Manual</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="civic">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/honda-civic.jpg" alt="Hondacivic">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">HONDA CIVIC</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>AWD</li>
                                            <li>Petrol</li>
                                            <li>Manual</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="crv">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/honda-crv.png" alt="Hondacrv">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">HONDA CRV(2018)</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>AWD</li>
                                            <li>Petrol</li>
                                            <li>Auto</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="cx3">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/honda-cx3.jpg" alt="Hondacx3">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">HONDA CX3</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>AWD</li>
                                            <li>Diesel</li>
                                            <li>Manual</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
                            <!-- Single Car Start -->
                            <div class="col-lg-6 col-md-6" id="cx5">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/honda-cx5.jpg" alt="Hondacx5">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">HONDA CX5</a></h2>
                                        <h5>3500 k/sh Rent /per a day</h5>
                                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
                                        <ul class="car-info-list">
                                            <li>AWD</li>
                                            <li>Petrol</li>
                                            <li>Manual</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <a href="#" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->

                            <!-- Page Pagination Start -->
                            <div class="page-pagi">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="gallery.html">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="gallery.html">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="gallery1.html">2</a></li>
                                        <li class="page-item"><a class="page-link" href="gallery2.html">3</a></li>
                                        <li class="page-item"><a class="page-link" href="gallery3.html">4</a></li>
                                        <li class="page-item"><a class="page-link" href="gallery4.html">5</a></li>
                                        <li class="page-item"><a class="page-link" href="gallery5.html">6</a></li>
                                        <li class="page-item"><a class="page-link" href="gallery2.html">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Page Pagination End -->
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="img/logo.png" alt="Voyager">
                                <p>Voyager Car Rental is a new company that has seen that the buying of cars has become too expensive and therefore is trying to povide a cheaper alternative of renting vehicles at affordable prices so that people can drive
                                    their own cars and forget about saving up so much money to buy their own vehicles.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Recent Posts</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="#">
                                               How China is fueling Volkswagens electric dream!
                                               <i class="fa fa-long-arrow-right"></i>
                                           </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                              Volkswagen latest badge for their R line performance cars!
                                               <i class="fa fa-long-arrow-right"></i>
                                           </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                               Aston Martin Vantage Roadster leaks for 2020!
                                               <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                Hydrogen powered vehicles may arrive sooner than possible!
                                               <i class="fa fa-long-arrow-right"></i>
                                           </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>How to Contact <i class="fa " aria-hidden="true"></i></h2>
                            <div class="widget-body">
                                <p>Leave a comment,cal us or pay us a visit if you like our services</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i>Ngong Rd, Nairobi, Kenya</li>
                                    <li><i class="fa fa-mobile"></i> +254 020 666 999</li>
                                    <li><i class="fa fa-envelope"></i>info@voyagerrental.org</li>
                                </ul>
                                <a href="https://goo.gl/maps/ifUsBp6Fwh6izVag6" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by CodeDevs</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="img/totop.jpg" alt="Voyager">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="js/plugins/slicknav.min.js"></script>

    <!--=== Main Js ===-->
    <script src="js/main.js"></script>

</body>

</html>