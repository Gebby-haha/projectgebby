<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .background-jumbotron {
            background-image: url("img\jumbotron.jpeg");
            height: 400px;
            background-position: center;
            background-repeat: no repeat;
            background-size: cover;
            position: relative;
        }

        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNhcxJj4uy1wF5B-Q_ofmSMTP-o90HtRor7w&s');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100%;
            font-family: 'Lora';
            padding: 25px;
            background-color: white;
            color: black;
        }

        .dark-mode {
            background-color: black;
            color: white;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 1rem;
        }

        .card-text {
            margin: 0;
        }

        .swiper {
            width: 600px;
            height: 300px;
        }

        .list-group {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .nav-item {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

    {{-- navbar --}}
    @include('navbar.navbar')

    <!-- kategori -->
    @include('kategori.kategori')

    <!-- jumbotron -->
    @include('jumbotron.jumbotron')
    @yield('content')

    {{-- latest --}}
    @include('latest.latest')

    <!-- news slide -->
    @include('news slide.newsslide')

    <!-- list rekomen -->
    @include('rekomen.rekomen')

    <!-- card -->
    @include('card.card')

    </div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container my-5">

        <!-- Footer -->
        @include('footer.footer')
    </div>
    <!-- End of .container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,
            autoplay: {
                delay: 5000,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>
    <script src="js/script.js"></script>
</body>

</html>
