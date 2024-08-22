<section class="hero overflow-hidden h-100 atropos hero-atropos section-pb" id="banner">
    <div class="container hero-container">
        <div class="hero-start-line-center position-absolute">
            <div class="start-line-container">
                <div class="star-line">
                    <i data-icon="starIcon" class="anim-star d-flex justify-content-center star-line-icon"></i>
                </div>
            </div>
        </div>
        <div class="hero-start-line-right position-absolute">
            <div class="start-line-container down-star">
                <div class="star-line">
                    <i data-icon="starIcon" class="anim-star d-flex justify-content-center star-line-icon"></i>
                </div>
            </div>
        </div>
        <div class="hero-flex d-flex">
            <div class="hero-left">
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex me-4">
                        <div class="rounded-circle creator-avatar-wrapper">
                            <img src="{{ asset('img/me-2.jpg') }}" alt="creator-avatar" class="rounded-circle object-fit-cover w-100 h-100">
                        </div>
                        <div class="rounded-circle creator-avatar-wrapper">
                            <img src="{{ asset('img/me-3.jpg') }}" alt="creator-avatar" class="rounded-circle object-fit-cover w-100 h-100">
                        </div>
                        <div class="rounded-circle creator-avatar-wrapper">
                            <img src="{{ asset('img/me-14.jpg') }}"alt="creator-avatar" class="rounded-circle object-fit-cover w-100 h-100">
                        </div>
                    </div>
                </div>
                <h1 class="font-secondary bg-text d-inline-block h1 text-start mt-5 mt-md-0">{{ $bio['title'] }}</h1>
                <div class="d-sm-flex align-items-center">
                    <div class="position-relative hero-cartoon-main-wrapper">
                        <img src="{{ asset('assets/images/hero/arrow-wave-dark.svg') }}"alt="arrow-wave" class="hero-arrow-wave dark">
                        <img src="{{ asset('assets/images/hero/arrow-wave-light.svg') }}"alt="arrow-wave-light" class="hero-arrow-wave light">
                        <div class="hero-cartoon-flex d-flex position-relative">
                            <div class="hero-cartoon-container hero-cartoon-container-1">
                                <img src="{{ asset('img/me-5.jpg') }}" alt="hero-cartoon-1" class="hero-cartoon hero-cartoon-1">
                            </div>
                            <div class="hero-cartoon-container hero-cartoon-container-2">
                                <img src="{{ asset('img/me-13.jpg') }}" alt="hero-cartoon-2" class="hero-cartoon hero-cartoon-2">
                            </div>
                            <div class="hero-cartoon-container hero-cartoon-container-3">
                                <img src="{{ asset('img/me-6.jpg') }}" alt="hero-cartoon-3" class="hero-cartoon hero-cartoon-3">
                            </div>
                        </div>
                    </div>
                    <p class="fw-normal sm hero-about mt-5 mt-sm-0">{{ $bio['short_bio'] }}</p>
                </div>
                <div class="hero-banner-button-wrapper d-flex">
                    <a href="#" class="button primary-btn">Explore More</a>
                    <a href="#" class="button secondary-btn">Projects</a>
                </div>
            </div>
            <div class="hero-right text-center position-relative">
                <div class="hero-wrapper-circle d-none d-sm-block">
                    <div class="hero-img-circle">
                        <img src="{{ asset('img/me.jpg') }}"alt="hero-img">
                    </div>
                    <div class="hero-text-circle">
                        <svg viewBox="0 0 100 100" width="100" height="100">
                            <defs>
                                <path id="circle" fill="currentColor" fill-opacity=" 0.12" d="
                  M 50, 50
                  m -37.5, 0
                  a 37.5,37.5 110 1,1 75,0
                  a 37.5,37.5 110 1,1 -75,0"></path>
                            </defs>
                            <text font-size="12" textLength="230">
                                <textPath xlink:href="#circle">
                                    MOHAMMAD ALAMIN
                                </textPath>
                            </text>
                        </svg>
                    </div>
                </div>
                <div class="hero-gradient-right-top position-absolute start-50 top-0 translate-middle z-n1"></div>
                <div
                    class="hero-gradient-center-top z-2 translate-middle rounded-circle top-0 start-0 position-absolute">
                </div>
                <div class="atropos-scale">
                    <div class="atropos-rotate">
                        <div class="atropos-inner">
                            <div class="hero-col position-lg-absolute position-static">
                                <div class="hero-img-container mx-auto text-center position-relative d-flex h-100 align-items-end hero-child-1"
                                    data-atropos-offset="-1">
                                    <img src="{{ asset('img/me-2.png') }}" alt="robot" class="hero-img w-100 h-100 object-fit-contain">
                                    <img src="{{ asset('assets/images/hero/ring.png') }}" alt="ring" class="hero-ring">
                                </div>
                                <div class="hero-wave position-absolute start-0 bottom-0 z-3 w-100 overflow-hidden"
                                    data-atropos-offset="-1">
                                    <img src="{{ asset('assets/images/hero/wave.jpg') }}" alt="wave"
                                        class="hero-wave-img w-100 h-100 object-fit-cover start-0 top-0 position-absolute">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
