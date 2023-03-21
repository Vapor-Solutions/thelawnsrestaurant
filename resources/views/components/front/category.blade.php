<!-- Section Category -->
<section class="section kf-category" style="background-image: url(images/category_bg.jpg);">
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                <div class="kf-category-items element-anim-1 scroll-animate" data-animate="active">
                    @if ($categories)
                        @foreach ($categories as $category)
                            <div class="kf-category-item">
                                <div class="image kf-image-hover">
                                    <a href="{{ route('menu') }}"><img src="{{ $category->image_path }}"
                                            alt="" /></a>
                                </div>
                                <div class="desc">
                                    <h5 class="name">{{ $category->title }}</h5>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 offset-lg-1 align-self-center">

                <div class="kf-titles">
                    <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                        Popular Categories
                    </div>
                    <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                        Choose Your Best Food <br>From Categories
                    </h3>
                </div>

                <div class="kf-text element-anim-1 scroll-animate" data-animate="active">
                    <p>
                        Step into a world of flavors and aromas at The Lawns Restaurant. Our menu offers a diverse range
                        of dishes that showcase the beauty and complexity of Indian and Kenyan cuisine. Each plate is a
                        work of art, carefully crafted with quality ingredients and authentic spices to deliver a
                        symphony of flavors. Whether you're a fan of bold and spicy or mild and comforting, our menu has
                        something to offer for every palate. Come and experience the beauty of our cuisine for yourself
                    </p>
                </div>

                <a href="{{ route('menu') }}" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
                    <span>explore more Categories</span>
                    <i class="fas fa-chevron-right"></i>
                </a>

            </div>
        </div>

    </div>
</section>
