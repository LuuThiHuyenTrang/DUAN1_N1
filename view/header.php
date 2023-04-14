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
                                <li class="active"><a href="index.php">Trang chủ</a></li>
                                <li style="padding-top: 10px;"><a href="index.php?duong_link=shop">Của hàng</a></li>
                                <li style="padding-top: 10px;"><a href="index.php?duong_link=about">Giới thiệu</a></li>
                                <li style="padding-top: 10px;"><a href="index.php?duong_link=contact">Liên hệ</a></li>

                                <?php if (!isset($_SESSION['user'])) {
                                    echo "
                                    <li style='padding-top: 10px;' class='float-right'><a href='index.php?duong_link=sign'>Đăng Nhập</a>
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
                                <li style="padding-top: 5px;" class='float-right'><a href='index.php?duong_link=viewCart'><i class='icon-shopping-cart'></i> Giỏ hàng [ <span style="color: red; font-weight: 900; font-size: 20px;"><?= isset($cart) ? $cart : 0 ?></span> ]</a></li>
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