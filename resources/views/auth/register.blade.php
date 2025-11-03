<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Sahabat Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #3b0a45;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .register-container {
            background-color: #4b0e59;
            border-radius: 10px;
            padding: 40px;
            width: 400px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }
        .form-control {
            background-color: #5c1470;
            border: none;
            color: #fff;
        }
        .form-control:focus {
            background-color: #6d1a82;
            color: #fff;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #8b2cbf;
            border: none;
        }
        .btn-primary:hover {
            background-color: #9d3ed0;
        }
        .btn-secondary {
            background-color: #5c1470;
            border: none;
        }
        a {
            color: #d7b0ff;
            text-decoration: none;
        }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="register-container">
    <img src="/images/logo.png" alt="Logo" width="80" class="mb-3">
    <h4 class="mb-4 fw-bold">DAFTAR AKUN BARU</h4>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3 input-group">
            <span class="input-group-text bg-transparent border-0 text-white"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required>
        </div>

        <div class="mb-3 input-group">
            <span class="input-group-text bg-transparent border-0 text-white"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>

        <div class="mb-3 input-group">
            <span class="input-group-text bg-transparent border-0 text-white"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>

        <div class="mb-4 input-group">
            <span class="input-group-text bg-transparent border-0 text-white"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Ulangi Password" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary w-50 me-2">Daftar</button>
            <a href="{{ route('login') }}" class="btn btn-secondary w-50">Kembali</a>
        </div>
    </form>

    <p class="mt-4">Sudah punya akun? <a href="{{ route('login') }}"><strong>Login disini</strong></a></p>
    <small>www.sahabatwarga.com</small>
</div>

</body>
</html>
