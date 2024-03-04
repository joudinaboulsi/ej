<!-- footer area start -->
<div class="rts-footer-area bg-light social-jumpanimation" id="get-contact">
    <div class="container">
        <div class="row g-5 ptb--60 ptb_sm--30 ptb_md--40">

            <div class="col-lg-3 col-xl-4">
                <!-- footer-two wrapper -->
                <div class="footer-two-main-wrapper main-logo">
                    <a href="/">
                        <img src="assets/settings/{{app('contact')->logo_dark}}" alt="{{app('contact')->alt2}}">
                        <p>ej Architects</p>
                    </a>
                    <!-- social style two -->
                    <ul class="social-style-two-wrapper social-anim">
                        <li><a class="counter__anim" href="{{app('contact')->insta}}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a class="counter__anim" href="{{app('contact')->fb}}" target="_blank"><i class="fa-brands fa-brands fa-facebook-square"></i></a></li>
                        <li><a class="counter__anim" href="{{app('contact')->linkedin}}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                    <!-- social style two end -->
                </div>
                <!-- footer-two wrapper end -->
            </div>

            <div class="col-lg-9 col-xl-8">
                <div class="footer-two-main-wrapper-right">
                    <!-- single footer two wozed -->
                    <div class="single-footer-wized">
                        <div class="location-information">
                            <div class="location">
                                <h6 class="title">All Around The World</h6>
                                <p><b>Address :</b><br>
                                {{app('contact')->address}}</p>
                            </div>
                            <div class="location">
                                <p><b>Address :</b><br>
                                {{app('contact')->address2}}</p>
                            </div>
                            <div class="location">
                                <p><b>Address :</b><br>
                                {{app('contact')->address3}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- single footer two wozed -->

                    <!-- single footer two wozed -->
                    <div class="single-footer-wized d-none d-md-block">
                        <div class="location-information">
                            <div class="location">
                                <h6 class="title">Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#projects">Projects</a></li>
                                <li><a href=#team>Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single footer two wozed -->

                    <!-- single footer two wozed -->
                    <div class="single-footer-wized">
                        <div class="location-information">
                            <div class="location">
                                <h6 class="title">Contact</h6>
                                <div>
                                    <a href="tel:{{app('contact')->phone_url}}" class="single-contact-info">
                                        <div class="icon">
                                            <i class="fa-regular fa-phone-volume"></i>
                                        </div>
                                        <div class="information">
                                            <span class="number">{{app('contact')->phone}}</span>
                                            <span class="support">{{app('contact')->subtitle_phone}}</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-contact-info">
                                    <a href="{{app('contact')->phone_url2}}" target="_blank">
                                    <div class="icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="information">
                                    <span class="number">{{app('contact')->phone}}</span>
                                    <span class="support">{{app('contact')->subtitle_phone2}}</span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single footer two wozed -->
                </div>
            </div>
        </div>
    </div>
    <div class="rts-copyright-area-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right-area-inner-two justify-content-center">
                        <p class="disc">Copyright <?php echo date("Y"); ?>. All Rights Reserved. Website by <a href="https://www.webneoo.com/" target="_blank">Webneoo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer area end -->