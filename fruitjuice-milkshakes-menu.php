<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png" />
        <title>Fruit Juice & Milkshakes Menu</title>
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
           <?php /* ?> <div class="dishes no-border">
                <div class="container">
                    <div class="row">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 commontop text-center">
                            <h4>Fruit Juice & Milk Shakes Menu</h4>
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
                                <h4>Fruit Juice & Milk Shakes Menu</h4>
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
                                        <a class="nav-link active" href="#fruitjuice" data-toggle="tab" aria-expanded="false">Fruit Juice</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#milkshakes" data-toggle="tab" aria-expanded="false">Milkshakes</a>
                                    </li>
                                    
                                    
                                </ul>
                                <!--  Menu Tabs Start  -->

                                <!--  Menu Tabs Content Start  -->
                                <div  class="tab-content">
                                    <!--  Menu Tab Start  -->
                                    
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane show active" id="fruitjuice">
                                        <div class="row">
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/moosambi-juice-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Moosambi</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.95.00</div>
                                                    </div>
                                                </div>
												<!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/orange-jiuce-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Orange</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.95.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/pineapple-juice-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Pineapple</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.95.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/apple_juice-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Apple</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.110.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/watermelon-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Water Melon</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.95.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/grape-juice-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Grape Seasonal</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.95.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/mango-juice-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mango Seasonal</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.95.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/cocktail-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Cocktail</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.100.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/musk-melon-juice-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Musk Melon</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.95.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/Pomegranate-juice-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Pomegranate Juice</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.120.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                       <img src="assets/images/our-menu/fruitjuice-milkshakes/lime-juice-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Fresh Lime Juice</h4>
                                                        <p class="des">Fruit Juice</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.75.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
                                             </div>
                                    </div>
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane" id="milkshakes">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/apple-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Apple Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.150.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/pomegranate-milk-shake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Pomegranate Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.150.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/sapota-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Sapodilla Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.130.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/banana-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Banana Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.120.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                         <img src="assets/images/our-menu/fruitjuice-milkshakes/mango-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mango Milk Shake (Seasonal)</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.130.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                   <img src="assets/images/our-menu/fruitjuice-milkshakes/strawberry-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Strawberry Milk Shake (Seasonal)</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.130.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/Papaya-Milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Papaya Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.110.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/vanilla-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Vanilla Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.100.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/strawberry-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Strawberry Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.100.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/mango-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mango Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.100.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/chocolate-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chocolate Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.100.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/butterscotch-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Butterscotch Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.100.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/pista-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Pista Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.110.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
											<div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/fruitjuice-milkshakes/dryfruit-milkshake-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Dry Fruit Ice Cream Milk Shake</h4>
                                                        <p class="des">Milk Shake</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.110.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane" id="accompaniments">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/neer-dosa-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Neer Dosa (5no's)</h4>
                                                        <p class="des">Accompaniments</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.65.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/kori-rotti-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Kori Rotti (8no's)</h4>
                                                        <p class="des">Accompaniments</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.65.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane" id="mutton">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/mutton-rogan-josh-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mutton Roghan Josh</h4>
                                                        <p class="des">Mutton Gravies</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.235.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/mutton-kadai-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mutton Kadai</h4>
                                                        <p class="des">Mutton Gravies</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.235.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/mutton-chaps-masala-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Mutton Chaps Masala</h4>
                                                       <p class="des">Mutton Gravies</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.235.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                           
                                            
                                        </div>
                                    </div>
                                    <!--  Menu Tab End  -->

                                    <!--  Menu Tab Start  -->
                                    <div class="tab-pane" id="roti-naan">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/plain-roti-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Roti Plain/Butter</h4>
                                                       <p class="des">Bread Basket</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.25/30.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/naan-plain-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Naan Plain/Butter</h4>
                                                       <p class="des">Bread Basket</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.35/40.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/kulcha-plain-butter-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Kulcha Plain/Butter</h4>
                                                       <p class="des">Bread Basket</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.30/35.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/paneer-kulcha-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Paneer Kulcha</h4>
                                                       <p class="des">Bread Basket</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.55.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/Masala-Kulcha-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Masala Kulcha</h4>
                                                       <p class="des">Bread Basket</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.50.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                        <img src="assets/images/our-menu/chicken-mutton/chicken-keema-paratha-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Chicken Kheema Parotha</h4>
                                                       <p class="des">Bread Basket</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.60.00</div>
                                                    </div>
                                                </div>
                                                <!-- Box End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- Box Start -->
                                                <diV class="box">
                                                    <div class="image">
                                                      <img src="assets/images/our-menu/chicken-mutton/tandoori-plain-paratha-new-amaravathi-gardenia.jpg" alt="image" title="image" class="img-fluid" />
                                                    </div>
                                                    <div class="caption">
                                                        <h4>Tandoori Parotha</h4>
                                                       <p class="des">Bread Basket</p>
                                                        <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                        <div class="price">Rs.40.00</div>
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

