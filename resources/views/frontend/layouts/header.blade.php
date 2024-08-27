<header class="position-fixed w-100 top-0 start-0 end-0  header" id="header">
    <div class="container">
        <div class="d-grid header-wrapper align-items-center">
            <div class="header-left-wrapper d-flex">
                <!-- Logo Start -->
                <a href="{{ route('dashboard') }}" class="header-logo-wrapper d-flex">
                    <img src="{{ asset('assets/images/logo/logo.svg') }}" class="img-fluid" alt="logo">
                </a>
                <!-- Logo End -->

                <div class="navbar-box-shadow position-fixed top-0 start-0"></div>

                <nav class="navbar py-xl-0">
                    <ul
                        class="d-flex justify-content-center justify-content-xl-start flex-xl-row flex-column align-items-xl-center nav-list-wrapper">
                        <li class="nav-list">
                            <a href="{{ Request::routeIs('dashboard') ? '#banner' : route('dashboard') }}" class="nav-links fw-normal {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">
                                 Home
                            </a>
                        </li>
                        <li class="nav-list">
                            <a href="{{ Request::routeIs('dashboard') ? '#about-me' : route('dashboard').'#about-me' }}" class="nav-links fw-normal"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">About</a>
                        </li>
                        <li class="nav-list">
                            <a href="{{ Request::routeIs('dashboard') ? '#project' : route('dashboard').'#project' }}" class="nav-links fw-normal"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">Projects</a>
                        </li>
                        <li class="nav-list">
                            <a href="{{ Request::routeIs('resume') ? '#resume' : route('resume') }}"  class="nav-links fw-normal {{ Request::routeIs('resume') ? 'active' : '' }}"
                                data-cursor="nft-magnifiers-cursor nft-light-mode-magnifiers-cursor"
                                data-cursor-text="Click me!">Resume</a>
                        </li>
                        <li class="nav-list">
                            <a href="#contact" class="nav-links"
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

                <!-- Connect Wallet Modal / Resume Download Start -->
                <a href="{{ route('resume.download') }}" class="button primary-btn connect-wallet-button"
                     id="connectwalletModalLabel">
                    <span class="d-none d-xl-block text-capitalize">Download Resume</span>
                    <i data-icon="iconDownload" class=""></i>
                </a>
                <!-- Connect Wallet Modal / Resume Download End -->
                
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
