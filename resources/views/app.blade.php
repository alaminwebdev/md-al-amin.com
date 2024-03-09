<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="max-image-preview:large">
    <meta name="description" content="Md. Al Amin – A Full Stack Web Developer">
    <meta name="keyword" content="Md. Al Amin – A Full Stack Web Developer">
    <meta name="author" content="Md. Al Amin">


    <meta property="og:site_name" content="Md. Al Amin">
    <meta property="og:url" content="md-al-amin.com">
    <meta property="og:title" content="Md. Al Amin – A Full Stack Web Developer">
    <meta property="og:description" content="Md. Al Amin – A Full Stack Web Developer">
    <meta property="og:image" content="Md. Al Amin – A Full Stack Web Developer">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">

    <title>Md. Al Amin – Personal Portfolio Website</title>

    <link rel="stylesheet" id="icon-css" href="{{ asset('css/iconoir.css') }}" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('css/bootstrap.min.css') }}" media="all">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" id="gridx-style-css" href="{{ asset('css/style.css') }}" media="all">
    <link rel="stylesheet" id="gridx-fonts-css" href="{{ asset('css/gridx-font.css') }}" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('css/elementor-icons.min.css') }}" media="all">
    <link rel="stylesheet" id="elementor-global-css" href="{{ asset('css/global.css') }} " media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="{{ asset('css/google-fonts.css') }}" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="canonical" href="">
    <link rel="shortlink" href="">
    <style>
        .about-area .about-me-box .img-box {
            background: linear-gradient(90deg, var(--primary_color) -15%, #C2EBFF 58%, var(--primary_color) 97%) !important;
        }
    </style>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}" id="jquery-core-js"></script>
</head>

<body class="home" data-aos-easing="ease" data-aos-duration="1500" data-aos-delay="0" >
    @include('frontend.layouts.preloader')
    <main class="main-homepage">
        @include('frontend.layouts.header')
        @yield('content')
        @include('frontend.layouts.footer')
    </main>

    <script src="{{ asset('js/index.js') }}" id="swv-js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" id="bootstrap-js"></script>
    <script src="{{ asset('js/main.js') }}" id="gridx-main-js"></script>
    <script src="{{ asset('js/waypoints.min.js') }} " id="elementor-waypoints-js"></script>
    <script src="{{ asset('js/core.min.js') }}" id="jquery-ui-core-js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.header-area .show-menu', function() {
                $(this).toggleClass('active');
                $(".header-area .navbar").toggleClass('active');
            });
            // Masonary
            $('.grid').masonry({
                // options
                itemSelector: '.grid-item',
                //columnWidth: 200
            });
        })
    </script>
    <script>
        window.addEventListener("load", function() {
            const preloaderContainer = document.getElementById("md-preloader");
            const preloader = document.getElementById("preloader");

            preloader.style.display = "none";
            preloaderContainer.style.height = 0;

            setTimeout(function() {
                AOS.init({
                    // offset: 100,
                    delay: 200,
                    once: true
                });
            }, 500);
        });
    </script>
</body>

</html>
