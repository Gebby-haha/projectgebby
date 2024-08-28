<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Formulir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <h1>Edit Formulir</h1>
        <form id=editForm action="{{ route('formulir.update', $formulir->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        value="{{ old('nama', $formulir->nama) }}" required>
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan"
                    value="{{ old('jurusan', $formulir->jurusan) }}" required>
                @error('jurusan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="hobi" class="form-label">Hobi</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobi" id="hobi_menyanyi" value="menyanyi"
                        {{ old('hobi', $formulir->hobi) == 'menyanyi' ? 'checked' : '' }}>
                    <label class="form-check-label" for="hobi_menyanyi">
                        menyanyi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobi" id="hobi_bersepeda" value="bersepeda"
                        {{ old('hobi', $formulir->hobi) == 'bersepeda' ? 'checked' : '' }}>
                    <label class="form-check-label" for="hobi_bersepeda">
                        bersepeda
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobi" id="hobi_menari" value="menari"
                        {{ old('hobi', $formulir->hobi) == 'menari' ? 'checked' : '' }}>
                    <label class="form-check-label" for="hobi_menari">
                        menari
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="hobi" id="hobi_tidur" value="tidur"
                        {{ old('hobi', $formulir->hobi) == 'tidur' ? 'checked' : '' }}>
                    <label class="form-check-label" for="hobi_tidur">
                        tidur
                    </label>
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pria"
                            value="Pria"
                            {{ old('jenis_kelamin', $formulir->jenis_kelamin) == 'Pria' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenis_kelamin_pria">
                            Pria
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_wanita"
                            value="Wanita"
                            {{ old('jenis_kelamin', $formulir->jenis_kelamin) == 'Wanita' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenis_kelamin_wanita">
                            Wanita
                        </label>
                    </div>

                    <div class="form-group">
                        <label> Alamat </label>
                        <input type="text" class="form-control" name="alamat"
                            value="{{ old('alamat', $formulir->alamat) }}" required
                            @error('alamat')>
                        <div class="text-danger">{{ $message }}</div>
                    @enderror>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Gambar</label>
                        <input class="form-control form-control-sm" id="photo" type="file" name="photo">
                        @if ($formulir->gambar)
                            <div class="mt-2">
                                <img src="{{ asset($formulir->gambar) }}" alt="" width="100">
                            </div>
                        @endif
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="button" class="btn btn-primary" id="btnUpdate">Update</button>
                    <a href="{{ route('formulir.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById('btnUpdate').addEventListener('click', function() {
            Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: "Save",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("Saved!", "", "success");
                    setTimeout(() => {
                        document.getElementById('editForm').submit();
                    }, 1500);
                }
            });
        });
    </script>
</body>

</html>
