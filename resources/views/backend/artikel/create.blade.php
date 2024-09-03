@extends('backend.app')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('artikel.kategori') }}"
                        class="btn btn-dark text-dark btn-border btn-round mr-2">kategori</a>
                    <a href="{{ route('artikel.buatartikel') }}"
                        class="btn btn-dark text-dark btn-border btn-round mr-2">Create
                        Artikel</a>
                    <a href="{{ route('artikel.uploadslider') }}"
                        class="btn btn-dark text-dark btn-border btn-round mr-2">Upload
                        Slider</a>
                </div>
            </div>
        </div>
    </div>
@endsection
