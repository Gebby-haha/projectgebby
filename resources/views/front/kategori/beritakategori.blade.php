@extends('front.kategori.app')
@include('front.navbar');

@section('content')
    <div class="container section-title mt-3 py-5" data-aos="fade-up">
        <h2>Lihat lebih lengkap</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($item->gambar) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul_artikel }}</h5>
                            <p class="card-text">{{\Illuminate\Support\Str::limit($item->isi_artikel, 15, '...') }}</p>
                            <a href="{{ route('detail', $item->id) }}" class="btn text-light" style=" background-color: pink;">read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
