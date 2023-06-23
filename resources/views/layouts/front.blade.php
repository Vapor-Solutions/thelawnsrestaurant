<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BEGIN CSS STYLES -->
    <link rel="stylesheet" href="/frontend/styles/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/frontend/fonts/font-awesome/css/font-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/frontend/fonts/font-awesome/css/line-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/frontend/styles/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/frontend/styles/magnific-popup.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/frontend/styles/splitting.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/frontend/styles/swiper.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/frontend/style.css" type="text/css" media="all" />
    <!-- END CSS STYLES -->

    @vite(['resources/sass/front.scss', 'resources/js/front.js'])

</head>

<body>
    <div class="bg">

        <x-front.preloader />
        <x-front.header />


        <!-- Wrapper -->
        <div class="wrapper">


            @yield('content')

        </div>

        <x-front.footer />
    </div>

    <!-- Scripts -->
    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/jquery.validate.min.js"></script>
    <script src="/frontend/js/bootstrap.js"></script>
    <script src="/frontend/js/swiper.js"></script>
    <script src="/frontend/js/splitting.js"></script>
    <script src="/frontend/js/jquery.paroller.min.js"></script>
    <script src="/frontend/js/parallax.js"></script>
    <script src="/frontend/js/magnific-popup.js"></script>
    <script src="/frontend/js/imagesloaded.pkgd.js"></script>
    <script src="/frontend/js/isotope.pkgd.js"></script>
    <script src="/frontend/js/jquery.scrolla.js"></script>
    <script src="/frontend/js/skrollr.js"></script>
    <script src="/frontend/js/common.js"></script>
    
</body>

</html>
