@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <h3 class="card-title text-center fw-bold mb-4">Buat Slider</h3>
                        <form action="{{ route('uploadslider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input class="form-control" type="file" id="gambar" name="gambar">
                            </div>
                            <button type="submit" class="btn btn-dark btn-border btn-round mr-2 text-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slider as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->judul }}</td>
                            <td>
                                <img src="{{ asset($item->gambar) }}" alt="Image" width="100">
                            </td>
                            <td>
                                @if ($item->id)
                                    <a href="{{ route('uploadslider.edit', ['id' => $item->id]) }}"
                                        class="btn btn-sm btn-success">Edit</a>
                                @else
                                    <span>No ID</span>
                                    {{ $item->id }}
                                @endif

                                <form action="{{ route('uploadslider.destroy', ['id' => $item->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
