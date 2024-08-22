<footer class="footer section-mt">
    <div class="container">
        <div class="d-grid footer-wrapper">
            <div class="footer-logo-wrapper">
                <a href="index.html" class="logo-wrapper d-block">
                    <img src="{{ asset('assets/images/logo/logo.svg') }}"
                        class="img-fluid" alt="logo">
                </a>
                <p class="footer-about-wrapper fw-normal mb-0 lg">
                    {{ $bio['long_bio'] }}
                </p>
            </div>
            <div class="footer-link-wrapper">
                <h2 class="p lg text-capitalize font-secondary fw-normal">Pages</h2>
                <ul class="footer-link-group">
                    <li><a href="#project" class="footer-link" data-cursor="nft-magnifiers-cursor"
                            data-cursor-text="Click me!">Projects</a></li>
                    <li><a href="{{ route('resume') }}" class="footer-link" data-cursor="nft-magnifiers-cursor"
                            data-cursor-text="Click me!">Resume</a>
                    </li>
                    <li><a href="#contact" class="footer-link" data-cursor="nft-magnifiers-cursor"
                            data-cursor-text="Click me!">Contact</a></li>
                    <li><a href="#about-me" class="footer-link" data-cursor="nft-magnifiers-cursor"
                            data-cursor-text="Click me!">About</a></li>
                    <li><a href="#banner" class="footer-link" data-cursor="nft-magnifiers-cursor"
                            data-cursor-text="Click me!">Home</a></li>
                </ul>
            </div>
            <div class="footer-contactus-wrapper d-flex flex-column">
                <h2 class="p lg text-capitalize font-secondary fw-normal">Contact us</h2>
                <a href="https://maps.app.goo.gl/zLfZRHPKWFAM3PMA9" target="_blank"
                    class="fw-normal footer-contactus-link p lg fw-normal">
                    ASA Neer, 159/3/D, Road-02 W Agargaon, Dhaka 1207
                </a>
                <div class="mt-sm-5 mt-3">
                    <ul class="d-grid social-icons-list-wrapper">
                        @foreach ($socials as $social)
                            <li class="social-icon-list">
                                <a href="{{ $social['link'] }}" target="_blank"
                                    class="social-icons-link flex-center">
                                    <i data-icon="{{ $social['icon'] }}" class="social-icons flex-center"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <label class="m-0 text-center d-block">Copyright <b>©</b> {{ date('Y') }}. All Rights Reserved. </label>
        </div>
    </div>
</footer>
