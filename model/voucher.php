<?php

function tatcavoucher()
{
    $sql = "SELECT * FROM `voucher`";
    $listvc = pdo_query($sql);
    return $listvc;
}
function one_voucher($id)
{
    $sql = "SELECT * FROM `voucher` WHERE `id` = '$id'";
    $one_vc = pdo_query_one($sql);
    return $one_vc;
}
function addvc($tenvoucher, $mota, $mucgiamgia, $dieukien, $soluong, $ngaytao, $hsd)
{
    $trang = "INSERT INTO `voucher` (`id`, `ten_voucher`, `mo_ta`, `muc_giam_gia`, `dieu_kien`, `so_luong`, `ngay_tao`, `hsd`) 
    VALUES (NULL, '$tenvoucher', '$mota', '$mucgiamgia', '$dieukien', '$soluong', '$ngaytao', '$hsd');";
    pdo_execute($trang);
}
function editvc($id, $tenvoucher, $mota, $mucgiamgia, $dieukien, $soluong, $ngaytao, $hsd)
{
    $linh = "UPDATE `voucher` SET `ten_voucher` = '$tenvoucher', `mo_ta` = '$mota', `muc_giam_gia` = '$mucgiamgia', `dieu_kien` = '$dieukien', `so_luong` = '$soluong', `ngay_tao` = '$ngaytao', `hsd` = '$hsd' WHERE `voucher`.`id` = $id;";
    pdo_execute($linh);
}


function id_hoadon_can_xoa($id)
{
    $sql = "SELECT `id` FROM `hoa_don` where `id_voucher` = $id";
    $listhd = pdo_query($sql);
    return $listhd;
}
function xoavc($id)
{
    $sql = "DELETE FROM hoa_don WHERE `hoa_don`.`id_voucher` = $id";
    $sql2 = "DELETE FROM voucher WHERE `voucher`.`id` = $id";

    pdo_execute($sql);
    pdo_execute($sql2);
}
