<div id="footer-wrapper" class="footer-dark">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                            <!-- .widget.widget_text -->
                            <li class="widget widget_newsletterwidget">
                                <div class="title">
                                    <h3>newsletter subscribe</h3>
                                </div>

                                <p>
                                    Subscribe to our newsletter and we will
                                    inform you about newest projects and promotions.
                                </p>

                                <br />

                                <form class="newsletter">
                                    <input class="email" type="email" placeholder="Your email...">
                                    <input type="submit" class="submit" value="">
                                </form>
                            </li><!-- .widget.widget_newsletterwidget end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>quick links</h3>
                                </div>

                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php#history">About us</a></li>
                                    <li><a href="haulage-frieght.php">Services</a></li>
                                    <li><a href="supply-chain-management.html">Contact</a></li>

                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>Services</h3>
                                </div>

                                <ul>
                                    <li><a href="haulage-frieght.php">Haulage & frieght</a></li>
                                    <li><a href="clearing-forwarding.php">Clearing & forwarding</a></li>
                                    <li><a href="warehousing.php">Warehousing</a></li>

                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>

                                <address>
                                    20, Oluseun Crescent, Corona Estate,<br />
                                    Anthony/Gbagada, Lagos State.
                                </address>

                                <span class="text-big">
                                    +234 816 02783 21
                                </span>
                                <br />

                                <a href="mailto:">info@goldparklogistics.com</a>
                                <br />
                                <ul class="footer-social-icons">
                                    <li><a href="facebook.com" class="fa fa-facebook"></a></li>
                                    <li><a href="twitter.com" class="fa fa-twitter"></a></li>
                                    <li><a href="twitter.com" class="fa fa-linkedin"></a></li>
                                    <li><a href="twitter.com" class="fa fa-instagram"></a></li>
                                </ul><!-- .footer-social-icons end -->
                            </li><!-- .widget.widget-text end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->

            <div class="copyright-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>GOLDPARK LOGISTICS LIMITED</strong> 2017. All RIGHTS RESERVED.</p>
                        </div><!-- .col-md-6 end -->

                        <div class="col-md-6">
                            <p class="align-right">DESIGNED AND DEVELOPED BY <a href="#"><strong>FAROUK AUDU.</strong></a> HEAD IT <strong>GOLDPARK LOGISTICS LIMITED</strong>.</p>
                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .copyright-container end -->

            <a href="#" class="scroll-up">Scroll</a>
        </div><!-- #footer-wrapper end -->

        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
        <script src="owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
        <script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
        <script src="js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
        <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="js/include.js"></script><!-- custom js functions -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                function equalHeight() {
                    $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                        var maxHeight = $(this).outerHeight();
                        $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                    });
                };

                $(document).ready(equalHeight);
                $(window).resize(equalHeight);

                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 854, // slider standard height
                    space: 0,
                    speed: 50,
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');

                // CLIENTS CAROUSEL START
                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });

                // TESTIMONIAL CAROUSELS START
                $('#testimonial-carousel').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    autoheight: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        600: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        1000: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true,
                            autoHeight: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
        <!-- <script src="//code.tidio.co/8yafwijmx1qfgmvuucljnjgohc9hn7an.js" async></script> -->
    </body>
</html>
