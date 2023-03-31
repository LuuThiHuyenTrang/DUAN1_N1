<?php
session_start();
include "model/pdo.php";
include "model/san_pham.php";
include "model/danh_muc.php";
include "model/binh_luan.php";
include "model/hoa_don.php";
include "model/nguoi_dung.php";
include "model/voucher.php";


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
            $listbl = hienthiblcuaonesp($id);

            $spOne = spOne($id);
            $kichcoOne = kich_co_sp_one($id);
            $soluong = so_luong_sp($id);
            include "view/sanphamCT.php";
            break;

        case 'addCart':
            $id_nd = 1;
            $idsp = $_POST["idsp"];
            $tensp = $_POST["tensp"];
            $hinh = $_POST["hinh"];
            $gia = $_POST["gia"];
            $kichco = $_POST["kichco"];
            $soluong = $_POST["soluong"];
            $tien = $gia * $soluong;

            $id_kich_co = $_POST['id_kich_co'];

            $mang_sp = [$idsp, $tensp, $hinh, $gia, $kichco, $soluong, $tien, $id_kich_co];

            // khởi tạo mảng trước khi thêm phần tử
            if (!isset($_SESSION['mycart'][$id_nd])) {
                $_SESSION['mycart'][$id_nd] = array();
            }

            $sp_da_co = false; // duyệt qua các sản phẩm trong giỏ hàng
            foreach ($_SESSION['mycart'][$id_nd] as &$item) { //& để tham chiếu đến mảng trong array và cập nhật lại dữ liệu
                // nếu sản phẩm đã tồn tại, tăng số lượng sản phẩm lên
                if ($item[0] == $idsp && $item[4] == $kichco) {
                    $item[5] += $soluong;
                    $item[6] += $tien;
                    $sp_da_co = true;
                    break;
                }
            }

            // nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới vào giỏ hàng
            if (!$sp_da_co) {
                array_push($_SESSION['mycart'][$id_nd], $mang_sp);
            }
            echo "<script>window.location.replace('http://localhost/DUAN1_N1/index.php?duong_link=viewCart');</script>
            ";
            break;
        case 'viewCart':
            include "view/giohang/viewCart.php";
            break;
        case 'giamsoluong':
            $id_nd = 1;
            $idcart = $_GET['idcart'];
            foreach ($_SESSION['mycart'][$id_nd] as &$item) {
                if ($item[0] == $idcart) {
                    $item[5] += -1;
                    $item[6] = $item[5] * $item[3];
                    break;
                }
            }
            include "view/giohang/viewCart.php";
            break;
        case 'tangsoluong':
            $id_nd = 1;
            $idcart = $_GET['idcart'];
            foreach ($_SESSION['mycart'][$id_nd] as &$item) {
                if ($item[0] == $idcart) {
                    $item[5] += 1;
                    $item[6] = $item[5] * $item[3];
                    break;
                }
            }
            include "view/giohang/viewCart.php";
            break;
        case "xoaCart":
            $id_nd = 1;

            $idCart = $_GET['idcart'];
            foreach ($_SESSION['mycart'][$id_nd] as $key => $value) {
                if ($value[0] == $idCart) {
                    unset($_SESSION['mycart'][$id_nd][$key]);
                    break;
                }
            }
            include "view/giohang/viewCart.php";
            break;
        case 'datHang':
            $tongtienhang = $_POST['tongtienhang'];
            $giamgiasanpham = $_POST['giamgiasanpham'];
            $tongtien = $_POST['tongtien'];
            include "view/giohang/dat_hang.php";
            break;
        case 'thanhcong':
            $tenkh = $_POST['tenkh'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['diachi'];
            $date = getdate();
            $ngaydat = date("Y-m-d", $date[0]);
            $pttt = $_POST['phuongthucthanhtoan'];
            $tongtien = $_POST['tongtien'];

            them_hoa_don($tenkh, $email, $sdt, $diachi, $ngaydat, $pttt, $tongtien);
            $idhd = lay_id_hoa_don_vua_them();
            $id_nd = 1;
            foreach ($_SESSION['mycart'][$id_nd] as $cart) {
                $tien = $cart[3];
                $soluong = $cart[5];
                $id_kich_co = $cart[7];
                them_hoa_don_chi_tiet($id_kich_co, $tien, $idhd, $soluong);
            }
            unset($_SESSION['mycart'][$id_nd]);
            include "view/giohang/thanh_cong.php";
            break;

        case 'sign':
            include "view/taikhoan/signup_and_login.php";
            break;


        case 'comment':
            $id = $_GET["id"];
            $noidung = $_POST["noidung"];
            $date = getdate();
            $ngay = date("Y-m-d", $date[0]);
            $idsp = $_POST["idsp"];
            $idnd = $_POST["idnd"];
            addbl($noidung, $ngay, $idsp, $idnd);

            $listbl = hienthiblcuaonesp($id);
            $spOne = spOne($id);
            $kichcoOne = kich_co_sp_one($id);
            $soluong = so_luong_sp($id);
            include "view/sanphamCT.php";
            break;

        case 'timkiemdonhang':
            $idhd = $_POST['searchID'];
            $listhoadon = listHD();
            $so_sp_mua = so_sp_mua($idhd);
            $listhdct = show_chi_tiet_hoa_don($idhd);
            include "view/hoadonSearch.php";
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
