<header class="position-fixed w-100 top-0 start-0 end-0  header" id="header">
    <div class="container">
        <div class="d-grid header-wrapper align-items-center">
            <div class="header-left-wrapper d-flex">
                <!-- Logo Start -->
                <a href="index.html" class="header-logo-wrapper d-flex">
                    <img src="{{ asset('assets/images/logo/logo.svg') }}" class="img-fluid" alt="logo">
                </a>
                <!-- Logo End -->

                <div class="navbar-box-shadow position-fixed top-0 start-0"></div>

                <nav class="navbar py-xl-0">
                    <ul
                        class="d-flex justify-content-center justify-content-xl-start flex-xl-row flex-column align-items-xl-center nav-list-wrapper">
                        <li class="nav-list">
                            <a href="index.html" class="nav-links fw-normal active"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">
                                 Home
                            </a>
                        </li>
                        <li class="nav-list">
                            <a href="#" class="nav-links fw-normal"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">About</a>
                        </li>
                        <li class="nav-list">
                            <a href="#" class="nav-links fw-normal"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">Projects</a>
                        </li>
                        <li class="nav-list">
                            <a href="{{ route('resume') }}" class="nav-links fw-normal"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">Resume</a>
                        </li>
                        <li class="nav-list">
                            <a href="#" class="nav-links"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right-wrapper">
                <div class="toggle-wrapper">
                    <div class="toggle"></div>
                </div>
                <!-- Connect Wallet Modal Start -->
                <a href="{{ route('resume.download') }}" class="button primary-btn connect-wallet-button"
                     id="connectwalletModalLabel">
                    <span class="d-none d-xl-block text-capitalize">Download Resume</span>
                    <i data-icon="iconDownload" class=""></i>
                </a>

                <!-- Connect Wallet Modal End -->
                <div class="d-block ms-5 d-xl-none">
                    <div class="hamburger" id="hamburger">
                        <span class="line"></span>
                        <span class="line text-center"></span>
                        <span class="line"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

{{-- <nav class="navbar navbar-expand-md shadow-sm">
    <div class="container-fluid py-0 py-sm-2">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <h4 class="fs-5 mb-0 fw-bolder font-monospace">
                <span>&lt;/</span>Mohammad Al Amin<span>&gt;</span>
            </h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon ">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }} "
                        aria-current="page" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'resume' ? 'active' : '' }} "
                        href="{{ route('resume') }}">Resume</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'projects' ? 'active' : '' }} "
                        href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }} "
                        href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav> --}}
