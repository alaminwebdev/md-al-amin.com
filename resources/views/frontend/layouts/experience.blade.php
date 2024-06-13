<style>
    .education-experience h4 {
        font-size: 34px;
        line-height: 1;
        text-align: left;
        font-weight: bold;
        text-transform: capitalize;
        color: #021123;
        letter-spacing: -2px;

    }
    .timeline__arrow {
        background-color: transparent;
        border-radius: 50%;
        cursor: pointer;
        flex-shrink: 0;
        margin-inline-end: 0.25em;
        outline: transparent;
        width: 2em;
        height: 2em;
        transition: background-color calc(var(--trans-dur) / 2) linear,
            color var(--trans-dur);
        -webkit-appearance: none;
        appearance: none;
        -webkit-tap-highlight-color: transparent;
        border-width: 2px;
        border-color: #6c757d;
    }

    .timeline__arrow:focus-visible,
    .timeline__arrow:hover {
        background-color: hsl(var(--hue), 10%, 50%, 0.4);
    }

    .timeline__arrow-icon {
        display: block;
        pointer-events: none;
        transform: rotate(-90deg);
        transition: transform var(--trans-dur) var(--trans-timing);
        width: 100%;
        height: auto;
    }

    .timeline__date {
        font-size: 0.833em;
        line-height: 2.4;
    }

    .timeline__dot {
        background-color: currentColor;
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
        background-color: currentColor;
        content: "";
        display: block;
        position: absolute;
        top: 1em;
        left: 2.625em;
        width: 0.125em;
        height: 100%;
        transform: translateX(-50%);
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
        margin-inline-start: 4em;
        height: 0;
    }

    .timeline__item-body-content {
        background-color: hsl(var(--hue), 10%, 50%, 0.2);
        opacity: 0;
        padding: 0.5em 0.75em;
        visibility: hidden;
        transition: opacity var(--trans-dur) var(--trans-timing),
            visibility var(--trans-dur) steps(1, end);
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
</style>
<svg display="none">
    <symbol id="arrow">
        <polyline points="7 10,12 15,17 10" fill="none"  stroke="#6c757d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
    </symbol>
</svg>

<div id="timeline" class="timeline education-experience">
    <div class="heading mb-3 d-flex justify-content-between align-items-center">
        <h4 class="">A Brief History of Unix Time</h4>
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
            <button  type="button" class="btn btn-outline-secondary" data-action="expand">Expand All</button>
            <button  type="button" class="btn btn-outline-secondary" data-action="collapse">Collapse All</button>
        </div>
    </div>
    <div class="timeline__item">
        <div class="timeline__item-header">
            <button class="timeline__arrow" type="button" id="item1" aria-labelledby="item1-name" aria-expanded="false" aria-controls="item1-ctrld" aria-haspopup="true" data-item="1">
                <svg class="timeline__arrow-icon" viewBox="0 0 24 24" width="24px" height="24px">
                    <use href="#arrow" />
                </svg>
            </button>
            <span class="timeline__dot"></span>
            <span id="item1-name" class="timeline__meta">
                <time class="timeline__date" datetime="1970-01-01">January 1, 1970</time><br>
                <strong class="timeline__title">Unix Epoch</strong>
            </span>
        </div>
        <div class="timeline__item-body" id="item1-ctrld" role="region" aria-labelledby="item1" aria-hidden="true">
            <div class="timeline__item-body-content">
                <p class="timeline__item-p">This is the day the Unix clock began (or <time datetime="1969-12-31">December 31, 1969</time> if you live behind UTC 😉).</p>
            </div>
        </div>
    </div>
    <div class="timeline__item">
        <div class="timeline__item-header">
            <button class="timeline__arrow" type="button" id="item2" aria-labelledby="item2-name" aria-expanded="false" aria-controls="item2-ctrld" aria-haspopup="true" data-item="2">
                <svg class="timeline__arrow-icon" viewBox="0 0 24 24" width="24px" height="24px">
                    <use href="#arrow" />
                </svg>
            </button>
            <span class="timeline__dot"></span>
            <span id="item2-name" class="timeline__meta">
                <time class="timeline__date" datetime="1973-10-17">October 17, 1973</time><br>
                <strong class="timeline__title">Digits Within ISO 8601 Format</strong>
            </span>
        </div>
        <div class="timeline__item-body" id="item2-ctrld" role="region" aria-labelledby="item2" aria-hidden="true">
            <div class="timeline__item-body-content">
                <p class="timeline__item-p">At 6:36:57 PM UTC, the date in ISO 8601 format (1973-10-17) within the time digits (119731017) appeared for the first time.</p>
            </div>
        </div>
    </div>
    <div class="timeline__item">
        <div class="timeline__item-header">
            <button class="timeline__arrow" type="button" id="item3" aria-labelledby="item3-name" aria-expanded="false" aria-controls="item3-ctrld" aria-haspopup="true" data-item="3">
                <svg class="timeline__arrow-icon" viewBox="0 0 24 24" width="24px" height="24px">
                    <use href="#arrow" />
                </svg>
            </button>
            <span class="timeline__dot"></span>
            <span id="item3-name" class="timeline__meta">
                <time class="timeline__date" datetime="2001-09-09">September 9, 2001</time><br>
                <strong class="timeline__title">1 Billion Seconds</strong>
            </span>
        </div>
        <div class="timeline__item-body" id="item3-ctrld" role="region" aria-labelledby="item3" aria-hidden="true">
            <div class="timeline__item-body-content">
                <p class="timeline__item-p">Unix time reached 1,000,000,000 seconds at 1:46:40 AM UTC. The Danish UNIX User Group celebrated this in Copenhagen, Denmark.</p>
            </div>
        </div>
    </div>
    <div class="timeline__item">
        <div class="timeline__item-header">
            <button class="timeline__arrow" type="button" id="item4" aria-labelledby="item4-name" aria-expanded="false" aria-controls="item4-ctrld" aria-haspopup="true" data-item="4">
                <svg class="timeline__arrow-icon" viewBox="0 0 24 24" width="24px" height="24px">
                    <use href="#arrow" />
                </svg>
            </button>
            <span class="timeline__dot"></span>
            <span id="item4-name" class="timeline__meta">
                <time class="timeline__date" datetime="2009-02-13">February 13, 2009</time><br>
                <strong class="timeline__title">1,234,567,890 Seconds</strong>
            </span>
        </div>
        <div class="timeline__item-body" id="item4-ctrld" role="region" aria-labelledby="item4" aria-hidden="true">
            <div class="timeline__item-body-content">
                <p class="timeline__item-p">At 11:31:30 PM UTC, the digits of the time were 1234567890. This was celebrated worldwide, and even Google had a <a href="https://www.google.com/logos/unix1234567890.gif" target="_blank" rel="noopener">doodle</a> for it.</p>
            </div>
        </div>
    </div>
    <div class="timeline__item">
        <div class="timeline__item-header">
            <button class="timeline__arrow" type="button" id="item5" aria-labelledby="item5-name" aria-expanded="false" aria-controls="item5-ctrld" aria-haspopup="true" data-item="5">
                <svg class="timeline__arrow-icon" viewBox="0 0 24 24" width="24px" height="24px">
                    <use href="#arrow" />
                </svg>
            </button>
            <span class="timeline__dot"></span>
            <span id="item5-name" class="timeline__meta">
                <time class="timeline__date" datetime="2033-05-18">May 18, 2033</time><br>
                <strong class="timeline__title">2 Billion Seconds</strong>
            </span>
        </div>
        <div class="timeline__item-body" id="item5-ctrld" role="region" aria-labelledby="item5" aria-hidden="true">
            <div class="timeline__item-body-content">
                <p class="timeline__item-p">Unix time will reach 2,000,000,000 seconds at 3:33:20 AM UTC.</p>
            </div>
        </div>
    </div>
    <div class="timeline__item">
        <div class="timeline__item-header">
            <button class="timeline__arrow" type="button" id="item6" aria-labelledby="item6-name" aria-expanded="false" aria-controls="item6-ctrld" aria-haspopup="true" data-item="6">
                <svg class="timeline__arrow-icon" viewBox="0 0 24 24" width="24px" height="24px">
                    <use href="#arrow" />
                </svg>
            </button>
            <span class="timeline__dot"></span>
            <span id="item6-name" class="timeline__meta">
                <time class="timeline__date" datetime="2038-01-19">January 19, 2038</time><br>
                <strong class="timeline__title">Unix Epochalypse</strong>
            </span>
        </div>
        <div class="timeline__item-body" id="item6-ctrld" role="region" aria-labelledby="item6" aria-hidden="true">
            <div class="timeline__item-body-content">
                <p class="timeline__item-p">Also known as the year 2038 problem, clocks running on a 32-bit signed integer will flip from 3:14:08 AM UTC on this day to 8:45:52 PM UTC on December 13, 1901. Therefore, values only from -2,147,483,648 to 2,147,483,647 for the second are supported.</p>
            </div>
        </div>
    </div>
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
    }
</script>
