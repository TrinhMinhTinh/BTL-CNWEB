<?php
    session_start();

    
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        
        
        $conn = mysqli_connect('localhost','root','','hahalolo');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        
        $sql = "SELECT * FROM admin WHERE name = '$email' AND pass='$pass'";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
           
            $_SESSION['LoginOK'] = $email;
            header("location: admin.php"); 
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error");

        
        mysqli_close($conn);
    
    }}
?>