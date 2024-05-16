<style>
    .scroller__inner {
        padding-block: 1rem;
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
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

    .tag-list {
        margin: 0;
        padding-inline: 0;
        list-style: none;
    }

    .tag-list li {
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem -0.25rem rgb(0 0 0 / 41%);
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="scroller" data-speed="slow">
                    <ul class="tag-list scroller__inner pt-0">
                        @foreach ($skills as $skill)
                            <li class="mb-0">{{ $skill }}</li>    
                        @endforeach
                    </ul>
                </div>
    
                <div class="scroller" data-direction="right" data-speed="medium">
                    <div class="scroller__inner">
                        @foreach ($skill_icons as $skill_icon)
                            <img src="{{ asset('img/icons/' . $skill_icon) }}" width="100px;" class="img-fluid" />
                        @endforeach
                    </div>
                </div>
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
