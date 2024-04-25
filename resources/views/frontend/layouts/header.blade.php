<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container py-0 py-sm-2">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <h1 class="fs-5 mb-0 fw-bolder font-monospace gradient-text">
                <span>&lt;/</span>Mohammad Al Amin<span>&gt;</span>
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon ">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }} text-secondary" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'resume' ? 'active' : '' }} text-secondary" href="{{ route('resume') }}">Resume</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'projects' ? 'active' : '' }} text-secondary" href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }} text-secondary" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <a href="{{ route('resume.download') }}" class="theme-btn resume-btn btn btn-sm fs-7">Download Resume</a>
        </div>
    </div>
</nav>
