<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    $ma_baiviet = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','hahalolo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM post WHERE id_post = '$ma_baiviet'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>