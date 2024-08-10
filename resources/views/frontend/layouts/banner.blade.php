<style>
    :root {
        --gap: 90px;
    }

    .banner-content h2 {
        font-size: 45px;
        line-height: 1;
        text-align: left;
        font-weight: 900;
        text-transform: capitalize;
        margin-bottom: 20px;
        color: #021123;
        letter-spacing: -2px;
    }

    .banner-content p {
        font-size: 16px;
        max-width: 500px;
        letter-spacing: -1px;
    }

    @media (max-width: 500px) {

        .banner-content h2 {
            font-size: 32px;
        }

        .banner-content p {
            font-size: 16px;
            padding: 0 20px;
        }
    }

    .resume-link a {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        color: #021123;
        text-decoration: none;
        gap: 0 5px;
        border: 2px solid;
        border-radius: 5px;
        padding: 2px 5px;
    }

    .resume-link svg {
        width: 30px;
    }

    @media (max-width: 500px) {
        .resume-link a {
            font-size: 14px;
            padding: 2px 4px;
        }

        .resume-link svg {
            width: 15px;
        }
    }

    .banner-image-container{
        position: absolute;
        width: 670px;
        height: 250px;
        right: 0;
        top: 80%;
        transform: translateY(-80%);
    }

    .banner-image {
        position: absolute;
        width: 200px;
        aspect-ratio: 1;
        border: 8px solid #fff;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);

        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }

    .banner-image:nth-child(1) {
        rotate: 10deg;
    }

    .banner-image:nth-child(2) {
        rotate: 5deg;
        translate: calc(1 * var(--gap));
    }

    .banner-image:nth-child(3) {
        rotate: -3deg;
        translate: calc(2 * var(--gap));
    }

    .banner-image:nth-child(4) {
        rotate: -10deg;
        translate: calc(3 * var(--gap));
    }

    .banner-image:nth-child(5) {
        rotate: 2deg;
        translate: calc(4 * var(--gap));
    }
</style>
<section>
    <div class="d-flex align-items-center banner-main" style="height: 100vh;">
        <div class="banner-content container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="">{{ $bio['title'] }}</h2>
                    <p>{{ $bio['short_bio'] }}</p>
                    <div class="resume-link">
                        <a href="{{ route('resume.download') }}" rel="noopener noreferer">
                            <?xml version="1.0" encoding="utf-8"?>
                            <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                xml:space="preserve">
                                <path style="fill: #fff" d="M10.5 4.5V8.5H6.5M10.5 4.5H18.5V20.5H6.5V8.5L10.5 4.5Z"
                                    stroke="#f61c0d" stroke-width="1.2" />
                                <path
                                    d="M12.7414 13.14L12.749 13.1046C12.896 12.4991 13.0809 11.7442 12.9365 11.0602C12.8402 10.5206 12.4425 10.3104 12.1031 10.2952C11.7028 10.2775 11.3456 10.5054 11.2569 10.8373C11.0897 11.4453 11.2392 12.2762 11.5128 13.3351C11.1683 14.1559 10.6186 15.3491 10.2158 16.0584C9.46592 16.446 8.46022 17.0438 8.31075 17.7987C8.28036 17.9381 8.31582 18.1154 8.39942 18.275C8.49315 18.4523 8.64261 18.5891 8.81741 18.655C8.89341 18.6828 8.9846 18.7056 9.091 18.7056C9.53686 18.7056 10.2588 18.3459 11.2215 16.6942C11.3684 16.6461 11.5204 16.5954 11.6673 16.5448C12.3564 16.3117 13.0708 16.0685 13.7167 15.9596C14.4311 16.3421 15.2443 16.5878 15.7966 16.5878C16.3437 16.5878 16.5591 16.2636 16.6401 16.0685C16.782 15.7265 16.7136 15.2959 16.4831 15.0653C16.1487 14.736 15.3355 14.6499 14.0689 14.8069C13.4457 14.4269 13.0378 13.9102 12.7414 13.14ZM9.96245 16.9881C9.61032 17.4998 9.34433 17.7557 9.19993 17.8671C9.36966 17.5555 9.70152 17.2262 9.96245 16.9881ZM12.1816 11.0222C12.3133 11.2477 12.2956 11.9291 12.1943 12.2737C12.0701 11.7695 12.0524 11.0552 12.1259 10.9716L12.1816 11.0222ZM12.1411 14.0748C12.4121 14.5435 12.7541 14.9463 13.1316 15.2452C12.5844 15.3693 12.0853 15.5745 11.6395 15.7569C11.5331 15.8 11.4292 15.843 11.3279 15.8836C11.6648 15.2731 11.946 14.5815 12.1411 14.0748ZM16.0828 15.7341L16.0676 15.7569C16.0676 15.7569 15.8346 15.8988 14.9403 15.5466C15.9688 15.4985 16.0828 15.7341 16.0828 15.7341Z"
                                    fill="#121923" />
                            </svg>
                            Download Resume
                        </a>
                    </div>
                </div>
                <div class="banner-image-container">
                    {{-- <div data-aos="zoom-in" class=" aos-init">
                        <div class="about-pic-container">
                            <img class="about-image" src="{{ asset('img/me.jpg') }}" alt="">
                        </div>
                    </div> --}}
                    <div class="banner-image">
                        <img class="image" style="transform: translateX(-35px);" src="{{ asset('img/me-4.jpg') }}" />
                    </div>
                    <div class="banner-image">
                        <img class="image" style="transform: translateX(-35px);" src="{{ asset('img/me-3.jpg') }}" />
                    </div>
                    <div class="banner-image">
                        <img class="image" style="transform: translateX(-45px);" src="{{ asset('img/me.jpg') }}" />
                    </div>
                    <div class="banner-image">
                        <img class="image" style="transform: translateX(-60px);" src="{{ asset('img/me-5.jpg') }}" />
                    </div>
                    <div class="banner-image">
                        <img class="image" src="{{ asset('img/me-2.jpg') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src='https://unpkg.com/gsap@3/dist/gsap.min.js'></script>
<script src='https://unpkg.com/lucide@latest'></script>
<script>
    lucide.createIcons();

    gsap.fromTo(
        ".banner-image", {
            scale: 0
        }, {
            scale: 1,
            stagger: 0.06,
            ease: "elastic.out(1, 0.8)",
            delay: 0.5
        }
    );
</script>
