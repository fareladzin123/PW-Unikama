<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Arsipin</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    body {
        padding: 0;
    }
    input::placeholder, label {
        color: #bfc9ce !important;
    }
    
    .text-center {
        text-align: center;
    }

</style>
<body>
<div class="auth-form">
    <div class="form">
        <img src="assets/img/logo.png">
        <form>
            <label>Full Name</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="your fullname" name="name">
            </div>

            <label>Username</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="you@example.com" name="username">
            </div>

            <label>Password</label>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Masukkan password..." name="password">
            </div>

            <button type="submit" name="registrationSubmit" class="btn btn-submit text-uppercase fullwidth">Daftar Akun</button>
            <div class="devide-line mt-4 mb-3 text-center d-block">
                <a>Sudah punya akun?</a>
            </div>
            <a class="btn btn-register text-uppercase fullwidth" href="/login">Masuk</a>
        </form>
    </div>
    <div class="form-bg"></div>
</div>
</body>
</html>