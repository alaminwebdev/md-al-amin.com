<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="max-image-preview:large">
    <meta name="description" content="Md. Al Amin – A Full Stack Web Developer">
    <meta name="keyword" content="Md. Al Amin – A Full Stack Web Developer">
    <meta name="author" content="Md. Al Amin">


    <meta property="og:site_name" content="Md. Al Amin">
    <meta property="og:url" content="md-al-amin.com">
    <meta property="og:title" content="Md. Al Amin – Full Stack Web Developer">
    <meta property="og:description" content="Md. Al Amin – Full Stack Web Developer">
    <meta property="og:image" content="Md. Al Amin – Full Stack Web Developer">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">

    <title>Md. Al Amin – Personal Portfolio Website</title>

    <link rel="canonical" href="https://md-al-amin.com/">
    <link rel="shortlink" href="https://md-al-amin.com/">

    <link rel="stylesheet" id="icon-css" href="{{ asset('css/iconoir.css') }}" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('css/bootstrap.min.css') }}" media="all">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" id="" href="{{ asset('css/style.css') }}" media="all">
    <link rel="stylesheet" id="" href="{{ asset('css/responsive.css') }}" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">

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
        @include('frontend.scroll-animation')
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

            // Masonary
            $('.grid').masonry({
                // options
                itemSelector: '.grid-item',
                //columnWidth: 200
            });

            $(".about-pic-container").hover3d({
                selector: ".about-image",
                shine: true,
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
