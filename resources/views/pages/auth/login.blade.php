<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login system</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
<form class="form-signin" action="" method="POST">
    @csrf
    <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Đăng nhập hệ thống</h1>
    </div>

    <div class="form-label-group">
        <input type="email" name="email" class="form-control" placeholder="" autofocus>
        <label for="inputEmail">Email</label>
        @if($errors->first('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="form-label-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <label for="inputPassword">Password</label>
        @if($errors->first('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
</form>
</body>
</html>
