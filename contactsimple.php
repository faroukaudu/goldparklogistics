<?php 


    include("include/header.php");
?>



        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg102">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact us</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>Get in touch</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                        <h4 style="color:#6a6b6d">Want to get in touch? We'd love to hear 
                        from you. Here's how you can reach us...</h4>
                        </p>

                        <br />

                        <!-- .contact form start -->
                        <form class="wpcf7 clearfix" action="mail.php" method="post" id=
                        "contact-form">
                            <fieldset>
                                <label>
                                    <span class="required">*</span> Your request:
                                </label>

                                <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry" name ="inquiry">
                                    <option value="I need an offer for contract logistics">I need an offer for contract logistics</option>
                                    <option value="I need an offer for air freight">I need an offer for air freight</option>
                                    <option value="I want to become your partner">I want to become your partner</option>
                                    <option value="I have some other request">I have some other request</option>
                                </select>
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> First Name:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-name" name="name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Last Name:
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-last-name" name="last_name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Email:
                                </label>

                                <input type="email" class="wpcf7-text" id="contact-email" name="email">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span ></span> Phone Number:
                                </label>

                                <input type="tel" class="wpcf7-text" id="contact-email" name="phone_number">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Message:
                                </label>

                                <textarea rows="8" class="wpcf7-textarea" id="contact-message" name="message"></textarea>
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="send" />
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>GoldPark Logistics headoffice</h3>
                        </div><!-- .custom-heading end -->

                        <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39
                            63.739008896139!2d3.3681902539553397!3d6.554596732712847!2m3!1f0!2
                            f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d9a93301b7f%3A0x16b
                            65504b8e58479!2s20%20Oluseun%20Cres%2C%20Anthony%2C%20Lagos!5e0!3m2!
                            1sen!2sng!4v1624849875641!5m2!1sen!2sng" width="600" height="450" 
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="custom-heading">
                            <h4>company information</h4>
                        </div><!-- .custom-heading end -->

                        <address>
                        20, Oluseun Crescent, Corona Estate,<br>
                        Anthony/Gbagada, Lagos State.
                        </address>
                        <a href="tel:">
                        <span class="text-big colored">
                        +234 8160278 321
                        </span>
                        </a>
                        <br />

                        <a href="mailto:">info@GoldParklogictics.com</a>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <?php 
    include("include/footer.php");
?>