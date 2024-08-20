<style>
    .scroller__inner {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
    }

    .scroller[data-animated="true"] {
        overflow: hidden;
        -webkit-mask: linear-gradient(90deg,
                transparent,
                white 20%,
                white 80%,
                transparent);
        mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
    }

    .scroller[data-animated="true"] .scroller__inner {
        width: max-content;
        flex-wrap: nowrap;
        animation: scroll var(--_animation-duration, 40s) var(--_animation-direction, forwards) linear infinite;
    }

    .scroller[data-direction="right"] {
        --_animation-direction: reverse;
    }

    .scroller[data-direction="left"] {
        --_animation-direction: forwards;
    }

    .scroller[data-speed="fast"] {
        --_animation-duration: 20s;
    }

    .scroller[data-speed="slow"] {
        --_animation-duration: 60s;
    }

    .scroller[data-speed="medium"] {
        --_animation-duration: 50s;
    }

    @keyframes scroll {
        to {
            transform: translate(calc(-50% - 0.5rem));
        }
    }
</style>

<section class="section-mid-pt">
    <div class="container">
        <div class="text-wrapper d-flex flex-column justify-content-center align-items-center">
            <h2 class="title bg-text d-inline-block bg-text-stroke">Skills</h2>
            <h3 class="small-title d-inline-block bg-text">Top Skills</h3>
        </div>
    </div>
    <div class="top-seller-bottom-section nft-swiper-wraaper position-relative">
        <div class="scroller" data-speed="slow">
            <div class="scroller__inner overflow-hidden pb-4">
                @foreach ($skills as $skill)
                <div class="top-seller-card d-flex align-items-center" data-cursor-text="{{ $skill['name'] }}" data-cursor="nft-click-me-cursor">
                    <div class="top-seller-avatar-card position-relative">
                        <div class="top-seller-avatar rounded-circle w-100 h-100 overflow-hidden">
                            <img src="{{ asset('img/icons/' . $skill['icon']) }}" alt="nft-jenny-wilson" class="w-100 h-100 object-fit-contain">
                        </div>
                        <span class="verify-tick position-absolute d-flex justify-content-center align-items-center end-0 bottom-0" data-icon="iconVerifyTick">
                        </span>
                    </div>
                    <div>
                        <h6 class="top-seller-name text-capitalize fw-semibold text-ellipsis line-clamp-2">
                            {{ $skill['name'] }}</h6>
                        {{-- <div class="top-seller-rupees-card d-flex align-items-center">
                            <span class="top-seller-rupee-icon d-flex justify-content-center align-items-center" data-icon="iconDiamondShape">
                            </span>
                            <span class="top-seller-rupee p sm d-inline-block fw-normal text-ellipsis line-clamp-1">82,100
                                ETH</span>
                        </div> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    const scrollers = document.querySelectorAll(".scroller");

    // If a user hasn't opted in for recuded motion, then we add the animation
    if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        addAnimation();
    }

    function addAnimation() {
        scrollers.forEach((scroller) => {
            // add data-animated="true" to every `.scroller` on the page
            scroller.setAttribute("data-animated", true);

            // Make an array from the elements within `.scroller-inner`
            const scrollerInner = scroller.querySelector(".scroller__inner");
            const scrollerContent = Array.from(scrollerInner.children);

            // For each item in the array, clone it
            // add aria-hidden to it
            // add it into the `.scroller-inner`
            scrollerContent.forEach((item) => {
                const duplicatedItem = item.cloneNode(true);
                duplicatedItem.setAttribute("aria-hidden", true);
                scrollerInner.appendChild(duplicatedItem);
            });
        });
    }
</script>