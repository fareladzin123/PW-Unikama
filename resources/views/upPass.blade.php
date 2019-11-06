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

</style>
<body>
    <div class="auth-form">
        <div class="form">
            <form action="{{ route('upPass') }}" method="post">
                {{csrf_field()}}

                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
                    <label>Password Lama</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password Lama..." name="current_password">
                    </div>
        
                    <label>Password Baru</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password Baru..." name="new_password">
                    </div>

                    <label>Konfirmasi Password Baru</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Konfirmasi Password Baru..." name="new_confirm_password">
                    </div>
        
                    <button type="submit" name="Submit" class="btn btn-submit text-uppercase fullwidth">Update password</button>
                </form>
        </div>
    </div>
</body>
</html>