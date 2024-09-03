<!DOCTYPE html>
<html lang="en">

@include('front.layouts.head')

<body class="index-page">
<main>
    @yield('content')
    </main>
    @include('front.layouts.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"  style=" background-color: pink;"><i
            class="bi bi-arrow-up-short" ></i></a>
    @include('front.layouts.footer-js')
</body>
</html>
