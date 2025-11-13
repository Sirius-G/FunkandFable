<nav class="navbar navbar-expand-lg shadow-sm fixed-top bgnav secondary-section wave-bottom">
            <div class="container">
                <a class="navbar-brand item" href="{{ url('/') }}" tabindex="0" title="Funk & Fable Logo and Linked Index" aria-lable="Sycamore Sound Guitar Tuition Logo and Linked Index">
                    <img src="/images/svg/F&FLogoLinear.svg" class="nav-logo" alt="Funk and Fable logo"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item lft lft1">
                            <a href="/home" tabindex="1" title="Home - Funk and Fable" aria-label="Home - Funk and Fable" class="nav-link item">
                                Home
                            </a>
                        </li>
                        <li class="nav-item lft">
                            <a href="/about" tabindex="2" title="About - Funk and Fable" aria-label="About - Funk and Fable" class="nav-link item">
                                About
                            </a>
                        </li>
                        <li class="nav-item lft">
                            <a href="/services" tabindex="3" title="Services - Funk and Fable" aria-label="Services - Funk and Fable" class="nav-link item">
                                Services
                            </a>
                        </li>
                        <li class="nav-item lft">
                            <a href="/repertoire" tabindex="4" title="Repertoire - Funk and Fable" aria-label="Repertoire - Funk and Fable" class="nav-link item">
                                Repertoire
                            </a>
                        </li>
                        <li class="nav-item lft">
                            <a href="/media" tabindex="5" title="Media - Funk and Fable" aria-label="Media - Funk and Fable" class="nav-link item">
                                Media
                            </a>
                        </li>
                        <li class="nav-item lft">
                            <a href="/contact" tabindex="6" title="Contact - Funk and Fable" aria-label="Contact - Funk and Fable" class="nav-link item">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item rhs">
                                    <a class="nav-link item" tabindex="7" href="{{ route('login') }}">{{ __('Admin Login') }}</a>
                                </li>
                            @endif

                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" tabindex="5" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="/admin">Admin Dashboard</a>
                                    </li>
                                    <li><hr></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>
                                </ul>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>