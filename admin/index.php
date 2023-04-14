<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['vai_tro'] != 1) {
    header("Location: /DUAN1_N1/index.php?duong_link=sign");
}
include "../model/pdo.php";
include "../model/san_pham.php";
include "../model/danh_muc.php";
include "../model/binh_luan.php";
include "../model/hoa_don.php";
include "../model/nguoi_dung.php";
include "../model/voucher.php";
include "../model/thong_ke.php";

include "header.php";

if (isset($_GET["duong_link"]) && $_GET["duong_link"] != "") {
    $duong_link = $_GET["duong_link"];

    switch ($duong_link) {
            //sanpham : $listsp_là lấy dữ liệu hàm đằng sau dấu '=',hàm thì lấy ở model.
        case 'listsp':
            $listsp = spAll_Desc();
            include "sanpham/list_sp.php";
            break;
        case 'timkiemsanpham':
            $ten_sp = $_POST['ten_sp'];
            //k đổi đc
            $listsp = timkiemten($ten_sp);

            if ($listsp == null) {
                $mess = "k co san pham nao";
                $listsp = spAll_Desc();
            }
            include "sanpham/list_sp.php";
            break;
        case 'addsp':
            $listdm = tatcaloaisanpham();
            include "sanpham/add_sp.php";
            break;
        case 'editsp':
            $idsp = $_GET["id"];
            $sp_can_edit = spOne($idsp);
            $listdm = tatcaloaisanpham();

            include "sanpham/edit_sp.php";
            break;
        case 'luutrusp':
            $id = $_GET['id'];
            luutruSp($id);
            $listsp = spAll_Desc();

            include "sanpham/list_sp.php";
            break;
            //tnyc 
        case 'tnyc_addsp':
            if ($_POST['tensp'] == null) {
                $mess = "⚠️ Không để trống tên sản phẩm";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else if ($_FILES['img']['name'] == null) {
                $mess = "⚠️ Mời tải lên ảnh đại diện của sản phẩm";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else if ($_POST['tien'] == null) {
                $mess = "⚠️ Mời bạn nhập số tiền";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else if ($_POST['ngay'] == null) {
                $mess = "⚠️ Mời chọn ngày nhập";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else if ($_POST['mota'] == null) {
                $mess = "⚠️ Không để trống mô tả sản phẩm";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else if ($_POST['loai'] == null) {
                $mess = "⚠️ Không để trống loại sản phẩm";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else if ($_POST["mau1"] == null || $_POST["soluong1"] == null || $_POST["soluong1"] <= 0) {
                $mess = "⚠️ Mời thêm màu size sản phẩm (số lượng là số dương) phân loại 1";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else if ($_FILES['img1']['name'] == null) {
                $mess = "⚠️ Mời tải lên ảnh của màu, size, số lượng của sản phẩm";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else if ($_POST["mau2"] == null || $_POST["soluong2"] == null || $_POST["soluong2"] <= 0) {
                $mess = "⚠️ Mời thêm màu size sản phẩm (số lượng là số dương) phân loại 2";
                $listdm = tatcaloaisanpham();
                include "sanpham/add_sp.php";
            } else {
                $tensp = $_POST["tensp"];
                $ngay = $_POST["ngay"];
                $mota = $_POST["mota"];
                $loai = $_POST["loai"];
                $tien = $_POST["tien"];

                $mau1 = $_POST["mau1"];
                $size1 = $_POST["size1"];
                $soluong1 = $_POST["soluong1"];


                $mau2 = $_POST["mau2"];
                $size2 = $_POST["size2"];
                $soluong2 = $_POST["soluong2"];


                $mau3 = $_POST["mau3"];
                $size3 = $_POST["size3"];
                $soluong3 = $_POST["soluong3"];


                $mau4 = $_POST["mau4"];
                $size4 = $_POST["size4"];
                $soluong4 = $_POST["soluong4"];


                $hinh0 = $_FILES["img"]["name"];
                $hinh1 = $_FILES["img1"]["name"];
                $hinh2 = $_FILES["img2"]["name"];
                $hinh3 = $_FILES["img3"]["name"];
                $hinh4 = $_FILES["img4"]["name"];
                insertProduct($tensp, $ngay, $mota, $loai, $hinh0, $tien);

                $sql = "SELECT MAX(id) as `id` FROM `san_pham`"; //select ra sản phẩm mới được thêm vào = select ra id sp lớn nhất 
                $proNew = pdo_query_one($sql);

                insertKichCo($proNew["id"], $mau1, $size1, $soluong1, $mau2, $size2, $soluong2, $mau3, $size3, $soluong3, $mau4, $size4, $soluong4, $hinh1, $hinh2, $hinh3, $hinh4);

                move_uploaded_file($_FILES["img"]["tmp_name"], "../image/" . $hinh0);
                move_uploaded_file($_FILES["img1"]["tmp_name"], "../image/" . $hinh1);
                move_uploaded_file($_FILES["img2"]["tmp_name"], "../image/" . $hinh2);
                move_uploaded_file($_FILES["img3"]["tmp_name"], "../image/" . $hinh3);
                move_uploaded_file($_FILES["img4"]["tmp_name"], "../image/" . $hinh4);

                $listsp = spAll_Desc();
                include "sanpham/list_sp.php";
            }

            break;

        case 'tnyc_updatesp':

            $idsp = $_POST['id'];
            if ($_POST['tensp'] == null) {
                $mess = "⚠️ Không để trống tên sản phẩm";
                $sp_can_edit = spOne($idsp);
                $listdm = tatcaloaisanpham();
                include "sanpham/edit_sp.php";
            } else if ($_POST['tien'] == null) {
                $mess = "⚠️ Mời nhập giá sản phẩm";
                $sp_can_edit = spOne($idsp);
                $listdm = tatcaloaisanpham();
                include "sanpham/edit_sp.php";
            } else if ($_POST['ngay'] == null) {
                $mess = "⚠️ Mời chọn ngày nhập";
                $sp_can_edit = spOne($idsp);
                $listdm = tatcaloaisanpham();
                include "sanpham/edit_sp.php";
            } else if ($_POST['mota'] == null) {
                $mess = "⚠️ Không để trống mô tả sản phẩm";
                $sp_can_edit = spOne($idsp);
                $listdm = tatcaloaisanpham();
                include "sanpham/edit_sp.php";
            } else if ($_POST['loai'] == null) {
                $mess = "⚠️ Không để trống loại sản phẩm";
                $sp_can_edit = spOne($idsp);
                $listdm = tatcaloaisanpham();
                include "sanpham/edit_sp.php";
            } else {
                $tensp = $_POST["tensp"];
                $ngay = $_POST["ngay"];
                $mota = $_POST["mota"];
                $loai = $_POST["loai"];
                $hinh0 = $_FILES["img"]["name"];
                $tien = $_POST["tien"];

                if ($hinh0 != null) {
                    move_uploaded_file($_FILES["img"]["tmp_name"], "../image/" . $hinh0);
                }

                updateSp($idsp, $tensp, $ngay, $mota, $loai, $hinh0, $tien);
            }


            $listsp = spAll_Desc();
            include "sanpham/list_sp.php";
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

            if ($_POST['tenloai'] == null) {
                $mess = "⚠️ Không để trống tên danh mục";
                include "danhmuc/add_dm.php";
            } else if ($_FILES['logo']['name'] == null) {
                $mess = "⚠️ Mời tải lên ảnh của danh mục";
                include "danhmuc/add_dm.php";
            } else if ($_POST['tenTH'] == null) {
                $mess = "⚠️ Mời nhập tên thương hiệu của danh mục";
                include "danhmuc/add_dm.php";
            } else {
                $tenloai = $_POST["tenloai"];
                $logo = $_FILES["logo"]["name"];
                $tenTH = $_POST["tenTH"];

                themdanhmuc($tenloai, $logo, $tenTH);
                move_uploaded_file($_FILES["logo"]["tmp_name"], "../image/" . $logo);
                $mess = 'Thêm danh mục thành công';

                $listdm = tatcaloaisanpham();
                include "danhmuc/list_dm.php";
            }


            break;
        case 'tnyc_editdm':
            $id = $_POST["id"];
            if ($_POST['tenloai'] == null) {
                $mess = "⚠️ Không để trống tên danh mục";
                $one_dm = onedanhmuc($id);
                include "danhmuc/edit_dm.php";
            } else if ($_POST['tenTH'] == null) {
                $mess = "⚠️ Mời nhập tên thương hiệu của danh mục";
                $one_dm = onedanhmuc($id);
                include "danhmuc/edit_dm.php";
            } else {
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
            }
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
            $listsp = spAll_Desc();
            include "binhluan/list_bl.php";
            break;

            //CHITIETBINHLUAN
        case 'chitietbl':
            $id = $_GET["id"];
            $listbl = hienthiblcuaonesp($id);
            $spOne = spOne($id);
            include "binhluan/chitiet_bl.php";
            break;


            //XÓA BÌNH LUẬN
        case 'xoabl':
            $idbl = $_GET["idbl"]; //id bl
            $idsp = $_GET["idsp"]; //id sp
            xoabl($idbl);
            $mess = 'Xóa bình luận thành công';

            $listbl = hienthiblcuaonesp($idsp);
            $spOne = spOne($idsp);
            include "binhluan/chitiet_bl.php";
            break;


            //hoadon
        case 'listhd':
            if (isset($_POST["idhd"])) {
                $idhd = $_POST["idhd"];
                $listhd  = loc_id_hd($idhd);
                if ($listhd == null) {
                    $mess = "Không có hóa đơn nào với mã: $idhd";
                }
            } else if (isset($_POST["trang_thai"])) {
                $trang_thai = $_POST["trang_thai"];
                $listhd  = loc_trang_thai_hd($trang_thai);
            } else if (isset($_POST["tinh_trang"])) {
                $tinh_trang = $_POST["tinh_trang"];
                $listhd  = loc_tinh_trang_hd($tinh_trang);
            } else {
                $listhd = listHD();
            }
            include "hoadon/list_hd.php";
            break;
        case 'chitiethd':
            $idhd = $_GET['idhd'];
            $hoadon = hoa_don_can_tim($idhd);
            $listhdct = show_chi_tiet_hoa_don($idhd);
            include "hoadon/chitiet_hd.php";
            break;
        case 'capnhatTT':
            $idhd = $_GET['idhd'];
            capnhatTT($idhd);
            $listhd = listHD();
            include "hoadon/list_hd.php";
            break;

        case 'capnhattinhtranghd':
            $idhd = $_GET['idhd'];
            $tinhtrang = $_POST['tinhtranghoadon'];
            capnhattinhtranghd($idhd, $tinhtrang);
            $listhd = listHD();
            include "hoadon/list_hd.php";
            break;

            //voucher
        case 'listvc':
            $listvc = tatcavoucher();
            include "voucher/list_vc.php";
            break;
        case 'addvc':

            include "voucher/add_vc.php";
            break;
        case 'editvc':
            $id = $_GET['id'];
            $one_vc = one_voucher($id);
            include "voucher/edit_vc.php";
            break;


            //===============tnyc_voucher=================
        case 'tnyc_addvc':
            $tenvoucher = $_POST["tenvoucher"];
            $mota = $_POST["mota"];
            $mucgiamgia = $_POST["mucgiamgia"];
            $dieukien = $_POST["dieukien"];
            $soluong = $_POST["soluong"];
            $ngaytao = $_POST["ngaytao"];
            $hsd = $_POST["hsd"];
            addvc($tenvoucher, $mota, $mucgiamgia, $dieukien, $soluong, $ngaytao, $hsd);
            $mess = 'Thêm voucher thành công';

            $listvc = tatcavoucher();
            include "voucher/list_vc.php";
            break;

        case 'tnyc_editvc':
            $id = $_POST["id"];

            $tenvoucher = $_POST["tenvoucher"];
            $mota = $_POST["mota"];
            $mucgiamgia = $_POST["mucgiamgia"];
            $dieukien = $_POST["dieukien"];
            $soluong = $_POST["soluong"];
            $ngaytao = $_POST["ngaytao"];
            $hsd = $_POST["hsd"];

            editvc($id, $tenvoucher, $mota, $mucgiamgia, $dieukien, $soluong, $ngaytao, $hsd);
            $listvc = tatcavoucher();
            include "voucher/list_vc.php";
            break;
        case 'tnyc_deletevc':
            $id = $_GET['id'];
            $listhd = id_hoadon_can_xoa($id); //bởi vì có nhiều hóa đơn đang sử dụng voucher muốn xóa, nên cần lọc hết ra
            foreach ($listhd as $hd) { // xóa tất cả hóa đơn chi tiết của list hóa đơn vừa lọc ra
                $sql = "DELETE FROM hdct where id_hd =" . $hd['id'];
                pdo_execute($sql);
            }
            xoavc($id); //sau khi xóa hết khóa phụ thì mới đến xóa vc 

            $listvc = tatcavoucher();
            include "voucher/list_vc.php";
            break;

            // nguoidung
        case 'listnd':
            $listnd = loadall_nguoi_dung();
            include "nguoidung/list_nd.php";
            break;


        case 'capquyennd':
            $id = $_GET['id'];
            capquyennguoidung($id);
            $listnd = loadall_nguoi_dung();
            include "nguoidung/list_nd.php";
            break;



        case 'xoand':
            $id = $_GET['id'];
            xoanguoidung($id);
            $listnd = loadall_nguoi_dung();

            include "nguoidung/list_nd.php";
            break;

            //thongke
        case 'listtke':
            $tong_tien = tong_tien_chi_tieu();
            $listThongKeLoaiSp = thongkeLoaiSanPham();
            include "thongke/list_tke.php";
            break;
        case 'bieudo':
            $listThong_ke_tien_danh_muc = thong_ke_tien_danh_muc();
            $list_thu_nhap = thong_ke_thu_nhap();
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
