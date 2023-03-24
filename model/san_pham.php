<?php
function insertProduct($tensp, $ngay, $mota, $loai, $hinh0)
{
    $pro = "INSERT INTO `san_pham` (`id`, `ten_sp`, `hinh`, `mo_ta`, `ngay_nhap`, `id_dm`, `trang_thai`) VALUES (NULL, '$tensp', '$hinh0', '$mota', '$ngay', '$loai','1');";
    pdo_execute($pro);
}

function insertKichCo($id_sp, $mau1, $size1, $soluong1, $mau2, $size2, $soluong2, $mau3, $size3, $soluong3, $mau4, $size4, $soluong4, $hinh1, $hinh2, $hinh3, $hinh4, $tien1, $giamgia1, $tien2, $giamgia2, $tien3, $giamgia3, $tien4, $giamgia4)
{
    if ($mau2 == null) {
        $kich_co = "INSERT INTO `kich_co` (`id`, `mau`, `size`, `hinh`, `id_sp`, `so_luong`, `tien`, `giam_gia`) 
        VALUES (NULL, '$mau1', '$size1', '$hinh1', '$id_sp', '$soluong1', '$tien1', '$giamgia1');";
    } elseif ($mau3 == null) {

        $kich_co = "INSERT INTO `kich_co` (`id`, `mau`, `size`, `hinh`, `id_sp`, `so_luong`, `tien`, `giam_gia`) VALUES (NULL, '$mau1', '$size1', '$hinh1', '$id_sp', '$soluong1', '$tien1', '$giamgia1'),
        (NULL, '$mau2', '$size2', '$hinh2', '$id_sp', '$soluong2', '$tien2', '$giamgia2');";
    } elseif ($mau4 == null) {

        $kich_co = "INSERT INTO `kich_co` (`id`, `mau`, `size`, `hinh`, `id_sp`, `so_luong`, `tien`, `giam_gia`) VALUES (NULL, '$mau1', '$size1', '$hinh1', '$id_sp', '$soluong1', '$tien1', '$giamgia1'),
        (NULL, '$mau2', '$size2', '$hinh2', '$id_sp', '$soluong2', '$tien2', '$giamgia2'),
        (NULL, '$mau3', '$size3', '$hinh3', '$id_sp', '$soluong3', '$tien3', '$giamgia3');";
    } else {

        $kich_co = "INSERT INTO `kich_co` (`id`, `mau`, `size`, `hinh`, `id_sp`, `so_luong`, `tien`, `giam_gia`) VALUES (NULL, '$mau1', '$size1', '$hinh1', '$id_sp', '$soluong1', '$tien1', '$giamgia1'),
        (NULL, '$mau2', '$size2', '$hinh2', '$id_sp', '$soluong2', '$tien2', '$giamgia2'),
        (NULL, '$mau3', '$size3', '$hinh3', '$id_sp', '$soluong3', '$tien3', '$giamgia3'),    
        (NULL, '$mau4', '$size4', '$hinh4', '$id_sp', '$soluong4', '$tien4', '$giamgia4');";
    }

    pdo_execute($kich_co); //chỉ thực thi câu lệnh thì không cần return
}




function spAll()
{
    $sql = "SELECT * FROM san_pham ORDER BY id desc;";
    $listsp = pdo_query($sql);
    return $listsp; //cần in ra tất cả sản phẩm thì phải return
}
function gia_sp($idsp)
{
    $sql = "SELECT Avg(tien) as `gia` FROM `kich_co` WHERE id_sp = $idsp;";
    $gia_sp = pdo_query_one($sql);
    return $gia_sp;
}


function spOne($idsp)
{
    $sql = "SELECT * FROM san_pham where id = $idsp";
    $spOne = pdo_query_one($sql);
    return $spOne;



}
function kich_co_sp_one($idsp)
{
    $sql = "SELECT * FROM kich_co where id_sp = $idsp";
    $kich_co_sp_one = pdo_query($sql);
    return $kich_co_sp_one;
}
function so_luong_sp()
{
    $sql = "SELECT SUM(so_luong) as `soluong` FROM `kich_co` WHERE id_sp = 8;";
    $soluong = pdo_query_one($sql);
    return $soluong['soluong'];
}


function delete_sanpham($id){
    $sql = "delete from kich_co where id_sp=".$id."; delete from san_pham where id=".$id;
    pdo_execute($sql);
}

function update_sanpham($id, $tensp, $hinh0, $mota, $ngaynhap, $loai){
    
    $sql="UPDATE `san_pham` SET `ten_sp` = '$tensp.', `hinh` = '$hinh0', `mo_ta` = '$mota', `ngay_nhap` = '$ngaynhap', `id_dm` = '$loai' WHERE `san_pham`.`id` = $id;";
    pdo_execute($sql);
}
function update_kichco($id, $mau1, $size1, $soluong1, $mau2, $size2, $soluong2, $mau3, $size3, $soluong3, $mau4, $size4, $soluong4, $hinh1, $hinh2, $hinh3, $hinh4, $tien1, $giamgia1, $tien2, $giamgia2, $tien3, $giamgia3, $tien4, $giamgia4){
    $sql = "UPDATE `kich_co` SET `mau` = '$mau1', `size` = '$size1', `hinh` = '$hinh1', `so_luong` = '$soluong1', `tien` = '$tien1', `giam_gia` = '$giamgia1' WHERE `kich_co`.`id_sp` = $id; 
    UPDATE `kich_co` SET `mau` = '$mau2', `size` = '$size2', `hinh` = '$hinh2', `so_luong` = '$soluong2', `tien` = '  $tien2 ', `giam_gia` = '$giamgia2' WHERE `kich_co`.`id_sp` = $id; 
    UPDATE `kich_co` SET `mau` = '$mau3', `size` = '$size3', `hinh` = '$hinh3', `so_luong` = ' $soluong3', `tien` = ' $tien3', `giam_gia` = '$giamgia3' WHERE `kich_co`.`id_sp` = $id; 
    UPDATE `kich_co` SET `mau` = '  $mau4', `size` = '$size4', `hinh` = '$hinh4', `so_luong` = '$soluong4', `tien` = ' $tien4', `giam_gia` = '$giamgia4' WHERE `kich_co`.`id_sp` = $id;";
    pdo_execute($sql);
}
