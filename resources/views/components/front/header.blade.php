<!-- Header -->
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
                <x-front.social></x-front.social>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 align-right">

                <!-- location -->
                <div class="kf-h-group">
                    <i class="fas fa-map-marker-alt"></i>
                    <em>Location :</em> {{ env('LOCATION') }}
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
                    <a href="{{ route('home') }}">
                        <img src="/frontend/images/logo.png" />
                    </a>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 align-center">

                <!-- main menu -->
                <div class="kf-main-menu">
                    <ul>
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">about</a>
                        </li>
                        <li class="{{ request()->routeIs('menu') ? 'active' : '' }}">
                            <a href="{{ route('menu') }}">menu</a>
                        </li>
                        <li class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}">blog</a>
                        </li>
                        <li class="{{ request()->routeIs('contacts') ? 'active' : '' }}">
                            <a href="{{ route('contacts') }}">contacts</a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 align-right">

                <!-- menu btn -->
                <a href="#" class="kf-menu-btn"><span></span></a>

                <!-- btn -->
                <a href="reservation.html" class="kf-btn h-btn">
                    <span>Book a table</span>
                </a>
                <a href="#" class="kf-menu-btn"><span></span></a>
                <a href="reservation.html" class="kf-btn h-btn">
                    <span>Book a Room</span>
                </a>

            </div>
        </div>
    </div>

    <!-- mobile navbar -->
    <div class="kf-navbar-mobile">

        <!-- main menu -->
        <div class="kf-main-menu">
            <ul>
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">about</a>
                </li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">about</a>
                </li>
                <li class="{{ request()->routeIs('menu') ? 'active' : '' }}">
                    <a href="{{ route('menu') }}">menu</a>
                </li>
                <li class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                    <a href="{{ route('blog') }}">blog</a>
                </li>
                <li class="{{ request()->routeIs('contacts') ? 'active' : '' }}">
                    <a href="{{ route('contacts') }}">contacts</a>
                </li>

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
                    <x-front.social></x-front.social>

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
                        <em>Location :</em> {{ env('LOCATION') }}
                    </div>

                </div>
            </div>
        </div>

    </div>

</header>
