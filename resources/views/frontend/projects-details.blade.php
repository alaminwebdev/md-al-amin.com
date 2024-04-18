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
            height: 350px;
        }
        .carousel-item{
            height: 350px;
            border-radius: 30px;
            background: #000;
        }
    </style>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div data-aos="zoom-in" class="col-lg-7">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($projectData->images as $index => $image)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($projectData->images as $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}  w-100">
                                    <a href="{{ asset($image->image_path) }}" data-baguettebox="project-images" data-caption="{{$projectData->short_description}}">
                                        <img decoding="async" src="{{ asset($image->image_path) }}" class="d-block w-100 h-100" style="border-radius: 30px; object-fit:cover" alt="{{$projectData->short_description}}">
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

                <div data-aos="zoom-in" class="contact-form col-lg-5">
                    <div class="shadow-box p-4">
                        <img decoding="async" src="{{ asset('img/icon2.png') }}" alt="Star" class="star-icon">
                        
                        <div class="mb-3">
                            <h6 class="mb-3" data-aos="fade-up" class="aos-init aos-animate">PROJECT <span>LINK</h5>
                            <ul class="social-links d-flex align-center justify-content-center pt-2 aos-init aos-animate" data-aos="zoom-in">
                                <li>
                                    <a href="https://www.facebook.com/mohammadalamin.dev" target="_blank" class="shadow-box">
                                        <i class="iconoir-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/mdalamin1998/" target="_blank" class="shadow-box">
                                        <i class="iconoir-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/alaminwebdev" target="_blank" class="shadow-box">
                                        <i class="iconoir-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mohammadalamin.dev@gmail.com" target="_blank" class="shadow-box">
                                        <i class="iconoir-mail"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h6 data-aos="fade-up" class="aos-init aos-animate">TITLE</h6>
                            <p>{{$projectData->short_description}}</p>
                        </div>

                        <div>
                            <h6 data-aos="fade-up" class="aos-init aos-animate">TAGS</h6>
                            <div>
                                @foreach ($projectData->tags as $tag)
                                    <span class="badge rounded-pill text-bg-success">{{$tag->name}}</span>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div>
                        <h6 data-aos="fade-up" class="aos-init aos-animate">PROJECT OVERVIEW</h6>
                        <div>{{$projectData->long_description}}</div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
