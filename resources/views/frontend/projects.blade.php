<section class="top-artwork-section section-pt position-relative" id="project">
    <div class="container">
        <div class="top-artwork-wrapper d-flex">
            <div class="top-artwork-left-card position-relative">
                <div class="d-flex flex-column justify-content-start align-items-sm-start w-100">
                    <div class="d-flex align-items-baseline mb-4">
                        <h3 class="small-title bg-text text-start">Key</h3>
                        <div class="top-artwork-flame-img-card position-relative z-1">
                            <img src="{{ asset('assets/images/nft/flame.png') }}" alt="nft-flame-image"
                                class="image-ratio">
                            <div class="top-artwork-circle position-absolute rounded-circle z-n1"></div>
                        </div>
                    </div>
                    <p class="small-title bg-text text-start d-inline-block">Innovations</p>
                    <h2 class="top-artwork-title title bg-text bg-text-stroke d-inline-block text-start">Projects
                    </h2>
                </div>
                <div class="top-artwork-swiper-btn-card d-flex align-items-center">
                    <button
                        class="swiper-custom-arrow-btn top-artwork-prev-button transparent-gradiant-hover-btn transition-03-linear  z-1 position-relative d-flex justify-content-center align-items-center rounded-circle bg-transparent">
                        <span class="d-flex justify-content-center align-items-center" data-icon="iconNextArrow">
                        </span>
                    </button>
                    <button
                        class="swiper-custom-arrow-btn top-artwork-next-button transparent-gradiant-hover-btn transition-03-linear  z-1 position-relative d-flex justify-content-center align-items-center rounded-circle bg-transparent">
                        <span class="d-flex justify-content-center align-items-center" data-icon="iconPrevArrow">
                        </span>
                    </button>
                </div>
                <div class="top-artwork-star-line-center position-absolute z-1">
                    <div class="start-line-container">
                        <div class="star-line">
                            <i data-icon="starIcon" class="anim-star d-flex justify-content-center star-line-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-artwork-swiper-card nft-swiper-wraaper position-relative">
                <div class="swiper top-artwork-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($projects as $project)
                            @php
                                $firstImage = $project->images->first(); // Get the first image from the relation
                            @endphp
                            <div class="swiper-slide overflow-hidden">
                                <div class="top-artwork-card transition-03-linear ratio ratio-1x1">
                                    <div class="top-artwork-img-card w-100 h-100 position-absolute top-0 z-n1 start-0">
                                        <img src="{{ asset($firstImage->image_path) }}" alt="nft-pikachu"
                                            class="w-100 object-fit-contain p-3">
                                    </div>
                                    <div
                                        class="top-artwork-text-card position-absolute d-flex flex-column justify-content-end h-100">
                                        <div class="top-artwork-data">
                                            <h5
                                                class="top-artwork-name p lg text-capitalize  fw-normal text-whit text-ellipsis line-clamp-3">
                                                {{ $project->project_name }}
                                            </h5>
                                            <div
                                                class="top-artwork-price d-flex align-items-center justify-content-center">
                                                <span class="d-inline-block fw-medium text-white">Software</span>
                                            </div>
                                        </div>
                                        <div class="top-artwork-redirect-arrow-box position-absolute">
                                            <a href="{{ route('project.details', $project->slug) }}" class="w-100 h-100 d-flex">
                                                <span
                                                    class="top-artwork-redirect-card position-relative d-inline-flex justify-content-center align-items-center text-decoration-none cursor-pointer w-100 h-100">
                                                    <span
                                                        class="d-flex align-items-center z-1 transition-03-linear w-100 h-100">
                                                        <span
                                                            class="top-artwork-redirect-inner-card transition-03-linear w-100 h-100">
                                                            <i data-icon="iconHalfCircleShape"
                                                                class="d-flex justify-content-center align-items-center transition-03-linear position-absolute"></i>
                                                            <span
                                                                class="top-artwork-arrow transition-03-linear position-relative z-1 rounded-circle position-relative d-flex justify-content-center align-items-center">
                                                                <span
                                                                    class="z-1 d-flex justify-content-center align-items-center"
                                                                    data-icon="iconRedirectArrow">
                                                                </span>
                                                            </span>
                                                            <i data-icon="iconHalfCircleShape"
                                                                class="d-flex justify-content-center align-items-center transition-03-linear position-absolute"></i>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
