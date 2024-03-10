<header class="header-area">
    <div class="container">
        <div class="gx-row d-flex align-items-center justify-content-between">
            <a href="#" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>
            <nav class="navbar">
                <ul data-in="#" data-out="#" class="menu" id="menu-main-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item menu-item-1850 {{ Route::currentRouteName() == 'dashboard' ? 'active' : ''}}"><a title="Home" href="{{ route('dashboard') }}">Home</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1851 {{ Route::currentRouteName() == 'about' ? 'active' : ''}}"><a title="About" href="{{ route('about') }}">About</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1853 {{ Route::currentRouteName() == 'works' ? 'active' : ''}}"><a title="Works" href="{{ route('works') }}">Works</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1852 {{ Route::currentRouteName() == 'contact' ? 'active' : ''}}"><a title="Contact" href="{{ route('contact') }}">Contact</a> </li>
                </ul>
            </nav>
            <a href="#" class="theme-btn">Download Resume</a>

            <!-- End Navigation -->
            <div class="show-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
