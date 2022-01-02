<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="CSS/user.css">
    <link rel="stylesheet" href="CSS/style1.css">
    <title>User</title>
</head>

<body>
<header class="container-fluid fixed-top">
        <div class="row">
            <div class="col-md-12 header">
                <div class="header_logo">
                    <a href="hahalolo.html">
                        <img src="image/logo.jpg" alt="" class="image_logohahalolo"></a>
                    <div class="header_search">
                        <input type="text" class="header_input" placeholder="Tìm kiếm">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <ul class="header_menu ms-auto">
                    <li class="header_icon">
                        <a href="#">
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
                        <i class="fas fa-wallet"></i>
                    </button>
                    <button class="btn" style="color:#24a8d8">
                        <i class="fab fa-facebook-messenger"></i>
                    </button class="btn">
                    <div class="login" onclick="settingsMenuToggle()">
                        <img src="image/login.jpg" alt="" class="image_login">
                    </div>
                </div>

            </div>
            <div class="settings-header">
                <div class="user-profile">
                    <a href="user.php"><img src="image/login.jpg"></a>
                    <p class="user-name">Hồ sơ của bạn</p>
                </div>
                
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary"><i class="fas fa-book"></i></a>
                    <p>Sổ tay</p>
                </div>
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary"><i class="fas fa-cog"></i></a>
                    <p>Thiết lập riêng tư & bảo mật</p>
                </div>
                <div class="setting-link">
                    <a href="#" class="text-decoration-none link-primary"><i class="far fa-moon"></i></a>
                    <p>Chế độ tối (Tắt)</p>
                    <div id="dark-btn">
                        <span></span>
                    </div>
                </div>
                <div class="setting-link">
                    <a href="logout.php" class="text-decoration-none link-primary"><i class="fas fa-sign-out-alt"></i></a>
                    <a href = "logout.php" style = "text-decoration:none;"><p>Đăng xuất</p></a>
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
    <div class="col-md-8">
        <!-- Column -->
        <div class="card"> <img class="card-img-top" src="image/anh1.jpg" alt="Card image cap">
            <div class="card-body little-profile text-center">
                <div class="pro-img"><img src="image/anh2.jpg" alt="user"></div>
                <h3 class="m-b-0">Brad Macullam</h3>
                <p>Web Designer &amp; Developer</p> 

            </div>
        </div>
    </div>

        <!--Phần thân-->
        <main class="container">

<!--Thân trái-->
<div class="left-sidebar">
    <div class="main_image">
        <a href="#"><img src="image/login.jpg" alt="">
            <h5>Giới thiệu</h5>
            <div class="sidebar_trainghiem d-flex align-items-center d-flex justify-content-center">
    <a href="javascript:void(0)" class="waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Chỉnh sửa chi tiết</a>
    </div>
        </a>
    </div>
    <div class="main_image mt-2">
        <a href="#"><img src="image/login.jpg" alt="">
            <h5>Site của tôi</h5>
            <div class="sidebar_trainghiem d-flex align-items-center d-flex justify-content-center">
    <a href="javascript:void(0)" class="waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Tạo trang cộng đồng</a>
    </div>
            
        </a>
    </div>
    <div class="main_image mt-2">
        <a href="#"><img src="image/login.jpg" alt="">
            <h5>Lời mời kết bạn</h5>
        </a>
    </div>
    <div>
        <hr>
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
            <a href="#"><img src="image/login.jpg"></a>
            <textarea rows="3" placeholder="Haha, hôm nay bạn thế nào?"></textarea>
        </div>
        <div class="add-post-links">
            <button><i class="far fa-image"></i>Ảnh/video</button>
            <button><i class="fas fa-map-marker-alt"></i>Địa điểm</button>
            <button><i class="far fa-smile-beam"></i>Cảm xúc</button>
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
                <a href="#"><img src="image/dantri.jpg"></a>
                <div>
                    <p>Dân trí</p>
                    <span>Thứ 2, 20/12/2021- 18:45</span>
                </div>
            </div>
            <a href="#"><button><i class="far fa-hand-peace"></i>Haha trang</button><i
                    class="fas fa-ellipsis-h"></i></a>
        </div>
        <p class="post-text">
        <h4>Lần đầu tiên Hà Nội phát hiện hơn 1.600 ca Covid-19 chỉ trong 24 giờ</h4>
        Theo Sở Y tế Hà Nội, trong số 1.641 ca bệnh ghi nhận hôm nay có 406 ca cộng đồng, 1.021 ca tại khu cách
        ly, 214 ca tại khu phong tỏa.</p>
        <p> Phân bố 1.641 bệnh nhân tại 197 xã, phường, thị trấn thuộc 26/30 quận, huyện: Ba Đình (353); Long
            Biên
            (302); Hoàng Mai (235); Hai Bà Trưng (149); Đống Đa (133); Hà Đông (109); Cầu Giấy (79); Nam Từ Liêm
            (71); Bắc Từ Liêm (65); Ba Vì (23); Tây Hồ (16); Thanh Trì (16); Gia Lâm (15); Thanh Xuân (12); Mỹ
            Đức
            (11); Đan Phượng (9); Hoài Đức (9); Ứng Hòa (6); Sơn Tây (6); Chương Mỹ (6); Hoàn Kiếm (6); Thanh
            Oai
            (5); Phúc Thọ (2); Thường Tín (1); Mê Linh (1); Đông Anh (1).</p>
        <p>Phân bố 406 ca cộng đồng theo quận, huyện:
            Ba Đình (90); Đống Đa (66); Long Biên (52); Hai Bà Trưng (42); Hoàng Mai (41); Cầu Giấy (18); Tây Hồ
            (14); Nam Từ Liêm (11); Hà Đông (10); Gia Lâm (10); Ba Vì (10); Bắc Từ Liêm (9); Thanh Xuân (8);
            Thanh
            Trì (5); Hoàn Kiếm (5); Hoài Đức (5); Đan Phượng (4); Ứng Hòa (2); Phúc Thọ (2); Đông Anh (một); Sơn
            Tây
            (một).</p>
        <img src="image/covid19.jpg" alt="" class="post-img">
        <div class="post-row">
            <div class="activity-icon">
                <div><i class="far fa-thumbs-up"></i>9,6K</div>
                <div><i class="far fa-comments"></i>1,2K</div>
                <div><i class="fas fa-share"></i>980</div>
            </div>
            <div class="post-profile-icon">
                <img src="image/logo.png" alt="">
            </div>
        </div>
    </div>
    <div class="post-container">
        <div class="post-row">

            <div class="user-profile">
                <a href="#"><img src="image/avatar.jpg"></a>
                <div>
                    <p>Lang Thang Đất Nước</p>
                    <span>3 ngày trước</span>
                </div>
            </div>
            <a href="#"><button><i class="far fa-hand-peace"></i>Haha trang</button><i
                    class="fas fa-ellipsis-h"></i></a>
        </div>
        <p class="post-text">Nếu du khách đã quá quen mặt với các địa điểm du lịch nổi tiếng, đông đúc thì có
            thể “đổi gió” một
            chút tại tọa độ dinh 1 Đà Lạt được ví như một “nốt trầm” thú vị giữa lòng thành phố.
            Team sống ảo nếu đang tìm kiếm tọa độ sống ảo mang âm hưởng cổ điển lôi cuốn đến từ thế kỷ trước thì
            nhất định đừng bỏ lỡ Dinh 1 Đà Lạt - điểm dừng chân sở hữu vẻ đẹp kiến trúc Pháp ấn tượng hứa hẹn
            mang đến vô vàn background check-in mới mẻ, thu hút cho bộ ảnh du lịch phố núi hấp dẫn.</p>
        <img src="image/anh4.jpg" alt="" class="post-img">
        <div class="post-row">
            <div class="activity-icon">
                <div><i class="far fa-thumbs-up"></i>989</div>
                <div><i class="far fa-comments"></i>110</div>
                <div><i class="fas fa-share"></i>60</div>
            </div>
            <div class="post-profile-icon">
                <img src="image/logo.png" alt="">
            </div>
        </div>
    </div>
    <div class="post-container">
        <div class="post-row">

            <div class="user-profile">
                <a href="#"><img src="image/kenh13.png"></a>
                <div>
                    <p>Kênh 14</p>
                    <span>1 ngày trước</span>
                </div>
            </div>
            <a href="#"><button><i class="far fa-hand-peace"></i>Haha trang</button><i
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
        <div class="post-row">
            <div class="activity-icon">
                <div><i class="far fa-thumbs-up"></i>8,9K</div>
                <div><i class="far fa-comments"></i>970</div>
                <div><i class="fas fa-share"></i>278</div>
            </div>
            <div class="post-profile-icon">
                <img src="image/logo.png" alt="">
            </div>
        </div>
    </div>
    <a href="#" class="text-decoration-none link-primary"><button type="button" class="Load-btn">Xem
            tiếp</button></a>
</div>

<!--Thân phải-->
<div class="right-sidebar">
    <div class="sidebar_trainghiem d-flex align-items-center d-flex justify-content-center">
    <a href="javascript:void(0)" class="waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Thêm ảnh</a>
    </div>
    <div>
        <hr>
    </div>
    <div class="copyright">
        <div><a href="#">Giới thiệu</a></div>
        <div><a href="#">Quyền riêng tư</a></div>
        <div><a href="#">Điều khoản</a></div>
        <div><a href="#">Cookie</a></div>
        <div><a href="#">Tuyển dụng</a></div>
        <div><a href="#">Hỗ trợ</a></div>
        <div><a href="#">Tiếp thị liên kết</a></div>
        <span class="copyright--text ">©️ Hahalolo 2017. Đã đăng ký bản quyền</span>
    </div>

</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>
<script src="JS/script.js"></script>
</div>
</body>
</html>