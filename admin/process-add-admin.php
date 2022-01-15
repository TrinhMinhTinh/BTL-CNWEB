<?php
    if(isset($_POST['txtHoTen'])){
        $hoTen = $_POST['txtHoTen'];
    }

    $Ten = $_POST['txtName'];
    $Pass = $_POST['txtPass'];
    $ma_admin= $_POST['txtMaAdmin'];
    $email = $_POST['txtEmail'];

    $conn = mysqli_connect('localhost','root','','hahalolo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "INSERT INTO admin (name, pass, id_admin, email) VALUES ('$Ten','$Pass','$ma_admin','$email')";
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php");
    }else{
        header("location: admin.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>