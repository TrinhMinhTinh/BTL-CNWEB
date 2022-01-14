<?php
    session_start();
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        
        $conn = mysqli_connect('localhost','root','','hahalolo');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }

        $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_pass='$pass'";

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){

            $_SESSION['isLoginOK'] = $email;
            header("location: home.php"); 
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); 
        }

        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>
