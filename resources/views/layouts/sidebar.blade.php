<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="assets/settings/{{app('contact')->logo_dark}}" alt="{{app('contact')->alt2}}">
        </div>

        <div class="inner-content">
            <div class="contact-information--sidebar">
                <h6 class="title">Contact Info</h6>
                <div class="single-info">
                    <a href="tel:+ {{app('contact')->phone_url}}</p>">Tel:  {{app('contact')->phone}}</p></a>
                </div>
                <div class="single-info">
                    <a href=" {{app('contact')->phone_url2}}</p>" target="_blank"> {{app('contact')->subtitle_phone2}}</p>:  {{app('contact')->phone2}}</p>
                    </a>
                </div>
                <h6 class="title mt--30">Location</h6>
                <div class="single-info">
                    <div class="location-information">
                        <div class="location">
                            <p><b>Address #1:</b><br>
                            {{app('contact')->address}}</p>
                        </div>
                        <div class="location">
                            <p><b>Address #2:</b><br>
                            {{app('contact')->address2}}</p>
                        </div>
                        <div class="location">
                            <p><b>Address #3:</b><br>
                            {{app('contact')->address3}}</p>
                        </div>
                    </div>
                </div>
                <div class="rts-social-style-one">
                    <ul>
                        <li>
                            <a href="{{app('contact')->insta}}" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{app('contact')->fb}}" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{app('contact')->linkedin}}" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <h4 class="title"> {{app('contact')->title_contact}}</p></h4>
                <a href="#contact" class="rts-btn btn-primary"> {{app('contact')->subtitle_contact}}</p></a>
            </div>
        </div>
    </div>

    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li><a href="#home" class="main">Home</a></li>
                <li><a href="#about" class="main">About Us</a></li>
                <li><a href="#services" class="main">Services</a></li>
                <li><a href="#projects" class="main">Projects</a></li>
                <li><a href="#team" class="main">Team</a></li>
                <li><a href="#contact" class="main">Contact</a></li>
            </ul>
        </nav>

        <div class="rts-social-style-one pl--20 mt--100">
            <ul>
                <li>
                    <a href="{{app('contact')->insta}}" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="{{app('contact')->fb}}" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="{{app('contact')->linkedin}}" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->