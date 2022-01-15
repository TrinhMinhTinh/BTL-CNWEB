<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <main>
        <div class="container">
        <form class="form-signin" action="process_login.php" method="post" name="login" onsubmit="return">
            
            <h1 class="h3 mb-3 font-weight-normal">Đăng nhập trang Admin</h1>
            <label for="inputEmail" class="sr-only">Email Admin</label>
            <input type="text" id="inputEmail" name ="txtEmail" class="form-control"  required autofocus>
            <label for="inputPassword" class="sr-only">Mật khẩu</label>
            <input type="password" id="inputPassword" name="txtPass" class="form-control"  required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me">Nhớ tài khoản
                </label>
                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignIn" >Đăng nhập</button>
        </form>
        </div>    
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script> src = "validateForm.js" </script>
</body>
</html>