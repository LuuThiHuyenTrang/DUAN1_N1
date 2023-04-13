<?php
function insertProduct($tensp, $ngay, $mota, $loai, $hinh0, $tien)
{
    $pro = "INSERT INTO `san_pham` (`id`, `ten_sp`, `hinh`,`tien`, `mo_ta`, `ngay_nhap`, `id_dm`, `trang_thai`) VALUES (NULL, '$tensp', '$hinh0', '$tien', '$mota', '$ngay', '$loai','1');";
    pdo_execute($pro);
}

function insertKichCo($id_sp, $mau1, $size1, $soluong1, $mau2, $size2, $soluong2, $mau3, $size3, $soluong3, $mau4, $size4, $soluong4, $hinh1, $hinh2, $hinh3, $hinh4)
{
    if ($mau2 == null) {
        $kich_co = "INSERT INTO `kich_co` (`id`, `mau`, `size`, `hinh`, `id_sp`, `so_luong`) 
        VALUES (NULL, '$mau1', '$size1', '$hinh1', '$id_sp', '$soluong1'');";
    } elseif ($mau3 == null) {

        $kich_co = "INSERT INTO `kich_co` (`id`, `mau`, `size`, `hinh`, `id_sp`, `so_luong`) VALUES (NULL, '$mau1', '$size1', '$hinh1', '$id_sp', '$soluong1'),
        (NULL, '$mau2', '$size2', '$hinh2', '$id_sp', '$soluong2');";
    } elseif ($mau4 == null) {

        $kich_co = "INSERT INTO `kich_co` (`id`, `mau`, `size`, `hinh`, `id_sp`, `so_luong`) VALUES (NULL, '$mau1', '$size1', '$hinh1', '$id_sp', '$soluong1'),
        (NULL, '$mau2', '$size2', '$hinh2', '$id_sp', '$soluong2'),
        (NULL, '$mau3', '$size3', '$hinh3', '$id_sp', '$soluong3');";
    } else {

        $kich_co = "INSERT INTO `kich_co` (`id`, `mau`, `size`, `hinh`, `id_sp`, `so_luong`) VALUES (NULL, '$mau1', '$size1', '$hinh1', '$id_sp', '$soluong1'),
        (NULL, '$mau2', '$size2', '$hinh2', '$id_sp', '$soluong2'),
        (NULL, '$mau3', '$size3', '$hinh3', '$id_sp', '$soluong3'),    
        (NULL, '$mau4', '$size4', '$hinh4', '$id_sp', '$soluong4');";
    }

    pdo_execute($kich_co); //chỉ thực thi câu lệnh thì không cần return
}
function spAll_Desc()
{
    $sql = "SELECT sp.*, SUM(kc.so_luong) AS tong_so_luong FROM san_pham sp LEFT JOIN kich_co kc ON sp.id = kc.id_sp where sp.trang_thai != '0' GROUP BY sp.id ORDER BY id desc;";
    $listsp = pdo_query($sql);
    return $listsp; //cần in ra tất cả sản phẩm thì phải return
}
function spAll_Asc()
{
    $sql = "SELECT sp.*, SUM(kc.so_luong) AS tong_so_luong FROM san_pham sp LEFT JOIN kich_co kc ON sp.id = kc.id_sp where sp.trang_thai != '0'  GROUP BY sp.id ORDER BY id Asc;";
    $listsp = pdo_query($sql);
    return $listsp; //cần in ra tất cả sản phẩm thì phải return
}

function timkiemten($ten_sp)
{
    $sql = "SELECT * FROM `san_pham`WHERE trang_thai != '0' and ten_sp like '%$ten_sp%' ORDER BY id desc;";
    $tkiem = pdo_query($sql);
    return $tkiem;
}

function locdanhmuc($id)
{
    $sql = "SELECT * FROM `san_pham`WHERE trang_thai != '0' and id_dm = $id ORDER BY id desc;";
    $loc = pdo_query($sql);
    return $loc;
}

function spOne($idsp)
{
    $sql = "SELECT danh_muc.ten_loai,san_pham.* FROM `san_pham` JOIN danh_muc ON san_pham.id_dm = danh_muc.id where san_pham.id = $idsp";
    $spOne = pdo_query_one($sql);
    return $spOne;
}
function kich_co_sp_one($idsp)
{
    $sql = "SELECT * FROM kich_co where id_sp = $idsp";
    $kich_co_sp_one = pdo_query($sql);
    return $kich_co_sp_one;
}
function so_luong_sp($id)
{
    $sql = "SELECT SUM(so_luong) as `soluong` FROM `kich_co` WHERE id_sp = $id;";
    $soluong = pdo_query_one($sql);
    return $soluong['soluong'];
}

function luutruSp($id)
{
    $linh = "UPDATE `san_pham` SET `trang_thai` = '0' WHERE `san_pham`.`id` = $id;
    ";
    pdo_execute($linh);
}
function updateSp($idsp, $tensp, $ngay, $mota, $loai, $hinh0, $tien)
{
    if ($hinh0 == null) {
        $tam = "UPDATE `san_pham` SET `tien` = '$tien', `ten_sp` = '$tensp',`mo_ta` = '$mota', `ngay_nhap` = '$ngay', `id_dm` = '$loai' WHERE `san_pham`.`id` = $idsp;";
    } else {
        $tam = "UPDATE `san_pham` SET `tien` = '$tien',`ten_sp` = '$tensp', `hinh` = '$hinh0', `mo_ta` = '$mota', `ngay_nhap` = '$ngay', `id_dm` = '$loai' WHERE `san_pham`.`id` = $idsp;";
    }
    pdo_execute($tam);
}
function inxemban($id)
{
    $sql = "SELECT `luotxem`, `luotban` FROM `san_pham` WHERE  san_pham.id = $id";
    $xemban = pdo_query_one($sql);
    return $xemban;
}

function update_rateing($id)
{
    $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

    if ($pageWasRefreshed) {
        $update = "UPDATE san_pham SET luotxem = luotxem + 1 WHERE id = $id";
        pdo_execute($update);
    }
}
function tru_so_luong($so_luong, $id_kich_co)
{
    $sql = "UPDATE `kich_co` SET so_luong = so_luong - $so_luong WHERE id = $id_kich_co;";
    pdo_execute($sql);
}
