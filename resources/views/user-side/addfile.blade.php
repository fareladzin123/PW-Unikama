<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <title>Arsipin</title>

    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    body {
        padding: 0;
    }
    input::placeholder, label {
        color: #bfc9ce !important;
    }
    .form-bg {
        background-image: url("../assets/img/addfile.jpeg") !important;
    }

</style>
<body>
<div class="auth-form">
    <div class="form">
        <img src="../assets/img/logo.png">
        <form action="{{ route('checkLogin') }}" method="post">
            {{csrf_field()}}
            <label>Nama File</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="contoh: filesaya*" name="filename">
            </div>

            <label>Berkas File</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="file" style="height: fit-content">
            </div>

            <button type="submit" name="loginSubmit" class="btn btn-submit text-uppercase fullwidth">Tambah File</button>
        </form>
    </div>
    <div class="form-bg"></div>
</div>
</body>
</html>