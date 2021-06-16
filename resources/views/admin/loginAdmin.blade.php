<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="login">
        <h4 style="text-align: center;">Login Admin</h4>
            <form action="{{ route('admin.checkLogin') }}" method="post">
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label>Name Admin</label>
                            <input type="text" class="form-control" name="name" placeholder="Name Admin" value="{{ old('name') }}">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-block btn-success">Sign In</button>
                    </div>
                        <br>
                        <a href="">I don't have account, create new!</a>
                </form>
    </div>
                
</body>
</html>