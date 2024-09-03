@extends('front.kategori.app')
@include('front.navbar')

@section('content')
    <div class="container pt-5 mt-5 section-title " data-aos="fade-up">
        <h2>Lihat lebih lengkap</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($data->gambar) }}" alt="Gambar Artikel" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h2 class="card-title text-center">{{ $data->judul_artikel }}</h2>
                                <p class="card-text">{{ $data->isi_artikel }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
