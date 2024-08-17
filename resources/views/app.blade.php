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

    @yield('content')

    <!-- Top Seller Start -->
    <section class="section-mid-pt">
        <div class="container">
            <div class="text-wrapper d-flex flex-column justify-content-center align-items-center">
                <h2 class="title bg-text d-inline-block bg-text-stroke">Seller</h2>
                <h3 class="small-title d-inline-block bg-text">Top Seller</h3>
            </div>
        </div>
        <div class="top-seller-bottom-section nft-swiper-wraaper position-relative">
            <div class="top-seller-swiper-one-card">
                <div class="swiper top-seller-swiper-one">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jenny-wilson.png"
                                            alt="nft-jenny-wilson" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jenny Wilson</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">82,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/thom-cupper.png"
                                            alt="nft-thom-cupper" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Thom Cooper</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">45,500
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/harry-top.png"
                                            alt="nft-harry-top" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Harry Top</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">33,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jack-pol.png"
                                            alt="nft-jack-pol" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jack Pol</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">26,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jenny-wilson.png"
                                            alt="nft-jenny-wilson" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jenny Wilson</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">82,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/thom-cupper.png"
                                            alt="nft-thom-cupper" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Thom Cooper</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">45,500
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/harry-top.png"
                                            alt="nft-harry-top" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Harry Top</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">33,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jack-pol.png"
                                            alt="nft-jack-pol" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jack Pol</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">26,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jenny-wilson.png"
                                            alt="nft-jenny-wilson" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jenny Wilson</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">82,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/thom-cupper.png"
                                            alt="nft-thom-cupper" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Thom Cooper</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">45,500
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jenny-wilson.png"
                                            alt="nft-jenny-wilson" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jenny Wilson</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">82,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/thom-cupper.png"
                                            alt="nft-thom-cupper" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Thom Cooper</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">45,500
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/harry-top.png"
                                            alt="nft-harry-top" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Harry Top</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">33,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-seller-swiper-two-card">
                <div class="swiper top-seller-swiper-two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/oliver.png"
                                            alt="nft-oliver" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Oliver</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">70,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jerome-bell.png"
                                            alt="jerome-bell" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jerome bell</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">45,500
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/cody-fisher.png"
                                            alt="nft-cody-fisher" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Cody fisher</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">33,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/albert-flores.png"
                                            alt="nft-albert-flores" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Albert Flores</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">26,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/oliver.png"
                                            alt="nft-oliver" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Oliver</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">70,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jerome-bell.png"
                                            alt="nft-jerome-bell" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jerome bell</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">45,500
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/cody-fisher.png"
                                            alt="nft-cody-fisher" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Cody fisher</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">33,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jack-pol.png"
                                            alt="nft-jack-pol" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jack Pol</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">26,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jenny-wilson.png"
                                            alt="nft-jenny-wilson" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jenny Wilson</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">82,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/thom-cupper.png"
                                            alt="nft-thom-cupper" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Thom Cooper</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">45,500
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/cody-fisher.png"
                                            alt="nft-cody-fisher" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Cody fisher</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">33,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/albert-flores.png"
                                            alt="nft-albert-flores" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Albert Flores</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">26,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/oliver.png"
                                            alt="nft-oliver" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Oliver</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">70,100
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide overflow-hidden">
                            <div class="top-seller-card d-flex align-items-center">
                                <div class="top-seller-avatar-card position-relative">
                                    <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/jerome-bell.png"
                                            alt="nft-jerome-bell" class="w-100 h-100 object-fit-contain">
                                    </div>
                                    <span
                                        class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0"
                                        data-icon="iconVerifyTick">
                                    </span>
                                </div>
                                <div>
                                    <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                                        Jerome bell</h6>
                                    <div class="top-seller-rupees-card d-flex align-items-center">
                                        <span
                                            class="top-seller-rupee-icon d-flex justify-content-center align-items-center"
                                            data-icon="iconDiamondShape">
                                        </span>
                                        <span
                                            class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">45,500
                                            ETH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <a href="ranking.html"
                class="top-seller-view-all h6 sm text-decoration-underline d-inline-block text-center fw-medium"
                data-cursor-text="Click me!" data-cursor="nft-click-me-cursor">View
                All</a>
        </div>
    </section>
    <!-- Top Seller End -->


    <!-- LIVE Auction Start -->
    <section class="section-mid-pt">
        <div class="container">
            <div class="live-auction-top-card d-flex justify-content-between align-items-center">
                <div class="text-wrapper d-flex flex-column justify-content-start align-items-start">
                    <h2 class="live-auction-main-heading d-inline-block title bg-text text-start bg-text-stroke">LIVE
                        Auction</h2>
                    <h3 class="live-auction-title small-title d-inline-block bg-text text-start">LIVE Auction</h3>
                </div>
                <div class="live-auction-swiper-btn-card d-flex align-items-center">
                    <button
                        class="swiper-custom-arrow-btn live-auction-prev-button transparent-gradiant-hover-btn transition-03-linear   z-1 position-relative bg-transparent d-flex justify-content-center align-items-center rounded-circle transition-03-linear">
                        <span class="d-flex justify-content-center align-items-center" data-icon="iconNextArrow">
                        </span>
                    </button>
                    <button
                        class="swiper-custom-arrow-btn live-auction-next-button transparent-gradiant-hover-btn transition-03-linear  z-1 position-relative bg-transparent d-flex justify-content-center align-items-center rounded-circle transition-03-linear">
                        <span class="d-flex justify-content-center align-items-center" data-icon="iconPrevArrow">
                        </span>
                    </button>
                </div>
            </div>
            <div class="live-auction-swiper-card-wrapper w-100 position-relative">
                <div class="live-auction-swiper-card position-relative">
                    <div class="swiper live-auction-swiper live-auction-swiper-wrapper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide overflow-hidden">
                                <div class="live-auction-card position-relative transition-03-linear ratio">
                                    <div class="live-auction-img-card z-n1">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/ebony-girl.jpg"
                                            alt="ebony-girl-wearing-headset"
                                            class="w-100 h-100 bg-size-cover object-position-top">
                                    </div>
                                    <div
                                        class="live-auction-text-card position-absolute d-flex flex-column justify-content-end transition-03-linear">
                                        <div class="live-auction-card-data w-100 position-relative z-1">
                                            <div
                                                class="d-flex justify-content-between align-items-xl-center align-items-start">
                                                <h4
                                                    class="live-auction-card-title  text-white fw-semibold text-ellipsis line-clamp-3 text-capitalize">
                                                    ebony girl wearing headset</h4>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="live-auction-like-icon text-white d-flex justify-content-center align-items-center"
                                                        data-icon="iconHeart">
                                                    </span>
                                                    <span
                                                        class="live-auction-like-count p sm d-in text-white fw-normal">564</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <p class="live-auction-by sm fw-normal">by </p>
                                                    <p class="live-auction-by-name sm fw-normal text-white">rasselmrh
                                                    </p>
                                                </div>
                                                <p class=" live-auction-bid sm fw-normal">Highest bid 1/20</p>
                                            </div>
                                            <div
                                                class="live-auction-price-card d-flex justify-content-between align-items-xl-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-weth-icon"
                                                        data-icon="iconDiamondShape">
                                                    </span>
                                                    <span
                                                        class="live-auction-weth p lg d-inline-block fw-medium lh-1">4.8
                                                        wETH</span>
                                                </div>
                                                <div class="d-flex align-items-center live-auction-clock-card">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-clock-icon text-white opacity-50"
                                                        data-icon="iconClock">
                                                    </span>
                                                    <span
                                                        class="live-auction-time p sm d-inline-block text-white fw-normal">3:44:12:43</span>
                                                </div>
                                            </div>
                                            <div class="live-auction-avatar-card rounded-circle position-absolute">
                                                <div class="live-auction-avatar w-100 h-100">
                                                    <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/ebony-girl-sub-img.png"
                                                        alt="live-auction-avatar"
                                                        class="w-100 h-100 object-fit-contain rounded-circle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="live-auction-place-bid-card transition-03-linear d-flex justify-content-center align-items-end h-max-content position-absolute z-2 start-0 transition-03-linear">
                                        <a href="./explore-item-details.html"
                                            class="live-auction-place-bid-btn button primary-btn">
                                            <span
                                                class="live-auction-place-bid-icon d-flex justify-content-center align-items-center text-white"
                                                data-icon="iconTrolly">
                                            </span>
                                            <span
                                                class="live-auction-place-bid-text p sm d-inline-block fw-medium text-white text-capitalize lh-base">Place
                                                Bid</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide overflow-hidden">
                                <div class="live-auction-card position-relative transition-03-linear ratio">
                                    <div class="live-auction-img-card z-n1">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/futuristic-buddha.jpg"
                                            alt="ebony-girl-wearing-headset"
                                            class="w-100 h-100 bg-size-cover object-position-top">
                                    </div>
                                    <div
                                        class="live-auction-text-card position-absolute d-flex flex-column justify-content-end transition-03-linear">
                                        <div class="live-auction-card-data w-100 position-relative z-1">
                                            <div
                                                class="d-flex justify-content-between align-items-xl-center align-items-start">
                                                <h4
                                                    class="live-auction-card-title  text-white fw-semibold text-ellipsis line-clamp-3 text-capitalize">
                                                    Futuristic Buddha</h4>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="live-auction-like-icon text-white d-flex justify-content-center align-items-center"
                                                        data-icon="iconHeart">
                                                    </span>
                                                    <span
                                                        class="live-auction-like-count p sm d-in text-white fw-normal">559</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <p class="live-auction-by sm fw-normal">by </p>
                                                    <p class="live-auction-by-name sm fw-normal text-white">Elix_Qe
                                                    </p>
                                                </div>
                                                <p class=" live-auction-bid sm fw-normal">Highest bid 1/20</p>
                                            </div>
                                            <div
                                                class="live-auction-price-card d-flex justify-content-between align-items-xl-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-weth-icon"
                                                        data-icon="iconDiamondShape">
                                                    </span>
                                                    <span
                                                        class="live-auction-weth p lg d-inline-block fw-medium lh-1">4.8
                                                        wETH</span>
                                                </div>
                                                <div class="d-flex align-items-center live-auction-clock-card">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-clock-icon text-white opacity-50"
                                                        data-icon="iconClock">
                                                    </span>
                                                    <span
                                                        class="live-auction-time p sm d-inline-block text-white fw-normal">1
                                                        hr left</span>
                                                </div>
                                            </div>
                                            <div class="live-auction-avatar-card rounded-circle position-absolute">
                                                <div class="live-auction-avatar w-100 h-100">
                                                    <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/futuristic-buddha-sub-img.png"
                                                        alt="live-auction-avatar"
                                                        class="w-100 h-100 object-fit-contain rounded-circle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="live-auction-place-bid-card transition-03-linear d-flex justify-content-center align-items-end h-max-content position-absolute z-2 start-0 transition-03-linear">
                                        <a href="./explore-item-details.html"
                                            class="live-auction-place-bid-btn button primary-btn">
                                            <span
                                                class="live-auction-place-bid-icon d-flex justify-content-center align-items-center text-white"
                                                data-icon="iconTrolly">
                                            </span>
                                            <span
                                                class="live-auction-place-bid-text p sm d-inline-block fw-medium text-white text-capitalize lh-base">Place
                                                Bid</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide overflow-hidden">
                                <div class="live-auction-card position-relative transition-03-linear ratio">
                                    <div class="live-auction-img-card z-n1">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/female-robot.jpg"
                                            alt="ebony-girl-wearing-headset"
                                            class="w-100 h-100 bg-size-cover object-position-top">
                                    </div>
                                    <div
                                        class="live-auction-text-card position-absolute d-flex flex-column justify-content-end transition-03-linear">
                                        <div class="live-auction-card-data w-100 position-relative z-1">
                                            <div
                                                class="d-flex justify-content-between align-items-xl-center align-items-start">
                                                <h4
                                                    class="live-auction-card-title  text-white fw-semibold text-ellipsis line-clamp-3 text-capitalize">
                                                    Futuristic Female Robot</h4>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="live-auction-like-icon text-white d-flex justify-content-center align-items-center"
                                                        data-icon="iconHeart">
                                                    </span>
                                                    <span
                                                        class="live-auction-like-count p sm d-in text-white fw-normal">1457</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <p class="live-auction-by sm fw-normal">by </p>
                                                    <p class="live-auction-by-name sm fw-normal text-white">Mimi_Chao
                                                    </p>
                                                </div>
                                                <p class=" live-auction-bid sm fw-normal">Highest bid 1/20</p>
                                            </div>
                                            <div
                                                class="live-auction-price-card d-flex justify-content-between align-items-xl-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-weth-icon"
                                                        data-icon="iconDiamondShape">
                                                    </span>
                                                    <span
                                                        class="live-auction-weth p lg d-inline-block fw-medium lh-1">4.8
                                                        wETH</span>
                                                </div>
                                                <div class="d-flex align-items-center live-auction-clock-card">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-clock-icon text-white opacity-50"
                                                        data-icon="iconClock">
                                                    </span>
                                                    <span
                                                        class="live-auction-time p sm d-inline-block text-white fw-normal">3:44:12:43</span>
                                                </div>
                                            </div>
                                            <div class="live-auction-avatar-card rounded-circle position-absolute">
                                                <div class="live-auction-avatar w-100 h-100">
                                                    <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/female-robot-sub-img.png"
                                                        alt="live-auction-avatar"
                                                        class="w-100 h-100 object-fit-contain rounded-circle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="live-auction-place-bid-card transition-03-linear d-flex justify-content-center align-items-end h-max-content position-absolute z-2 start-0 transition-03-linear">
                                        <a href="./explore-item-details.html"
                                            class="live-auction-place-bid-btn button primary-btn">
                                            <span
                                                class="live-auction-place-bid-icon d-flex justify-content-center align-items-center text-white"
                                                data-icon="iconTrolly">
                                            </span>
                                            <span
                                                class="live-auction-place-bid-text p sm d-inline-block fw-medium text-white text-capitalize lh-base">Place
                                                Bid</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide overflow-hidden">
                                <div class="live-auction-card position-relative transition-03-linear ratio">
                                    <div class="live-auction-img-card z-n1">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/ebony-girl.jpg"
                                            alt="ebony-girl-wearing-headset"
                                            class="w-100 h-100 bg-size-cover object-position-top">
                                    </div>
                                    <div
                                        class="live-auction-text-card position-absolute d-flex flex-column justify-content-end transition-03-linear">
                                        <div class="live-auction-card-data w-100 position-relative z-1">
                                            <div
                                                class="d-flex justify-content-between align-items-xl-center align-items-start">
                                                <h4
                                                    class="live-auction-card-title  text-white fw-semibold text-ellipsis line-clamp-3 text-capitalize">
                                                    ebony girl wearing headset</h4>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="live-auction-like-icon text-white d-flex justify-content-center align-items-center"
                                                        data-icon="iconHeart">
                                                    </span>
                                                    <span
                                                        class="live-auction-like-count p sm d-in text-white fw-normal">564</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <p class="live-auction-by sm fw-normal">by </p>
                                                    <p class="live-auction-by-name sm fw-normal text-white">rasselmrh
                                                    </p>
                                                </div>
                                                <p class=" live-auction-bid sm fw-normal">Highest bid 1/20</p>
                                            </div>
                                            <div
                                                class="live-auction-price-card d-flex justify-content-between align-items-xl-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-weth-icon"
                                                        data-icon="iconDiamondShape">
                                                    </span>
                                                    <span
                                                        class="live-auction-weth p lg d-inline-block fw-medium lh-1">4.8
                                                        wETH</span>
                                                </div>
                                                <div class="d-flex align-items-center live-auction-clock-card">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-clock-icon text-white opacity-50"
                                                        data-icon="iconClock">
                                                    </span>
                                                    <span
                                                        class="live-auction-time p sm d-inline-block text-white fw-normal">3:44:12:43</span>
                                                </div>
                                            </div>
                                            <div class="live-auction-avatar-card rounded-circle position-absolute">
                                                <div class="live-auction-avatar w-100 h-100">
                                                    <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/ebony-girl-sub-img.png"
                                                        alt="live-auction-avatar"
                                                        class="w-100 h-100 object-fit-contain rounded-circle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="live-auction-place-bid-card transition-03-linear d-flex justify-content-center align-items-end h-max-content position-absolute z-2 start-0transition-03-linear">
                                        <a href="./explore-item-details.html"
                                            class="live-auction-place-bid-btn button primary-btn">
                                            <span
                                                class="live-auction-place-bid-icon d-flex justify-content-center align-items-center text-white"
                                                data-icon="iconTrolly">
                                            </span>
                                            <span
                                                class="live-auction-place-bid-text p sm d-inline-block fw-medium text-white text-capitalize lh-base">Place
                                                Bid</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide overflow-hidden">
                                <div class="live-auction-card position-relative transition-03-linear ratio">
                                    <div class="live-auction-img-card z-n1">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/futuristic-buddha.jpg"
                                            alt="ebony-girl-wearing-headset"
                                            class="w-100 h-100 bg-size-cover object-position-top">
                                    </div>
                                    <div
                                        class="live-auction-text-card position-absolute d-flex flex-column justify-content-end transition-03-linear">
                                        <div class="live-auction-card-data w-100 position-relative z-1">
                                            <div
                                                class="d-flex justify-content-between align-items-xl-center align-items-start">
                                                <h4
                                                    class="live-auction-card-title  text-white fw-semibold text-ellipsis line-clamp-3 text-capitalize">
                                                    Futuristic Buddha</h4>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="live-auction-like-icon text-white d-flex justify-content-center align-items-center"
                                                        data-icon="iconHeart">
                                                    </span>
                                                    <span
                                                        class="live-auction-like-count p sm d-in text-white fw-normal">559</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <p class="live-auction-by sm fw-normal">by </p>
                                                    <p class="live-auction-by-name sm fw-normal text-white">Elix_Qe
                                                    </p>
                                                </div>
                                                <p class=" live-auction-bid sm fw-normal">Highest bid 1/20</p>
                                            </div>
                                            <div
                                                class="live-auction-price-card d-flex justify-content-between align-items-xl-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-weth-icon"
                                                        data-icon="iconDiamondShape">
                                                    </span>
                                                    <span
                                                        class="live-auction-weth p lg d-inline-block fw-medium lh-1">4.8
                                                        wETH</span>
                                                </div>
                                                <div class="d-flex align-items-center live-auction-clock-card">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-clock-icon text-white opacity-50"
                                                        data-icon="iconClock">
                                                    </span>
                                                    <span
                                                        class="live-auction-time p sm d-inline-block text-white fw-normal">1
                                                        hr left</span>
                                                </div>
                                            </div>
                                            <div class="live-auction-avatar-card rounded-circle position-absolute">
                                                <div class="live-auction-avatar w-100 h-100">
                                                    <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/futuristic-buddha-sub-img.png"
                                                        alt="live-auction-avatar"
                                                        class="w-100 h-100 object-fit-contain rounded-circle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="live-auction-place-bid-card transition-03-linear d-flex justify-content-center align-items-end h-max-content position-absolute z-2 start-0 transition-03-linear">
                                        <a href="./explore-item-details.html"
                                            class="live-auction-place-bid-btn button primary-btn">
                                            <span
                                                class="live-auction-place-bid-icon d-flex justify-content-center align-items-center text-white"
                                                data-icon="iconTrolly">
                                            </span>
                                            <span
                                                class="live-auction-place-bid-text p sm d-inline-block fw-medium text-white text-capitalize lh-base">Place
                                                Bid</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide overflow-hidden">
                                <div class="live-auction-card position-relative transition-03-linear ratio">
                                    <div class="live-auction-img-card z-n1">
                                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/female-robot.jpg"
                                            alt="ebony-girl-wearing-headset"
                                            class="w-100 h-100 bg-size-cover object-position-top">
                                    </div>
                                    <div
                                        class="live-auction-text-card position-absolute d-flex flex-column justify-content-end transition-03-linear">
                                        <div class="live-auction-card-data w-100 position-relative z-1">
                                            <div
                                                class="d-flex justify-content-between align-items-xl-center align-items-start">
                                                <h4
                                                    class="live-auction-card-title  text-white fw-semibold text-ellipsis line-clamp-3 text-capitalize">
                                                    Futuristic Female Robot</h4>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="live-auction-like-icon text-white d-flex justify-content-center align-items-center"
                                                        data-icon="iconHeart">
                                                    </span>
                                                    <span
                                                        class="live-auction-like-count p sm d-in text-white fw-normal">1457</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <p class="live-auction-by sm fw-normal">by </p>
                                                    <p class="live-auction-by-name sm fw-normal text-white">Mimi_Chao
                                                    </p>
                                                </div>
                                                <p class=" live-auction-bid sm fw-normal">Highest bid 1/20</p>
                                            </div>
                                            <div
                                                class="live-auction-price-card d-flex justify-content-between align-items-xl-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-weth-icon"
                                                        data-icon="iconDiamondShape">
                                                    </span>
                                                    <span
                                                        class="live-auction-weth p lg d-inline-block fw-medium lh-1">4.8
                                                        wETH</span>
                                                </div>
                                                <div class="d-flex align-items-center live-auction-clock-card">
                                                    <span
                                                        class="d-flex justify-content-center align-items-center live-auction-clock-icon text-white opacity-50"
                                                        data-icon="iconClock">
                                                    </span>
                                                    <span
                                                        class="live-auction-time p sm d-inline-block text-white fw-normal">3:44:12:43</span>
                                                </div>
                                            </div>
                                            <div class="live-auction-avatar-card rounded-circle position-absolute">
                                                <div class="live-auction-avatar w-100 h-100">
                                                    <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/female-robot-sub-img.png"
                                                        alt="live-auction-avatar"
                                                        class="w-100 h-100 object-fit-contain rounded-circle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="live-auction-place-bid-card transition-03-linear d-flex justify-content-center align-items-end h-max-content position-absolute z-2 start-0 transition-03-linear">
                                        <a href="./explore-item-details.html"
                                            class="live-auction-place-bid-btn button primary-btn">
                                            <span
                                                class="live-auction-place-bid-icon d-flex justify-content-center align-items-center text-white"
                                                data-icon="iconTrolly">
                                            </span>
                                            <span
                                                class="live-auction-place-bid-text p sm d-inline-block fw-medium text-white text-capitalize lh-base">Place
                                                Bid</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a href="./explore-products.html"
                    class="explore-more-link h6 sm fw-medium text-decoration-underline d-inline-block text-center"
                    data-cursor-text="Click me!" data-cursor="nft-click-me-cursor">Explore
                    More</a>
            </div>
        </div>
    </section>
    <!-- LIVE Auction End -->

    <!-- Subscribe Start -->
    <section class="subscribe-and-get-update-section section-pt">
        <div class="container">
            <div class="subscribe-update-main-wrapper position-relative">
                <div class="subscribe-update-wrapper d-flex align-items-center overflow-hidden position-relative">
                    <div class="subscribe-update-img flex-center"><img
                            src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/subscribe-update-img.png"
                            alt="subscribe-section-img">
                    </div>
                    <div class="subscribe-content-wrapper">
                        <div class="subscribe-title-info d-flex align-items-center">
                            <div class="subscribe-title w-100">
                                <h2 class="small-title text-center text-lg-start d-inline-block">Subscribe and get
                                    updates
                                    every week.</h2>
                            </div>
                            <div class="subscribe-update-info w-100">
                                <p class="fw-normal subscribe-info-text text-center text-lg-start mb-0">We hae a blog
                                    related to nft
                                    so we
                                    can share thoughts and routines on our blog which is updated weekly.</p>
                            </div>
                        </div>
                        <form action="index.html">
                            <div class="input-subscribe-btn-wrapper d-flex align-items-center">
                                <input type="email" class="custom-input" placeholder="Enter your email address"
                                    required="">
                                <button class="button primary-btn subscribe-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="top-left-diamond-img position-absolute w-100 h-100"><img class="contain-img"
                            src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/top-left-diamond-img.png"
                            alt="subscribe-diamond-img"></div>
                </div>
                <div class="subscribe-bottom-left-diamond-img position-absolute bottom-left-img w-100 h-100"><img
                        class="contain-img"
                        src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/bottom-left-diamond-img.png"
                        alt="subscribe-diamond-img"></div>
                <div class="position-absolute top-right-diamond-img top-0 end-0 w-100 h-100"><img
                        class="contain-img"
                        src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/top-right-diamond-img.png"
                        alt="subscribe-diamond-img"></div>
                <div class="position-absolute top-right-secondary-img top-0 end-0 w-100 h-100"><img
                        class="contain-img"
                        src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/nft/top-right-corner-secondary.png"
                        alt="subscribe-diamond-img"></div>
            </div>
        </div>
    </section>
    <!-- Subscribe End -->

    <!-- Footer Start -->
    <footer class="footer section-mt">
        <div class="container">
            <div class="d-grid footer-wrapper">
                <div class="footer-logo-wrapper">
                    <a href="index.html" class="logo-wrapper d-block">
                        <img src="../../staging.whiteorangesoftware.com/theme-nft/assets/images/logo/logo.svg"
                            class="img-fluid" alt="logo">
                    </a>
                    <p class="footer-about-wrapper fw-normal mb-0 lg">
                        Discover a rare abstract item around the world discover, create &amp; sell artworks.
                    </p>
                </div>
                <div class="footer-link-wrapper">
                    <h2 class="p lg text-capitalize font-secondary fw-normal">Pages</h2>
                    <ul class="footer-link-group">
                        <li><a href="explore-products.html" class="footer-link"
                                data-cursor="nft-magnifiers-cursor" data-cursor-text="Click me!">All
                                NFTs</a></li>
                        <li><a href="#create-sell-nft-section" class="footer-link"
                                data-cursor="nft-magnifiers-cursor" data-cursor-text="Click me!">How It Works</a>
                        </li>
                        <li><a href="create-nft.html" class="footer-link" data-cursor="nft-magnifiers-cursor"
                                data-cursor-text="Click me!">Create</a></li>
                        <li><a href="explore-products.html" class="footer-link"
                                data-cursor="nft-magnifiers-cursor" data-cursor-text="Click me!">Explore</a></li>
                        <li><a href="privacy-policy.html" class="footer-link" data-cursor="nft-magnifiers-cursor"
                                data-cursor-text="Click me!">Privacy &amp; Terms</a></li>
                    </ul>
                </div>
                <div class="footer-link-wrapper">
                    <h2 class="p lg text-capitalize font-secondary fw-normal">Community</h2>
                    <ul class="footer-link-group">
                        <li><a href="contactus.html" class="footer-link" data-cursor="nft-magnifiers-cursor"
                                data-cursor-text="Click me!">Help Center</a></li>
                        <li><a href="coming-soon.html" class="footer-link" data-cursor="nft-magnifiers-cursor"
                                data-cursor-text="Click me!">Partners</a></li>
                        <li><a href="coming-soon.html" class="footer-link" data-cursor="nft-magnifiers-cursor"
                                data-cursor-text="Click me!">Suggestions</a></li>
                        <li><a href="blogs.html" class="footer-link" data-cursor="nft-magnifiers-cursor"
                                data-cursor-text="Click me!">Blog</a></li>
                        <li><a href="blogs.html" class="footer-link" data-cursor="nft-magnifiers-cursor"
                                data-cursor-text="Click me!">Newsletter</a></li>
                    </ul>
                </div>
                <div class="footer-contactus-wrapper d-flex flex-column">
                    <h2 class="p lg text-capitalize font-secondary fw-normal">Contact us</h2>
                    <a href="https://maps.app.goo.gl/F4qWgVwCpqjSgi6SA" target="_blank"
                        class="fw-normal footer-contactus-link p lg fw-normal">
                        4001, 4th Floor APMC, Krushi Bazaar, Sahara Darwaja, Begampura, Surat, Gujarat 395002
                        Massachusetts
                    </a>
                    <div class="mt-sm-auto mt-5">
                        <ul class="d-grid social-icons-list-wrapper">
                            <li class="social-icon-list">
                                <a href="https://www.facebook.com/" target="_blank"
                                    class="social-icons-link flex-center">
                                    <i data-icon="facebookIcon" class="social-icons flex-center"></i>
                                </a>
                            </li>
                            <li class="social-icon-list">
                                <a href="https://www.instagram.com/" target="_blank"
                                    class="social-icons-link flex-center">
                                    <i data-icon="instagramIcon" class="social-icons flex-center"></i>
                                </a>
                            </li>
                            <li class="social-icon-list">
                                <a href="https://twitter.com/ " target="_blank"
                                    class="social-icons-link flex-center">
                                    <i data-icon="twitterIcon" class="social-icons flex-center"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <label class="m-0 text-center d-block">Copyright <b>©</b> 2024. All Rights Reserved.</label>
            </div>
        </div>
    </footer>
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
    
</body>

</html>
