<!-- Header -->
    <style>
        a.active {
            color: #b99272 !important;
        }
    </style>


<header class="kf-header">

    <!-- topline -->
    <div class="kf-topline">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                <!-- hours -->
                <div class="kf-h-group">
                    <i class="far fa-clock"></i>
                    <em>opening hours :</em> 08:00 am - 09:00 pm
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 align-center">

                <!-- social -->
                <div class="kf-h-social">
                    <a href="facebook.com" target="blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="twitter.com" target="blank"><i class="fab fa-twitter"></i></a>
                    <a href="instagram.com" target="blank"><i class="fab fa-instagram"></i></a>
                    <a href="youtube.com" target="blank"><i class="fab fa-youtube"></i></a>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 align-right">

                <!-- location -->
                <div class="kf-h-group">
                    <i class="fas fa-map-marker-alt"></i>
                    <em>Location :</em> Hill Climb Rd Opp. Sarova Woodlands, NKR
                </div>

            </div>
        </div>
    </div>

    <!-- navbar -->
    <div class="kf-navbar">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                <!-- logo -->
                <div class="kf-logo">
                    <a href="/"><img src="/lawns-full.png" alt="" /></a>

                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 align-center">

                <!-- main menu -->
                <div class="kf-main-menu">
                    <ul>
                        <ul>
                            <li>
                                <a href="/" class="@if (Request::is('/'))
                                    active
                                @endif">Home</a>

                            </li>
                            <li>
                                <a href="/about" class="@if (Request::is('about'))
                                    active
                                @endif">About</a>
                            </li>
                            <li>
                                <a href="/menu" class="@if (Request::is('menu'))
                                    active
                                @endif">Menu</a>
                            </li>
                            <li>
                                <a href="/events" class="@if (Request::is('events'))
                                    active
                                @endif">Events</a>

                            </li>
                            <li>
                                <a href="/blog" class="@if (Request::is('blog'))
                                    active
                                @endif">Blog</a>
                            </li>
                            <li><a href="/contact-us" class="@if (Request::is('contact-us'))
                                    active
                                @endif">Contact Us</a></li>
                        </ul>
                    </ul>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 align-right">

                <!-- menu btn -->
                <a href="#" class="kf-menu-btn"><span></span></a>

                <!-- btn -->
                <a href="/reservation" class="kf-btn h-btn">
                    <span>Book a table</span>
                </a>

            </div>
        </div>
    </div>

    <!-- mobile navbar -->
    <div class="kf-navbar-mobile">

        <!-- mobile menu -->
        <div class="kf-main-menu">
            <ul>
                <li>
                    <a href="/" class="active">Home</a>

                </li>
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    <a href="/menu">Menu</a>
                </li>
                <li>
                    <a href="/events">Events</a>

                </li>
                <li>
                    <a href="/blog">Blog</a>
                </li>
                <li><a href="/contact-us">Contact Us</a></li>
            </ul>
        </div>

        <!-- mobile topline -->
        <div class="kf-topline">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <!-- mobile btn -->
                    <a href="reservation.html" class="kf-btn h-btn">
                        <span>Book a table</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <!-- social -->
                    <div class="kf-h-social">
                        <a href="facebook.com" target="blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="twitter.com" target="blank"><i class="fab fa-twitter"></i></a>
                        <a href="instagram.com" target="blank"><i class="fab fa-instagram"></i></a>
                        <a href="youtube.com" target="blank"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <!-- hours -->
                    <div class="kf-h-group">
                        <i class="far fa-clock"></i>
                        <em>opening hours :</em> 08:00 am - 09:00 pm
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <!-- location -->
                    <div class="kf-h-group">
                        <i class="fas fa-map-marker-alt"></i>
                        <em>Location :</em> 55 main street, new york
                    </div>

                </div>
            </div>
        </div>

    </div>

</header>
