<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="xhQ-OBkMbThmXIiJTRCrucGKBP6x12YtTqS1Fsm43Ys" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Md. Al Amin – Full Stack Web Developer">
    <meta name="keyword" content="Md. Al Amin, Full Stack Web Developer">
    <meta name="author" content="Md. Al Amin">
    <meta name="robots" content="max-image-preview:large">

    <!-- Open Graph Tags -->
    <meta property="og:site_name" content="Md. Al Amin">
    <meta property="og:url" content="https://md-al-amin.com/"">
    <meta property="og:title" content="Md. Al Amin – Full Stack Web Developer">
    <meta property="og:description" content="Md. Al Amin – Full Stack Web Developer">
    <meta property="og:image" content="https://md-al-amin.com/img/me.jpg">


    <!-- Canonical and Shortlink Tags -->
    <link rel="canonical" href="https://md-al-amin.com/">
    <link rel="shortlink" href="https://md-al-amin.com/">

    <!-- DNS Prefetch for Google Fonts -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/iconoir.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" media="all">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">

    <title>Md. Al Amin – Full Stack Web Developer</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <meta name="theme-color" content="#0f172a">

    <!-- jquery -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}" id="jquery-core-js"></script>

</head>

<body class="home" data-aos-easing="ease" data-aos-duration="1500" data-aos-delay="0">

    @if (!isset($excludePreloader))
        @include('frontend.layouts.preloader')
    @endif

    @if (!isset($excludeStatusMessage))
        @include('frontend.layouts.status-message')
    @endif

    <main class="main-homepage">
        @include('frontend.layouts.header')
        @yield('content')
        {{-- @include('frontend.layouts.experience') --}}
        @include('frontend.layouts.footer')
    </main>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" id="bootstrap-js"></script>
    <script src="{{ asset('js/waypoints.min.js') }} " id="elementor-waypoints-js"></script>
    <script src="{{ asset('js/core.min.js') }}" id="jquery-ui-core-js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.hover3d.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>

    <script>
        $(document).ready(function() {

            document.querySelector('.navbar-toggler').addEventListener('click', function() {
                this.classList.toggle('active');
            })

            $(".about-pic-container").hover3d({
                selector: ".about-image",
                shine: true,
            });

            // Apply 3D effect on load for mobile devices
            if (/Mobi|Android/i.test(navigator.userAgent)) {
                $(".about-pic-container").addClass("initial3d");
            }

        })
    </script>

    <script>
        window.addEventListener("load", function() {
            const preloaderContainer = document.getElementById("md-preloader");
            const preloader = document.getElementById("preloader");

            preloader.style.display = "none";
            preloaderContainer.style.height = 0;

            // Masonary
            $('.grid').masonry({
                // options
                itemSelector: '.grid-item',
                //columnWidth: 200
            });

            setTimeout(function() {
                AOS.init({
                    // offset: 100,
                    delay: 200,
                    once: true
                });
            }, 500);
        });
    </script>

    <script>
        baguetteBox.run('.carousel-inner', {
            animation: 'fadeIn',
            noScrollbars: true,
            buttons: true,
            // captions: function(element) {
            //     return element.getElementsByTagName('img')[0].alt;
            // }
        });
    </script>
</body>

</html>
