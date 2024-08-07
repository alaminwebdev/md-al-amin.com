<style>
    .bouncing-blobs-container {
        position: relative;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .bouncing-blobs-glass {
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        backdrop-filter: blur(140px);
        -webkit-backdrop-filter: blur(140px);
        pointer-events: none;
    }

    .bouncing-blobs {
        position: absolute;
        z-index: -2;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
    }

    .bouncing-blob {
        width: 32vw;
        aspect-ratio: 1;
        border-radius: 50%;
        will-change: transform;
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        transform-origin: left top;
    }

    .bouncing-blob--blue {
        background: #4783c7;
    }

    .bouncing-blob--white {
        background: #ffffff;
        z-index: 2;
        width: 15vw;
    }

    .bouncing-blob--purple {
        background: #8c8ff1;
    }

    .bouncing-blob--pink {
        background: #e289cd50;
    }

    .hero h2 {
        font-size: 60px;
        max-width: 800px;
        line-height: 1;
        text-align: left;
        font-weight: bold;
        text-transform: capitalize;
        margin-bottom: 20px;
        color: #021123;
        letter-spacing: -5px;
    }

    .hero p {
        font-size: 20px;
        max-width: 500px;
        color: #021123;
        letter-spacing: -1px;
    }

    @media (max-width: 1200px) {
        .bouncing-blobs-glass {
            backdrop-filter: blur(120px);
            -webkit-backdrop-filter: blur(120px);
        }
    }

    @media (max-width: 500px) {
        .bouncing-blob {
            width: 60vw;
        }

        .bouncing-blob--white {
            width: 30vw;
        }

        .bouncing-blobs-glass {
            backdrop-filter: blur(90px);
            -webkit-backdrop-filter: blur(90px);
        }

        .hero h2 {
            font-size: 32px;
        }

        .hero p {
            font-size: 16px;
            padding: 0 20px;
        }
    }

    .resume-link a {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        color: black;
        font-size: 16px;
        text-decoration: none;
        font-weight: 600;
        gap: 0 5px;
        border: 2px solid;
        border-radius: 5px;
        padding: 4px 10px;
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
</style>
<section>
    <div class="bouncing-blobs-container d-flex align-items-center">
        <div class="bouncing-blobs-glass"></div>
        <div class="bouncing-blobs">
            <div class="bouncing-blob bouncing-blob--blue"></div>
            <div class="bouncing-blob bouncing-blob--blue"></div>
            <div class="bouncing-blob bouncing-blob--blue"></div>
            <div class="bouncing-blob bouncing-blob--white"></div>
            <div class="bouncing-blob bouncing-blob--purple"></div>
            <div class="bouncing-blob bouncing-blob--purple"></div>
            <div class="bouncing-blob bouncing-blob--pink"></div>
        </div>
        <div class="hero container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="">{{ $bio['title'] }}</h2>
                    <p>{{ $bio['short_bio'] }}</p>
                    <div class="resume-link">
                        <a href="{{ route('resume.download') }}" rel="noopener noreferer">
                            <?xml version="1.0" encoding="utf-8"?>
                            <svg viewBox="0 0 25 25"  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" xml:space="preserve">
                                <path style="fill: #fff" d="M10.5 4.5V8.5H6.5M10.5 4.5H18.5V20.5H6.5V8.5L10.5 4.5Z" stroke="#f61c0d" stroke-width="1.2" />
                                <path
                                    d="M12.7414 13.14L12.749 13.1046C12.896 12.4991 13.0809 11.7442 12.9365 11.0602C12.8402 10.5206 12.4425 10.3104 12.1031 10.2952C11.7028 10.2775 11.3456 10.5054 11.2569 10.8373C11.0897 11.4453 11.2392 12.2762 11.5128 13.3351C11.1683 14.1559 10.6186 15.3491 10.2158 16.0584C9.46592 16.446 8.46022 17.0438 8.31075 17.7987C8.28036 17.9381 8.31582 18.1154 8.39942 18.275C8.49315 18.4523 8.64261 18.5891 8.81741 18.655C8.89341 18.6828 8.9846 18.7056 9.091 18.7056C9.53686 18.7056 10.2588 18.3459 11.2215 16.6942C11.3684 16.6461 11.5204 16.5954 11.6673 16.5448C12.3564 16.3117 13.0708 16.0685 13.7167 15.9596C14.4311 16.3421 15.2443 16.5878 15.7966 16.5878C16.3437 16.5878 16.5591 16.2636 16.6401 16.0685C16.782 15.7265 16.7136 15.2959 16.4831 15.0653C16.1487 14.736 15.3355 14.6499 14.0689 14.8069C13.4457 14.4269 13.0378 13.9102 12.7414 13.14ZM9.96245 16.9881C9.61032 17.4998 9.34433 17.7557 9.19993 17.8671C9.36966 17.5555 9.70152 17.2262 9.96245 16.9881ZM12.1816 11.0222C12.3133 11.2477 12.2956 11.9291 12.1943 12.2737C12.0701 11.7695 12.0524 11.0552 12.1259 10.9716L12.1816 11.0222ZM12.1411 14.0748C12.4121 14.5435 12.7541 14.9463 13.1316 15.2452C12.5844 15.3693 12.0853 15.5745 11.6395 15.7569C11.5331 15.8 11.4292 15.843 11.3279 15.8836C11.6648 15.2731 11.946 14.5815 12.1411 14.0748ZM16.0828 15.7341L16.0676 15.7569C16.0676 15.7569 15.8346 15.8988 14.9403 15.5466C15.9688 15.4985 16.0828 15.7341 16.0828 15.7341Z"
                                    fill="#121923" />
                            </svg>
                            Download Resume
                        </a>
                    </div>
                </div>
                <div class="col-md-4 d-md-block d-none">
                    <div data-aos="zoom-in" class=" aos-init">
                        <div class="about-pic-container">
                            <img class="about-image" src="{{ asset('img/me.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const MIN_SPEED = 1.5;
    const MAX_SPEED = 2.5;

    function randomNumber(min, max) {
        return Math.random() * (max - min) + min;
    }

    class Blob {
        constructor(el) {
            this.el = el;
            const boundingRect = this.el.getBoundingClientRect();
            this.size = boundingRect.width;
            this.initialX = randomNumber(0, window.innerWidth - this.size);
            this.initialY = randomNumber(0, window.innerHeight - this.size);
            this.el.style.top = `${this.initialY}px`;
            this.el.style.left = `${this.initialX}px`;
            this.vx =
                randomNumber(MIN_SPEED, MAX_SPEED) * (Math.random() > 0.5 ? 1 : -1);
            this.vy =
                randomNumber(MIN_SPEED, MAX_SPEED) * (Math.random() > 0.5 ? 1 : -1);
            this.x = this.initialX;
            this.y = this.initialY;
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;
            if (this.x >= window.innerWidth - this.size) {
                this.x = window.innerWidth - this.size;
                this.vx *= -1;
            }
            if (this.y >= window.innerHeight - this.size) {
                this.y = window.innerHeight - this.size;
                this.vy *= -1;
            }
            if (this.x <= 0) {
                this.x = 0;
                this.vx *= -1;
            }
            if (this.y <= 0) {
                this.y = 0;
                this.vy *= -1;
            }
        }

        move() {
            this.el.style.transform = `translate(${this.x - this.initialX}px, ${
      this.y - this.initialY
    }px)`;
        }
    }

    function initBlobs() {
        const blobEls = document.querySelectorAll(".bouncing-blob");
        const blobs = Array.from(blobEls).map((blobEl) => new Blob(blobEl));

        function update() {
            requestAnimationFrame(update);
            blobs.forEach((blob) => {
                blob.update();
                blob.move();
            });
        }

        requestAnimationFrame(update);
    }

    initBlobs();
</script>
