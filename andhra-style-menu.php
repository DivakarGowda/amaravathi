<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png" />
        <title>Andhra-Style-Menu</title>
        <meta name="description" content="Andhra-Style-Menu"> 

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
                        <h2>Food Menu</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index-4.html">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Food Menu</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Popular Dishes Start -->
            <?php /* ?><div class="dishes no-border">
                <div class="container">
                    <div class="row">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 commontop text-center">
                            <h4>Our Popular Dishes</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>Andhra style chicken curry is a delicious, tempting and mouth-watering recipe. We have Recreated some of the best Non-Veg Recipes in our Kitchen that is made from fresh local meat and spices. Aromatic spices and tantalising your taste buds, this recipe spells comfort food at its best.</p>
                        </div>
                        <!-- Title Content End -->
                        <div class="col-sm-12">
                            <div class="dish owl-carousel">
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/01.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/02.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/03.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/04.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/05.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/01.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/02.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/03.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/04.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/05.jpg" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="caption">
                                            <h4>Dish Name Here</h4>
                                            <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                            <p>Rs.100</p>
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><?php */ ?>
            <!-- Popular Dishes End -->

            <!-- Breakfast Menu Start -->
            <div class="menu">
                <div class="menu-inner">
                    <div class="container">
                        <div class="row ">
                            <!-- Title Content Start -->
                            <div class="col-sm-12 col-xs-12 commontop text-center">
                                <h4>Andhra Style Menu</h4>
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="icofont icofont-ui-press hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                                <p>Every item at our buffet is prepared fresh in the morning. Multi Cuisine & Most popular dishes, Well equipped kitchen and Chefs who can cook deliciuos meals as per our Menu, please check our updated menu list here.</p>
                            </div>
                            <!-- Title Content End -->
                            <div class="col-sm-12 col-xs-12">
                                <!--  Menu Tabs Start  -->
                                <ul class="nav nav-tabs list-inline">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#vegmeals" data-toggle="tab" aria-expanded="false">Meals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#daily-weekend-specials" data-toggle="tab" aria-expanded="false">Daily/Weekend Specials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#biryanis-mutton" data-toggle="tab" aria-expanded="false">Biryanis/Mutton</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#drinks" data-toggle="tab" aria-expanded="false">Dry Items</a>
                                    </li>
                                    
                                </ul>
                                <!--  Menu Tabs Start  -->

                                <!--  Menu Tabs Content Start  -->
                                <div  class="tab-content">
                                    <!--  Menu Tab Start  -->
                                   
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane show active" id="vegmeals">
                                        <div class="row">
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/Andra-thali-veg-meals-new-amaravathi-gardenia-full.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Veg Meals Full</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.180.00</div>
                                                    </div>
                                                </div>
												<!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/Andra-thali-veg-meals-new-amaravathi-gardenia-half.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Veg Meals Half</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.120.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                             </div>
                                    </div>
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane" id="daily-weekend-specials">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/hyderabadi-chicken-dum-biryani-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Hyderabadi Chicken Dum Biryani</h4>
                                                        <p class="des">Weekend Special</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.280.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/kakinadu-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Kakinadu Chicken</h4>
                                                        <p class="des">Daily Special - Monday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/pudina-chicken-curry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Pudina Chicken Curry</h4>
                                                        <p class="des">Daily Special - Monday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/gaurmet-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Gaurmet Chicken</h4>
                                                        <p class="des">Daily Special - Monday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.205.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/kshatriya-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Kshatriya Chicken</h4>
                                                        <p class="des">Daily Special - Tuesday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.215.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/butter-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Butter Chicken</h4>
                                                        <p class="des">Daily Special - Tuesday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-lollipop-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Lollipop</h4> 
                                                        <p class="des">Daily Special - Tuesday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/andhra-style-chicken-curry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Andhra Style Chicken Curry</h4>
                                                        <p class="des">Daily Special - Wednesday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.205.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/guntur-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Guntur Chicken</h4> 
                                                        <p class="des">Daily Special - Wednesday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.205.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/Hyderabadi-Chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Hyderabadi Chicken Dry</h4>
                                                        <p class="des">Daily Special - Wednesday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/rajdhani-masala-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Rajdhani Masala</h4> 
                                                        <p class="des">Daily Special - Thursday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.205.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-pepper-dry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Pepper Dry</h4>
                                                        <p class="des">Daily Special - Thursday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/kakinadu-dry-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Kakinadu Dry Chicken</h4> 
                                                        <p class="des">Daily Special - Thursday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/garlic-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Garlic Chiken</h4>
                                                        <p class="des">Daily Special - Friday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.205.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-masala-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Masala</h4> 
                                                        <p class="des">Daily Special - Friday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.200.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-royal-dry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chiken Royal Dry</h4>
                                                        <p class="des">Daily Special - Friday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/guntur-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Guntur Chicken</h4> 
                                                        <p class="des">Daily Special - Saturday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.205.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/royalseema-chicken-masala-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Royalaseema Masala</h4>
                                                        <p class="des">Daily Special - Saturday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.200.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/lemon-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Lemon Chicken</h4> 
                                                        <p class="des">Daily Special - Saturday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-apple-dry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Apple Dry</h4>
                                                        <p class="des">Daily Special - Sunday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.210.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/ongold-chicken-curry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Ongold Chicken Curry</h4> 
                                                        <p class="des">Daily Special - Sunday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.200.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/Pudina-chicken-dry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Pudina Chicken Dry</h4>
                                                        <p class="des">Daily Special - Sunday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.205.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>

											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/mutton-garlic-dry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mutton Garlic Dry</h4> 
                                                        <p class="des">Daily Special - Sunday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.260.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/mutton-chaps-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mutton Chaps</h4>
                                                        <p class="des">Daily Special - Sunday</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.250.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane" id="biryanis-mutton">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/chicken-dum-biryani-small-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Biryani (Small)</h4>
                                                        <p class="des">Andhra Style Dum Biryani</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.160.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/chicken-dum-biryani-large-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Biryani (Large)</h4>
                                                        <p class="des">Andhra Style Dum Biryani</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.200.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/hyderbadi-mutton-biryani-small-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mutton Biryani (Small)</h4>
                                                        <p class="des">Andhra Style Dum Biryani</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.200.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/hyderbadi-mutton-biryani-large-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                       <h4>Mutton Biryani (Large)</h4>
                                                        <p class="des">Andhra Style Dum Biryani</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.250.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/mutton-fry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mutton Fry</h4>
                                                        <p class="des">Mutton</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.230.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/mutton-chilli-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mutton Chilli</h4>
                                                        <p class="des">Mutton</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.265.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane" id="drinks">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/chilly-chicken-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chilly Chicken</h4>
                                                        <p class="des">Andhra Style Dry Items</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.165.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/chicken-fry-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Fry</h4>
                                                        <p class="des">Andhra Style Dry Items</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.165.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/chicken-kebab-andhra-style-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Kabab</h4>
                                                       <p class="des">Andhra Style Dry Items</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.165.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/biryanis-mutton/chicken-sixer-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Sixer</h4>
                                                        <p class="des">Andhra Style Dry Items</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.190.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane" id="others">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Food Title Here</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Food Title Here</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Food Title Here</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Food Title Here</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Food Title Here</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Food Title Here</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/09.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Food Title Here</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Food Title Here</h4>
                                                        <p class="des">Cursus / Dictum / Risus</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Menu Tab End  -->
                                </div>
                                <!--  Menu Tabs Content End  -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           

           
            
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

<!-- Mirrored from www.spheretheme.com/steam/menu-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Sep 2018 19:41:47 GMT -->
</html>

