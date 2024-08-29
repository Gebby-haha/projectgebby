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
    </head>
    <style>
        .box {
            background: rgb(242, 246, 242);
            border-radius: 20px;
            width: 300px;
            padding: 7px;
            margin-bottom: 2px;
        }

        body {
            /* background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNhcxJj4uy1wF5B-Q_ofmSMTP-o90HtRor7w&s'); */
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100%;
            font-family: 'Lora';
        }
    </style>

    <body>

        <section id="login" class="login bg-transparent">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header">
                            <h1 class="text-center">LOGIN</h1>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                </div>
                                <div class="card-body">
                                <div class="container">
                                <div class="d-flex justify-content-center">
                                    <div class="row">
                                        <div class=" col-lg-12 bg-transparent p-3">
                                            <div class="mb-3">
                                                <label for="email" class="form-label text-dark">Email
                                                    address</label>
                                                <input type="email" class="form-control box" id="email" name="email"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label text-dark">Password</label>
                                                <input type="password" class="form-control box" id="password"
                                                    name="password" required>
                                            </div>
                                            <div class="mb-3 form-check text-dark">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck"
                                                    name="remember">
                                                <label class="form-check-label" for="exampleCheck">Remember
                                                    me</label>
                                            </div>
                                            <button type="submit" class="btn btn-success">Login</button>
                                            <p class="text-body-secondary">
                                                Belum punya akun? <a href="/register"
                                                    class="text-reset fw-bold">Registrasi disini</a>
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

    </html>
