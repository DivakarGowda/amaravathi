<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.spheretheme.com/steam/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Sep 2018 19:41:48 GMT -->
<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png" />
        <title>Reservation</title>
        <meta name="description" content="STEAM - Restaurant, food and Drinks HTML5 website template is Modern, Clean and Professional site template. Prefect for RESTAURANT, Bakery, Cafe, Bar, Catering, food business and for personal chef portfolio website."> 

        <!-- Bootstrap stylesheet -->
        <link href="assets/libs/bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- icofont -->
        <link href="assets/libs/icofont/css/icofont.css" rel="stylesheet" type="text/css" />
        <!-- crousel css -->
        <link href="assets/libs/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <!-- mb.YTPlayer css -->
        <link href="assets/libs/mb.YTPlayer/css/jquery.mb.YTPlayer.min.css" rel="stylesheet" type="text/css" />
        <!-- Switch Style css -->
        <link href="assets/switch-style/switch-style.css" rel="stylesheet" type="text/css"/>
        <!-- Theme Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <!-- Switch Color Style css -->
        <link href="#" data-style="styles" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <!--[if lt IE 8]>
               <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
           <![endif]-->  

            <!-- Loader Start -->
            <div class="loader">
                <div class="loader-inner">
                    <h4>Cooking in progress..</h4>
                    <div id="cooking">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div id="area">
                            <div id="sides">
                                <div id="pan"></div>
                                <div id="handle"></div>
                            </div>
                            <div id="pancake">
                                <div id="pastry"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Loader End -->

            <!--  Header Start  -->
           <?php include('header-inside.php'); ?>
            <!-- Header End   -->

            <!-- Breadcrumb Start -->
            <div class="bread-crumb">
                <div class="container">
                    <div class="matter">
                        <h2>Reservation</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index-4.html">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Reservation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Reservation Start -->
            <div class="reservation no-bg">
                <div class="container">
                    <div class="row ">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 commontop text-center">
                            <h4>Book Your Table</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>The restaurant offers a wide selection of non-vegetarian signature dishes & Drinks. Please treat yourself to instant rewards and unique dining experiences with The Table from Amaravathi Gardenia.</p>
                        </div>
                        <!-- Title Content End -->
                        <div class="col-md-12 col-xs-12">
                            <!-- Reservation Form Start -->
                            <form action="http://www.spheretheme.com/steam/mailer.php" method="post" class="row reservation-form" novalidate="novalidate">
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-user"></i><input name="name" placeholder="name" id="input-name" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-message"></i><input name="email" placeholder="email" id="input-email" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-phone"></i><input name="mobile" placeholder="mobile number" id="input-mobile" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-calendar"></i><input name="date" placeholder="date" id="input-date" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-clock-time"></i><input name="time" placeholder="time" id="input-time" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-users"></i><input name="persons" placeholder="number of persons" id="input-persons" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-xs-12 col-md-12">
                                    <div class="">  
                                        <div id="emailSend" class="alert alert-success" role="alert" style="display: none;">
                                            <div class="success-text">Your Message has been successfully sent.</div>
                                        </div>
                                        <div id="emailError" class="alert alert-danger" role="alert" style="display: none;">
                                            <div class="alert-text">Server error <br> Try again later.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-md-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-wide">book now</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Reservation Form End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reservation End  -->

            <!-- Fun-Factor Start -->
            <div class="fun-factor">
                <div class="container">
                    <div class="row ">
                        <div class="col-sm-3 col-6">
                            <!-- Fun-Factor Box Start -->
                            <div class="single-box">
                                <span>
                                    <i class="icofont icofont-spoon-and-fork"></i>
                                </span>
                                <h4 class="number" data-from="100" data-to="300" data-refresh-interval="10">100</h4>
                                <h3>MENU ITEMS</h3>
                            </div>
                            <!-- Fun-Factor Box End -->
                        </div>
                        <div class="col-sm-3 col-6">
                            <!-- Fun-Factor Box Start -->
                            <div class="single-box">
                                <span>
                                    <i class="icofont icofont-emo-simple-smile"></i>
                                </span>
                                <h4 class="number" data-from="100" data-to="600" data-refresh-interval="10">100</h4>
                                <h3>VISITOR EVERYDAY</h3>
                            </div>
                            <!-- Fun-Factor Box End -->
                        </div>
                        <div class="col-sm-3 col-6">
                            <!-- Fun-Factor Box Start -->
                            <div class="single-box">
                                <span>
                                    <i class="icofont icofont-waiter-alt"></i>
                                </span>
                                <h4 class="number" data-from="100" data-to="400" data-refresh-interval="10">100</h4>
                                <h3>EXPERT CHEF</h3>
                            </div>
                            <!-- Fun-Factor Box End -->
                        </div>
                        <div class="col-sm-3 col-6">
                            <!-- Fun-Factor Box Start -->
                            <div class="single-box">
                                <span>
                                    <i class="icofont icofont-heart-alt"></i>
                                </span>
                                <h4 class="number" data-from="10" data-to="100" data-refresh-interval="10">10</h4>
                                <h3>TEST & LOVE</h3>
                            </div>
                            <!-- Fun-Factor Box End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fun-Factor End -->

            <!-- Testimonials Start  -->
            <div class="testimonials">
                <div class="container">
                    <div class="testimonials-inner">
                        <div class="row ">
                            <!-- Title Content Start -->
                            <div class="col-sm-12 col-xs-12 commontop white text-center">
                                <h4>What Our Customers Say</h4>
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="icofont icofont-ui-press hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                            </div>
                            <!-- Title Content End -->
                            <div class="col-sm-12 col-xs-12">
                                <div class="owl-carousel owl-theme owl-testi">
                                    <div class="item">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                                        <span>- Kapil Patel</span>
                                    </div>
                                    <div class="item">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                                        <span>- Nicole Oliver</span>
                                    </div>
                                    <div class="item">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                                        <span>- Brian Mills</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Testimonials End  -->

           
            <!-- Footer Start -->
             <?php include('footer.php'); ?>
            <!-- Footer End  -->

            <!-- Switch Style Start -->
            <div class="style-customizer closed" style="display:none;">
                <a class="opener" href="#"><i class="icofont icofont-options"></i></a>
                <div class="buy-button">
                    <a href="index-4.html" class="customizer-logo">
                        <img src="assets/images/logo/logo-gray.png" alt="Theme Logo">
                    </a>
                    <div class="buy-now">
                        <a class="btn btn-theme btn-md" target="new" href="https://themeforest.net/item/steam-restaurant-food-drinks-html-5-website-template/21212196">Buy now!</a> 
                    </div>
                </div>
                <div class="clearfix content-chooser">
                    <h3>Layout Options</h3>
                    <p>Which layout option you want to use?</p>
                    <ul class="layoutstyle clearfix">
                        <li class="wide-layout selected" data-style="wide-layout" title="wide"> Wide </li>
                        <li class="boxed-layout" data-style="boxed-layout" title="boxed"> Boxed </li>
                    </ul>
                    <h3>Color Schemes</h3>
                    <p>Which theme color you want to use? Select from here.</p>
                    <ul class="styleChange clearfix">
                        <li class="skin-default selected" title="skin-default" data-style="skin-default" ></li>
                        <li class="color-1" title="color-1" data-style="color-1"></li>
                        <li class="color-2" title="color-2" data-style="color-2"></li>
                        <li class="color-3" title="color-3" data-style="color-3"></li>
                        <li class="color-4" title="color-4" data-style="color-4"></li>
                        <li class="color-5" title="color-5" data-style="color-5"></li>
                        <li class="color-6" title="color-6" data-style="color-6"></li>
                        <li class="color-7" title="color-7" data-style="color-7"></li>
                        <li class="color-8" title="color-8" data-style="color-8"></li>
                        <li class="color-9" title="color-9" data-style="color-9"></li>
                        <li class="color-10" title="color-10" data-style="color-10"></li>
                        <li class="color-11" title="color-11" data-style="color-11"></li>
                    </ul>
                    <h3>Header Style</h3>
                    <p>Which Header Style you want to use? Select from here.</p>
                    <ul class="headerChange clearfix">
                        <li class="header-0" data-style="header-0" title="Default Header">0</li>
                        <li class="header-1" data-style="header-1" title="Header Color">1</li>
                        <li class="header-2" data-style="header-2" title="Sticky Header">2</li>
                    </ul>
                    <h3>Background Style</h3>
                    <p>Which background Style you want to use? Select from here.</p>
                    <ul class="backgroundChange clearfix">
                        <li class="main-bg-1" data-style="main-bg-1" title="Background 1"></li>
                        <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="images/customizer/bodybg/bg-2.html" alt=""></li>
                        <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="images/customizer/bodybg/bg-3.html" alt=""></li>
                        <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="images/customizer/bodybg/bg-4.html" alt=""></li>
                        <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="images/customizer/bodybg/bg-5.html" alt=""></li>
                        <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="images/customizer/bodybg/bg-6.html" alt=""></li>
                        <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="images/customizer/bodybg/bg-7.html" alt=""></li>
                        <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="images/customizer/bodybg/bg-8.html" alt=""></li>
                    </ul>

                    <ul class="resetAll">
                        <li><a class="btn btn-theme btn-md btn-block button-reset" href="#">Reset All</a></li>
                    </ul>
                </div>
            </div>
            <!-- Switch Style End -->

        </div>

        <!-- jquery -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <!-- jquery Validate -->
        <script src="assets/libs/jquery-validation/jquery.validate.min.js"></script>
        <!-- popper js -->
        <script src="assets/libs/popper/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="assets/libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
        <!-- owlcarousel js -->
        <script src="assets/libs/owlcarousel2/owl.carousel.min.js"></script>
        <!--inview js code-->
        <script src="assets/libs/jquery.inview/jquery.inview.min.js"></script>
        <!--CountTo js code-->
        <script src="assets/libs/jquery.countTo/jquery.countTo.js"></script>
        <!-- mb.YTPlayer js code-->
        <script src="assets/libs/mb.YTPlayer/jquery.mb.YTPlayer.min.js"></script>
        <!-- Switch Style js -->
        <script src="assets/switch-style/switch-style.js"></script>
        <!--internal js-->
        <script src="assets/js/internal.js"></script>
    </body>

<!-- Mirrored from www.spheretheme.com/steam/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Sep 2018 19:41:48 GMT -->
</html>

