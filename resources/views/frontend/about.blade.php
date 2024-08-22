<section class="amazing-art-wrapper overflow-hidden position-relative section-pt" id="about-me">
    <div class="container position-relative">
        <div class="amazing-art-content-wrapper d-flex align-items-center position-relative overflow-hidden">
            <div class="amazing-art-features-wrapper d-flex align-items-start" style="padding-left: 0;max-width: 100%;">
                @include('frontend.layouts.experience')
            </div>
            <div class="amazing-right-circle position-absolute"></div>
        </div>
        <div class="amazing-diamond-img position-absolute bottom-0">
            <img src="{{ asset('assets/images/nft/amazing-art-bg-diamond.png') }}" alt="diamond-img">
        </div>
        <div class="subscribe-bottom-left-diamond-img position-absolute bottom-left-img w-100 h-100"><img
                class="contain-img" src="{{ asset('assets/images/nft/bottom-left-diamond-img.png') }}"
                alt="subscribe-diamond-img"></div>
        <div class="position-absolute top-right-diamond-img top-0 end-0 w-100 h-100"><img class="contain-img"
                src="{{ asset('assets/images/nft/top-right-diamond-img.png') }}" alt="subscribe-diamond-img"></div>
        <div class="position-absolute top-right-secondary-img top-0 end-0 w-100 h-100"><img class="contain-img"
                src="{{ asset('assets/images/nft/top-right-corner-secondary.png') }} " alt="subscribe-diamond-img">
        </div>
    </div>
</section>