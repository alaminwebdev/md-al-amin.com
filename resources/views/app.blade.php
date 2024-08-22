<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="xhQ-OBkMbThmXIiJTRCrucGKBP6x12YtTqS1Fsm43Ys" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Md. Al Amin – Full Stack Web Developer">
    <meta name="keyword" content="Md. Al Amin, Full Stack Web Developer">
    <meta name="author" content="Md. Al Amin">
    <meta name="robots" content="max-image-preview:large">
    <meta name="keywords" content="Alamin, Md. Alamin, Mohammad Alamin, Software Enginner, Web Developer, CSE">

    <!-- Open Graph Tags -->
    <meta property="og:site_name" content="Md. Al Amin">
    <meta property="og:url" content="https://md-al-amin.com/"">
    <meta property="og:title" content="Md. Al Amin – Full Stack Web Developer">
    <meta property="og:description" content="Md. Al Amin – Full Stack Web Developer">
    <meta property="og:image" content="https://md-al-amin.com/img/me.jpg">

    <meta name="theme-color" content="#0f172a">


    <!-- Canonical and Shortlink Tags -->
    <link rel="canonical" href="https://md-al-amin.com/">
    <link rel="shortlink" href="https://md-al-amin.com/">


    <link rel="preload" href="{{ asset('font/Mona-Sans.woff2') }}" as="font" type="font/woff2" crossorigin>

    <title>Md. Al Amin – Full Stack Web Developer</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Bootstrap Version 5.3.2 Minified CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Swiper JS Version 10.3.1 Minified CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- Atropos Version  2.0.2 Minified CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/atropos.min.css') }}">

    <!-- Mouse Follower Version 1.1.2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/mouse-follower.min.css') }}">

    <!-- Nice Select CSS Version 1.0 File -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- Customized Style CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- ThemeChanger Javascript File -->
    <script src="{{ asset('assets/js/themechanger.js') }}"></script>

</head>

<body>

    <!-- Loader Start  -->
    @include('frontend.layouts.preloader')
    <!-- Loader End  -->

    <!-- Header Start -->
    @include('frontend.layouts.header')
    <!-- Header End -->

    <!-- Content Start -->
    @yield('content')
    <!-- Content Start -->

    <!-- Subscribe/Contact Start -->
    @include('frontend.contact')
    <!-- Subscribe/Contact End -->

    <!-- Footer Start -->
    @include('frontend.footer')
    <!-- Footer End -->


    <!-- JavaScripts -->

    <!-- Jquery Version 3.3.1 File -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- Bootstrap Bundle JavaScript Version 5.3.2 File -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Swiper JS JavaScript Version 10.3.1 File -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- Atropos JavaScript Version 2.0.2 File -->
    <script src="{{ asset('assets/js/atropos.min.js') }}"></script>

    <!-- GSAP JavaScript Version 3.12.2 File -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>

    <!-- Mouse Follower Version 1.1.2 JavaScript File -->
    <script src=" {{ asset('assets/js/mouse-follower.min.js') }}"></script>

    <!-- Jquery Ui Version 1.12.1 File -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- Nice Select Jquery Version 1.0 File -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- Customized JavaScript File -->
    <script src="{{ asset('assets/js/svg.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const loader = document.getElementById('bootstrap-loader');

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Serialize form data
                const formData = new FormData(contactForm);

                // Show the Bootstrap loader
                loader.style.display = 'block';

                // Perform AJAX form submission
                $.ajax({
                    type: 'POST',
                    url: "{{ route('contact.store') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);

                        // Display success or error message as an alert
                        setTimeout(function() {
                            if (response.success && response.success.trim() !== "") {
                                alert(response.success);
                            } else if (response.error) {
                                alert(response.error);
                            } else {
                                console.log("Unexpected response:", response);
                            }
                        }, 1000);

                        // Hide the Bootstrap loader
                        loader.style.display = 'none';

                        // Clear the input fields
                        contactForm.reset();
                    },
                    error: function(error) {
                        // Hide the preloader
                        let errorResponse = JSON.parse(error.responseText);
                        console.error("Error:", errorResponse);

                        setTimeout(function() {
                            if (errorResponse && errorResponse.errors) {
                                const validationErrors = errorResponse.errors;
                                const errorMessage = validationErrors.email?.[0] ||
                                    validationErrors.comments?.[0];
                                alert(errorMessage || 'An unexpected error occurred.');
                            } else {
                                alert('An unexpected error occurred.');
                            }
                        }, 1000);

                        // Hide the Bootstrap loader
                        loader.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('scroll', function () {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-links');
            
            let currentSection = '';
        
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 50) {
                    currentSection = section.getAttribute('id');
                }
            });
        
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(currentSection)) {
                    link.classList.add('active');
                }
            });
        });
    
    </script>

</body>

</html>
