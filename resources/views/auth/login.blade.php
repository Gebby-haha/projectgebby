<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-color: whitesmoke;
            font-family: 'Lora', serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            border-radius: 15px;
            /* Ubah border-radius untuk tampilan kotak */
            max-width: 500px;
            width: 100%;
            min-width: 300px;
            /* Lebar minimum card */
            background-color: pink;
            padding: 20px;
        }

        .card-header,
        .card-body {
            background-color: pink;
            border-radius: 15px;
        }

        .form-control {
            border-radius: 10px;
            /* Ubah border-radius form untuk tampilan kotak */
            margin-bottom: 15px;
            padding: 10px;
            /* Tambahkan padding untuk form */
        }

        .btn {
            border-radius: 10px;
            /* Ubah border-radius tombol untuk tampilan kotak */
            width: 100%;
            padding: 10px;
        }

        .btn-light {
            background-color: #f8f9fa;
            /* Ubah warna latar belakang tombol */
            border: 1px solid #dee2e6;
            /* Tambahkan border pada tombol */
            color: #333;
        }

        .btn-light:hover {
            background-color: #e2e6ea;
            /* Ubah warna latar belakang tombol saat hover */
        }
    </style>
</head>

<body>
    <section id="login" class="login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>LOGIN</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck" name="remember">
                                    <label class="form-check-label" for="exampleCheck">Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-light">Login</button>
                                <p class="text-center mt-3">
                                    Belum punya akun? <a href="/register" class="text-reset fw-bold">Registrasi
                                        disini</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
