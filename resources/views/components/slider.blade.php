
<div class="swiper-slide">
    <!-- banner-two area start -->
    <div class="banner-twoa-rea-start bg_image banner-bg-2 "  style="background-image: url('{{ $background_class }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- banner content two inner area start -->
                    <div class="banner-inner-content-wrapper">
                        <h1 class="title">
                            {!! $title !!}
                        </h1>
                        <p class="disc">
                            {{ $description }}
                        </p>
                        <div class="slide-btn"><a href="#{{$slider->link_href}}" class="slide-ref">
                         <span class="rts-btn btn-border">{{$slider->link}} <i class="fa-regular fa-arrow-right"></i></span></a></div>
                    </div>
                    <!-- banner content two inner area end -->  
                 
                </div>
            </div>
        </div>
    </div>
    <!-- banner-two area end -->
</div>
