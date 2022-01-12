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
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">QUẢN LÍ THÔNG TIN NGƯỜI DÙNG HAHALOLO</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã người dùng</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Mật khẩu</th>       
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        
                        $conn = mysqli_connect('localhost','root','','hahalolo');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        $sql = "SELECT * from users" ;
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                                    <th scope="row"><?php echo $row['id_user']; ?></th>
                                    <td><?php echo $row['user_name']; ?></td>
                                    <td><?php echo $row['user_pass']; ?></td>
                                    <td><?php echo $row['user_email']; ?></td>
                                    <td><?php echo $row['user_phone']; ?></td>
                                    <td><a href="update.php?id=<?php echo $row['user_email']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['user_email']; ?>"><i class="far fa-trash-alt"></i></a></td>
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
