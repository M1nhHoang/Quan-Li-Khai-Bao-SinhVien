<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Đăng nhập</h1>
            <h5 class="text-center" style="color: red;">{{ session('login_error') }}</h5>
            <form method="post" action="/login">
                @csrf
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="name" id="username" placeholder="Nhập tên đăng nhập">
                    @error('name')
                    <span style="color: red;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">
                    @error('password')
                    <span style="color: red;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
            <div class="text-center mt-3">
                <p>Chưa có tài khoản? <a href="/register">Đăng ký</a></p>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
