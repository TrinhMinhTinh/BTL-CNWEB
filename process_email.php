<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account Activation by Email Verification using PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    if($_GET['key'] && $_GET['token']) //Kiểm tra có  giá trị trên url 
        {
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','hahalolo');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        //Bước 2 Thực hiện truy vấn
        $email = $_GET['key']; //Nó bắt giá trị tên URL
        $token = $_GET['token'];
        $sql = "SELECT * FROM users WHERE `email_verification_link`='".$token."' and `email`='".$email."'";
        $query = mysqli_query($conn,$sql);
        $d = date('Y-m-d H:i:s'); //Tọa 1 biến lưu thời gian
        if (mysqli_num_rows($query) > 0) { //Có bản ghi nào trong CSDL khớp với thông tin này ko
            $row= mysqli_fetch_array($query);//Lấy thông tin bản ghi này
            if($row['email_verified_at'] == NULL){//kiểm tra lại Anh chưa kích hoạt
                $sql2 = "UPDATE users set email_verified_at = '$d', status= 1 WHERE user_email='$email'";
                mysqli_query($conn,$sql2);
                $msg = "Chúc mừng!Email của bạn đã được kiểm chứng";
            }else{
                $msg = "Bạn đã xác minh tài khoản của mình với chúng tôi";
            }
        } else {
            $msg = "Email này chưa được đăng ký với chúng tôi ";
        }
        }
    else
        {
            $msg = "Sự nguy hiểm! Của bạn có gì đó không ổn";
        }
    ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
            Kích hoạt tài khoản người dùng bằng xác minh email bằng PHP
            </div>
            <div class="card-body">
                <p>
                    <?php echo $msg;
                        echo "<a href='login.php'> Nhấp vào đây để đăng nhập</a> "      
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>