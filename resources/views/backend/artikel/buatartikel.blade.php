@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <h3 class="card-title text-center fw-bold mb-4">Buat Artikel</h3>
                        <form action="{{ route('buatartikel.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul_artikel" class="form-label fw-bold">Judul artikel</label>
                                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel">
                            </div>
                            <div class="mb-3">
                                <label for="isi_artikel" class="form-label fw-bold">Isi artikel</label>
                                <textarea type="text" class="form-control" style="width: 100%" id="isi_artikel" name="isi_artikel" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bold mb-2">Kategori</label>
                                <select class="form-select" id="kategori" name="kategori">
                                    <option value="" disabled selected>Kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-bold mt-3">Masukkan Gambar</label>
                                <input class="form-control" type="file" id="gambar" name="gambar" multiple>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-bold">Tanggal Berita</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold mb-2">Pilih Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="pilih_status" disabled selected>Pilih Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak_aktif">Tidak Aktif</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Artikel</th>
                            <th scope="col">Isi Artikel</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Tanggal Berita</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->judul_artikel }}</td>
                                <td>{{ $item->isi_artikel }}</td>
                                <td>
                                    @if (isset($kategoridataByArticle[$item->id]))
                                        @foreach ($kategoridataByArticle[$item->id] as $kategori)
                                            {{ $kategori->nama_kategori }}<br>
                                        @endforeach
                                    @else
                                        Tidak ada kategori
                                    @endif
                                </td>


                                <td>
                                    <img src="{{ asset($item->gambar)}}" alt="Image" width="100">

                                </td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal)->locale('id')->translatedFormat('l, d F Y ') }}
                                </td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    @if ($item->id)
                                        <a href="{{ route('buatartikel.edit', ['id' => $item->id]) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                    @else
                                        <span>No ID</span>
                                        {{ $item->id }}
                                    @endif

                                    <form action="{{ route('buatartikel.destroy', ['id' => $item->id]) }}" method="POST">
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
    </div>
@endsection
