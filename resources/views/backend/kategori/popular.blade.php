@extends('front.app')

@section('content')
    <!-- Popular Section -->
    <section id="popular" class="popular section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Popular</h2>
            <p>Paling populer minggu ini</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="card">
                            <div class="card-body">
                                {{ $data->isi_artikel }}
                                <img src="{{ asset($data->gambar) }}" alt="">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-bounding-box-circles icon" style="color: pink;"></i>
                                </div>
                                <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-calendar4-week icon" style="color: pink;"></i></div>
                                <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                </p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-broadcast icon" style="color: pink;"></i>
                                </div>
                                <h4><a href="" class="stretched-link ">Nemo Enim</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                </p>
                            </div>
                        </div><!-- End Service Item -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Services Section -->
@endsection
