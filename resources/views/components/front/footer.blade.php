<!-- Footer -->
<div class="kf-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                <!-- logo -->
                <div class="kf-logo element-anim-1 scroll-animate" data-animate="active">
                    <a href="index.html"><img src="/frontend/images/logo.png" alt="" /></a>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                <!-- hours -->
                <div class="kf-f-hours element-anim-1 scroll-animate" data-animate="active">
                    <h5>Working Hours</h5>
                    <ul>
                        <li>
                            Sunday - Thursday
                            <em>08:00 am - 09:00pm</em>
                        </li>
                        <li>
                            Only Friday
                            <em>03:00 pm - 09:00pm</em>
                        </li>
                        <li>
                            <strong>Saturday Close</strong>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">

                <!-- contact -->
                <div class="kf-f-contact element-anim-1 scroll-animate" data-animate="active">
                    <h5>Contact Us</h5>
                    <ul>
                        <li>
                            <i class="las la-map-marker"></i>
                            <em>Location :</em>
                            {{ env('LOCATION') }}
                        </li>
                        <li>
                            <i class="las la-envelope-open-text"></i>
                            <em>Email Address :</em>
                            <a href="mailto:{{ env('EMAIL_ADDRESS') }}">{{ env('EMAIL_ADDRESS') }}</a>
                        </li>
                        <li>
                            <i class="las la-phone"></i>
                            <em>Phone Number :</em>
                            <a href="tel:{{ env('PHONE_NUMBER') }}">{{ env('PHONE_NUMBER') }}</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">

                <!-- copyright -->
                <div class="kf-copyright element-anim-1 scroll-animate" data-animate="active">
                    Copyright © {{ Carbon\Carbon::now()->format('Y') }} The Lawns Restaurant, Nakuru. All Rights Reserved.
                </div>

            </div>
        </div>
    </div>
</div>
