<?php
include "../model/pdo.php";
include "../model/san_pham.php";
include "../model/danh_muc.php";
include "../model/binh_luan.php";
include "../model/tai_khoan.php";

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
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_sp = $_POST['tensp'];
                $filename = $_FILES['img']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $ngaynhap = $_POST['ngay'];
                $mota = $_POST['mota'];
                $loai = $_POST['loai'];
                $mau = $_POST['mau1'];
                $size = $_POST['size1'];
                $soluong = $_POST['soluong1'];
                // $soluong = $_POST['soluong1'];
                $file_anh = $_POST['img1'];
                $tien = $_POST['tien1'];
                $giamgia = $_POST['giamgia1'];
                insert_san_pham($ten_sp, $filename, $mota, $ngaynhap, $loai, $mau, $size, $soluong, $tien, $giamgia);
                $thongbao = "Cập nhật thành công";
            }
            include "sanpham/add_sp.php";
            break;
        case 'editsp':
            // $sp = null;
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = spOne($_GET['id']);
            }
                include "sanpham/edit_sp.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
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


        case 'tnyc_updatesp':
            $id = $_POST["id"];
            $tensp = $_POST["tensp"];
            $ngaynhap = $_POST["ngaynhap"];
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
 
            update_sanpham($id, $tensp, $hinh0, $mota, $ngaynhap, $loai);
            // $sql = "SELECT MAX(id) as `id` FROM `san_pham`"; 
            // $proNew = pdo_query_one($sql);

            update_kichco($id, $mau1, $size1, $soluong1, $mau2, $size2, $soluong2, $mau3, $size3, $soluong3, $mau4, $size4, $soluong4, $hinh1, $hinh2, $hinh3, $hinh4, $tien1, $giamgia1, $tien2, $giamgia2, $tien3, $giamgia3, $tien4, $giamgia4);
            // $sql = "SELECT MAX(id) as `id` FROM `kich_co`"; 
            // $proNew = pdo_query_one($sql);
            move_uploaded_file($_FILES["img"]["tmp_name"], "../image/" . $hinh0);
            move_uploaded_file($_FILES["img1"]["tmp_name"], "../image/" . $hinh1);
            move_uploaded_file($_FILES["img2"]["tmp_name"], "../image/" . $hinh2);
            move_uploaded_file($_FILES["img3"]["tmp_name"], "../image/" . $hinh3);
            move_uploaded_file($_FILES["img4"]["tmp_name"], "../image/" . $hinh4);

            $listsp = spAll();
            include "sanpham/list_sp.php";
            break;

            //danhmuc
        case 'listdm':
            include "danhmuc/list_dm.php";
            break;
        case 'adddm':
            include "danhmuc/add_dm.php";
            break;
        case 'editdm':
            include "danhmuc/edit_dm.php";
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
            include "hoadon/list_hs.php";
            break;
        case 'chitiethd':
            include "hoadon/chitiet_hd.php";
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
