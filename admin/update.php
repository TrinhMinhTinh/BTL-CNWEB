<?php
    session_start();
    if(!isset($_SESSION['LoginOK'])){
        header("location:login.php");
    }
    $mail = $_GET['id'];
    $conn = mysqli_connect('localhost','root','','hahalolo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "SELECT * FROM users WHERE user_email = '$mail'";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

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
        <h5 class="text-center text-primary mt-5">Cập nhật thông tin người dùng Hahalolo</h5>
       
        <form action="process-update.php" method="post">
            <div class="form-group">
                <label for="txtMaND">Mã người dùng</label>
                <input type="text" class="form-control" readonly id="txtMaND" name="txtMaND" value="<?php echo $row['id_user']; ?>">
            </div>

            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" value="<?php echo $row['user_name']; ?>">
            </div>
            <div class="form-group">
                <label for="txtSoDiDong">Số di động</label>
                <input type="tel" class="form-control" id="txtSoDiDong" name="txtSoDiDong" value="<?php echo $row['user_phone']; ?>">
            </div>   
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $row['user_email']; ?>">
            </div>   
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>
