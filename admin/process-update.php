<?php
    session_start();
    if(!isset($_SESSION['LoginOK'])){
        header("location:login.php");
    }
   
    if(isset($_POST['txtMaND'])){
        $maNguoiDung = $_POST['txtMaND'];
    }
    if(isset($_POST['txtHoTen'])){
        $hoTen      = $_POST['txtHoTen'];
    }
    $password       = $_POST['txtPass'];
    $email          = $_POST['txtEmail'];
    
    $conn = mysqli_connect('localhost','root','','hahalolo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE users SET user_name ='$hoTen', user_pass = '$password', user_email = '$email' WHERE id_user = '$maNguoiDung'";
   

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); 
    }else{
        header("location: admin.php");
    }

   
    mysqli_close($conn);

?>