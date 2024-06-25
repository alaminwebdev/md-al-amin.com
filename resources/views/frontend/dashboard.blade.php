 @extends('app')
 @section('content')
     <style>
         .about-area {
             position: relative;
         }

         .about-area:before {
             position: absolute;
             content: '';
             width: 100%;
             height: 100%;
             top: 0;
             left: 0;
             opacity: .3;
             z-index: -1;
             background-image: url({{ asset('img/pattern.svg') }});
         }

         .about-area:after {
             position: absolute;
             content: '';
             width: 100%;
             height: 100%;
             top: 0;
             left: 0;
             z-index: -2;
             background: linear-gradient(180deg, #f8fafc, rgba(242, 202, 252, .11) 34.69%, rgba(250, 198, 252, .11) 44.06%, rgba(175, 183, 255, .11) 54.48%, rgba(142, 220, 200, .07) 64.9%, #f8fafc 97.95%);

         }
     </style>
     @include('frontend.layouts.banner')
     <section class="about-area pt-5 pb-4">
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
                                     <p>🧑 {{ $bio['long_bio'] }}</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 {{-- <div class="col-lg-4 grid-item mb-4">
                     <div data-aos="zoom-in" class=" aos-init">
                         <div class="about-pic-container">
                             <img class="about-image" src="{{ asset('img/me.jpg') }}" alt="">
                         </div>
                     </div>
                 </div> --}}
                 {{-- <div class="col-lg-4 grid-item mb-4">
                     <div data-aos="zoom-in" class="aos-init">
                         <div class="scroller" data-direction="right" data-speed="medium">
                             <div class="scroller__inner pb-0">
                                 @foreach ($skill_icons as $skill_icon)
                                     <img src="{{ asset('img/icons/' . $skill_icon) }}" width="100px;" class="img-fluid" />
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div> --}}

                 {{-- <div class="col-lg-4 grid-item mb-4">
                     <div data-aos="zoom-in" class="about-project-box aos-init">
                         <div class="info-box shadow-box text-center">
                             <a class="overlay-link" href="{{ route('projects') }}"></a>
                             <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                             <img decoding="async" src="{{ asset('img/my-works.png') }}" alt="">
                             <div class="d-flex align-items-center justify-content-between">
                                 <div class="infos">
                                     <h5>SHOWCASE</h5>
                                     <h2>Projects</h2>
                                 </div>
                                 <a href="{{ route('projects') }}" class="about-btn">
                                     <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div> --}}
                 {{-- <div class="col-lg-4 grid-item mb-4">
                     <div class="blog-service-profile-wrap">
                         <div data-aos="zoom-in" class="about-profile-box-wrap aos-init">
                             <div class="about-profile-box info-box shadow-box h-full">
                                 <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                                 <div class="inner-profile-icons shadow-box">
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
                 </div> --}}
                 {{-- <div class="col-lg-4 grid-item mb-4">
                     <div data-aos="zoom-in" class="about-crenditials-box aos-init">
                         <div class="info-box shadow-box h-full">
                             <a class="overlay-link" href="{{ route('resume') }}"></a>
                             <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
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
                 </div> --}}

                 {{-- <div class="col-lg-4 grid-item mb-4">
                     <div data-aos="zoom-in" class="aos-init">
                         <div class="about-edc-exp about-education shadow-box">
                             <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                             <h4>EDUCATION & TRAINING</h4>
                             <ul>
                                 @foreach ($educations as $education)
                                     <li>
                                         <p class="date">{{ $education['session'] }}</p>
                                         <h3>{{ $education['degree'] }}</h3>
                                         <p class="type">{{ $education['institute'] }}</p>
                                     </li>
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                 </div> --}}

                 {{-- <div class="col-lg-4 grid-item mb-4">
                     <div data-aos="zoom-in" class="aos-init">
                         <div class="about-edc-exp about-experience shadow-box">
                             <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                             <h4>EXPERIENCE</h4>
                             <ul>
                                 @foreach ($experiences as $experience)
                                     <li>
                                         <p class="date">{{ $experience['designation'] }}</p>
                                         <h3>{{ $experience['start_date'] }} - {{ $experience['end_date'] == null ? 'Current' : $experience['end_date'] }}</h3>
                                         <p class="type">{{ $experience['company'] }}</p>
                                     </li>
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                 </div> --}}

                 {{-- <div class="col-lg-4 grid-item mb-4">
                     <div class="about-details aos-init" data-aos="zoom-in">
                         <h3 class="section-heading aos-init" data-aos="">
                             <img decoding="async" src="{{ asset('img/star-2.png') }}" alt="Star">
                             Self-summary
                             <img decoding="async" src="{{ asset('img/star-2.png') }}" alt="Star">
                         </h3>
                         <div class="about-details-inner shadow-box">
                             <img decoding="async" src="{{ asset('img/icon2.png') }}" alt="Star" class="star-icon">
                             <h4>Mohammad Al Amin</h4>
                             <p>{{ $bio['long_bio'] }}</p>
                         </div>
                     </div>
                 </div> --}}
             </div>
         </div>
     </section>
     @include('frontend.scroll-animation')
 @endsection
