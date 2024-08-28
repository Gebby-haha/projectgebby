<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <h1>Tambahkan Data</h1>
        <form id=createForm action="{{ route('formulir.store') }}" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf

            <div class="form-group">
                <label> Nama </label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group mt-2">
                <label> Jurusan </label>
                <input type="text" class="form-control" name="jurusan">
            </div>

            <label class="mt-2 mb-1">Hobi</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="menyanyi" name="hobi" id="hobi_menyanyi">
                <label class="form-check-label" for="hobi_menyanyi">
                  menyanyi
                </label>
              </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="bersepeda" name="hobi" id="hobi_bersepeda">
                <label class="form-check-label" for="hobi_bersepeda">
                  bersepeda
                </label>
              </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="menari" name="hobi" id="hobi_menari">
                <label class="form-check-label" for="hobi_menari">
                  menari
                </label>
              </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="tidur" name="hobi" id="hobi_tidur">
                <label class="form-check-label" for="hobi_tidur">
                  tidur
                </label>
              </div>


            <label class="mt-2 mb-1">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pria"
                    value="Pria">
                <label class="form-check-label" for="jenis_kelamin_pria">
                    Pria
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_wanita"
                    value="Wanita">
                <label class="form-check-label" for="jenis_kelamin_wanita">
                    Wanita
                </label>
            </div>

            <div class="form-group mt-2">
                <label> Alamat </label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group mt-2">
                <label> Photo </label>
                <input type="file" class="form-control" name="photo">
            </div>
            <button type="button" class="btn btn-primary mt-2" id="btnSubmit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById('btnSubmit').addEventListener('click', function() {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500

            });
            setTimeout(() => {
                    document.getElementById('createForm').submit();
                }, 1500);
        });
    </script>
</body>

</html>
