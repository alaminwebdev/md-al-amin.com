@extends('app')
@section('content')
    <style>
        body {
            place-items: center;
            overflow-x: hidden;
        }

        section {
            position: relative;
            width: 100%;
            height: 550px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            top: -50px;
        }

        .item {
            list-style-type: none;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            background-position: center;
            background-size: cover;
            border-radius: 20px;
            box-shadow: 0 20px 30px rgba(255, 255, 255, 0.3) inset;
            transition: transform 0.1s, left 0.75s, top 0.75s, width 0.75s, height 0.75s;
        }

        .content {
            width: min(30vw, 400px);
            position: absolute;
            top: 50%;
            left: 3rem;
            transform: translateY(-50%);
            font: 400 0.85rem helvetica, sans-serif;
            color: white;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.5);
            opacity: 0;
            display: none;

            & .title {
                font-family: "arial-black";
                text-transform: uppercase;
            }

            & .description {
                line-height: 1.7;
                margin: 1rem 0 1.5rem;
                font-size: 0.8rem;
            }

            & button {
                width: fit-content;
                background-color: rgba(0, 0, 0, 0.1);
                color: white;
                border: 2px solid white;
                border-radius: 0.25rem;
                padding: 0.75rem;
                cursor: pointer;
            }
        }

        .item:nth-of-type(2) .content {
            display: block;
            animation: show 0.75s ease-in-out 0.3s forwards;
        }

        @keyframes show {
            0% {
                filter: blur(5px);
                transform: translateY(calc(-50% + 75px));
            }

            100% {
                opacity: 1;
                filter: blur(0);
            }
        }

        .slider-button {
            position: absolute;
            bottom: 1rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
            user-select: none;

            & .btn {
                background-color: rgba(255, 255, 255, 0.5);
                color: rgba(0, 0, 0, 0.7);
                border: 2px solid rgba(0, 0, 0, 0.6);
                margin: 0 0.25rem;
                padding: 0.75rem;
                border-radius: 50%;
                cursor: pointer;

                &:hover {
                    background-color: rgba(255, 255, 255, 0.3);
                }
            }
        }

        @media (width > 650px) and (width < 900px) {
            .content {
                & .title {
                    font-size: 1rem;
                }

                & .description {
                    font-size: 0.7rem;
                }

                & button {
                    font-size: 0.7rem;
                }
            }

            .item {
                width: 160px;
                height: 270px;

                &:nth-child(3) {
                    left: 50%;
                }

                &:nth-child(4) {
                    left: calc(50% + 170px);
                }

                &:nth-child(5) {
                    left: calc(50% + 340px);
                }

                &:nth-child(6) {
                    left: calc(50% + 510px);
                    opacity: 0;
                }
            }
        }

        @media (width < 650px) {
            .content {
                & .title {
                    font-size: 0.9rem;
                }

                & .description {
                    font-size: 0.65rem;
                }

                & button {
                    font-size: 0.7rem;
                }
            }

            .item {
                width: 130px;
                height: 220px;

                &:nth-child(3) {
                    left: 50%;
                }

                &:nth-child(4) {
                    left: calc(50% + 140px);
                }

                &:nth-child(5) {
                    left: calc(50% + 280px);
                }

                &:nth-child(6) {
                    left: calc(50% + 420px);
                    opacity: 0;
                }
            }
        }
    </style>
    <section class="mb-4 mb-sm-5">
        <ul class='slider'>
            <li class='item' style="background-image: url('https://cdn.mos.cms.futurecdn.net/dP3N4qnEZ4tCTCLq59iysd.jpg')">
                <div class='content'>
                    <h2 class='title'>"Lossless Youths"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    <button>Read More</button>
                </div>
            </li>
            <li class='item' style="background-image: url('https://i.redd.it/tc0aqpv92pn21.jpg')">
                <div class='content'>
                    <h2 class='title'>"Estrange Bond"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    <button>Read More</button>
                </div>
            </li>
            <li class='item' style="background-image: url('https://wharferj.files.wordpress.com/2015/11/bio_north.jpg')">
                <div class='content'>
                    <h2 class='title'>"The Gate Keeper"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    <button>Read More</button>
                </div>
            </li>
            <li class='item' style="background-image: url('https://images7.alphacoders.com/878/878663.jpg')">
                <div class='content'>
                    <h2 class='title'>"Last Trace Of Us"</h2>
                    <p class='description'>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
                    </p>
                    <button>Read More</button>
                </div>
            </li>
            <li class='item' style="background-image: url('https://theawesomer.com/photos/2017/07/simon_stalenhag_the_electric_state_6.jpg')">
                <div class='content'>
                    <h2 class='title'>"Urban Decay"</h2>
                    <p class='description'>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
                    </p>
                    <button>Read More</button>
                </div>
            </li>
            <li class='item' style="background-image: url('https://da.se/app/uploads/2015/09/simon-december1994.jpg')">
                <div class='content'>
                    <h2 class='title'>"The Migration"</h2>
                    <p class='description'> Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                        praesentium nisi. Id laboriosam ipsam enim. </p>
                    <button>Read More</button>
                </div>
            </li>
        </ul>
        <div class='slider-button'>
            <i class="btn prev iconoir-arrow-left"></i>
            <i class="btn next iconoir-arrow-right"></i>
        </div>
    </section>

    <script>
        // const slider = document.querySelector(".slider");

        // function activate(e) {
        //     const items = document.querySelectorAll(".item");
        //     e.target.matches(".next") && slider.append(items[0]);
        //     e.target.matches(".prev") && slider.prepend(items[items.length - 1]);
        // }

        // document.addEventListener("click", activate, false);

        const slider = document.querySelector(".slider");

        function updatePositions() {
            const items = document.querySelectorAll(".item");
            items.forEach((item, index) => {
                item.style.left = `calc(50% + ${(index - 2) * 220}px)`;
                item.style.top = '50%';
                item.style.transform = 'translateY(-50%)';

                // Reset all styles first
                item.style.width = '200px';
                item.style.height = '300px';
                item.style.transform = 'translateY(-50%)';
                item.style.borderRadius = '20px';
                item.style.boxShadow = '0 20px 30px rgba(255, 255, 255, 0.3) inset';
                item.style.opacity = '1';
                item.style.zIndex = '1';

                if (index === 0 || index === 1) {
                    item.style.left = '0';
                    item.style.top = '0';
                    item.style.width = '100%';
                    item.style.height = '100%';
                    item.style.transform = 'none';
                    item.style.borderRadius = '0';
                    item.style.boxShadow = 'none';
                }
            });
        }

        function activate(e) {
            const items = document.querySelectorAll(".item");
            if (e.target.matches(".next")) {
                slider.appendChild(items[0]);
            } else if (e.target.matches(".prev")) {
                slider.insertBefore(items[items.length - 1], items[0]);
            }
            updatePositions();
        }

        document.addEventListener("click", activate, false);

        window.addEventListener('DOMContentLoaded', updatePositions);
    </script>
@endsection
