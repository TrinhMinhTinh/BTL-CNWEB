<?php
    session_start();
    if(!isset($_SESSION['LoginOK'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hahalolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
  <div class="container-fluid">
    <div class="col-md-12 header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="admin.php" style="color:#007bff"><h4> HAHALOLO ADMIN </h4></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="add-admin.php">Thêm Admin</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin.php">Quản lý người dùng</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="qlpost.php">Quản lý bài viết</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Đăng xuất</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới Danh bạ nhân viên</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-add-employee.php" method="post">
            <div class="form-group">
                <label for="txtHoTen">Tên Admin</label>
                <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtChucVu">Mật khẩu</label>
                <input type="text" class="form-control" id="txtPass" name="txtPass" placeholder="Nhập mật khẩu">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtSoMayBan">Id Admin</label>
                <input type="tel" class="form-control" id="txtMaAdmin" name="txtMaAdmin" placeholder="Nhập mã admin">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email">
               
            </div>
            <button type="submit" class="btn btn-primary mt-3">Thêm</button>
        </form>
    </div>    
    </main>
</body>