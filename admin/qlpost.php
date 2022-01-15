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
            <a class="nav-link active" aria-current="page" href="#">Quản lý bài viết</a>
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
            <h5 class="text-center text-primary mt-5">QUẢN LÍ THÔNG TIN BÀI VIẾT </h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã bài viết</th>
                        <th scope="col">Mã người dùng</th>
                        <th scope="col">Ảnh</th>       
                        <th scope="col">Tên bài viết</th>
                        <th scope="col">Trạng thái bài viết</th>    
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        
                        $conn = mysqli_connect('localhost','root','','hahalolo');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        $sql = "SELECT id_post, id_user, img_post, text_post, status_post FROM post" ;
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                                    <th scope="row"><?php echo $row['id_post']; ?></th>
                                    <td><?php echo $row['id_user']; ?></td>
                                    <td><?php echo $row['img_post']; ?></td>
                                    <td><?php echo $row['text_post']; ?></td>
                                    <td><?php echo $row['status_post']; ?></td>
                                    <td><a href="delete.php?id=<?php echo $row['id_post']; ?>"><i class="far fa-trash-alt"></i></a></td>
                                </tr>

                    <?php
                            }
                        }
                        mysqli_close($conn);
                    ?>
                    
                    
                </tbody>
                </table>
        </div>    
    </main>
</body>