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
