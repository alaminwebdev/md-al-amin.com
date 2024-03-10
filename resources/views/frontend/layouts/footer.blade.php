<!-- Footer -->
<footer class="footer-area py-5">
    <div class="container">
        <div class="footer-content text-center">
            <a href="#" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>

            <ul data-in="#" data-out="#" class="footer-menu" id="menu-footer-menu">
                <li id="menu-item-1856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item menu-item-1856 active">
                    <a title="Home" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li id="menu-item-1857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1857"><a title="About" href="{{ route('about') }}">About</a></li>
                <li id="menu-item-1859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1859"><a title="Works" href="{{ route('works') }}">Works</a></li>
                <li id="menu-item-1858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1858"><a title="Contact" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <p class="copyright">
                © All rights reserved by <span>
                    <a target="_blank" href="https://www.facebook.com/mohammadalamin.dev">Mohammad Alamin</a>
                </span>
            </p>
        </div>
    </div>
</footer>
