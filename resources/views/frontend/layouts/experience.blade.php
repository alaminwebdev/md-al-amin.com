<style>

    .timeline__arrow-icon {
        display: block;
        pointer-events: none;
        transform: rotate(-90deg);
        transition: transform var(--trans-dur) var(--trans-timing);
    }

    .timeline__date {
        font-size: 0.833em;
        line-height: 2.4;
    }

    .timeline__dot {
        background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
        border-radius: 50%;
        display: inline-block;
        flex-shrink: 0;
        margin: 0.625em 0;
        margin-inline-end: 1em;
        position: relative;
        width: 0.75em;
        height: 0.75em;
    }

    .timeline__item {
        position: relative;
        padding-bottom: 2.25em;
    }


    .timeline__item:not(:last-child):before {
        background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
        content: "";
        display: block;
        position: absolute;
        top: 1em;
        left: 7%;
        width: 0.125em;
        height: 100%;
        transform: translateX(-50%);
    }
    
    .timeline__item:not(:last-child):after{
        background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
        border-radius: 50%;
        display: inline-block;
        flex-shrink: 0;
        margin: 0.625em 0;
        margin-inline-end: 1em;
        position: relative;
        width: 0.75em;
        height: 0.75em;
    }

    [dir="rtl"] .timeline__arrow-icon {
        transform: rotate(90deg);
    }

    [dir="rtl"] .timeline__item:not(:last-child):before {
        right: 2.625em;
        left: auto;
        transform: translateX(50%);
    }

    .timeline__item-header {
        display: flex;
    }

    .timeline__item-body {
        border-radius: 0.375em;
        overflow: hidden;
        margin-top: 0.5em;
        margin-inline-start: 6em;
        height: 0;
    }

    .timeline__item-body-content {
        background-color: hsl(var(--hue), 10%, 50%, 0.2);
        opacity: 0;
        visibility: hidden;
        transition: opacity var(--trans-dur) var(--trans-timing),
            visibility var(--trans-dur) steps(1, end);
    }

    .timeline__item-p ul {
        list-style-type: none;
        padding: 0;
    }

    .timeline__item-p ul li {
        padding-top: 1rem;
        font-size: 14px;
    }

    .timeline__item-p ul li:last-child {
        padding-bottom: 1rem;
    }

    .timeline__meta {
        width: 100%;
    }

    .timeline__title {
        font-size: 1.5em;
        line-height: 1.333;
    }

    /* Expanded state */
    .timeline__item-body--expanded {
        height: auto;
    }

    .timeline__item-body--expanded .timeline__item-body-content {
        opacity: 1;
        visibility: visible;
        transition-delay: var(--trans-dur), 0s;
    }

    .timeline__arrow[aria-expanded="true"] .timeline__arrow-icon {
        transform: rotate(0);
    }

    /* Dark theme */
    @media (prefers-color-scheme: dark) {
        :root {
            --bg: hsl(var(--hue), 10%, 10%);
            --fg: hsl(var(--hue), 10%, 90%);
            --primary: hsl(var(--hue), 90%, 70%);
        }
    }

    .small-title {
        font-size: var(--h5-size);
        background: var(--nft-amazing-title-bg);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
<svg display="none">
    <symbol id="arrow">
        <polyline points="7 10,12 15,17 10" fill="none" stroke="#6c757d" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" />
    </symbol>
</svg>

<div id="timeline" class="timeline">

    <div class="amazing-art-title" style="max-width: 100%;">
        <h4 class="small-title lh-base  text-lg-start text-sm-center d-inline-block">Education & Experience</h4>
    </div>


    @php
        $index = 0;
    @endphp

    @foreach ($experiences as $experience)
        <div class="timeline__item">
            <div class="timeline__item-header ">
                {{-- <button class="timeline__arrow swiper-custom-arrow-btn live-auction-next-button transparent-gradiant-hover-btn transition-03-linear z-1 position-relative bg-transparent d-flex justify-content-center align-items-center rounded-circle" tabindex="0"
                    type="button" id="item{{ $index + 1 }}"  aria-labelledby="item{{ $index + 1 }}-name" aria-expanded="{{ $index < 3 ? 'true' : 'false' }}"
                    aria-controls="item{{ $index + 1 }}-ctrld" aria-haspopup="true" data-item="{{ $index + 1 }}">
                    <span class="timeline__arrow-icon d-flex justify-content-center align-items-center" data-icon="iconPrevArrow">
                        <svg class="" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.66669 13.25C4.25247 13.25 3.91669 13.5858 3.91669 14C3.91669 14.4142 4.25247 14.75 4.66669 14.75V13.25ZM4.66669 14.75H23.3334V13.25H4.66669V14.75Z" fill="currentColor"></path>
                            <path d="M16.3333 7L23.3333 14L16.3333 21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button> --}}
                <button
                        class="timeline__arrow swiper-custom-arrow-btn top-artwork-next-button transparent-gradiant-hover-btn transition-03-linear  z-1 position-relative d-flex justify-content-center align-items-center rounded-circle bg-transparent" 
                        type="button" id="item{{ $index + 1 }}"  aria-labelledby="item{{ $index + 1 }}-name" aria-expanded="{{ $index < 3 ? 'true' : 'false' }}"
                    aria-controls="item{{ $index + 1 }}-ctrld" aria-haspopup="true" data-item="{{ $index + 1 }}">
                        <span class="timeline__arrow-icon d-flex justify-content-center align-items-center" data-icon="iconPrevArrow">
                        </span>
                    </button>
                <span class="timeline__dot"></span>

                <span id="item{{ $index + 1 }}-name" class="timeline__meta">
                    <time class="timeline__date" datetime="1970-01-01">
                        {{ $experience['start_date'] }} -
                        {{ $experience['end_date'] == null ? 'Current' : $experience['end_date'] }}
                        <span class="badge text-bg-info text-white"
                            style="line-height: 1.3;">{{ $experience['company'] }}</span>
                    </time>
                    <br>
                    <strong class="timeline__title p fw-semibold feature-name">{{ $experience['designation'] }}</strong>
                </span>

            </div>
            <div class="timeline__item-body {{ $index < 3 ? 'timeline__item-body--expanded' : '' }}"
                id="item{{ $index + 1 }}-ctrld" role="region" aria-labelledby="item{{ $index + 1 }}"
                aria-hidden="{{ $index < 3 ? 'false' : 'true' }}">
                <div class="rounded timeline__item-body-content px-3">
                    <div class="timeline__item-p p sm fw-normal mb-0 feature-info"> {!! $experience['responsibilites'] !!} </div>
                </div>
            </div>
        </div>
        @php
            $index++;
        @endphp
    @endforeach

    @foreach ($educations as $education)
        <div class="timeline__item">
            <div class="timeline__item-header">
                <button class="timeline__arrow" type="button" id="item{{ $index + 1 }}"
                    aria-labelledby="item{{ $index + 1 }}-name" aria-expanded="{{ $index < 3 ? 'true' : 'false' }}"
                    aria-controls="item{{ $index + 1 }}-ctrld" aria-haspopup="true"
                    data-item="{{ $index + 1 }}">
                    <svg class="timeline__arrow-icon" viewBox="0 0 24 24" width="24px" height="24px">
                        <use href="#arrow" />
                    </svg>
                </button>
                <span class="timeline__dot"></span>
                <span id="item{{ $index + 1 }}-name" class="timeline__meta">
                    <time class="timeline__date" datetime="1970-01-01">
                        {{ $education['session'] }}
                        <span class="badge text-bg-info text-white"
                            style="line-height: 1.3;">{{ $education['type'] }}</span>
                    </time>
                    <br>
                    <strong class="timeline__title">{{ $education['degree'] }}</strong>
                </span>
            </div>
            <div class="timeline__item-body {{ $index < 3 ? 'timeline__item-body--expanded' : '' }}"
                id="item{{ $index + 1 }}-ctrld" role="region" aria-labelledby="item{{ $index + 1 }}"
                aria-hidden="{{ $index < 3 ? 'false' : 'true' }}">
                <div class="timeline__item-body-content px-3">
                    <div class="timeline__item-p">
                        <ul>
                            <li>🎓 {{ $education['institute'] }}</li>
                            <li>📅 {{ $education['session'] }}</li>
                            <li>📝 {{ $education['description'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @php
            $index++;
        @endphp
    @endforeach
</div>

<script>
    window.addEventListener("DOMContentLoaded", () => {
        const ctl = new CollapsibleTimeline("#timeline");
    });

    class CollapsibleTimeline {
        constructor(el) {
            this.el = document.querySelector(el);
            this.init();
        }
        init() {
            this.el?.addEventListener("click", this.itemAction.bind(this));
            this.expandInitialItems();
        }
        animateItemAction(button, ctrld, contentHeight, shouldCollapse) {
            const expandedClass = "timeline__item-body--expanded";
            const animOptions = {
                duration: 300,
                easing: "cubic-bezier(0.65,0,0.35,1)"
            };

            if (shouldCollapse) {
                button.ariaExpanded = "false";
                ctrld.ariaHidden = "true";
                ctrld.classList.remove(expandedClass);
                animOptions.duration *= 2;
                this.animation = ctrld.animate(
                    [{
                            height: `${contentHeight}px`
                        },
                        {
                            height: `${contentHeight}px`
                        },
                        {
                            height: "0px"
                        }
                    ],
                    animOptions
                );
            } else {
                button.ariaExpanded = "true";
                ctrld.ariaHidden = "false";
                ctrld.classList.add(expandedClass);
                this.animation = ctrld.animate(
                    [{
                        height: "0px"
                    }, {
                        height: `${contentHeight}px`
                    }],
                    animOptions
                );
            }
        }
        itemAction(e) {
            const {
                target
            } = e;
            const action = target?.getAttribute("data-action");
            const item = target?.getAttribute("data-item");

            if (action) {
                const targetExpanded = action === "expand" ? "false" : "true";
                const buttons = Array.from(
                    this.el?.querySelectorAll(`[aria-expanded="${targetExpanded}"]`)
                );
                const wasExpanded = action === "collapse";

                for (let button of buttons) {
                    const buttonID = button.getAttribute("data-item");
                    const ctrld = this.el?.querySelector(`#item${buttonID}-ctrld`);
                    const contentHeight = ctrld.firstElementChild?.offsetHeight;

                    this.animateItemAction(button, ctrld, contentHeight, wasExpanded);
                }
            } else if (item) {
                const button = this.el?.querySelector(`[data-item="${item}"]`);
                const expanded = button?.getAttribute("aria-expanded");

                if (!expanded) return;

                const wasExpanded = expanded === "true";
                const ctrld = this.el?.querySelector(`#item${item}-ctrld`);
                const contentHeight = ctrld.firstElementChild?.offsetHeight;

                this.animateItemAction(button, ctrld, contentHeight, wasExpanded);
            }
        }

        expandInitialItems() {
            const buttons = Array.from(this.el?.querySelectorAll(".timeline__item-header button"));
            buttons.slice(0, 3).forEach(button => {
                const item = button.getAttribute("data-item");
                const ctrld = this.el?.querySelector(`#item${item}-ctrld`);
                const contentHeight = ctrld.firstElementChild?.offsetHeight;

                this.animateItemAction(button, ctrld, contentHeight, false);
            });
        }
    }
</script>
