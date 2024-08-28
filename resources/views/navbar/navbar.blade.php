<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-transparent ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://png.pngtree.com/png-clipart/20201208/original/pngtree-red-and-black-logo-png-image_5517319.jpg"
                alt="Logo" width="100" height="50">
        </a>
        <form class="container d-flex col-md-6">
            <input class="form-control me-2 bg-transparent fw-bold" type="search" placeholder="search"
                aria-label="search">
            <span class="input-group-text bg-transparent fw-bold" id="addon-wrapping"> <i
                    class="fa-solid fa-magnifying-glass"></i></span>
        </form>
    </div>

    </div>
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container col-md-4"></div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav flex-column">
                <ul class="nav nav-underline">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown Login fw-bold">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><i
                                    class="fa-regular fa-user"></i>{{Auth::user()->name ?? ''}}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"
                                style="background-color: rgb(228, 243, 243);">
                                @guest
                                <li> <a class="dropdown-item" href="{{ route('login')}}"
                                    style="color: rgb(34, 38, 37);">Login</a></li>
                            <li> <a class="dropdown-item" href="{{ route('regis.create') }}" style="color:rgb(21, 24, 23)">Sign
                                    Up?</a></li>
                                @endguest
                                <li> <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"
                                        style="color:rgb(21, 24, 23)">Logout</a></li>
                            </ul>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        <li class="nav-item">
                        </li>
                        <li class="Home">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="About Us">
                            <a class="nav-link active" aria-current="page" href="{{ route('about')}}">About Us</a>
                        </li>
                        <li class="Contact">
                            <a class="nav-link active" aria-current="page" href="{{ route('contact')}}">Follow
                                Us</a>
                        </li>
                    </ul>
                </ul>
            </ul>
            </ul>
        </div>
    </div>
</nav>
