<?php
    $conn = mysqli_connect('localhost','root','','hahalolo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    if(isset($_POST['btnSignUp'])){

    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass1'];
   
    
    $sql01 = "SELECT * FROM users WHERE user_email = '$email' OR user_name='$user'";    
    $result01 = mysqli_query($conn,$sql01);
    $result01 = mysqli_query($conn,"SELECT * FROM users WHERE user_email='$email' OR user_name='$user'");
    if(mysqli_num_rows($result01) > 0){
        $error = "Username or Email is existed";
        header("location: signup.php?error=$error"); 
    }else{
        $token = md5($_POST['txtEmail']).rand(10,9999);
        $pass_md5 = md5($pass1);
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql02 = "INSERT INTO users(user_name, user_email, user_pass) VALUES ('$user','$email','$pass_hash')";
        $result02 = mysqli_query($conn,$sql02);
        
        $link = "<a href='localhost/BTL-CNWEB/process_email.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
        include "send-mail.php";
        if(sendEmailForAccountActive($email,$link)){
            echo "vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản";
        }
        else{
            echo "Xin lỗi email chưa được gửi đi .Vui lòng kiểm tra lại thông tin đăng kí tài khoản";
        }
          
    }
      

        mysqli_close($conn);
}
?>