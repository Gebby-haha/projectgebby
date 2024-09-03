<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .owl-carousel.slider {
            max-width: 600px;
            margin: 0 auto;
            position: relative; /* Tambahkan relative positioning */
        }

        .owl-nav {
            position: absolute; /* Ubah posisi menjadi absolute */
            top: 50%; /* Atur posisi vertikal di tengah */
            width: 100%; /* Lebar penuh */
            display: flex;
            justify-content: space-between; /* Posisikan tombol di kiri dan kanan */
            transform: translateY(-50%); /* Pusatkan tombol secara vertikal */
            z-index: 10; /* Pastikan tombol berada di atas gambar */
        }

        .owl-nav .owl-prev,
        .owl-nav .owl-next {
            color: #fff; /* Warna teks tombol */
            border-radius: 50%; /* Bentuk tombol bulat */
            width: 40px; /* Lebar tombol */
            height: 40px; /* Tinggi tombol */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px; /* Ukuran ikon tombol */
            z-index: 190; /* Pastikan tombol berada di atas gambar */
        }
    </style>
</head>

<body>
    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
        <div class="container section-title mt-4" data-aos="fade-up">
            <h2>What's new?</h2>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="owl-carousel slider">
                    @foreach ($sliders as $sliderItem)
                        <div class="item">
                            <img src="{{ asset($sliderItem->gambar) }}" alt="{{ $sliderItem->judul }}">
                            <div class="slider-caption">
                                <h5 class="text-center mt-2">{{ $sliderItem->judul }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Inisialisasi Owl Carousel -->
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                nav: true,
                dots: true
            });
        });
    </script>
</body>

</html>
