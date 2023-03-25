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

function them_hoa_don($tenkh, $email, $sdt, $diachi, $ngaydat, $pttt, $tongtien)
{
    $sql = "INSERT INTO `hoa_don` (`id`, `ten_kh`, `sdt`, `email`, `dia_chi`, `id_voucher`, `tong_tien`, `trang_thai`, `ngay_dat`, `pttt`) VALUES (NULL, '$tenkh', '$sdt', '$email', '$diachi', '1', '$tongtien', 'Chưa xác nhận', '$ngaydat', '$pttt');";
    pdo_execute($sql);
}

function lay_id_hoa_don_vua_them()
{
    $sql = "SELECT MAX(id) as id FROM `hoa_don`;";
    $idhd = pdo_query_value($sql);
    return $idhd;
}

function them_hoa_don_chi_tiet($id_kich_co, $tien, $idhd, $soluong)
{
    $sql = "INSERT INTO `hdct` (`id`, `id_kich_co`, `tien`, `so_luong`, `id_hd`) VALUES (NULL, '$id_kich_co', '$tien', '$soluong', '$idhd');";
    pdo_execute($sql);
}
