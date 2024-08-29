<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Shuffle Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
 <link rel="stylesheet" href="styles.css">

    <!-- =======================================================
  * Template Name: Shuffle
  * Template URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>

.navmenu a:hover,
.navmenu .dropdown-menu a:hover {
    background-color: pink !important;
}
.navmenu .dropdown:hover .dropdown-menu {
    background-color: pink !important;
}
.navmenu .dropdown-menu.show {
    background-color: pink !important;
}

  </style>

</head>

<body class="index-page">

   @include('front.navbar');

    @include('front.jumbotron');

    @foreach ($data as $item)
    <div class="card">
        <img src="{{asset($item->gambar)}}" alt="gambar">

    </div>
    @endforeach

    @include('front.about');


    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="231" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

  @include('front.kategori.popular');

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="assets/img/cta-bg.jpg" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Call To Action</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->


@include('front.kategori.morepopular')



    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Product</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-books">Books</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/app-1.jpg" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/product-1.jpg" title="Product 1"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Books 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/books-1.jpg" title="Branding 1"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/app-2.jpg" title="App 2"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/product-2.jpg" title="Product 2"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Books 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/books-2.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/app-3.jpg" title="App 3"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/product-3.jpg" title="Product 3"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Books 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/books-3.jpg" title="Branding 3"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    @include('front.team');

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="content px-xl-5">
                        <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">
                        <div class="faq-item faq-active">
                            <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna
                                    duis?</span></h3>
                            <div class="faq-content">
                                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                    laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                    rhoncus dolor purus non.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc
                                    faucibus a pellentesque?</span></h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit
                                    pellentesque?</span></h3>
                            <div class="faq-content">
                                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                    Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                    suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                    convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend
                                    mi in nulla?</span></h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem
                                    et tortor consequat?</span></h3>
                            <div class="faq-content">
                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse
                                    in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>
            </div>

        </div>

    </section><!-- /Faq Section -->

@include('front.contact');

    </main>
@include('front.footer');

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
