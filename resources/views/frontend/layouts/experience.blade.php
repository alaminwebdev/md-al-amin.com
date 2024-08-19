<style>
    .about-item {
        position: relative;
        padding-bottom: 2.25em;
    }

    .about-item:not(:last-child):before {
        background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
        content: "";
        display: block;
        position: absolute;
        top: 1em;
        left: 6%;
        width: 0.125em;
        height: 100%;
        transform: translateX(-50%);
    }

    .about-item:after {
        background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
        border-radius: 50%;
        flex-shrink: 0;
        width: 0.75em;
        height: 0.75em;
        content: "";
        display: block;
        position: absolute;
        top: 1em;
        left: 6%;
        transform: translateX(-50%);
    }

    .about-btn {
        position: absolute;
    }
    .about-btn .swiper-custom-arrow-btn {
        width: 6rem;
        height: 6rem;
    }

    .about-header {
        margin-inline-start: 6em;
        padding-top: .5em;
    }

    .about-arrow-icon {
        display: block;
        pointer-events: none;
        transform: rotate(-90deg);
        transition: transform var(--trans-dur) var(--trans-timing);
    }

    .about-date {
        font-size: 0.833em;
        line-height: 2.4;
    }

    .about-date .badge {
        background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
        color: var(--nft-white);
    }

    .about-body {
        border-radius: 0.375em;
        overflow: hidden;
        margin-top: 0.5em;
        margin-inline-start: 6em;
        height: 0;
    }

    .about-body-content {
        background-color: hsl(var(--hue), 10%, 50%, 0.2);
        opacity: 0;
        visibility: hidden;
        transition: opacity var(--trans-dur) var(--trans-timing),
            visibility var(--trans-dur) steps(1, end);
    }
    .about-item-p ul {
        list-style-type: none;
        padding: 0;
    }
    .about-item-p ul li {
        padding-top: 1rem;
        font-size: 14px;
    }

    .about-item-p ul li:last-child {
        padding-bottom: 1rem;
    }

    .about-meta {
        width: 100%;
    }
    .about-title {
        font-size: 1.5em;
        line-height: 1.333;
    }

    /* Expanded state */
    .about-body-expanded {
        height: auto;
    }

    .about-body-expanded .about-body-content {
        opacity: 1;
        visibility: visible;
        transition-delay: var(--trans-dur), 0s;
    }

    .about-arrow[aria-expanded="true"] .about-arrow-icon {
        transform: rotate(0);
    }

    .small-title {
        font-size: var(--h5-size);
        background: var(--nft-amazing-title-bg);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<div id="about" class="about">
    <div class="amazing-art-title mb-5" style="max-width: 100%;">
        <h4 class="small-title lh-base  text-lg-start text-sm-center d-inline-block">Education & Experience</h4>
    </div>
    @php
        $index = 0;
    @endphp

    @foreach ($experiences as $experience)
        <div class="about-item">
            <div class="about-btn ">
                <button class="about-arrow swiper-custom-arrow-btn top-artwork-next-button transparent-gradiant-hover-btn transition-03-linear  z-1 position-relative d-flex justify-content-center align-items-center rounded-circle bg-transparent"
                    type="button" id="item{{ $index + 1 }}" aria-labelledby="item{{ $index + 1 }}-name" aria-expanded="{{ $index < 3 ? 'true' : 'false' }}" aria-controls="item{{ $index + 1 }}-ctrld" aria-haspopup="true" data-item="{{ $index + 1 }}">
                    <span class="about-arrow-icon d-flex justify-content-center align-items-center" data-icon="iconDownArrow">
                    </span>
                </button>
            </div>

            <div class="about-header">
                <span id="item{{ $index + 1 }}-name" class="about-meta">
                    <time class="about-date" datetime="1970-01-01">
                        {{ $experience['start_date'] }} -
                        {{ $experience['end_date'] == null ? 'Current' : $experience['end_date'] }}
                        <span class="badge" style="line-height: 1.3;">{{ $experience['company'] }}</span>
                    </time>
                    <br>
                    <strong class="about-title p fw-semibold feature-name">{{ $experience['designation'] }}</strong>
                </span>
            </div>
            <div class="about-body {{ $index < 3 ? 'about-body-expanded' : '' }}" id="item{{ $index + 1 }}-ctrld" role="region" aria-labelledby="item{{ $index + 1 }}" aria-hidden="{{ $index < 3 ? 'false' : 'true' }}">
                <div class="rounded about-body-content px-3">
                    <div class="about-item-p p sm fw-normal mb-0 feature-info"> {!! $experience['responsibilites'] !!} </div>
                </div>
            </div>
        </div>
        @php
            $index++;
        @endphp
    @endforeach

    @foreach ($educations as $education)
        <div class="about-item">
            <div class="about-btn ">
                <button class="about-arrow swiper-custom-arrow-btn top-artwork-next-button transparent-gradiant-hover-btn transition-03-linear  z-1 position-relative d-flex justify-content-center align-items-center rounded-circle bg-transparent"
                    type="button" id="item{{ $index + 1 }}" aria-labelledby="item{{ $index + 1 }}-name" aria-expanded="{{ $index < 3 ? 'true' : 'false' }}" aria-controls="item{{ $index + 1 }}-ctrld" aria-haspopup="true" data-item="{{ $index + 1 }}">
                    <span class="about-arrow-icon d-flex justify-content-center align-items-center" data-icon="iconDownArrow">
                    </span>
                </button>
            </div>
            <div class="about-header">
                <span id="item{{ $index + 1 }}-name" class="about-meta">
                    <time class="about-date" datetime="1970-01-01">
                        {{ $education['session'] }}
                        <span class="badge" style="line-height: 1.3;">{{ $education['type'] }}</span>
                    </time>
                    <br>
                    <strong class="about-title p fw-semibold feature-name">{{ $education['degree'] }}</strong>
                </span>
            </div>
            <div class="about-body {{ $index < 3 ? 'about-body-expanded' : '' }}" id="item{{ $index + 1 }}-ctrld" role="region" aria-labelledby="item{{ $index + 1 }}" aria-hidden="{{ $index < 3 ? 'false' : 'true' }}">
                <div class="rounded about-body-content px-3">
                    <div class="about-item-p p sm fw-normal mb-0 feature-info">
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
        const ctl = new CollapsibleTimeline("#about");
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
            const expandedClass = "about-body-expanded";
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
            const buttons = Array.from(this.el?.querySelectorAll(".about-btn button"));
            buttons.slice(0, 3).forEach(button => {
                const item = button.getAttribute("data-item");
                const ctrld = this.el?.querySelector(`#item${item}-ctrld`);
                const contentHeight = ctrld.firstElementChild?.offsetHeight;

                this.animateItemAction(button, ctrld, contentHeight, false);
            });
        }
    }
</script>