<!DOCTYPE html>
<html>
    <head>
        <title>GoldPark Logistics Limited</title>
        <meta name="description" content="GoldPark Logistics Limited. Warehousing, Clearing & forwarding & Haulage">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="masterslider/style/masterslider.css" /><!-- Master slider css -->
        <link rel="stylesheet" href="masterslider/skins/default/style.css" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="css/animate.css"/><!-- animations -->
        <link rel='stylesheet' href='owl-carousel/owl.carousel.css'/><!-- Client carousel -->
        <link rel="stylesheet" href="css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="css/color-blue.css"/><!-- template main color -->
        <link rel="stylesheet" href="css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="css/responsive.css"/><!-- responsive styles -->

        <!-- Google Web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

        <!-- Font icons -->
        <link rel="stylesheet" href="icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->
    </head>
    <body>
        <?php

        $m1="";
        $m2="";
        $m3="";



        function menuLi($pages){
            global $m1,$m2,$m3,$m4,$m5;

            if($pages==="Index"){
                $m1="current-menu-item";
            }elseif ($pages==="Haulage Frieght"){
                $m2="current-menu-item";
            }elseif($pages==="Clearing Forwarding"){
                $m2="current-menu-item";
            }elseif($pages==="Warehousing"){
                $m2="current-menu-item";
            }elseif($pages==="Contactsimple"){
                $m3="current-menu-item";
            }




        }






        $page = basename($_SERVER['PHP_SELF']); // Get script filename without any path information
        $page = str_replace( array( '.php', '.htm', '.html' ), '', $page ); // Remove extensions
        $page = str_replace( array('-', '_'), ' ', $page); // Change underscores/hyphens to spaces
        $page = ucwords( $page ); // uppercase first letter of every word

        // echo $page;

        menuLi($page);


        ?>
        <div class="whatsapp-chat">
          <a href="https://wa.me/2348160278321" target="blank">
          <div class="lineup">
            <img class="whats-image" src="img/whatsapp.png" alt="">

          </div>
          <div class="lineup">
            <p class="chat-bg" ><strong>Chat on whatsapp</strong></p>
          </div>
          </a>

        </div>


        <div class="header-wrapper header-transparent">
            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style01">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="index.php">
                                                <img src="img/logo.png" alt="GoldPark Logistics Limited"/>
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="<?php echo $m1?>">
                                                <a href="index.php">Home</a>


                                            <li class="dropdown">
                                                <a href="index.php#Our-history">About</a></li>



                                            <li class="dropdown <?php echo $m2?>">

                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Services</a>
                                                <ul class="dropdown-menu">
                                                <li><a href="haulage-frieght.php">Haulage Services</a></li>
                                                <li><a href="clearing-forwarding.php">Clearing & Forwarding</a></li>
                                                    <li><a href="warehousing.php">Warehousing</a></li>

                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->





                                            <li class="<?php echo $m3?>">
                                                <a href="contactsimple.php">Contact</a>

                                            </li><!-- .dropdown end -->
                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="index.php">Home</a>

                                                </li>

                                                <li>
                                                    <a href="index.php#Our-history">About</a>

                                                </li>

                                                <li>
                                                    <a href="#">Services</a>
                                                    <ul class="dl-submenu">
                                                    <li><a href="haulage-frieght.php">Haulage & Frieght</a></li>
                                                <li><a href="clearing-forwarding.php">Clearing & Forwarding</a></li>
                                                    <li><a href="warehousing.php">Warehousing</a></li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>







                                                <li>
                                                    <a href="contactsimple.php">Contact</a>

                                                </li>
                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                        <!-- #search start -->
                                        <div id="search">
                                            <form action="#" method="get">
                                                <input class="search-submit" type="submit" />
                                                <input id="m_search" name="s" type="text" placeholder="Type and hit enter..." />
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->

                </div>
                <!-- <div class="whatsapp-chat">
                  <h1>whatsapp</h1>
                </div> -->
                <!-- .container end -->
            </header><!-- .header.header-style01 -->

        </div><!-- .header-wrapper end -->
