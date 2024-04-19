@extends('app')
@section('content')
    <style>
        .carousel-indicators [data-bs-target] {
            width: 19px;
            height: 5px;
            background-color: #00d4ff;
            background-clip: padding-box;
            border: 0;
            transition: opacity .6s ease;
            border-radius: 6px !important;
        }

        .contact-form img {
            right: 30px;
            width: 32px;
        }

        .social-links li a {
            width: 60px;
            height: 60px;
            line-height: 65px;
        }

        .shadow-box {
            height: 400px;
        }

        .carousel-item {
            height: 400px;
            border-radius: 30px;
            background: #000;
        }
        .other-project{
            padding:100px 25px 25px 25px; 
        }

        .other-project::before {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background: #007777;
            border-radius: inherit;
            mask-image: linear-gradient(transparent, #fff);
            -webkit-mask-image: linear-gradient(transparent, #fff);
            -moz-mask-image: linear-gradient(transparent, #fff);
            -o-mask-image: linear-gradient(transparent, #fff);
        }

        .other-project::after {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -2;
            background-color: rgba(0, 0, 0, 0.20);
            border-radius: inherit;
        }
    </style>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div data-aos="zoom-in" class="col-lg-8">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($projectData->images as $index => $image)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($projectData->images as $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}  w-100">
                                    <a href="{{ asset($image->image_path) }}" data-baguettebox="project-images" data-caption="{{ $projectData->short_description }}">
                                        <img decoding="async" src="{{ asset($image->image_path) }}" class="d-block w-100 h-100" style="border-radius: 30px; object-fit:cover" alt="{{ $projectData->short_description }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <i class="iconoir-fast-arrow-left fs-2" style="color: #00d4ff"></i>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <i class="iconoir-fast-arrow-right fs-2" style="color: #00d4ff"></i>
                        </button>
                    </div>
                </div>

                <div data-aos="zoom-in" class="contact-form col-lg-4">
                    <div class="shadow-box p-4">
                        <img decoding="async" src="{{ asset('img/icon2.png') }}" alt="Star" class="star-icon">

                        <div class="mb-3">
                            <h6 class="mb-3" data-aos="fade-up" class="aos-init aos-animate">PROJECT <span>LINK</h6>
                            <ul class="social-links d-flex align-center justify-content-start pt-2 aos-init aos-animate list-unstyled" data-aos="zoom-in">
                                <li>
                                    <a href="https://www.linkedin.com/in/mdalamin1998/" target="_blank" class="shadow-box" title="Live Link">
                                        <i class="iconoir-internet"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/mohammadalamin.dev" target="_blank" class="shadow-box" title="Host Link">
                                        <i class="iconoir-link"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/alaminwebdev" target="_blank" class="shadow-box" title="Host Link">
                                        <i class="iconoir-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h6 data-aos="fade-up" class="aos-init aos-animate">TITLE</h6>
                            <p>{{ $projectData->short_description }}</p>
                        </div>

                        <div>
                            <h6 data-aos="fade-up" class="aos-init aos-animate">TAGS</h6>
                            <div>
                                @foreach ($projectData->tags as $tag)
                                    <span class="badge rounded-pill text-bg-success">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <div>
                        <h5 data-aos="fade-up" class="aos-init aos-animate pb-3 mb-3" style="border-bottom: 1px solid #212529;">PROJECT OVERVIEW</h5>
                        <div>{!! $projectData->long_description !!}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h5 data-aos="fade-up" class="aos-init aos-animate pb-3 mb-3" style="border-bottom: 1px solid #212529;">OTHER PROJECT</h5>
                        @foreach ($other_projects as $other_project)
                            @php
                                $firstImage = $other_project->images->first(); // Get the first image from the relation
                            @endphp
                            <a href="{{ route('project.details', ['slug' => $other_project->slug] ) }}" target="_blank">
                                <div class="mb-4 text-white other-project rounded position-relative" style="background-image: url('{{ asset($firstImage->image_path) }}'); z-index:1;">
                                    <h4 class="fst-italic fw-bold m-o ">{{ $other_project->project_name }}</h4>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
