@extends('app')
@section('content')
    <style>
        body {
            place-items: center;
            overflow-x: hidden;
        }

        #project-container {
            position: relative;
            width: 100%;
            height: 100vh;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            /* top: -50px; */
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
            transition: transform 0.1s, left 0.75s, top 0.75s, width 0.75s, height 0.75s;
            overflow: hidden;
        }

        .item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(71, 131, 199, 0.25);
            backdrop-filter: blur(2px);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.75s;
        }

        .full-background::before {
            opacity: 1;
        }

        .content {
            width: min(30vw, 400px);
            position: absolute;
            top: 50%;
            left: 3rem;
            transform: translateY(-50%);
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.5);
            opacity: 0;
            display: none;
            z-index: 2;
            border-radius: 0.5rem;

            & .title {
                font-weight:800;
                font-size: 2.5rem;
                letter-spacing: 0.3rem;
                position: relative;
                color: #021123;
            }

            & .description {
                line-height: 1.7;
                margin: 1rem 0 1.5rem;
                font-size: 0.8rem;
                color: #021123;
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
                color: #fff;
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
    <section class="mb-3 mb-sm-0" id="project-container">
        <ul class='slider'>
            @foreach ($projects as $project)
                <li class='item' style="background-image: url('{{ count($project->images) > 0 ? $project->images[0]->image_path : '' }}')">
                    <div class='content p-3'>
                        <h2 class='title font-monospace'>{{ $project->project_name }}</h2>
                        <p class='description'>{{ $project->short_description }}</p>
                        <a href="{{ route('project.details', ['slug' => $project->slug]) }}" class="btn btn-sm btn-outline-light">Read More</a>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class='slider-button'>
            <i class="btn prev iconoir-arrow-left"></i>
            <i class="btn next iconoir-arrow-right"></i>
        </div>
    </section>

    <script>
        const slider = document.querySelector(".slider");

        function updatePositions() {
            const items = document.querySelectorAll(".item");
            items.forEach((item, index) => {

                item.classList.remove('full-background');

                item.style.left = `calc(50% + ${(index - 2) * 220}px)`;
                item.style.top = '50%';
                item.style.transform = 'translateY(-50%)';

                // Reset all styles first
                item.style.width = '200px';
                item.style.height = '300px';
                item.style.borderRadius = '20px';
                item.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.5)';
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
                    item.classList.add('full-background');
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
