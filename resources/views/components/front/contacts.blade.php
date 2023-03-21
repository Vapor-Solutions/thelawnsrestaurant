<!-- Section Contacts Info -->
<section class="section kf-contacts-info">
    <div class="container">

        <div class="kf-contacts-items row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                <div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
                    <div class="image">
                        <!--<img src="images/contact_icon1.png" alt="" />-->
                        <i class="las la-map-marked-alt"></i>
                    </div>
                    <div class="desc">
                        <h5 class="name">Main Location</h5>
                        <ul>
                            <li>{{ env('LOCATION') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                <div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
                    <div class="image">
                        <!--<img src="images/contact_icon2.png" alt="" />-->
                        <i class="las la-envelope-open-text"></i>
                    </div>
                    <div class="desc">
                        <h5 class="name">Email Address</h5>
                        <ul>
                            <li>{{ env('EMAIL_ADDRESS') }} <br>{{ env('WEBPAGE') }}</li>
                            <li>thelawnsrestaurant@gmail.com </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                <div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
                    <div class="image">
                        <!--<img src="images/contact_icon3.png" alt="" />-->
                        <i class="las la-headset"></i>
                    </div>
                    <div class="desc">
                        <h5 class="name">Phone Number</h5>
                        <ul>
                            <li>{{ env('PHONE_NUMBER') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Section Contacts Form -->
<section class="section kf-contacts-form">
    <div class="container">

        <div class="kf-reservation-form element-anim-1 scroll-animate" data-animate="active">

            <div class="kf-titles align-center">
                <div class="kf-subtitle">
                    Contact Us
                </div>
                <h3 class="kf-title">
                    Send Us Message
                </h3>
            </div>

            <form id="cform" method="post">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="kf-field">
                            <input type="text" name="name" placeholder="Full Name" />
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="kf-field">
                            <input type="email" name="email" placeholder="Email Address" />
                            <i class="fas fa-at"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="kf-field">
                            <input type="tel" name="tel" placeholder="Phone Number" />
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="kf-field">
                            <input type="text" name="subject" placeholder="Subject" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="kf-field">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="kf-bts">
                            <a href="#" class="kf-btn" onclick="$('#cform').submit(); return false;">
                                <span>Send us message</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="alert-success" style="display: none;">
                <p>Thanks, your message is sent successfully.</p>
            </div>

        </div>

    </div>
</section>
