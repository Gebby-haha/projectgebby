@extends('front.layouts.index')
@section('content')
    @include('front.navbar')
    @include('front.jumbotron')

    @include('front.about')
    @include('front.kategori.popular')
    @include('front.slider')
    @include('front.team')
    @include('front.contact')
    <!-- Stats Section -->
    <section id="stats" class="stats section light-background mt-4">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 ">
                    <div class="stats-item">
                        <i class="bi bi-emoji-smile" style="color: pink;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="231" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Happy Clients</strong></p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <i class="bi bi-journal-richtext" style="color: pink;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Projects</strong></p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <i class="bi bi-headset" style="color: pink;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Hours Of Support</strong> </p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item">
                        <i class="bi bi-people" style="color: pink;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Hard Workers</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
