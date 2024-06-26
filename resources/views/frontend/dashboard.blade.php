 @extends('app')
 @section('content')
     @include('frontend.layouts.banner')
     <section class="content-area pt-5 pb-4">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     @include('frontend.layouts.experience')
                 </div>
                 <div class="col-lg-4">
                     <div class="row">
                         <div class="col-lg-12 col-md-6 col-sm-12">
                             <div data-aos="zoom-in" class="about-project-box aos-init">
                                 <div class="info-box shadow-box text-center rounded">
                                     <a class="overlay-link" href="{{ route('projects') }}"></a>
                                     <img decoding="async" src="{{ asset('img/my-works.png') }}" alt="">
                                     <div class="d-flex align-items-center justify-content-between">
                                         <div class="infos text-start">
                                             <h5>SHOWCASE</h5>
                                             <h2>Projects</h2>
                                         </div>
                                         <a href="{{ route('projects') }}" class="about-btn">
                                             <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-12 col-md-6 col-sm-12 mt-3">
                             <div class="blog-service-profile-wrap">
                                 <div data-aos="zoom-in" class="about-profile-box-wrap aos-init">
                                     <div class="about-profile-box info-box shadow-box rounded">
                                         <div class="inner-profile-icons shadow-box rounded">
                                             @foreach ($socials as $social)
                                                 <a href="{{ $social['link'] }}">
                                                     <i class="{{ $social['icon'] }}"></i>
                                                 </a>
                                             @endforeach
                                         </div>
                                         <div class="d-flex align-items-center justify-content-between">
                                             <div class="infos">
                                                 <h5>STAY WITH ME</h5>
                                                 <h2>Profiles</h2>
                                             </div>
                                             <a href="{{ route('contact') }}" class="about-btn">
                                                 <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-12 col-md-6 col-sm-12 mt-3">
                             <div data-aos="zoom-in" class="about-crenditials-box aos-init">
                                 <div class="info-box shadow-box rounded">
                                     <a class="overlay-link" href="{{ route('resume') }}"></a>
                                     <img decoding="async" src="{{ asset('img/logo.png') }}" alt="">
                                     <div class="d-flex align-items-center justify-content-between">
                                         <div class="infos">
                                             <h5>MORE ABOUT ME</h5>
                                             <h2>Credentials</h2>
                                         </div>

                                         <a href="#" class="about-btn">
                                             <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-12 col-md-6 col-sm-12 mt-3">
                             <div class="about-details aos-init" data-aos="zoom-in">
                                 <div class="about-details-inner shadow-box rounded">
                                     <img decoding="async" src="{{ asset('img/icon2.png') }}" alt="Star" class="star-icon">
                                     <p class="mb-0 text-white">🧑 {{ $bio['long_bio'] }}</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     @include('frontend.scroll-animation')
 @endsection
