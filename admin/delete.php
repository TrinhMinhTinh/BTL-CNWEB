<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
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
        header("location: admin.php");
    }else{
        header("location: error.php");
    }
?>