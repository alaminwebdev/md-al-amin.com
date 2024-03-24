<!-- Footer -->
<footer class="footer-area pb-5 pt-3">
    <div class="container">
        <div class="footer-content text-center">
            <a href="#" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>

            <ul data-in="#" data-out="#" class="footer-menu" id="menu-footer-menu">
                <li id="menu-item-1856" class="active">
                    <a title="Home" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li id="" class=""><a title="Resume" href="{{ route('resume') }}">Resume</a></li>
                <li id="" class=""><a title="Works" href="{{ route('works') }}">Works</a></li>
                <li id="" class=""><a title="Contact" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <p class="copyright">
                © All rights reserved by <span>
                    <a target="_blank" href="https://www.facebook.com/mohammadalamin.dev">Mohammad Alamin</a>
                </span>
            </p>
        </div>
    </div>
</footer>
