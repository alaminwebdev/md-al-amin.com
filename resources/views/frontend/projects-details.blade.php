@extends('app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            @foreach ($projectData->images as $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }} " style="background: #000">
                                    <img src="{{ asset($image->image_path) }}" class="d-block w-100 h-100 object-cover" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div data-aos="zoom-in" class="contact-form col-lg-5">
                    <div class="shadow-box py-5 px-4">
                        <img decoding="async" src="{{ asset('img/icon2.png') }}" alt="Star" class="star-icon">
                        <h4 class="mb-3">GET IN <span>TOUCH !</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
