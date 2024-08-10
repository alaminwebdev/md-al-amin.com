<style>
    .navbar {
        position: fixed;
        z-index: 3;
        width: 100%;
        backdrop-filter: blur(6.6px);
        transition: all 2s linear(0 0%,
                0 1.8%,
                0.01 3.6%,
                0.03 6.35%,
                0.07 9.1%,
                0.13 11.4%,
                0.19 13.4%,
                0.27 15%,
                0.34 16.1%,
                0.54 18.35%,
                0.66 20.6%,
                0.72 22.4%,
                0.77 24.6%,
                0.81 27.3%,
                0.85 30.4%,
                0.88 35.1%,
                0.92 40.6%,
                0.94 47.2%,
                0.96 55%,
                0.98 64%,
                0.99 74.4%,
                1 86.4%,
                1 100%);
    }

    .nav-link {
        font-weight: bolder;
        text-transform: uppercase;
        font-size: 12px;
    }
    .nav-link.active {
        color: #021123 !important;
    }
    .navbar-brand h4{
        color: #021123 !important;
    }
</style>
<nav class="navbar navbar-expand-md shadow-sm">
    <div class="container py-0 py-sm-2">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <h4 class="fs-5 mb-0 fw-bolder font-monospace">
                <span>&lt;/</span>Mohammad Al Amin<span>&gt;</span>
            </h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon ">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }} " aria-current="page" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'resume' ? 'active' : '' }} " href="{{ route('resume') }}">Resume</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'projects' ? 'active' : '' }} " href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }} " href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav>
