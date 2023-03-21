<!-- Section Testimonials Carousel -->
<section class="section kf-testimonials kf-testimonials-2 section-bg"
    style="background-image: url(/frontend/images/testimonials_bg2.jpeg);">
    <div class="container">

        <div class="kf-titles align-center">
            <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                Customer Feedback
            </div>
            <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                What Our Clients Say
            </h3>
        </div>

        <div class="kf-testimonials-carousel">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $testimonial)
                        <div class="swiper-slide">

                            <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ $testimonial->customer_image_path }}" alt="" />
                                </div>
                                <div class="desc">
                                    <div class="stars">
                                        @for ($i = 0; $i < $testimonial->rating; $i++)
                                        <i class="fas fa-star"></i>
                                        @endfor
                                    </div>
                                    <div class="text">
                                        {{$testimonial->description}}
                                    </div>
                                    <h5 class="name">{{ $testimonial->customer->name }}
                                        <em><small>{{ $testimonial->customer->email }}</small></em>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>

            </div>
        </div>

    </div>
</section>
