<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Shuffle Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <!-- =======================================================
  * Template Name: Shuffle
  * Template URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .navmenu .dropdown-menu a {
            background-color: pink;
            color: #000;
            border-radius: 10px;
            padding: 10px;
        }

        .navmenu a.active,
        .navmenu .dropdown-menu a.active {
            background-color: pink;
            color: #fff;
        }

        .navmenu a:hover,
        .navmenu .dropdown-menu a:hover {
            background-color: #eea3c9;
            color: #fff;
        }

        .navmenu .dropdown-menu {
            background-color: pink;
            border-radius: 10px;
        }

        .navmenu .dropdown-menu.show {
            background-color: pink;
        }

        .navmenu .dropdown:hover .dropdown-menu {
            background-color: pink;
        }

        .navmenu .dropdown-toggle::after {
            display: none;
        }

        .navmenu li {
            list-style: none;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 50px;
            height: auto;
        }

        .sitename {
            margin-left: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #000;
        }

        @media (max-width: 768px) {
            .logo img {
                width: 40px;
            }
        }
    </style>

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center">
                <img src="{{asset('assets/img/Logo.png')}}" alt="" style="width: 100%; height: 100%;">
                <h1 class="sitename">Portalku</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="{{ url('/') }}#about">About</a></li>
                    <li><a href="{{ url('/') }}#popular">Popular</a></li>
                    <li><a href="/artikel/create">Create Article</a></li>
                    <li><a href="{{ url('/') }}#team">Team</a></li>
                    <li class="dropdown"><a href="{{ url('/') }}#category"><span>Category</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="/kategori/education">Education</a></li>
                            <li><a href="/kategori/entertainment">Entertainment</a></li>
                            <li><a href="/kategori/sport">Sport</a></li>
                            <li><a href="/kategori/politic">Politic</a></li>
                            <li><a href="/kategori/beauty">Beauty</a></li>
                        </ul>

                    <li><a href="{{ url('/') }}#contact">Contact</a></li>
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
