<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>{{ session('status') }}</h1>

    <div class="card bg-light text-dark mt-4">
        <div class="card-body">
            <h5 class="card-title text-center">Form Khai Báo</h5>
        </div>
    </div>
    <form method="POST" action="khaibao/guiBanKhai" style="margin: 20px; margin-left: 50px">
        @csrf
        <div class="form-group">
            <label for="soCMND" style="color: #000;">Số Chứng Minh:</label>
            <input type="text" class="form-control" name="soCMND" id="soCMND" required>
        </div>

        <div class="form-group">
            <label for="name" style="color: #000;">Họ tên:</label>
            <input type="text" class="form-control" name="hoTen" id="name" required>
        </div>

        <div class="form-group">
            <label for="email" style="color: #000;">Email:</label>
            <input type="text" class="form-control" name="Email" id="email" required>
        </div>

        <div class="form-group">
            <label for="soDt" style="color: #000;">Số điện thoại:</label>
            <input type="text" class="form-control" name="soDt" id="soDt" required>
        </div>

        <div class="form-group">
            <label for="diaChi" style="color: #000;">Địa Chỉ:</label>
            <input type="text" class="form-control" name="diaChi" id="diaChi" required>
        </div>

        <div class="form-group">
            <label for="maTruong" style="color: #000;">Trường:</label>
            <select id="maTruong" name="maTruong" class="form-control" required>
                @foreach($truongs as $truong)
                    <option value="{{ $truong->maTruong }}" style="color: #000;">{{ $truong->tenTruong }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="maNganh" style="color: #000;">Ngành:</label>
            <select id="maNganh" name="maNganh" class="form-control" required>
                @foreach($nganhs as $nganh)
                    <option value="{{ $nganh->maNganh }}" style="color: #000;">{{ $nganh->tenNganh }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="heTN" style="color: #000;">Hệ tốt nghiệp:</label>
            <input type="text" class="form-control" name="heTN" id="heTN">
        </div>

        <div class="form-group">
            <label for="ngayTN" style="color: #000;">Ngày tốt nghiệp:</label>
            <input type="date" class="form-control" name="ngayTN" id="ngayTN">
        </div>

        <div class="form-group">
            <label for="loaiTN" style="color: #000;">Loại tốt nghiệp:</label>
            <select id="loaiTN" name="loaiTN" class="form-control">
                <option value="Xuất Xắc" style="color: #000;">Xuất xắc</option>
                <option value="Giỏi" style="color: #000;">Giỏi</option>
                <option value="Khá" style="color: #000;">Khá</option>
                <option value="Trung bình" style="color: #000;">Trung bình</option>
            </select>
        </div>

        <div class="form-group">
            <label for="ngayVaoCty" style="color: #000;">Ngày vào công ty:</label>
            <input type="date" class="form-control" name="ngayVaoCty" id="ngayVaoCty" required>
        </div>

        <div class="form-group">
            <label for="tenCty" style="color: #000;">Tên công ty:</label>
            <input type="text" class="form-control" name="tenCty" id="tenCty" required>
        </div>

        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</div>

<!-- Link to Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
