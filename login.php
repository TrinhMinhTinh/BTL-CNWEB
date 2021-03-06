<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/login.css">
  </head>
  <body>
    <div class="center">
      <h1>Đăng Nhập</h1>
      <form action="process_login.php" method="post" name="login" onsubmit="return">
        <div class="txt_field">
        <input type="email" id="inputEmail" name="txtEmail" class="form-control" required autofocus>
          <span></span>
          <label for="inputEmail">Email hoặc SĐT</label>
        </div>
        <div class="txt_field">
        <input type="password" id="inputPassword" name="txtPass" class="form-control" required>
          <span></span>
          <label for="inputPassword">Mật Khẩu</label>
        </div>
        <div class="pass">Quên mật khẩu?</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignIn">Đăng nhập</button>
        <div class="signup_link">
          Bạn chưa có tài khoản? <a href="signup.php">Đăng Kí</a>
        </div>
      </form>
    </div>
    <div class="login-left">
      <div class="logo">
        <a href="#">
         <img src="image/logo.jpg"></a><h4 style="padding-left: 10px; color:#24a8d8;font-size: 25px ;">Hahalolo</h4>

      </div>
      <div class="text-center">
           <h3 style="font-size: 25px;">Bạn thích</h3>
           <h1 style="font-size: 40px;">đi du lịch?</h1>
           <h3 style="padding-top: 10px;">Bạn muốn tìm hiểu thông tin về những điểm đến</h3>
           <p style="padding-top:10px">Chỉ với vài thao tác,hãy nhanh chóng đăng nhập để trải nghiệm <br>và cảm nhận các tiện ích tuyệt vời của chúng tôi </p>
      </div>
      <div class="button">
        <button class="button1">
        <i class="fab fa-android" style="padding-left: 20px;"></i> <p style="padding-left: 13px;"><a href="https://play.google.com/store/apps/details?id=com.hahalolo.android.social&hl=en" class="links">Google Play</a></p>
        </button>
        <button class="button2">
        <i class="fab fa-apple" style="padding-left: 15px;"></i> <p style="padding-left: 11px;"><a href="https://apps.apple.com/us/app/hahalolo/id1437417120" class="links">App Store</a></p>
        </button>
      </div>
      <div class="footer">
        <span class="copyright" style="font-size: 12px;">©️ Hahalolo 2017. Đã đăng ký bản quyền</span>
      </div>
    </div>
    <div class="language-setting">
      <ul>
        <li> Deutsch</li><hr>
        <li>English</li><hr>
        <li style="color: #24a8d8;">Tiếng Việt</li><hr>
        <li>中文</li><hr>
        <li> <button style="border-radius:10px;width: 25px;height: 25px; ">+</button></li>
      </ul>
    </div>


  </body>
</html>
