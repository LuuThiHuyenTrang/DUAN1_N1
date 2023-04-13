<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=duan1;',
    'root',
    ''
);



// include 'edit_taikhoan.php';

session_start();

$thongbao = isset($_GET['thongbao']) ? $_GET['thongbao'] : '';

$user = $_SESSION['user'];
$sql = 'SELECT * FROM nguoi_dung WHERE id = ' . $user['id'];
// var_dump($_SESSION['user']);

$statement1 = $connect->prepare($sql);
$statement1->execute();
$userOne = $statement1->fetch();

?>

<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=duan1;',
    'root',
    ''
);

if (isset($_SESSION['user'])) {
    $sqlUser = "SELECT * FROM `nguoi_dung` WHERE `id` = " . $_SESSION['user']['id'];
    $statement = $connect->query($sqlUser);
    $userDetail = $statement->fetch();
    if ($userDetail) {
        $_SESSION['user'] = $userDetail;
    }
}

$id_nd = 1;
if (isset($_SESSION['mycart'][$id_nd])) {
    $cart = count($_SESSION['mycart'][$id_nd]);
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>DuAn1_Nhom1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/DUAN1_N1/view/css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/DUAN1_N1/view/css/style.css">

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="index.php">MyShoe</a></div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <form action="/DUAN1_N1/index.php?duong_link=timkiemdonhang" class="search-wrap" method="POST">
                                <div class="form-group">
                                    <input type="search" class="form-control search" placeholder="Mã đơn hàng" name="searchID">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1 navbar-collapse">
                            <ul>
                                <li class="active"><a href="/DUAN1_N1/index.php">Trang chủ</a></li>
                                <li style="padding-top: 10px;"><a href="/DUAN1_N1/index.php?duong_link=shop">Của hàng</a></li>
                                <li style="padding-top: 10px;"><a href="/DUAN1_N1/index.php?duong_link=about">Giới thiệu</a></li>
                                <li style="padding-top: 10px;"><a href="/DUAN1_N1/index.php?duong_link=contact">Liên hệ</a></li>

                                <?php if (!isset($_SESSION['user'])) {
                                    echo "
                                    <li style='padding-top: 10px;' class='float-right'><a href='/DUAN1_N1/index.php?duong_link=sign'>Đăng Nhập</a>
                                    </li> ";
                                } else { ?>
                                    <li class="has-dropdown float-right d-flex align-items-center text-white text-decoration-none dropdown-toggle">
                                        <img src="/DUAN1_N1/image/<?= $_SESSION['user']['hinh'] ?>" alt="anh" class='rounded-circle' width='60' height='60'>
                                        <ul class="dropdown active" style="width: 200px; background-color: #eef9b1;">
                                            <li style="padding-top: 10px;"><a href="/DUAN1_N1/index.php?duong_link=list_hoadon">Lịch sử đặt hàng</a></li>
                                            <li style="padding-top: 10px;"><a href="/DUAN1_N1/view/taikhoan/edit_taikhoan.php">Cập nhật tài khoản</a></li>
                                            <li style="padding-top: 10px;"><a href="/DUAN1_N1/view/taikhoan/tnyc_logout.php">Đăng Xuất</a></li>
                                            <?php
                                            if ($_SESSION['user']['vai_tro'] == 1) {
                                                echo " <li style='padding-top: 10px;'><a href='/DUAN1_N1/admin/index.php?duong_link=listsp'>Admin</a></li>";
                                            } ?>
                                        </ul>
                                    </li>
                                <?php }
                                ?>
                                <li style="padding-top: 10px;" class='float-right'><a href='index.php?duong_link=viewCart'><i class='icon-shopping-cart'></i> Giỏ hàng [ <span style="color: red; font-weight: 900; font-size: 20px;"><?= isset($cart) ? $cart : 0 ?></span> ]</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h4><a href="#">Shop sale 25% tất cả sản phẩm nhân ngày 30/4 - 1/5</a></h4>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h5><a href="#">Săn mã giảm giá lên đến 50% khi tham gia chường trình khuyến
                                                    mãi ngày 1/5</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="breadcrumbs">

        </div>


        <div class="colorlib-about">
            <div class="container">
                <h2 style="color: blue; font-weight: 500;"><?= isset($_GET['mess']) ? $_GET['mess'] : ""; ?></h2>

                <h3 class="m-5" style="text-align: center;">Chỉnh sửa thông tin tài khoản</h3>
                <form action="/DUAN1_N1/view/taikhoan/tnyc_edit.php" method="POST" class="contact-form" style=" width: 400px; margin: 0 auto" enctype="multipart/form-data">
                    <div class="mb-3 form-group">
                        <label for="" class="form-label"></label>
                        <input type="text" value="<?= $userOne['id'] ?>" name='id' hidden>
                        <input value="<?= $userOne['ten_kh'] ?>" type="text" name="ten_kh" class="form-control" style="color: black; font-size: 20px; font-weight: 500;">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="" class="form-label"></label>
                        <input type="file" name="hinh" class="form-control" id="" style="color: black; font-size: 20px; font-weight: 500;">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="" class="form-label"></label>
                        <input value="<?= $userOne['sdt'] ?>" type="phone" name="tel" class="form-control" style="color: black; font-size: 20px; font-weight: 500;">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="" class="form-label"></label>
                        <input value="<?= $userOne['dia_chi'] ?>" type="text" name="address" class="form-control" style="color: black; font-size: 20px; font-weight: 500;">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="" class="form-label"></label>
                        <input value="<?= $userOne['email'] ?>" type="email" name="email" class="form-control" style="color: black; font-size: 20px; font-weight: 500;">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="" class="form-label"></label>
                        <input value="<?= $userOne['mat_khau'] ?>" type="password" name="pass" class="form-control" style="color: black; font-size: 20px; font-weight: 500;">
                    </div>

                    <button onclick="return confirm('Bạn có chắc muốn sửa thông tin này không?')" type="submit" name="sua" class="btn btn-primary">Sửa</button>
                    <div style="color: red;">
                        <!-- <?php echo $errors ?> -->
                    </div>
                    <input class="btn btn-link" type="reset" value="Nhập lại">
                    <a href="/DUAN1_N1/index.php" class="button">Quay lại trang chủ</a>


                </form>
            </div>
        </div>


        <!-- <p style="color: red">
        <?php echo $thongbao; ?>
    </p> -->
        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col footer-col colorlib-widget">
                        <h4>Giới Thiệu Giày Mới</h4>
                        <p>Hàng loạt sản phẩm mới sẽ được ra mắt vào ngày 1/5 nhân ngày QUỐC TẾ LAO ĐỘNG</p>
                        <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col footer-col colorlib-widget">
                        <h4>Chăm sóc khách hàng</h4>
                        <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Đổi - Trả</a></li>
                            <li><a href="#">Phiếu quà tặng</a></li>
                            <li><a href="#">Danh sách sản phẩm</a></li>
                            <li><a href="#">Đặc biệt</a></li>
                            <li><a href="#">Dịch vụ khách hàng</a></li>
                            <li><a href="#">Địa chỉ cửa hàng</a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col footer-col colorlib-widget">
                        <h4>Thông tin</h4>
                        <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Thông tin giao hàng</a></li>
                            <li><a href="#">Ủng hộ</a></li>
                            <li><a href="#">Theo dõi đơn hàng</a></li>
                        </ul>
                        </p>
                    </div>

                    <div class="col footer-col">
                        <h4>Tin tức</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="blog.html">Bài viết</a></li>
                            <li><a href="#">Đặc biệt</a></li>
                            <li><a href="#">Triển lãm</a></li>
                        </ul>
                    </div>

                    <div class="col footer-col">
                        <h4>Thông tin liên lạc</h4>
                        <ul class="colorlib-footer-links">
                            <li>Trịnh Văn Bô, <br> - Nam Từ Liêm - Hà Nội</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:nhom1_duan1@gmail.com">nhom1_duan1@gmail.com</a></li>
                            <li><a href="#">nhom1_duan1@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <style>
        .colorlib-nav .sale {
            padding: 14px 0;
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(166, 63, 207, 1) 100%);
        }

        .colorlib-nav .top-menu {
            padding: 10px 0 10px 0;
        }

        .colorlib-nav .top-menu .search-wrap .submit-search {
            height: 40px;
            width: 40px;
            position: absolute;
            top: 0;
            right: -5px;
            padding: 0;
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(227, 170, 250, 1) 100%);
            border: 1px solid #88c8bc;
        }

        .colorCart {
            padding-top: 80px;
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(76, 14, 35, 1) 100%);
        }

        #colorlib-footer {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(227, 170, 250, 1) 100%);
            padding: 7em 0 0 0;
        }

        .border {
            border: 1px solid rgb(238, 174, 202) !important;
        }

        .desc {
            background: rgb(255, 181, 213);
            background: radial-gradient(circle, rgba(255, 181, 213, 0.5804446778711485) 0%, rgba(246, 123, 165, 0.05103291316526615) 100%);
        }

        .tensp {
            text-align: left;
            word-wrap: break-word;
            white-space: normal;
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .quantity-left-minus:hover {
            background-color: violet;
        }

        .quantity-right-plus:hover {
            background-color: violet;
        }
    </style>

    <script>
        const quantity = document.querySelector(".quantity"); //kích chọn số lượng sản phẩm không được lớn hơn số lượng hiện có

        function quantity_left_minus() {
            quantity.value -= 1;
            if (quantity.value < 1) {
                quantity.value = 1;
                return false;
            }
        }

        function quantity_right_plus() {
            quantity.value -= -1;
            if (quantity.value >= <?= $soluong ?>) {
                quantity.value = <?= $soluong ?>;
                return false;
            }
        }
    </script>

    <!-- jQuery -->
    <script src="/DUAN1_N1/view/js/jquery.min.js"></script>
    <!-- popper -->
    <script src="/DUAN1_N1/view/js/popper.min.js"></script>
    <!-- bootstrap 4.1 -->
    <script src="/DUAN1_N1/view/js/bootstrap.min.js"></script>
    <!-- jQuery easing -->
    <script src="/DUAN1_N1/view/js/jquery.easing.1.3.js"></script>
    <!-- Waypoints -->
    <script src="/DUAN1_N1/view/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="/DUAN1_N1/view/js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="/DUAN1_N1/view/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/DUAN1_N1/view/js/jquery.magnific-popup.min.js"></script>
    <script src="/DUAN1_N1/view/js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="/DUAN1_N1/view/js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="/DUAN1_N1/view/js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="/DUAN1_N1/view/js/main.js"></script>

</body>

</html>