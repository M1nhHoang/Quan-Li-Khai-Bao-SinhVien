<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Kí</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Đăng Kí Tài Khoản</h1>
            <form method="POST" action="/register">
                @csrf
                <div class="form-group">
                    <label for="name">Tài khoản</label>
                    <input id="name"  class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span style="color: red;" style="color: red;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span style="color: red;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input id="password"  class="form-control" type="password" name="password" required>
                    @error('password')
                        <span style="color: red;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Xác nhận mật khẩu</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
