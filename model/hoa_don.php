<?php
function listHD()
{
    $sql = "SELECT hoa_don.*, voucher.ten_voucher FROM `hoa_don`JOIN voucher ON hoa_don.id_voucher=voucher.id";
    $listhd = pdo_query($sql);
    return $listhd;
}
function capnhatTT($idhd)
{
    $sql = "UPDATE `hoa_don` SET  `trang_thai` = 'đã xác nhận' WHERE `hoa_don`.`id` = $idhd;
    ";
    pdo_execute($sql);
}
function listHDt()
{
    $sql = "SELECT hoa_don.*, voucher.ten_voucher FROM `hoa_don`JOIN voucher ON hoa_don.id_voucher=voucher.id";
    $listhd = pdo_query($sql);
    return $listhd;
}
function capnhatTTt($idhd)
{
    $sql = "UPDATE `hoa_don` SET  `trang_thai` = 'đã xác nhận' WHERE `hoa_don`.`id` = $idhd;
    ";
    pdo_execute($sql);
}

//comment
