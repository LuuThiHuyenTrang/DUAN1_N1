<?php
function loadall_nguoi_dung()
{
    $sql = " select * from nguoi_dung order by id desc";
    $listnguoi_dung = pdo_query($sql);
    return $listnguoi_dung;
}
function loadone_nguoi_dung($id)
{
    $sql = " select * from nguoi_dung where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function delete_nguoi_dung($id)
{
    $sql = " delete from nguoi_dung where id=" . $id;
    pdo_execute($sql);
}
function capquyennguoidung($id)
{
    $sql = "UPDATE `nguoi_dung` SET  `vai_tro` = '1' WHERE `nguoi_dung`.`id` = $id;
    ";
    pdo_execute($sql);
}

function check_nguoi_dung($ten_kh, $mat_khau)
{
    $sql = " select * from nguoi_dung where user='" . $ten_kh . "' AND mat_khau='" . $mat_khau . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = " select * from nguoi_dung where email='" . $email . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function xoanguoidung($id)
{
    $sql1 = "DELETE FROM danh_gia WHERE `danh_gia`.`id_nd` = $id";
    $sql2 = "DELETE FROM binh_luan WHERE `binh_luan`.`id_nd` = $id";
    $sql3 = "DELETE FROM nguoi_dung WHERE `nguoi_dung`.`id` = $id";

    pdo_execute($sql1);
    pdo_execute($sql2);
    pdo_execute($sql3);
}
