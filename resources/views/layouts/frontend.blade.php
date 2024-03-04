<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EjArchitects</title>

    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700&display=swap">

    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('/css/plugins/fontawesome-6.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap.min.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('/css/vendor/metismenu.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body class="onepage">

    @if (Session::has('msg'))
    <div class="popup modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close close-btn" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row p-4">
                        <p class="text-3 mb-0">{{ session('msg') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->

    @include('layouts.sidebar')

    <!-- scripts -->
    <script src="{{ asset('/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/waw.js') }}"></script>

    <!-- gsap plugins -->
    <script src="{{ asset('/js/vendor/gsap.js') }}"></script>
    <script src="{{ asset('/js/vendor/metismenu.js') }}"></script>
    <script src="{{ asset('/js/plugins/scrolltiger.js') }}"></script>
    <script src="{{ asset('/js/plugins/scrolltoplugin.js') }}"></script>
    <!-- <script src="{{ asset('/js/plugins/smoothscroll.js') }}"></script> -->
    <script src="{{ asset('/js/plugins/splittext.js') }}"></script>
    <!-- gsap plugins end-->

    <script src="{{ asset('/js/vendor/magnifying-popup.js') }}"></script>

    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('/js/vendor/chroma.min.js') }}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{ asset('/js/plugins/bootstrap.min.js') }}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{ asset('/js/vendor/jquery.validate.min.js') }}"></script>

    <!-- main Js -->
    <script src="{{ asset('/js/main.js') }}"></script>
    <script>
     $("#contact-form").validate();
     $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>
</body>

</html>