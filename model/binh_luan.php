<?php
function hienthiblcuaonesp($id)
{
    $sql = "SELECT binh_luan.*, nguoi_dung.ten_kh FROM `binh_luan`JOIN nguoi_dung ON binh_luan.id_nd=nguoi_dung.id WHERE`binh_luan`.`id_sp`=$id;";
    $listbl = pdo_query($sql);
    return $listbl;
}
function addbl($noidung, $ngay, $idsp, $idnd)
{
    $sql = "INSERT INTO `binh_luan` (`id`, `noi_dung`, `ngay`, `id_sp`, `id_nd`) 
    VALUES (NULL, '$noidung', '$ngay', '$idsp', '$idnd');";
    pdo_execute($sql);
}
function tonghopbl($id)
{
    $sql = "SELECT `san_pham`.`id`, `san_pham`.`ten_sp`, count(binh_luan.id) AS `So_binh_luan`, MIN(binh_luan.ngay) AS `Ngay_bl_cu_nhat`, MAX(binh_luan.ngay) AS `Ngay_bl_moi_nhat` FROM `san_pham` JOIN `binh_luan` ON `san_pham`.`id`= `binh_luan`.`id_sp` where `san_pham`.`id`=$id;
    ";
    $thbl = pdo_query_one($sql);
    return $thbl;
}
function xoabl($id)
{
    $sql = "DELETE FROM binh_luan WHERE `binh_luan`.`id` = $id";
    pdo_execute($sql);
}
function tongluotxemnike()
{
    $sql = "SELECT SUM(luot_xem) FROM `san_pham` WHERE id_dm = 1";
    pdo_execute($sql);
    $nike = pdo_query_value($sql); //lấy 1 giá trị
    return $nike;
}
function tongluotxemadidas()
{
    $sql = "SELECT SUM(luot_xem) FROM `san_pham` WHERE id_dm = 2";
    $adidas = pdo_query_value($sql); //lấy 1 giá trị
    return $adidas;
}
function tongluotbanadidas()
{
    $sql = "SELECT SUM(luot_ban) FROM `san_pham` WHERE id_dm = 2";
    $banadidas = pdo_query_value($sql); //lấy 1 giá trị
    return $banadidas;
}
function tongluotbannike()
{
    $sql = "SELECT SUM(luot_ban) FROM `san_pham` WHERE id_dm = 1";
    $bannike = pdo_query_value($sql); //lấy 1 giá trị
    return $bannike;
}
