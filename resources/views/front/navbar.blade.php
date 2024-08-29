
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/Logo.png" alt="" style="width: 100%; height: 100%;">
            <h1 class="sitename">Portalku</h1>
        </a>

        <nav id="navmenu" class="navmenu" >
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#popular">Popular</a></li>
                <li><a href="/artikel/create">Create Article</a></li>
                <li><a href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Category</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>National</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>International</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                        </li>
                    </ul>
                <li><a href="#contact">Contact</a></li>
                {{-- <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul> --}}
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
