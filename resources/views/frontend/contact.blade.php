<section class="subscribe-and-get-update-section section-pt">
    <div class="container">
        <div class="subscribe-update-main-wrapper position-relative">
            <div class="subscribe-update-wrapper d-flex align-items-center overflow-hidden position-relative">
                <div class="subscribe-update-img flex-center"><img
                        src="{{ asset('assets/images/nft/subscribe-update-img.png') }}" alt="subscribe-section-img">
                </div>
                <div class="subscribe-content-wrapper">
                    <div class="subscribe-title-info d-flex align-items-center">
                        <div class="subscribe-title w-100">
                            <h2 class="small-title text-center text-lg-start d-inline-block">Let's Connect – I'd Love to Hear from You</h2>
                        </div>
                    </div>
                    <form id="contactForm" method="post" action="{{ route('contact.store') }}">
                        <div class="input-subscribe-btn-wrapper d-flex align-items-center">
                            <input type="email" name="email" id="email"  class="custom-input" placeholder="Enter your email address" required>
                            <input type="text" name="comments" id="comments" list="commentExamples"  class="custom-input" placeholder="Leave a comment here" required>
                            <datalist id="commentExamples">
                                <option value="I'm interested in your services."></option>
                                <option value="Please contact me at your earliest convenience."></option>
                                <option value="I have a question about your product."></option>
                                <option value="Looking forward to working with you!"></option>
                                <option value="I'd like to schedule a consultation."></option>
                            </datalist>
                            <button class="button primary-btn subscribe-btn justify-content-evenly"> <span id="bootstrap-loader" class="spinner-border text-primary" role="status" style="display:none;"></span> Submit</button>
                        </div>
                    </form>
                </div>
                <div class="top-left-diamond-img position-absolute w-100 h-100"><img class="contain-img"
                        src="{{ asset('assets/images/nft/top-left-diamond-img.png') }}" alt="subscribe-diamond-img">
                </div>
            </div>
            <div class="subscribe-bottom-left-diamond-img position-absolute bottom-left-img w-100 h-100"><img
                    class="contain-img" src="{{ asset('assets/images/nft/bottom-left-diamond-img.png') }}"
                    alt="subscribe-diamond-img"></div>
            <div class="position-absolute top-right-diamond-img top-0 end-0 w-100 h-100"><img class="contain-img"
                    src="{{ asset('assets/images/nft/top-right-diamond-img.png') }}" alt="subscribe-diamond-img"></div>
            <div class="position-absolute top-right-secondary-img top-0 end-0 w-100 h-100"><img class="contain-img"
                    src="{{ asset('assets/images/nft/top-right-corner-secondary.png') }}" alt="subscribe-diamond-img">
            </div>
        </div>
    </div>
</section>

{{-- <section class="py-4 py-sm-5">
    <div class="container">
        <div class="row">
            <div class="contact-infos col-lg-5">
                <h4 data-aos="fade-up" class="mb-0 mb-sm-1">Contact Info</h4>
                <ul class="contact-details p-0">
                    @foreach ($contacts as $contact)
                        <li class="d-flex align-items-center py-3" data-aos="zoom-in"
                            style="{{ $loop->last ? '' : 'border-bottom: 1px solid rgba(0, 0, 0, 0.125);' }}">
                            <div class="icon-box">
                                <i class="{{ $contact['icon'] }}"></i>
                            </div>
                            <div class="right">
                                <span>{{ $contact['name'] }}</span>
                                @foreach ($contact['infos'] as $info)
                                    <h5 class="">{{ $info }}</h5>
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section> --}}


