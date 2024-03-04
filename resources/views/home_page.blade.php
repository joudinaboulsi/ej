@extends('layouts.frontend')
@section('content')

<div class="swiper-banner-two-wrapper" id="home">
    <div class="swiper mySwiper-banner-two">
        <div class="swiper-wrapper">
        @foreach($sliders as $slider)
                @include('components.slider' , ['background_class' => "assets/slider/$slider->bg", 'title' => "$slider->title" , 'description' => "$slider->desc"])
           @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- about area start -->
<div class="rts-about-area-one rts-section-gap" id="about">
    <div class="container">
    @foreach($about as $b)
        <div class="row">
            <div class="col-lg-5">
                <div class="thumbnail-about-one rts-reveal-one">
                    <img class="rts-reveal-image-one" src="{{asset('assets/about/'.$b->image)}}" alt="{{$b->alt}}">
                </div>
            </div>
            <div class="col-lg-6 mt_md--50 mt_sm--50">
                <div class="about-style-one-right">
                    <div class="title-style-left">
                        <div class="pre-title-area">
                            <span class="pre-title">{{$b->title}}</span>
                        </div>
                        <h3 class="title mt--0 mb--25 quote">{{$b->subtitle}}</h3>
                    </div>
                    <div class="disc mb--15">
                       {!!$b->text !!}
                    </div>
                   
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- about area end -->

<!-- service area start -->
<div class="rts-service-inner-area rts-section-gap bg-light" id="services">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                @foreach($homepage as $s)
                <div class="title-style-center">
                    <h3 class="title text-uppercase m-0">{{$s->title_service}}</h3>
                </div>
                @endforeach
            </div>
        </div>

        <div class="row g-5 mt--30">
        @foreach($services as $service)
            @include('components.service', [
            'icon' => "assets/service/$service->icon",
            'icon_white' => "assets/service/$service->icon_dark",
            'alt_icon' => "$service->alt",
            'service_title' => "$service->title",
            'service_description' => "$service->text"
            ])
        @endforeach
        </div>

    </div>
</div>
<!-- service area end -->

<!-- project area start -->
<div class="rts-project-area rts-section-gap gallery-swiper p-relative" id="projects">
    <div class="container">
        <div class="row">
        @foreach($homepage as $p)
            <div class="col-lg-12">
                <div class="title-style-center">
                    <h3 class="title text-uppercase m-0">{{$p->title_project}}</h3>
                </div>
            </div>
        @endforeach
        </div>
        <div class="swiper-container gallery-swipe mt--50">
            <div class="swiper-wrapper">
                @foreach($projects as $project)
                <div class="swiper-slide gallery-popup">
                    <div class="gallery">
                        <a href="{{asset('assets/project/'.$project->image_url)}}" class="hover-effect" data-imagelightbox="a">
                            <img class="w100" src="{{asset('assets/project/'.$project->image)}}" alt="">
                        </a>
                        @foreach($project->images as $img)
                       <a href="{{asset('assets/projects/'.$img->image)}}"></a>
                       @endforeach
                    </div>
                </div>
              @endforeach
            
            </div>
            </div>
        </div><!-- /.gallery -->
        <div class="swiper-btns">
     <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div></div>
    
</div>
<!-- project area end -->

<!-- reviews area start -->
<div class="rts-testimonials-area-start rts-section-gap bg-testimonials-1 bg_image bg-light">
    <div class="container">
        <div class="row">
        @foreach($homepage as $r)
            <div class="col-lg-12">
                <div class="title-style-center">
                    <h3 class="title text-uppercase m-0">{{$r->title_review}}</h3>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt--50">
            <div class="col-lg-12">
                <div class="testimonials-one-wrapper">
                    <!-- Swiper -->
                    <div class="swiper swiper-testimonails-one">
                        <div class="swiper-wrapper">
                        @foreach($reviews as $review)
                            @include('components.testimonials' , ['testimonials' => "$review->text"])
                        @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- reviews area end -->

<!-- 360 area start -->
@foreach($homepage as $home)
    @include('components.360view' , ['padding_class' => 'pb-0', 'view_title' => "$home->title_comp1", 'view_frame' => "$home->href_comp1"])
    @include('components.360view' , ['padding_class' => 'pb-0', 'view_title' => "$home->title_comp2", 'view_frame' => "$home->href_comp2"])
    @include('components.360view' , ['padding_class' => '', 'view_title' => "$home->title_comp3", 'view_frame' => "$home->href_comp3"])
@endforeach

<!-- 360 area end -->

<!-- team area start -->
<div class="team-area-start rts-section-gap bg-light" id="team">
    <div class="container">
        <div class="row">
        @foreach($homepage as $t)
            <div class="col-lg-12">
                <div class="title-style-center">
                    <h3 class="title text-uppercase m-0">{{$t->title_team}}</h3>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row mt--30 g-24 rts-slide-up">
        @foreach($team as $t)
            @include('components.team' , ['team_img' => "assets/team/$t->image", 'team_alt_img' => "$t->alt", 'team_name' => "$t->name", 'team_position' =>"$t->position"])
        @endforeach
        </div>
    </div>
</div>
<!-- team area end -->

<!-- contact area-team -->
<div class="rts-contact-area rts-section-gap" id="contact">
    <div class="container">
        <div class="row">
        @foreach($contact as $c)
            <div class="col-lg-12">
                <div class="title-style-center">
                    <h3 class="title text-uppercase mt--0">{{$c->title}}</h3>
                    <div class="disc">{!!$c->text!!}</div>
                </div>
            </div>
        @endforeach
            <div class="col-lg-12 mt_md--50 mt_sm--50">
                <div class="easy-appoinment-area">
                    <form method="POST" id="contact-form" action="{{ route('contact_path') }}" accept-charset="utf-8">
                        @csrf
                        <input type="text" placeholder="Your Name" required name="name">
                        <input type="text" placeholder="Your Number" required name="phone">
                        <input type="email" placeholder="Your Email" required name="email">
                        <textarea placeholder="Send Message" name="message"></textarea>
                        <button class="rts-btn" type="submit">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area-team end -->

@endsection