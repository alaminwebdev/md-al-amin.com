 @extends('app')
 @section('content')
     <!-- Hero Banner Start -->
     @include('frontend.layouts.banner')
     <!-- Hero Banner End -->

     {{-- @include('frontend.scroll-animation') --}}

     <!-- Amazing Art/Project Start -->
     <section class="amazing-art-wrapper overflow-hidden position-relative">
         <div class="container position-relative">
             <div class="amazing-art-content-wrapper d-flex align-items-center position-relative overflow-hidden">
                 <div class="amazing-art-title">
                     <h4 class="small-title lh-base  text-lg-start text-sm-center d-inline-block">All the amazing
                         projects here...</h4>
                 </div>
                 <div class="amazing-art-features-wrapper d-flex align-items-start">
                     <div class="amazing-art-specification w-100 text-center text-md-start">
                         <div class="feature-icon-wrapper">
                             <i data-icon="securityIcon" class="feature-icon mx-auto mx-md-0 flex-center"></i>
                         </div>
                         <div class="feature-detail">
                             <h3 class="p fw-semibold feature-name">Secure & Reliable Solutions</h3>
                             <p class="p sm fw-normal mb-0 feature-info">I develop software with robust encryption, ensuring
                                 the highest level of security across all projects.</p>
                         </div>
                     </div>
                     <div class="amazing-art-specification w-100 text-center text-md-start">
                         <div class="feature-icon-wrapper">
                             <i data-icon="walletAmazingIcon" class="feature-icon mx-auto mx-md-0 flex-center"></i>
                         </div>
                         <div class="feature-detail">
                             <h3 class="p fw-semibold feature-name">Seamless &amp; Efficient Processes</h3>
                             <p class="p sm fw-normal mb-0 feature-info">My work includes creating easy-to-use and fast
                                 software solutions, from inventory management to microfinance systems, along with
                                 comprehensive reporting tools.</p>
                         </div>
                     </div>
                 </div>
                 <div class="amazing-right-circle position-absolute"></div>
             </div>
             <div class="amazing-diamond-img position-absolute bottom-0">
                 <img src="{{ asset('assets/images/nft/amazing-art-bg-diamond.png') }}" alt="diamond-img">
             </div>
         </div>
     </section>
     <!-- Amazing Art/Project End -->

     <!-- Top Artwork/Project Start -->
     @include('frontend.projects')
     <!-- Top Artwork/Project End -->

     <!-- About Start -->
     @include('frontend.about')
     <!-- About End -->

    <!-- Top Seller/Skills Start -->
    @include('frontend.skills')
    <!-- Top Seller/Skills End -->

 @endsection
