<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MyShoe Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/DUAN1_N1/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/DUAN1_N1/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/DUAN1_N1/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/DUAN1_N1/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/DUAN1_N1/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/DUAN1_N1/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/DUAN1_N1/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/DUAN1_N1/admin/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="../index.php"><img src="/DUAN1_N1/admin/assets/images/logo.svg" alt="logo" /></a>
                <!-- //logo admin_bottom -->
                <a class="sidebar-brand brand-logo-mini" href="../index.php"><img src="/DUAN1_N1/admin/assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="/DUAN1_N1/image/<?= $_SESSION['user']['hinh'] ?>" alt="logo">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal"><?= $_SESSION['user']['ten_kh'] ?></h5>
                                <span>Admin</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <!-- <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div> -->
                                </div>
                                <!-- <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Cập Nhật Tài Khoản</p>
                                </div> -->
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="./index.php?duong_link=listsp">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Sản Phẩm</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="./index.php?duong_link=listdm">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Danh Mục</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="./index.php?duong_link=listbl">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Bình Luận</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="./index.php?duong_link=listnd">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Người dùng</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="./index.php?duong_link=listhd">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Hóa Đơn</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="./index.php?duong_link=listvc">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Voucher</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="./index.php?duong_link=listtke">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-bar"></i>
                        </span>
                        <span class="menu-title">Thống Kê</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/DUAN1_N1/admin/assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="./index.php?duong_link=timkiemsanpham" method="POST">
                                <input type="text" name="ten_sp" class="form-control" placeholder="Search products">
                                <button type="submit" class="btn btn-black form-control" style="width: 50px;"><i class="mdi mdi-refresh"></i> </button>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block" style="margin-right: 50px;">
                            <a class="nav-link btn btn-success create-new-button" href="./index.php?duong_link=addsp">+ Add Product</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle " src="/DUAN1_N1/image/<?= $_SESSION['user']['hinh'] ?>" alt="logo">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                                    <h5 class="mb-0 font-weight-normal"><?= $_SESSION['user']['ten_kh'] ?></h5>
                                    </p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <!-- <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div> -->
                                    </div>

                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item d-flex" href="/DUAN1_N1/view/taikhoan/tnyc_logout.php">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>

                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out
                                        </p>
                                    </div>
                                </a>

                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->