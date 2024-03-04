<div class="col-lg-4 col-md-6 col-sm-6 col-12">
    
    <div class="single-service-area-one" style="--bg-image: url('{{asset('assets/service/'.$service->image)}}')">
        <div class="icon">
            <img src="{{ $icon }}" class="img-1" width="54" alt=" Ej Architects {{ $alt_icon }}">
            <img src="{{ $icon_white }}" class="img-2" width="54" alt="{{ $alt_icon }}">
        </div>
        <h6 class="title">{{ $service_title }}</h6>
        <div class="disc">
            {!! $service_description !!}
        </div>
    </div>
</div>