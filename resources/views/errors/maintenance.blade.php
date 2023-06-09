<!DOCTYPE html>
<html lang="en">

<head>
    <title> {{ config('app.name', 'Laravel') }} - Under Maintenance </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/lawns-color.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/maintenance/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/maintenance/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/maintenance/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/maintenance/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/maintenance/css/util.css">
    <link rel="stylesheet" type="text/css" href="/maintenance/css/main.css">
    <!--===============================================================================================-->

    <style>
        .bg6{
            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
        }
    </style>
</head>

<body>


    <div class="size1 bg0 where1-parent">
        <!-- Coutdown -->
        <div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2"
            style="background-image: url('/maintenance/images/bg02.jpg');">
            <div class="wsize2 flex-w flex-c-m cd100 js-tilt">
                <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                    <span class="l2-txt1 p-b-9 days">35</span>
                    <span class="s2-txt4">Days</span>
                </div>

                <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                    <span class="l2-txt1 p-b-9 hours">17</span>
                    <span class="s2-txt4">Hours</span>
                </div>

                <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                    <span class="l2-txt1 p-b-9 minutes">50</span>
                    <span class="s2-txt4">Minutes</span>
                </div>

                <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                    <span class="l2-txt1 p-b-9 seconds">39</span>
                    <span class="s2-txt4">Seconds</span>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
            <div class="wrap-pic1">
                <img src="/lawns-color.png" alt="LOGO">
            </div>

            <div class="p-t-50 p-b-60">
                <p class="m1-txt1 p-b-36">
                    Our website is <span class="m1-txt2">Coming Soon</span>, follow us for update now!
                </p>

                <form class="contact100-form validate-form" action="{{ route('api.maintenance.sub') }}"  method="POST" >
                    @csrf
                    @method('POST')
                    <div class="wrap-input100 m-b-10 validate-input">
                        <input class="s2-txt1 placeholder0 input100" type="text" name="name" placeholder="Your Name">
                        <span class="focus-input100 error-msg" ></span>
                    </div>

                    <div class="wrap-input100 m-b-20 validate-input">
                        <input class="s2-txt1 placeholder0 input100" type="text" name="email"
                            placeholder="Email Address">
                        <span class="error-msg" ></span>
                    </div>

                    <div class="w-full">
                        <button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04 rn-btn">
                            Subscribe
                        </button>
                    </div>
                </form>

                <p class="s2-txt3 p-t-18">
                    And don’t worry, we hate spam too! You can unsubcribe at anytime.
                </p>
            </div>

            <div class="flex-w">
                <a href="https://www.facebook.com/The-Lawns-Restaurant-102029282002785/" class="flex-c-m size5 bg3 how1 trans-04 m-r-5">
                    <i class="fa fa-facebook"></i>
                </a>

                <a href="https://www.instagram.com/thelawnsrestaurant/" class="flex-c-m size5 bg6 how1 trans-04 m-r-5">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="/maintenance/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>

    <!--===============================================================================================-->
    <script src="/maintenance/vendor/bootstrap/js/popper.js"></script>
    <script src="/maintenance/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/maintenance/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/maintenance/vendor/countdowntime/moment.min.js"></script>
    <script src="/maintenance/vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="/maintenance/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="/maintenance/vendor/countdowntime/countdowntime.js"></script>
    <script>
        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeYear: {{ Carbon\Carbon::createFromTimestamp(env('MAINTENANCE_END'))->format('Y') }},
            endtimeMonth: {{ Carbon\Carbon::createFromTimestamp(env('MAINTENANCE_END'))->format('m') }},
            endtimeDate: {{ Carbon\Carbon::createFromTimestamp(env('MAINTENANCE_END'))->format('j') }},
            endtimeHours: {{ Carbon\Carbon::createFromTimestamp(env('MAINTENANCE_END'))->format('H') }},
            endtimeMinutes: {{ Carbon\Carbon::createFromTimestamp(env('MAINTENANCE_END'))->format('i') }},
            endtimeSeconds: {{ Carbon\Carbon::createFromTimestamp(env('MAINTENANCE_END'))->format('s') }},
            timeZone: ""
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>
    <!--===============================================================================================-->
    <script src="/maintenance/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="/maintenance/js/main.js"></script>

</body>

</html>
