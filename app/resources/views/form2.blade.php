<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web tìm kiếm thông tin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Tìm kiếm thông tin tốt nghiệp và việc làm</h1>
    <form method="GET" action="" class="mb-4">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="searchField">Tìm theo: </label>
                <select class="form-control" name="lookFor" id="searchField">
                    <option value="SoCMND">Số CMND</option>
                    <option value="HoTen">Họ Tên</option>
                    <option value="MaNganh">Mã Ngành</option>
                    <option value="MaTruong">Mã Trường</option>
                    <option value="TenCongTy">Tên Công Ty</option>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="searchInput">Tìm Kiếm: </label>
                <input type="text" class="form-control" name="sreachContent" id="searchInput" placeholder="Nhập thông cần tìm">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>

    <hr>

    <h2>Kết quả tìm kiếm:</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Số CMND</th>
            <th scope="col">Họ Tên</th>
            <th scope="col">Mã Ngành</th>
            <th scope="col">Mã Trường</th>
            <th scope="col">Tên Công Ty</th>
            <th scope="col">Thời Gian Làm Việc</th>
        </tr>
        </thead>
        <tbody>
            @foreach($list as $l)
                <tr>
                    <td>{{ $l->soCMND }}</td>
                    <td>{{ $l->hoTen }}</td>
                    <td>{{ $l->maNganh }}</td>
                    <td>{{ $l->maTruong }}</td>
                    <td>{{ $l->tenCongTy }}</td>
                    <td>{{ $l->thoiGianLamViec }}</td>
                </tr>
            @endforeach
        <!-- Thêm các hàng dữ liệu khác ở đây -->
        </tbody>
    </table>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
