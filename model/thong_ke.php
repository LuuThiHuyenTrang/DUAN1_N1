<?php
function thongkeLoaiSanPham()
{
    $sql = 'SELECT `danh_muc`.`id` ,`danh_muc`.`ten_loai`, count(`san_pham`.`id`) as "so_luong", min(`san_pham`.`tien`) as "gia_min", max(`san_pham`.`tien`) as "gia_max",AVG(`san_pham`.`tien`) as "gia_avg" FROM `san_pham` join `danh_muc` on `danh_muc`.`id`=`san_pham`.`id_dm` group by `danh_muc`.`id`, `danh_muc`.`ten_loai` ORDER BY count(`san_pham`.`id`) desc;';
    $listThongKeLoaiSP = pdo_query($sql);
    return $listThongKeLoaiSP;
}

function thong_ke_tien_danh_muc()
{
    $sql = 'SELECT danh_muc.ten_loai, SUM(kich_co.so_luong * san_pham.tien) AS tong_tien FROM danh_muc INNER JOIN san_pham ON danh_muc.id = san_pham.id_dm INNER JOIN kich_co ON san_pham.id = kich_co.id_sp GROUP BY danh_muc.ten_loai ORDER BY tong_tien DESC;';
    $listThong_ke_tien_danh_muc = pdo_query($sql);
    return $listThong_ke_tien_danh_muc;
}

function thong_ke_thu_nhap()
{
    $sql = "SELECT DATE_FORMAT(hoa_don.ngay_dat, '%m - %Y') AS thang, SUM(hdct.tien) AS tong_tien_ban_duoc FROM hoa_don JOIN hdct ON hoa_don.id = hdct.id_hd where hoa_don.tinh_trang = 'Giao hàng thành công' GROUP BY thang;";
    $list_thu_nhap = pdo_query($sql);
    return $list_thu_nhap;
}
function tong_tien_chi_tieu()
{
    $sql = "SELECT SUM(san_pham.tien * kich_co.so_luong) AS tong_tien FROM san_pham INNER JOIN kich_co ON san_pham.id = kich_co.id_sp;";
    $tong_tien = pdo_query_value($sql);
    return $tong_tien;
}