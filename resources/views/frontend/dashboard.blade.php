 @extends('app')
 @section('content')
     <!-- Dashboard About -->
     <section class="about-area">
         <div class="container">
             <div data-elementor-type="wp-page" data-elementor-id="13" class="elementor elementor-13">
                 <section class="elementor-section elementor-top-section elementor-element elementor-element-5ed44d6 row elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5ed44d6" data-element_type="section">
                     <div class="elementor-container elementor-column-gap-no">
                         <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-54cd859 col-md-6" data-id="54cd859" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-c4f5752 elementor-widget elementor-widget-gridxdaaboutme" data-id="c4f5752" data-element_type="widget" data-widget_type="gridxdaaboutme.default">
                                     <div class="elementor-widget-container">
                                         {{-- Star AboutMe --}}
                                         <div data-aos="zoom-in" class="about-me-box-wrap aos-init">
                                             <div class="about-me-box shadow-box">
                                                 <a class="overlay-link" href="#"></a>
                                                 <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                                                 <div class="img-box">
                                                     <img decoding="async" src="{{ asset('img/me.jpg') }}" alt="">
                                                 </div>
                                                 <div class="infos">
                                                     <h5>FULL STACK WEB DEVELOPER</h5>
                                                     <h1>Mohammad Al Amin</h1>
                                                     <p>I am a Full Stack Web Developer based in Dhaka.</p> <a href="#" class="about-btn">
                                                         <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8c406e0 col-md-6" data-id="8c406e0" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-79a19dc elementor-widget elementor-widget-gridxdafeaturedbox" data-id="79a19dc" data-element_type="widget" data-widget_type="gridxdafeaturedbox.default">
                                     <div class="elementor-widget-container">
                                         {{-- Start Featured Box --}}
                                         <div class="about-credentials-wrap">
                                             <div data-aos="zoom-in" class="aos-init">
                                                 <div class="banner shadow-box">
                                                     <div class="marquee">
                                                         <div style="animation: marquee 50s linear infinite;">
                                                             <span>Hello, I'm Md. Al Amin, a full-stack developer with 1 year+ of experience. I have a strong passion for crafting seamless web experiences that users love. My toolkit comprises Laravel for robust back-end development, JavaScript for dynamic front-end interfaces with React, and modern tools like Inertia.js and Vite. With expertise in MySQL for optimizing databases, Git for version control, and CSS for elegant styling. From
                                                                 mastering AJAX for dynamic web interactions to ensuring smooth user experiences, I'm dedicated to delivering applications that shine.</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <section class="elementor-section elementor-inner-section elementor-element elementor-element-1130d0e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1130d0e" data-element_type="section">
                                     <div class="elementor-container elementor-column-gap-no">
                                         <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cd3cb20" data-id="cd3cb20" data-element_type="column">
                                             <div class="elementor-widget-wrap elementor-element-populated">
                                                 <div class="elementor-element elementor-element-bdc73c3 elementor-widget elementor-widget-gridxdacredentialbox" data-id="bdc73c3" data-element_type="widget" data-widget_type="gridxdacredentialbox.default">
                                                     <div class="elementor-widget-container">
                                                         {{-- Start Credentials Box --}}
                                                         <div data-aos="zoom-in" class="about-crenditials-box aos-init">
                                                             <div class="info-box shadow-box h-full">
                                                                 <a class="overlay-link" href="https://wpriverthemes.com/gridx/credential/"></a>
                                                                 <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                                                                 <img decoding="async" src="{{ asset('img/sign.png') }}" alt="">
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
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d1ad012" data-id="d1ad012" data-element_type="column">
                                             <div class="elementor-widget-wrap elementor-element-populated">
                                                 <div class="elementor-element elementor-element-505fe86 elementor-widget elementor-widget-gridxdaprojectbox" data-id="505fe86" data-element_type="widget" data-widget_type="gridxdaprojectbox.default">
                                                     <div class="elementor-widget-container">
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
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                             </div>
                         </div>
                     </div>
                 </section>
                 <section class="elementor-section elementor-top-section elementor-element elementor-element-033fafe row mt-24  elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="033fafe" data-element_type="section">
                     <div class="elementor-container elementor-column-gap-no">
                         <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-dc60a93" data-id="dc60a93" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-6ab9773 elementor-widget elementor-widget-gridxdablogbox" data-id="6ab9773" data-element_type="widget" data-widget_type="gridxdablogbox.default">
                                     <div class="elementor-widget-container">
                                         {{-- Start Blog Box --}}
                                         <div class="col-md-12">
                                             <div class="blog-service-profile-wrap d-flex gap-24">
                                                 <div data-aos="zoom-in" class="about-blog-box aos-init">
                                                     <div class="info-box shadow-box h-full">
                                                         <a href="#" class="overlay-link"></a>
                                                         <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                                                         <img decoding="async" src="{{ asset('img/gfonts.png') }}" alt="">
                                                         <div class="d-flex align-items-center justify-content-between">
                                                             <div class="infos">
                                                                 <h5>BLOG</h5>
                                                                 <h2>GFonts</h2>
                                                             </div>
                                                             <a href="#" class="about-btn">
                                                                 <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                                             </a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-524805c" data-id="524805c" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-39b9567 elementor-widget elementor-widget-gridxdaservicesbox" data-id="39b9567" data-element_type="widget" data-widget_type="gridxdaservicesbox.default">
                                     <div class="elementor-widget-container">
                                         {{-- Start Services Box --}}
                                         <div class="col-md-12">
                                             <div class="blog-service-profile-wrap d-flex gap-24">
                                                 <div data-aos="zoom-in" class="flex-1 about-services-box-wrap aos-init">
                                                     <div class="about-services-box info-box shadow-box h-full">
                                                         <a href="#" class="overlay-link"></a>
                                                         <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                                                         <div class="icon-boxes">
                                                             <i class="iconoir-camera"></i>
                                                             <i class="iconoir-design-pencil"></i>
                                                             <i class="iconoir-color-filter"></i>
                                                             <i class="iconoir-dev-mode-phone"></i>
                                                         </div>
                                                         <div class="d-flex align-items-center justify-content-between">
                                                             <div class="infos">
                                                                 <h5>SPECIALIZATION</h5>
                                                                 <h2>Services Offering</h2>
                                                             </div>

                                                             <a href="#" class="about-btn">
                                                                 <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                                             </a>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-386b9dc" data-id="386b9dc" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-d02c9cb elementor-widget elementor-widget-gridxdaprofilesbox" data-id="d02c9cb" data-element_type="widget" data-widget_type="gridxdaprofilesbox.default">
                                     <div class="elementor-widget-container">
                                         {{-- Start Profiles Box --}}
                                         <div class="col-md-12">
                                             <div class="blog-service-profile-wrap">
                                                 <div data-aos="zoom-in" class="about-profile-box-wrap aos-init">
                                                     <div class="about-profile-box info-box shadow-box h-full">
                                                         <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                                                         <div class="inner-profile-icons shadow-box">
                                                             <a href="https://wpriverthemes.com/gridx/#">
                                                                 <i class="iconoir-dribbble"></i>
                                                             </a>
                                                             <a href="https://wpriverthemes.com/gridx/#">
                                                                 <i class="iconoir-twitter"></i>
                                                             </a>
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
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <section class="elementor-section elementor-top-section elementor-element elementor-element-1588901 row mt-24  elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1588901" data-element_type="section">
                     <div class="elementor-container elementor-column-gap-no">
                         <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1616496 col-md-6" data-id="1616496" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-b27321e elementor-widget elementor-widget-gridxdaclientbox" data-id="b27321e" data-element_type="widget" data-widget_type="gridxdaclientbox.default">
                                     <div class="elementor-widget-container">
                                         {{-- Start Client Box --}}
                                         <div data-aos="zoom-in" class="about-client-box-wrap aos-init">
                                             <div class="about-client-box info-box shadow-box">
                                                 <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                                                 <div class="clients d-flex align-items-start gap-24 justify-content-center">
                                                     <div class="client-item">
                                                         <h2>02</h2>
                                                         <p>Years <br>Experience</p>
                                                     </div>
                                                     <div class="client-item">
                                                         <h2>+12</h2>
                                                         <p>CLIENTS <br>WORLDWIDE</p>
                                                     </div>
                                                     <div class="client-item">
                                                         <h2>+10</h2>
                                                         <p>Total <br>Projects</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e314706 col-md-6" data-id="e314706" data-element_type="column">
                             <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-b0e85ec elementor-widget elementor-widget-gridxdacontactbox" data-id="b0e85ec" data-element_type="widget" data-widget_type="gridxdacontactbox.default">
                                     <div class="elementor-widget-container">
                                         {{-- Start Contact Box --}}
                                         <div data-aos="zoom-in" class="about-contact-box-wrap aos-init ">
                                             <div class="about-contact-box info-box shadow-box">
                                                 <a class="overlay-link" href="#"></a>
                                                 <img decoding="async" src="{{ asset('img/bg1.png') }}" alt="BG" class="bg-img">
                                                 <img decoding="async" src="{{ asset('img/icon2.png') }}" alt="Star" class="star-icon">
                                                 <h2>Let's <br>work <span>together.</span></h2>
                                                 <a href="#" class="about-btn">
                                                     <img decoding="async" src="{{ asset('img/icon.svg') }}" alt="Star">
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
             </div>
         </div>
     </section>
 @endsection
