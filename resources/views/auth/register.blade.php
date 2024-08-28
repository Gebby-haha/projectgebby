<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration</title>
</head>
<style>
    .box {
        background: pink;
        border-radius: 10px;
        width: 300px;
        padding: 7px;
        margin-bottom: 5px;
    }

    body {
        background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNhcxJj4uy1wF5B-Q_ofmSMTP-o90HtRor7w&s');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 100%;
        font-family: 'Lora';
    }
</style>

<body>
    @include('sweetalert::alert')

    {{-- @extends('regis.regis')
@section('content') --}}
    <section id="regis" class="regis text-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header">
                        <h1 class="text-center">REGISTRATION</h1>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class=" col-lg-12">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Name</label>
                                            <input type="nama" class="form-control" id="nama" name="name"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text text-dark">We'll never share your
                                                email with
                                                anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="username" class="form-control" id="username" name="username"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                required aria-describedby="passwordHelpBlock">
                                            <div id="passwordHelpBlock" class="form-text text-dark">
                                                Your password must be 8-20 characters long.
                                            </div>
                                            <div class="mb-3 mt-2">
                                                <label for="password_confirmation" class="form-label">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                <select id="jenis_kelamin" class="form-select" name="jenis_kelamin"
                                                    required>
                                                    <option>Pria</option>
                                                    <option>Wanita</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success mb-2">Register</button>
                                            <p class="text-body-secondary">
                                                Sudah punya akun? <a href="{{ route('login')"
                                                    class="text-reset fw-bold">Login disini</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
{{-- @endsection --}}

</html>
