 @extends('app')
 @section('content')
     <section class="about-area">
         <div class="container">
             <div class="row grid">
                 <div class="col-lg-4 grid-item mb-4">
                     {{-- Star AboutImage --}}
                     <div data-aos="zoom-in" class="about-image-box-wrap aos-init">
                         <div class="about-image-box shadow-box">
                             <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                             <div class="image-inner">
                                 <img decoding="async" src="{{ asset('img/me.jpg') }}" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 grid-item mb-4">
                     {{-- Start Featured Box --}}
                     <div class="about-credentials-wrap">
                         <div data-aos="zoom-in" class="aos-init">
                             <div class="banner shadow-box">
                                 <div class="marquee">
                                     <div style="animation: marquee 50s linear infinite;">
                                         <span>{{ $bio['long_bio'] }}</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 grid-item mb-4">
                     {{-- Start Project Box --}}
                     <div data-aos="zoom-in" class="about-project-box aos-init">
                         <div class="info-box shadow-box h-full">
                             <a class="overlay-link" href="https://wpriverthemes.com/gridx/work/"></a>
                             <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                             <img decoding="async" src="{{ asset('img/my-works.png') }}" alt="">
                             <div class="d-flex align-items-center justify-content-between">
                                 <div class="infos">
                                     <h5>SHOWCASE</h5>
                                     <h2>Projects</h2>
                                 </div>
                                 <a href="https://wpriverthemes.com/gridx/work/" class="about-btn">
                                     <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 grid-item mb-4">
                     {{-- Start Profiles Box --}}
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
                                     <a href="#" class="about-btn">
                                         <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 grid-item mb-4">
                     {{-- Start Credentials Box --}}
                     <div data-aos="zoom-in" class="about-crenditials-box aos-init">
                         <div class="info-box shadow-box h-full">
                             <a class="overlay-link" href="#"></a>
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
                 </div>
                 <div class="col-lg-4 grid-item mb-4">
                     {{-- Start Education --}}
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
                 </div>
                 <div class="col-lg-4 grid-item mb-4">
                     {{-- Start Experience --}}
                     <div data-aos="zoom-in" class="aos-init">
                         <div class="about-edc-exp about-experience shadow-box">
                             <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                             <h4>EXPERIENCE</h4>
                             <ul>
                                 <li>
                                     <p class="date">2007 - 2017</p>
                                     <h3>Framer Designer &amp; Developer</h3>
                                     <p class="type">Bluebase Designs</p>
                                 </li>
                                 <li>
                                     <p class="date">2017 - 2023</p>
                                     <h3>Front-End Developer</h3>
                                     <p class="type">Larsen &amp; Toubro</p>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 grid-item mb-4">
                     {{-- Start AboutDetail --}}
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
                 </div>
             </div>
         </div>
     </section>
 @endsection
