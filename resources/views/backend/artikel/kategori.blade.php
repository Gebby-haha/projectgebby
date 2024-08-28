@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row mt-4 ">
            <div class="col-md-6">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Kategori</h3>
                        <form action="{{ route('kategori.store') }}" method="POST">
                            @csrf
                            <h6 class="card-subtitle fw-bold mt-2 mb-2">Nama Kategori</h6>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namakategori" name="namakategori">
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama kategori</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Updated_at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->nama_kategori }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->translatedFormat('l, d F Y ') }}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y ') }}
                                </td>

                                <td>
                                    @if ($item->id)
                                        <a href="{{ route('kategoriedit', ['id' => $item->id]) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                    @else
                                        <span>No ID</span>
                                        {{ $item->id }}
                                    @endif

                                    <form action="{{ route('kategori.destroy', ['id' => $item->id]) }}" method="POST">
                                        @method('delete')
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
    </div>
@endsection
