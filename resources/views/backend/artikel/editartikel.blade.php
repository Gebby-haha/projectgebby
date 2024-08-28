@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <h3 class="card-title text-center fw-bold mb-4">Edit Artikel</h3>
                        <form action="{{  route('buatartikel.update', ['id' => $berita->id]) }}" method="POST"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf


                            <div class="mb-3">
                                <label for="judul_artikel" class="form-label fw-bold">Judul artikel</label>
                                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel"
                                    value="{{ old('judul_artikel', $berita->judul_artikel) }}" required
                                    @error('judul_artikel')>
                            <div class="text-danger">{{ $message }}</div>
                        @enderror>
                            </div>
                            <div class="mb-3">
                                <label for="isi_artikel" class="form-label fw-bold">Isi artikel</label>
                                <textarea type="text" class="form-control" style="width: 100%" id="isi_artikel" name="isi_artikel" rows="5"
                                    required> {{ old('isi_artikel', $berita->isi_artikel) }}</textarea>
                                @error('isi_artikel')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold mb-2">Kategori</label>
                                <select class="form-select" id="kategori" name="kategori_id">
                                    <option value="" disabled selected>Kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('kategori_id', $berita->kategori_id) == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-bold mt-3">Masukkan Gambar</label>
                                @if ($berita->gambar)
                                    <div>
                                       
                                        <img src="{{ asset($berita->gambar) }}" alt="Gambar Artikel"
                                            style="width: 200px; height: auto;">
                                    </div>
                                @endif
                                <input class="form-control" type="file" id="gambar" name="gambar" multiple>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label fw-bold">Tanggal Berita</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="{{ old('tanggal', $berita->tanggal) }}">
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold mb-2">Pilih Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="pilih_status" disabled selected>Pilih Status</option>
                                    <option value="aktif"
                                        {{ old('status', $berita->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="tidak_aktif"
                                        {{ old('status', $berita->status) == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
