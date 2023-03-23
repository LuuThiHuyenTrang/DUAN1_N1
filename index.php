<?php
include "model/pdo.php";
include "model/san_pham.php";
include "model/danh_muc.php";
include "model/binh_luan.php";
include "model/nguoi_dung.php";

include "view/header.php";
$listsp = spAll();

if (isset($_GET["duong_link"]) && $_GET["duong_link"] != "") {
    $duong_link = $_GET["duong_link"];

    switch ($duong_link) {
        case 'shop':
            $listdm = tatcaloaisanpham();
            include "view/shop.php";
            break;
        case 'sanphamCT':
            $id = $_GET["id"];
            $spOne = spOne($id);
            $kichcoOne = kich_co_sp_one($id);
            $soluong = so_luong_sp($id);
            include "view/sanphamCT.php";
            break;

        case 'viewCart':
            echo "<pre>";
            var_dump($_POST);
            include "view/giohang/viewCart.php";
            break;
        case 'datHang':
            include "view/giohang/dat_hang.php";
            break;
        case 'thanhcong':
            include "view/giohang/thanh_cong.php";
            break;

        case 'sign':
            include "view/taikhoan/sign_in_up.php";
            break;


        case 'contact':
            include "view/contact.php";
            break;
        case 'about':
            include "view/about.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}


include "view/footer.php";
