<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ config('app.name') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.partial.seo')

    <title>{{ config('app.name', 'The Lawns Restaurant') }}</title>
    <meta name="HandheldFriendly" content="true">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BEGIN CSS STYLES -->
    <link rel="stylesheet" href="/home/styles/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/home/fonts/font-awesome/css/font-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/home/fonts/font-awesome/css/line-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/home/styles/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/home/styles/magnific-popup.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/home/styles/splitting.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/home/styles/swiper.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/home/style.css" type="text/css" media="all" />
    @stack('css')
    <!-- END CSS STYLES -->

</head>

<body>
    <div class="bg">

        <!-- Preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner-logo">
                        <img src="/lawns.png" alt="" />
                        <div class="spinner-dot">
                            <div class="spinner-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-home.header></x-home.header>
        <!-- Wrapper -->
        <div class="wrapper">

            @yield('content')

        </div>

        <x-home.footer></x-home.footer>

    </div>

    <!-- Scripts -->
    <script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/jquery.validate.min.js"></script>
    <script src="/home/js/bootstrap.js"></script>
    <script src="/home/js/swiper.js"></script>
    <script src="/home/js/splitting.js"></script>
    <script src="/home/js/jquery.paroller.min.js"></script>
    <script src="/home/js/parallax.js"></script>
    <script src="/home/js/magnific-popup.js"></script>
    <script src="/home/js/imagesloaded.pkgd.js"></script>
    <script src="/home/js/isotope.pkgd.js"></script>
    <script src="/home/js/jquery.scrolla.js"></script>
    <script src="/home/js/skrollr.js"></script>
    <script src="/home/js/common.js"></script>
    @stack('scripts')
</body>

</html>
