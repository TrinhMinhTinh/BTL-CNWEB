<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }  
?>
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
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <!--Phần đầu-->
    <header class="container-fluid fixed-top">
        <div class="row">
            <div class="col-md-12 header">
                <div class="header_logo">
                    <a href="home.php">
                    <img src="image/logo.jpg" alt="" class="image_logohahalolo"></a>
                    <div class="header_search">
                        <input type="text" class="header_input" placeholder="Tìm kiếm">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <ul class="header_menu ms-auto">
                    <li class="header_icon">
                        <a href="home.php">
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
                    <a href = "user.php" class="text-decoration-none link-primary" style="color:#212121"><p class="user-name">Hồ sơ của bạn</p></a> 
                </div>
                <div>
                    <hr>
                </div>
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary" style="color:#212121"><i class="fas fa-book"></i></a>
                    <p>Sổ tay</p>
                </div>
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary" style="color:#212121"><i class="fas fa-cog"></i></a>
                    <p>Thiết lập riêng tư & bảo mật</p>
                </div>
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary" style="color:#212121"><i class="far fa-moon"></i></a>
                    <p>Chế độ tối (Tắt)</p>
                    <div id="dark-btn">
                        <span></span>
                    </div>
                </div>
                <div class="setting-link"> 
                <a href="index.php" class="text-decoration-none link-primary" style="color:#212121"><i class="fas fa-sign-out-alt"></i></a>
                <a href = "index.php" class="text-decoration-none link-primary" style="color:#212121"><p>Đăng xuất</p></a>
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

    <!--Phần thân-->
    <main class="container">

        <!--Thân trái-->
        <div class="left-sidebar">
            <div class="main_image">
                <a href="user.php"><img src="image/login.png" alt=""><h5>Hồ sơ của bạn</h5></a>
                <a href="#"><i class="fas fa-coins"></i>Đồng xu</a>
                <a href="#"><i class="fas fa-book"></i>Sổ tay</a>
                <a href="#"><i class="fab fa-bitcoin"></i>Tài khoản kinh doanh</a>
                <a href="#"><i class="fas fa-wallet"></i>Tài khoản thanh toán</a>
                <a href="#"><i class="fas fa-share-alt"></i>Chia sẻ</a>
                <a href="#"><i class="fas fa-user-friends"></i>Bạn bè</a>
                <a href="#"><i class="far fa-image"></i>Hình ảnh</a>
                <a href="#"><i class="far fa-star"></i>Bookmarks</a>
            </div>
            <div class="main_image2">
                <a href="#"><img src="image/tetbaythoi.jpg" alt=""></a>   
            </div>
            <div class="my-site">
                <h6>Site của tôi(0)</h6>
                <hr>
                <button>Tạo trang cộng đồng</button>
            </div>
            <div class="friend-request">
                <div class="top">
                 <h6>Lời mời kết bạn</h6>
                 <a href="#" style="font-size: 15px; color:#24a8d8 ;">Xem tất cả </a>
                </div>
                <hr>
                <h5 style="font-size:17px">Chưa có lời mời kết bạn nào !</h5>  
                </div>
                <div class = "weather">
                    <div class="h-weather mt-3">
            <div class="col-lg-4 col-6">
                <div class="card" style="width: 320px; height: 495px; border-radius: 5px;border:none; background:var(--bg-color); color:var(--text-color)">
                    <div class="card-body">
                        <h5 class="card-title h-location">Salavan, LA</h5>
                        <h5 class="card-title h-day mt-3">Thứ 2, 06/12/2021</h5>
                        <div class="h-cloud mt-3">
                            <i class="bi bi-cloud-fill"></i>
                            <div class="h-temperatures">
                                <div class="h-temperature">
                                    <h2 class="h-do"> 16 </h2>
                                    <div class="h-CF">
                                        <h5 class="h-C h-C-separate">°C </h5>
                                        <h5 class="h-C">°F </h5>
                                    </div>
                                </div>
                                <h5 class="h-status">Mây rải rác</h5>
                            </div>
                        </div>
                        <div class="generality">
                            <ul class="generality_list">
                                <li class="generality_list-item">
                                    <a>Khoảng nhiệt</a>
                                    <span>20°C - 20°C</span>
                                </li>
                                <li class="generality_list-item">
                                    <a>Tốc độ gió</a>
                                    <span>2.82m/s</span>
                                </li>
                                <li class="generality_list-item">
                                    <a>Lượng mưa</a>
                                    <span>1.57mm</span>
                                </li>
                            </ul>
                            <ul class="generality_list">
                                <li class="generality_list-item">
                                    <a>Độ ẩm</a>
                                    <span>78%</span>
                                </li>
                                <li class="generality_list-item">
                                    <a>Khả năng mưa</a>
                                    <span>100%</span>
                                </li>
                                <li class="generality_list-item">
                                    <a>Bình Minh</a>
                                    <span>06:16 AM</span>
                                </li>
                            </ul>
                            
                        </div>
                        <span class="generality-text">
                            Cập nhật lúc 06:50 PM. OpenWeather
                        </span>
                    </div>
                </div>
            </div>
        </div>
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
            <div class="post-container">
                <div class="post-row">
                    <div class="post-profile">
                        <a href="#"><img src="image/img1.jpg"></a>
                        <div>
                            <p>Lướt là trúng - Xu cực khủng</p>
                            <span>Trải nghiệm và khoe xu của bạn với Hahalolo!</span>
                        </div>
                    </div>
                </div>
                <div class="post-link">
                    <a href="#">Xem chi tiết</a>
                </div>
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <a href="#"><img src="image/dantri.png"></a>
                        <div>
                            <p>Dân trí</p>
                            <span>Thứ 2, 20/12/2021- 18:45</span>
                        </div>
                    </div>
                    <a href="#" style="color:#212121"><button><i class="far fa-hand-peace"></i>Haha trang</button><i
                            class="fas fa-ellipsis-h"></i></a>
                </div>
                <p class="post-text">
                <h4>Lần đầu tiên Hà Nội phát hiện hơn 1.600 ca Covid-19 chỉ trong 24 giờ</h4>
                Theo Sở Y tế Hà Nội, trong số 1.641 ca bệnh ghi nhận hôm nay có 406 ca cộng đồng, 1.021 ca tại khu cách
                ly, 214 ca tại khu phong tỏa.</p>
                <p> Phân bố 1.641 bệnh nhân tại 197 xã, phường, thị trấn thuộc 26/30 quận, huyện: Ba Đình (353); Long Biên
                (302); Hoàng Mai (235); Hai Bà Trưng (149); Đống Đa (133); Hà Đông (109); Cầu Giấy (79); Nam Từ Liêm
                (71); Bắc Từ Liêm (65); Ba Vì (23); Tây Hồ (16); Thanh Trì (16); Gia Lâm (15); Thanh Xuân (12); Mỹ Đức
                (11); Đan Phượng (9); Hoài Đức (9); Ứng Hòa (6); Sơn Tây (6); Chương Mỹ (6); Hoàn Kiếm (6); Thanh Oai
                (5); Phúc Thọ (2); Thường Tín (1); Mê Linh (1); Đông Anh (1).</p>
                <p>Phân bố 406 ca cộng đồng theo quận, huyện:
                Ba Đình (90); Đống Đa (66); Long Biên (52); Hai Bà Trưng (42); Hoàng Mai (41); Cầu Giấy (18); Tây Hồ
                (14); Nam Từ Liêm (11); Hà Đông (10); Gia Lâm (10); Ba Vì (10); Bắc Từ Liêm (9); Thanh Xuân (8); Thanh
                Trì (5); Hoàn Kiếm (5); Hoài Đức (5); Đan Phượng (4); Ứng Hòa (2); Phúc Thọ (2); Đông Anh (một); Sơn Tây
                (một).</p>
                <img src="image/covid19.jpg" alt="" class="post-img">
                <div>
                    <hr>
                </div>
                <div class="post-row">
                    <div class="activity-icon">
                        <a onclick="Toggle1()"  id="btnh1" class="btn"><i class="far fa-grin-squint-tears"style="padding-left:20px;padding-right:9px"></i>Haha</a>
                        <div><i class="far fa-comments"></i>Bình Luận</div>
                        <div><i class="fas fa-share"></i>Chia Sẻ</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="image/logo.jpg" alt="">
                    </div>
                </div>
                <div>
                    <hr>
                </div>
                <div class="main-comment">
                    <img src="image/login.png">
                    <input type="text" class="main-input" placeholder="Viết bình luận">
                    <a href="#" class="emoji"><i class="far fa-laugh-beam"></i></a>
                    <a href="#" class="picture"><i class="far fa-image"></i></a>
                </div>
            </div>
            <div class="post-container">
                <div class="post-row">

                    <div class="user-profile">
                        <a href="#"><img src="image/avatar.png"></a>
                        <div>
                            <p>Lang Thang Đất Nước</p>
                            <span>3 ngày trước</span>
                        </div>
                    </div>
                    <a href="#" style="color:#212121"><button><i class="far fa-hand-peace"></i>Haha trang</button><i
                            class="fas fa-ellipsis-h"></i></a>
                </div>
                <p class="post-text">Nếu du khách đã quá quen mặt với các địa điểm du lịch nổi tiếng, đông đúc thì có
                    thể “đổi gió” một
                    chút tại tọa độ dinh 1 Đà Lạt được ví như một “nốt trầm” thú vị giữa lòng thành phố.
                    Team sống ảo nếu đang tìm kiếm tọa độ sống ảo mang âm hưởng cổ điển lôi cuốn đến từ thế kỷ trước thì
                    nhất định đừng bỏ lỡ Dinh 1 Đà Lạt - điểm dừng chân sở hữu vẻ đẹp kiến trúc Pháp ấn tượng hứa hẹn
                    mang đến vô vàn background check-in mới mẻ, thu hút cho bộ ảnh du lịch phố núi hấp dẫn.</p>
                <img src="image/anh4.jpg" alt="" class="post-img">
                <div>
                    <hr>
                </div>
                <div class="post-row">
                    <div class="activity-icon">
                        <a onclick="Toggle2()"  id="btnh2" class="btn"><i class="far fa-grin-squint-tears"style="padding-left:20px;padding-right:9px"></i>Haha</a>
                        <div><i class="far fa-comments"></i>Bình Luận</div>
                        <div><i class="fas fa-share"></i>Chia Sẻ</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="image/logo.jpg" alt="">
                    </div>
                </div>
                <div>
                    <hr>
                </div>
                <div class="main-comment">
                    <img src="image/login.png">
                    <input type="text" class="main-input" placeholder="Viết bình luận">
                    <a href="#" class="emoji"><i class="far fa-laugh-beam"></i></a>
                    <a href="#" class="picture"><i class="far fa-image"></i></a>
                </div>
            </div>
            <div class="post-container">
                <div class="post-row">

                    <div class="user-profile">
                        <a href="#"><img src="image/kenh14.png"></a>
                        <div>
                            <p>Kênh 14</p>
                            <span>1 ngày trước</span>
                        </div>
                    </div>
                    <a href="#" style="color:#212121"><button><i class="far fa-hand-peace"></i>Haha trang</button><i
                            class="fas fa-ellipsis-h"></i></a>
                </div>
                <p class="post-text">
                <h4>Nội dung Spider-Man: No Way Home</h4>Tiếp nối ngay sau cái kết của Spider-Man: Far From
                Home (2019) khi Mysterio/Quentin Beck (Jake Gyllenhaal) công bố danh tính Spider-Man là Peter Parker
                (Tom Holland) trên sóng truyền hình. Từ đây mà cuộc sống của cậu thay đổi hoàn toàn khi trở thành
                tâm điểm soi mói của cả thế giới. Thậm chí, Peter, MJ (Zendaya), Ned Leeds (Jacob Batalon) và Dì May
                (Marisa Tomei) còn bị điều tra về cái chết của Mysterio. Bộ ba bị từ chối vào trường Đại học mơ ước
                do dính vào quá nhiều rắc rối.
                Hết cách, Peter Parker đành phải tìm đến Doctor Strange (Benedict Cumberbatch) nhờ bùa phép xóa ký
                ức của mọi người. Một tai nạn trong lúc làm phép khiến đa vũ trụ bất ngờ kết thúc. Nhóm ác nhân từ
                các phần Người Nhện trước gồm Green Goblin/Norman Osborn (Willem Dafoe), Doc Ock/Otto Octavius
                (Alfred Molina), Sandman/Flint Marko (Thomas Haden Church), Lizard/Curt Connors (Rhys Ifans) và
                Electro/Maxwell Dillon (Jamie Foxx) tràn đến đe dọa tính mạng của mọi người...</p>
                <img src="image/anh 5.jpg" alt="" class="post-img">
                <div>
                    <hr>
                </div>
                <div class="post-row">
                    <div class="activity-icon">
                        <a onclick="Toggle3()"  id="btnh3" class="btn"><i class="far fa-grin-squint-tears"style="padding-left:20px;padding-right:9px"></i>Haha</a>
                        <div><i class="far fa-comments"></i>Bình Luận</div>
                        <div><i class="fas fa-share"></i>Chia Sẻ</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="image/logo.jpg" alt="">
                    </div>
                </div>
                <div>
                    <hr>
                </div>
                <div class="main-comment">
                    <img src="image/login.png">
                    <input type="text" class="main-input" placeholder="Viết bình luận">
                    <a href="#" class="emoji"><i class="far fa-laugh-beam"></i></a>
                    <a href="#" class="picture"><i class="far fa-image"></i></a>
                </div>
            </div>
            <a href="#" class="text-decoration-none link-primary"><button type="button" class="Load-btn">Xem tiếp</button></a>
        </div>
        
        <!--Thân phải-->
        <div class="right-sidebar">
            <div class="sidebar_trainghiem">
                <div class="left_trainghiem">
                    <a href="#"><img src="image/anh2.jpg"></a>
                </div>
            </div>
            <div class="sidebar_trainghiem">
                <div class="sidebar_picture">
                    <a href="#"><img src="image/anh3.jpg"></a>
                </div>
            </div>
            <div class="sidebar_title">
                <div class="sidebar-h4">
                    <h4>Trải nghiệm nổi bật </h4>
                    <a href="#">Xem Tất cả</a>
                </div>
                <div>
                    <hr>
                </div>
            <img src="image/voucher.jpg" alt="" class="img-voucher">
            <div class="image_sidebar">
                <img src="image/logo.jpg" alt="" class="img">
                <a href="#" ><p style = "margin-top:12px">SĂN VOUCHER CÙNG HAHALOLO</p></a>
            </div>
            </div>

            <div class="copyright">
                <ul class="copyright__list"> 
                    <li class="copyright__list-item">
                        <a href="https://www.hahalolo.com/@HahaloloOfficial">Giới thiệu</a>
                    </li>
                    <li class="copyright__list-item">
                        <a href="https://help.hahalolo.com/hc/vi/articles/360036293871">Quyền riêng tư</a>
                    </li>
                </ul>
               <ul class="copyright__list">
                    <li class="copyright__list-item">
                        <a href="https://help.hahalolo.com/hc/vi/articles/360036291411">Điều khoản</a>
                    </li>
                    <li class="copyright__list-item">
                        <a href="https://help.hahalolo.com/hc/vi/articles/360035943132">Cookie</a>
                    </li>
                    <li class="copyright__list-item">
                        <a href="https://tuyendung.hahalolo.com/">Tuyển dụng</a>
                    </li>
                </ul>
                <ul class="copyright__list">
                    <li class="copyright__list-item">
                        <a href="https://help.hahalolo.com/hc/vi">Hỗ trợ</a>
                    </li>
                    <li class="copyright__list-item">
                        <a href="https://affiliate.hahalolo.com/">Tiếp thị liên kết</a>
                    </li>
                </ul>
                <span class="copyright--text">©️ Hahalolo 2017. Đã đăng ký bản quyền</span>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="JS/script.js"></script>
    <script src="JS/like.js"></script>
</body>

</html>