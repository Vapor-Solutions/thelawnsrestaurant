 <!-- Section Reservation -->
 <section class="section kf-reservation kf-section-no-margin">
    <div class="container">

        <div class="kf-reservation-form element-anim-1 scroll-animate" data-animate="active">

            <div class="image-left" style="background-image: url(images/reservation5.jpg);"></div>
            <div class="image-right" style="background-image: url(images/reservation6.jpg);"></div>

            <div class="kf-titles align-center">
                <div class="kf-subtitle">
                    Booking Table
                </div>
                <h3 class="kf-title">
                    Make Your Reservation
                </h3>
            </div>

            <form id="rform" method="post">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="kf-field">
                            <input type="text" name="name" placeholder="Full Name" />
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="kf-field">
                            <input type="email" name="email" placeholder="Email Address" />
                            <i class="fas fa-at"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="kf-field">
                            <input type="tel" name="tel" placeholder="Phone Number" />
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="kf-field">
                            <select name="persons">
                                <option>1 Person</option>
                                <option>2 Persons</option>
                                <option>3 Persons</option>
                                <option>4 Persons</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="kf-field">
                            <input type="date" name="date" />
                            <i class="far fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="kf-field">
                            <input type="text" name="time" placeholder="Time" />
                            <i class="far fa-clock"></i>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="kf-bts">
                            <a href="#" class="kf-btn"
                                onclick="$('#rform').submit(); return false;">
                                <span>booking table</span>
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
