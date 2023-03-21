 <!-- Section Menu -->
 <section class="section kf-menu-classic section-bg">
     <div class="container">

         <div class="kf-titles align-center">
             <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                 Choose Our Recommended
             </div>
             <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                 The Lawns Popular Choices
             </h3>
         </div>

         <div class="kf-menu-items" style="background-image: url(images/menu_logo.png);">
             <div class="row">

                 @foreach ($menuItems as $item)
                     <div class="kf-menu-item-col col-xs-12 col-sm-12 col-md-6 col-lg-4">
                         <div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
                             <div>
                                 <h5 class="name">{{ $item->title }}</h5>
                                 <div class="subname">{{ $item->description }}</div>
                                 <div class="price">
                                     <span><sup>{{ env('DEFAULT_CURRENCY_SYMBOL') }}</sup>{{ $item->price }}</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach

             </div>
         </div>

     </div>
 </section>
