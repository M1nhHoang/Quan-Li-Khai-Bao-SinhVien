<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm thông tin sinh viên</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Tìm kiếm thông tin sinh viên {{ session('') }}</h1>
    <form method="GET" action="" class="mb-4">
        <div class="form-group">
            <label for="searchInput">Nhập thông tin tìm kiếm</label>
            <input type="text" class="form-control" name="sreachContent" id="searchInput" placeholder="Nhập thông tin">
        </div>
        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>

    <h2>Kết quả tìm kiếm</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Số CMND</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Địa chỉ</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dsSinhVien as $sinhVien)
            <tr>
                <td>{{ $sinhVien->soCMND }}</td>
                <td>{{ $sinhVien->hoTen }}</td>
                <td>{{ $sinhVien->Email }}</td>
                <td>{{ $sinhVien->soDt }}</td>
                <td>{{ $sinhVien->diaChi }}</td>
            </tr>
        @endforeach
        <!-- Add more rows for search results dynamically using JavaScript or server-side programming -->
        </tbody>
    </table>
</div>

<!-- Link to Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
