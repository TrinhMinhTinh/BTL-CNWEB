<?php
    if(!isset($_POST['btnSignUp'])){
    header("location:signup.php");
    }
    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];  
    $conn = mysqli_connect('localhost','root','','hahalolo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql01 = "SELECT * FROM users WHERE user_email = '$email' OR user_name='$user'";    
    $result01 = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result01) > 0){
        $error = "Username or Email is existed";
        header("location: signup.php?error=$error"); 
    }else{
        $sql02 = "INSERT INTO users (user_name, user_email,user_pass) VALUES('$user', '$email', '$pass1')";
        $result02 = mysqli_query($conn,$sql02);
        if($result02 == true){
            header("location:login.php");
        }else{
            $error = "Can not insert record. Please check ....";
            header("location: signup.php?error=$error");
    }
    
}
mysqli_close($conn);
?>