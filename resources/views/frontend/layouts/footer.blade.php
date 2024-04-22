<!-- Footer -->
<footer class="footer-area pb-4 pt-1">
    <div class="container">
        <div class="footer-content text-center">
            <a href="#" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>

            <ul data-in="#" data-out="#" class="footer-menu list-unstyled" id="menu-footer-menu">
                <li class="m-0">
                    <a title="Home" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="m-0"><a title="Resume" href="{{ route('resume') }}">Resume</a></li>
                <li class="m-0"><a title="Projects" href="{{ route('projects') }}">Projects</a></li>
                <li class="m-0"><a title="Contact" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <p class="copyright">
                © All rights reserved by <span>
                    <a target="_blank" href="https://www.facebook.com/mohammadalamin.dev">Mohammad Alamin</a>
                </span>
            </p>
        </div>
    </div>
</footer>
