<?php
include "../model/pdo.php";
include "../model/san_pham.php";
include "../model/danh_muc.php";
include "../model/binh_luan.php";
include "../model/hoa_don.php";
include "../model/nguoi_dung.php";

include "header.php";

if (isset($_GET["duong_link"]) && $_GET["duong_link"] != "") {
    $duong_link = $_GET["duong_link"];

    switch ($duong_link) {
            //sanpham
        case 'listsp':
            $listsp = spAll();
            include "sanpham/list_sp.php";
            break;
        case 'addsp':
            $listdm = tatcaloaisanpham();
            include "sanpham/add_sp.php";
            break;
        case 'editsp':
            include "sanpham/edit_sp.php";
            break;
        case 'luutrusp':
            $id = $_GET['id'];
            luutruSp($id);
            $listsp = spAll();

            include "sanpham/list_sp.php";
            break;
            //tnyc 
        case 'tnyc_addsp':
            $tensp = $_POST["tensp"];
            $ngay = $_POST["ngay"];
            $mota = $_POST["mota"];
            $loai = $_POST["loai"];

            $mau1 = $_POST["mau1"];
            $size1 = $_POST["size1"];
            $soluong1 = $_POST["soluong1"];
            $tien1 = $_POST["tien1"];
            $giamgia1 = $_POST["giamgia1"];

            $mau2 = $_POST["mau2"];
            $size2 = $_POST["size2"];
            $soluong2 = $_POST["soluong2"];
            $tien2 = $_POST["tien2"];
            $giamgia2 = $_POST["giamgia2"];

            $mau3 = $_POST["mau3"];
            $size3 = $_POST["size3"];
            $soluong3 = $_POST["soluong3"];
            $tien3 = $_POST["tien3"];
            $giamgia3 = $_POST["giamgia3"];

            $mau4 = $_POST["mau4"];
            $size4 = $_POST["size4"];
            $soluong4 = $_POST["soluong4"];
            $tien4 = $_POST["tien4"];
            $giamgia4 = $_POST["giamgia4"];

            $hinh0 = $_FILES["img"]["name"];
            $hinh1 = $_FILES["img1"]["name"];
            $hinh2 = $_FILES["img2"]["name"];
            $hinh3 = $_FILES["img3"]["name"];
            $hinh4 = $_FILES["img4"]["name"];
            insertProduct($tensp, $ngay, $mota, $loai, $hinh0);

            $sql = "SELECT MAX(id) as `id` FROM `san_pham`"; //select ra sản phẩm mới được thêm vào = select ra id sp lớn nhất 
            $proNew = pdo_query_one($sql);

            insertKichCo($proNew["id"], $mau1, $size1, $soluong1, $mau2, $size2, $soluong2, $mau3, $size3, $soluong3, $mau4, $size4, $soluong4, $hinh1, $hinh2, $hinh3, $hinh4, $tien1, $giamgia1, $tien2, $giamgia2, $tien3, $giamgia3, $tien4, $giamgia4);

            move_uploaded_file($_FILES["img"]["tmp_name"], "../image/" . $hinh0);
            move_uploaded_file($_FILES["img1"]["tmp_name"], "../image/" . $hinh1);
            move_uploaded_file($_FILES["img2"]["tmp_name"], "../image/" . $hinh2);
            move_uploaded_file($_FILES["img3"]["tmp_name"], "../image/" . $hinh3);
            move_uploaded_file($_FILES["img4"]["tmp_name"], "../image/" . $hinh4);

            $listsp = spAll();
            include "sanpham/list_sp.php";
            break;

        case 'deletesp':

            $listsp = spAll();
            include "sanpham/list_dm.php";
            break;

            //danhmuc
        case 'listdm':
            $listdm = tatcaloaisanpham();

            include "danhmuc/list_dm.php";
            break;
        case 'adddm':
            include "danhmuc/add_dm.php";
            break;
        case 'editdm':
            $id = $_GET['id'];
            $one_dm = onedanhmuc($id);
            include "danhmuc/edit_dm.php";
            break;
            //---------chuyển trang---------------
            //tnyc
        case 'tnyc_adddm':
            $tenloai = $_POST["tenloai"];
            $logo = $_FILES["logo"]["name"];
            $tenTH = $_POST["tenTH"];

            themdanhmuc($tenloai, $logo, $tenTH);
            move_uploaded_file($_FILES["logo"]["tmp_name"], "../image/" . $logo);
            $mess = 'Thêm danh mục thành công';
            $listdm = tatcaloaisanpham();
            include "danhmuc/list_dm.php";
            break;
        case 'tnyc_editdm':
            $id = $_POST["id"];
            $tenloai = $_POST["tenloai"];
            $logo = $_FILES["logo"]["name"];
            $tenTH = $_POST["tenTH"];

            editdanhmuc($tenloai, $logo, $tenTH, $id);

            if ($logo != null) {
                move_uploaded_file($_FILES["logo"]["tmp_name"], "../image/" . $logo);
            }
            $mess = 'Cập nhật danh mục thành công';
            $listdm = tatcaloaisanpham();
            include "danhmuc/list_dm.php";
            break;
        case 'tnyc_deletedm':
            $id = $_GET['id'];
            deletedanhmuc($id); //thực hiện xóa danh mục
            $mess = 'Xóa danh mục thành công';
            $listdm = tatcaloaisanpham(); //lấy dữ liệu tất cả danh mục
            include "danhmuc/list_dm.php"; //quay về list danh mục
            break;

            //binhluan
        case 'listbl':
            include "binhluan/list_bl.php";
            break;

            //taikhoan
        case 'listtk':
            include "taikhoan/list_tk.php";
            break;
        case 'addtk':
            include "taikhoan/add_tk.php";
            break;
        case 'edittk':
            include "taikhoan/edit_tk.php";
            break;

            //hoadon
        case 'listhd':
            $listhd = listHD();
            include "hoadon/list_hd.php";
            break;
        case 'chitiethd':
            include "hoadon/chitiet_hd.php";
            break;
        case 'capnhatTT':
            $idhd = $_GET['idhd'];
            capnhatTT($idhd);
            $listhd = listHD();

            include "hoadon/list_hd.php";
            break;


            //thongke
        case 'listtke':
            include "thongke/list_tke.php";
            break;
        case 'bieudo':
            include "thongke/bieudo.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
