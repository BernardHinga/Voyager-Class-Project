<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="img/flaticon.png" type="image/x-icon" />

    <title>Pricing</title>

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

     <!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

    <!--== Slider Area Start ==-->
    <section id="home-slider-area">
        <div class="home-slider-item slider-bg-1 overlay">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slideshowcontent"></div>
                            <h1>GET STARTED WITH VOYAGER CAR RENTAL</h1>
                            <p>ENJOY JOURNEYS AT THE COMFORT OF YOUR OWN CAR AT RIDICULOUSLY LOW PRICES</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-2 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>SAVE YOUR MONEY</h1>
                            <p>FOR OUR RETURNING CUSTOMERS GET AMAZING DISCOUNTS<br>UP TO 20% OFF</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-3 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>ENJOY THE COMFORT OF YOUR CAR</h1>
                            <p>AT AMAZINGLY LOW PRICES ENJOY THE BEST RATES NATIONWIDE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-4 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>YOU DON'T HAVE TO BUY YOUR FAVOURITE CAR!</h1>
                            <p>FOR AS LOW AS $50 A DAY YOU CAN OWN HIRE IT FOR AS LONG AS YOU WANT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-5 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>LIVE THE LIFE YOU WANT WITH THE CAR OF YOUR DREAMS</h1>
                            <p>HURRY AND BOOK IT NOW WHILE THEY LAST!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Slider Area End ==-->
    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>For More Informations</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> +254 0660000</p>
                                <p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Rental Tips</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="img/logo.png" alt="Voyager"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Kenyan car rentals</a></h4>
                                            <span class="date">February 5, 2019</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Kenyan Car Rentals</a></h4>
                                            <span class="date">February 5, 2019</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="img/logo.png" alt="Voyager"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2019</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="img/logo.png" alt="Voyager"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2019</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Connect with Us</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->

                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-list-content m-t-50">
                        <!-- Single Car Start -->
                        <div class="single-car-wrap">
                            <div class="row">
                                <!-- Single Car Thumbnail -->
                                <div class="col-lg-5"> 
                                    <div class="car-list-thumb car-thumb-1">
                                        <img src="img/cars/540i.jpg" alt="5401">
                                    </div>
                                </div>
                                <!-- Single Car Thumbnail -->

                                <!-- Single Car Info -->
                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="car-list-info">
                                                <h2><a href="#">Aston Martin One-77</a></h2>
                                                <h5>39$ Rent /per a day</h5>
                                               <p> Has a good running engine.Uses little petroleum and runs for 222km per hour</p>                       
                                                <ul class="car-info-list">
                                                    <li>Air Condition</li>
                                                    <li>Diesel</li>
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
                                </div>
                                <!-- Single Car info -->
                            </div>
                        </div>
                        <!-- Single Car End -->

                        <!-- Single Car Start -->
                        <div class="single-car-wrap">
                            <div class="row">
                                <!-- Single Car Thumbnail -->
                                <div class="col-lg-5"> 
                                <div class="car-list-thumb car-thumb-2">
                                    <img src="img/cars/cx3.jpg" alt="cx3">

                                    </div>
                                    
                                </div>
                                <!-- Single Car Thumbnail -->

                                <!-- Single Car Info -->
                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="car-list-info">
                                                <h2><a href="#">Mazda</a></h2>
                                                <h5>39$ Rent /per a day</h5>
                                                <p>Has a good running engine.Travels at 180 km per hour.Uses little fuel</p>
                                                <ul class="car-info-list">
                                                    <li>Air Condition</li>
                                                    <li>Diesel</li>
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
                                </div>
                                <!-- Single Car info -->
                            </div>
                        </div>
                        <!-- Single Car End -->

                        <!-- Single Car Start -->
                        <div class="single-car-wrap">
                            <div class="row">
                                <!-- Single Car Thumbnail -->
                                <div class="col-lg-5">
                                    <div class="car-list-thumb car-thumb-3">
                                        <img src="img/cars/lexuslx.jpg" alt="lexuslx">
                                    </div>
                                </div>
                                <!-- Single Car Thumbnail -->

                                <!-- Single Car Info -->
                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="car-list-info">
                                                <h2><a href="#">SUV</a></h2>
                                                <h5>40$ Rent /per a day</h5>
                                                <p>has a good engine.Runs 320 km per hour</p>
                                                <ul class="car-info-list">
                                                    <li>Air Condition</li>
                                                    <li>Diesel</li>
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
                                </div>
                                <!-- Single Car info -->
                            </div>
                        </div>
                        <!-- Single Car End -->

                        <!-- Single Car Start -->
                        <div class="single-car-wrap">
                                <div class="row">
                                    <!-- Single Car Thumbnail -->
                                    <div class="col-lg-5">
                                        <div class="car-list-thumb car-thumb-3">
                                            <img src="img/cars/passat.jpg" alt="passat">
                                        </div>
                                    </div>
                                    <!-- Single Car Thumbnail -->
    
                                    <!-- Single Car Info -->
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="car-list-info">
                                                    <h2><a href="#">Passat</a></h2>
                                                    <h5>40$ Rent /per a day</h5>
                                                    <p>has a good engine.Runs 320 km per hour</p>
                                                    <ul class="car-info-list">
                                                        <li>Air Condition</li>
                                                        <li>Diesel</li>
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
                                    </div>
                                    <!-- Single Car info -->
                                </div>
                            </div>
                            <!-- Single Car End -->

                            <!-- Single Car Start -->
                        <div class="single-car-wrap">
                                <div class="row">
                                    <!-- Single Car Thumbnail -->
                                    <div class="col-lg-5">
                                        <div class="car-list-thumb car-thumb-3">
                                            <img src="img/cars/merce63.jpg" alt="merce63">
                                        </div>
                                    </div>
                                    <!-- Single Car Thumbnail -->
    
                                    <!-- Single Car Info -->
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="car-list-info">
                                                    <h2><a href="#">mercedes C200</a></h2>
                                                    <h5>40$ Rent /per a day</h5>
                                                    <p>has a good engine.Runs 200 km per hour</p>
                                                    <ul class="car-info-list">
                                                        <li>Air Condition</li>
                                                        <li>Diesel</li>
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
                                    </div>
                                    <!-- Single Car info -->
                                </div>
                            </div>
                            <!-- Single Car End -->

                            <!-- Single Car Start -->
                        <div class="single-car-wrap">
                                <div class="row">
                                    <!-- Single Car Thumbnail -->
                                    <div class="col-lg-5">
                                        <div class="car-list-thumb car-thumb-3">
                                            <img src="img/cars/gls.jpg" alt="gls">
                                        </div>
                                    </div>
                                    <!-- Single Car Thumbnail -->
    
                                    <!-- Single Car Info -->
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="car-list-info">
                                                    <h2><a href="#">Mercedes GLS</a></h2>
                                                    <h5>40$ Rent /per a day</h5>
                                                    <p>has a good engine.Runs at 7.5l/km</p>
                                                    <ul class="car-info-list">
                                                        <li>Air Condition</li>
                                                        <li>Diesel</li>
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
                                    </div>
                                    <!-- Single Car info -->
                                </div>
                            </div>
                            <!-- Single Car End -->

                            <!-- Single Car Start -->
                        <div class="single-car-wrap">
                                <div class="row">
                                    <!-- Single Car Thumbnail -->
                                    <div class="col-lg-5">
                                        <div class="car-list-thumb car-thumb-3">
                                            <img src="img/cars/rav4.jpg" alt="rav4">
                                        </div>
                                    </div>
                                    <!-- Single Car Thumbnail -->
    
                                    <!-- Single Car Info -->
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="car-list-info">
                                                    <h2><a href="#">Rav4</a></h2>
                                                    <h5>40$ Rent /per a day</h5>
                                                    <p>has a good engine.Runs 10l/hour</p>
                                                    <ul class="car-info-list">
                                                        <li>Air Condition</li>
                                                        <li>Diesel</li>
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
                                    </div>
                                    <!-- Single Car info -->
                                </div>
                            </div>
                            <!-- Single Car End -->

                            <!-- Single Car Start -->
                        <div class="single-car-wrap">
                                <div class="row">
                                    <!-- Single Car Thumbnail -->
                                    <div class="col-lg-5">
                                        <div class="car-list-thumb car-thumb-3">
                                            <img src="img/cars/evoque.png" alt="evoque">
                                        </div>
                                    </div>
                                    <!-- Single Car Thumbnail -->
    
                                    <!-- Single Car Info -->
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="car-list-info">
                                                    <h2><a href="#">Rangerover Evoque</a></h2>
                                                    <h5>40$ Rent /per a day</h5>
                                                    <p>has a good engine.Runs 320 km per hour</p>
                                                    <ul class="car-info-list">
                                                        <li>Air Condition</li>
                                                        <li>Diesel</li>
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
                                    </div>
                                    <!-- Single Car info -->
                                </div>
                            </div>
                            <!-- Single Car End -->

                            <!-- Single Car Start -->
                        <div class="single-car-wrap">
                                <div class="row">
                                    <!-- Single Car Thumbnail -->
                                    <div class="col-lg-5">
                                        <div class="car-list-thumb car-thumb-3">
                                            <img src="img/cars/a4.png" alt="a4">
                                        </div>
                                    </div>
                                    <!-- Single Car Thumbnail -->
    
                                    <!-- Single Car Info -->
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="car-list-info">
                                                    <h2><a href="#">Audi A4</a></h2>
                                                    <h5>40$ Rent /per a day</h5>
                                                    <p>has a good engine.Runs 10l/hour</p>
                                                    <ul class="car-info-list">
                                                        <li>Air Condition</li>
                                                        <li>Diesel</li>
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
                                    </div>
                                    <!-- Single Car info -->
                                </div>
                            </div>
                            <!-- Single Car End -->

                            <!-- Single Car Start -->
                        <div class="single-car-wrap">
                            <div class="row">
                                <!-- Single Car Thumbnail -->
                                <div class="col-lg-5">
                                    <div class="car-list-thumb car-thumb-3">
                                        <img src="img/cars/toureg.jpg" alt="toureg">
                                    </div>
                                </div>
                                <!-- Single Car Thumbnail -->

                                <!-- Single Car Info -->
                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="car-list-info">
                                                <h2><a href="#">Toureg</a></h2>
                                                <h5>40$ Rent /per a day</h5>
                                                <p>has a good engine.Runs 15l/hour</p>
                                                <ul class="car-info-list">
                                                    <li>Air Condition</li>
                                                    <li>Diesel</li>
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
                                </div>
                                <!-- Single Car info -->
                            </div>
                        </div>
                        <!-- Single Car End -->
                    </div>

                    <!-- Page Pagination Start -->
                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="pricing1.html">2</a></li>
                                <li class="page-item"><a class="page-link" href="pricing2.html">3</a></li>
                                <li class="page-item"><a class="page-link" href="pricing3.html">4</a></li>
                                <li class="page-item"><a class="page-link" href="pricing4.html">5</a></li>
                                <li class="page-item"><a class="page-link" href="pricing1.html">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Page Pagination End -->
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
                                <p>Voyager is the place to be.Book as first as possible.Voyager the best booking website for cars</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

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
                                           Voyager the place to be
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          The fastest booking website.Dont miss out 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           Voyager the place to be 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Very east to book a car and a sufficient one.Dont miss out
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
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <p>The best car rental booking site,Very Affordable and fast</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Ngong road,Nairobi,Kenya</li>
                                    <li><i class="fa fa-mobile"></i> +254 0600 299</li>
                                    <li><i class="fa fa-envelope"></i> knailrna@gmail.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Codedevs</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="img/logo.png" alt="Voyager">
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

    <!--=== Mian Js ===-->
    <script src="js/main.js"></script>

</body>

</html>