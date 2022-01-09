<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hahalolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="CSS/style1.css">
    <link rel="stylesheet" href="CSS/users.css">
</head>

<body>
    <!--Phần đầu-->
    <header class="container-fluid fixed-top">
        <div class="row">
            <div class="col-md-12 header">
                <div class="header_logo">
                    <a href="index.php">
                        <img src="image/logo.jpg" alt="" class="image_logohahalolo"></a>
                    <div class="header_search">
                        <input type="text" class="header_input" placeholder="Tìm kiếm">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <ul class="header_menu ms-auto">
                    <li class="header_icon">
                        <a href="index.php">
                            <div class="header_iconwrap">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <p>Bảng tin</p>
                        </a>
                    </li>
                    <li class="header_icon">
                        <a href="#">
                            <div class="header_iconwrap">
                                <i class="fab fa-fly"></i>
                            </div>
                            <p>Trải nghiệm</p>
                        </a>
                    </li>
                    <li class="header_icon">
                        <a href="#">
                            <div class="header_iconwrap">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p>Tour</p>
                        </a>
                    </li>
                    <li class="header_icon">
                        <a href="#">
                            <div class="header_iconwrap">
                                <i class="fas fa-hotel"></i>
                            </div>
                            <p>Khách sạn</p>
                        </a>
                    </li>
                    <li class="header_icon">
                        <a href="#">
                            <div class="header_iconwrap">
                                <i class="fas fa-plane-departure"></i>
                            </div>
                            <p>Vé máy bay</p>
                        </a>
                    </li>
                    <li class="header_icon">
                        <a href="#">
                            <div class="header_iconwrap">
                                <i class="fas fa-car"></i>
                            </div>
                            <p>Thuê xe</p>
                        </a>
                    </li>
                    <li class="header_icon">
                        <a href="#">
                            <div class="header_iconwrap">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <p>Mua sắm</p>
                        </a>
                    </li>
                </ul>
                <div class="header_right">
                    <button class="btn">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="btn">
                        <i class="fas fa-user-friends"></i>
                    </button>
                    <button class="btn">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                    <button class="btn">
                        <a href="https://wallet.hahalolo.com/" style="color:#000000"><i class="fas fa-wallet"></i></a>
                    </button>
                    <button class="btn">
                        <a href="https://halome.com/"><img src="image/messenger.png" alt=""></a>
                    </button>
                    <div class="login" onclick="settingsMenuToggle()">
                        <img src="image/login.png" alt="" class="image_login">
                    </div>
                </div>

            </div>
            <div class="settings-header">
                <div class="user-profile">
                    <a href="user.php"><img src="image/login.png"></a>
                    <a href="user.php" class="text-decoration-none link-primary" style="color:#212121">
                        <p class="user-name">Hồ sơ của bạn</p>
                    </a>
                </div>
                <div>
                    <hr>
                </div>
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary" style="color:#212121"><i
                            class="fas fa-book"></i></a>
                    <p>Sổ tay</p>
                </div>
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary" style="color:#212121"><i
                            class="fas fa-cog"></i></a>
                    <p>Thiết lập riêng tư & bảo mật</p>
                </div>
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary" style="color:#212121"><i
                            class="far fa-moon"></i></a>
                    <p>Chế độ tối (Tắt)</p>
                    <div id="dark-btn">
                        <span></span>
                    </div>
                </div>
                <div class="setting-link">
                    <a href="logout.php" class="text-decoration-none link-primary" style="color:#212121"><i
                            class="fas fa-sign-out-alt"></i></a>
                    <a href="logout.php" class="text-decoration-none link-primary" style="color:#212121">
                        <p>Đăng xuất</p>
                    </a>
                </div>
                <div>
                    <hr>
                </div>
                <div class="settings-hr">
                    <i class="fas fa-globe"></i>
                    <a href="#">Tiếng Việt</a>
                    <i class="fas fa-money-bill"></i>
                    <a href="#">VND</a>
                </div>

            </div>
        </div>
    </header>

    <div class="container-fluid row d-flex align-items-center d-flex justify-content-center">
        <div class="col-md-10">
            <!-- Column -->
            <div class="card"> <img class="card-img-top" src="image/anhnen.jpg" alt="Card image cap">
                <div class="card-body little-profile text-center" style="background:var(--bg-color)">
                    <div class="pro-img"><img src="image/anhdaidien.jpg" alt="user"></div>
                    <h3 class="m-b-0" style="color: var(--text-color)">Nhóm 8</h3>
                    <h3 class="m-b-0" style="color: var(--text-color)">(Tiến Nam, Hoàng Long, Minh Tình)</h3>
                </div>
        </div>
    </div>  

        <!--Phần thân-->
        <main class="container">

            <!--Thân trái-->
            <div class="left-sidebar">
                <div class="introduce">
                    <div class="lane">
                        <h6>Giới thiệu</h6>
                        <a href="#" style="font-size: 15px; color:#24a8d8 ;">Xem tất cả </a>
                    </div>
                    <hr>
                    <button> Chỉnh sửa chi tiết </button>
                </div>
                <div class="left-img">
                    <h6>Site của tôi(0)</h6>
                    <hr>
                    <button>Tạo trang cộng đồng</button>
                </div>
                <div class="friends">
                    <div class="friendly">
                        <h6>Lời mời kết bạn</h6>
                        <a href="#" style="font-size: 15px; color:#24a8d8 ;">Xem tất cả </a>
                    </div>
                    <hr>
                    <h5 style="font-size:17px">Chưa có lời mời kết bạn nào !</h5>
                </div>
            </div>

            <!--Thân giữa-->
            <div class="main-content">
                <div class="write-post-container">
                    <div class="button">
                        <span class="new">Tạo bài viết</span>
                        <span class="share">Chia sẻ trải nghiệm</span>
                    </div>
                    <div class="user-profile">
                        <a href="#"><img src="image/login.png"></a>
                        <textarea rows="3" placeholder="Haha, hôm nay bạn thế nào?"></textarea>
                    </div>
                    <div class="add-post-links">
                        <button><i class="far fa-image" style = "color:#24a8d8"></i>Ảnh/video</button>
                        <button><i class="fas fa-map-marker-alt" style="color: #F64A64;"></i>Địa điểm</button>
                        <button><i class="far fa-smile-beam" style="color: #E3A42E;"></i>Cảm xúc</button>
                    </div>
                </div>
                <div class="write-content-container">
                    <p style="color:#c1c1b8">Bảng tin chưa có nội dung.</p>
                </div>
            </div>

            <!--Thân phải-->
            <div class="right-sidebar">
                <div class="right-img">
                    <h6>Site của tôi(0)</h6>
                    <hr>
                    <button><i class="far fa-image"></i>Thêm hình ảnh</button>
                </div>
                <div class="copyrights">
                    <ul class="copyright__lists">
                        <li class="copyright__lists-item">
                            <a href="https://www.hahalolo.com/@HahaloloOfficial">Giới thiệu</a>
                        </li>
                        <li class="copyright__lists-item">
                            <a href="https://help.hahalolo.com/hc/vi/articles/360036293871">Quyền riêng tư</a>
                        </li>
                    </ul>
                    <ul class="copyright__lists">
                        <li class="copyright__lists-item">
                            <a href="https://help.hahalolo.com/hc/vi/articles/360036291411">Điều khoản</a>
                        </li>
                        <li class="copyright__lists-item">
                            <a href="https://help.hahalolo.com/hc/vi/articles/360035943132">Cookie</a>
                        </li>
                        <li class="copyright__lists-item">
                            <a href="https://tuyendung.hahalolo.com/">Tuyển dụng</a>
                        </li>
                    </ul>
                    <ul class="copyright__lists">
                        <li class="copyright__lists-item">
                            <a href="https://help.hahalolo.com/hc/vi">Hỗ trợ</a>
                        </li>
                        <li class="copyright__lists-item">
                            <a href="https://affiliate.hahalolo.com/">Tiếp thị liên kết</a>
                        </li>
                    </ul>
                    <span class="copyrights--text">©️ Hahalolo 2017. Đã đăng ký bản quyền</span>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
        <script src="JS/script.js"></script>
        
</body>

</html>