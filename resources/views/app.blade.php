<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Md. Al Amin - Personal Portfolio</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Oswald:400,500&display=swap" rel="stylesheet">

    <!-- Main CSS file -->
    <link rel="stylesheet" href="{{ asset('common/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('common/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('common/css/animate.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('common/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('common/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('common/css/switcher.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/css/colors/default.css') }} " id="color-opt">
</head>

<body class="">

    @include('frontend.layouts.preloader')
    <section>
        @include('frontend.layouts.header')
        <div class="container">
            <!-- CHANGER -->
            <div class="md-changer">
                @include('frontend.layouts.dashboard')
                @include('frontend.layouts.about')
                @include('frontend.layouts.portfolio')
                @include('frontend.layouts.contact')
            </div>
            <!-- /CHANGER -->
        </div>
    </section>
    <!-- /HEADER -->

    <!-- Style switcher -->
    <div id="style-switcher">
        <div>
            <h3>Select your color</h3>
            <ul class="pattern">
                <li>
                    <a class="color1" href="#"></a>
                </li>
                <li>
                    <a class="color2" href="#"></a>
                </li>
                <li>
                    <a class="color3" href="#"></a>
                </li>
                <li>
                    <a class="color4" href="#"></a>
                </li>
                <li>
                    <a class="color5" href="#"></a>
                </li>
                <li>
                    <a class="color6" href="#"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="#" class="settings"><i class="fas fa-cog"></i></a>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- Background Music -->
    <div class="music-player__wrapper">
        <div class="music-player">
            <div class="music-player__bar"></div>
            <div class="music-player__bar delay--one"></div>
            <div class="music-player__bar delay--two"></div>
            <div class="music-player__bar"></div>
            <div class="music-player__bar delay--one"></div>
            <div class="music-player__bar"></div>
            <div class="music-player__bar delay--two"></div>
        </div>


        <audio id="audio-player" autoplay loop>
            <source src="Music/1.mp3" type="audio/mpeg">
            <p class="sr-only">Your browser does not support the audio element.</p>
        </audio>

    </div>
    <!-- Background Music End -->

    <!-- jQuery -->
    <script src="{{ asset('common/js/jquery.min.js') }}"></script>
    <!-- switcher -->
    <script src="{{ asset('common/js/switcher.js') }}"></script>
    <!-- jQuery Easings -->
    <script src="{{ asset('common/js/jquery.easing.1.3.js') }}"></script>
    <!-- Velocity js -->
    <script src="{{ asset('common/js/velocity.min.js') }} "></script>
    <!-- Lettering -->
    <script src="{{ asset('common/js/jquery.lettering.js') }}"></script>
    <!-- Textillate -->
    <script src="{{ asset('common/js/jquery.textillate.js') }}"></script>
    <!-- magnific-popup -->
    <script src="{{ asset('common/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('common/js/bootstrap.min.js') }} js/bootstrap.min.js"></script>
    <!-- Main js scripts -->
    <script src="{{ asset('common/js/main.js') }}"></script>
</body>

</html>
