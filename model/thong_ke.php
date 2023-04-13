<?php
function thongkeLoaiSanPham()
{
    $sql = 'SELECT `danh_muc`.`id` ,`danh_muc`.`ten_loai`, count(`san_pham`.`id`) as "so_luong", min(`san_pham`.`tien`) as "gia_min", max(`san_pham`.`tien`) as "gia_max",AVG(`san_pham`.`tien`) as "gia_avg" FROM `san_pham` join `danh_muc` on `danh_muc`.`id`=`san_pham`.`id_dm` group by `danh_muc`.`id`, `danh_muc`.`ten_loai` ORDER BY count(`san_pham`.`id`) desc;';
    $listThongKeLoaiSP = pdo_query($sql);
    return $listThongKeLoaiSP;
}

function thong_ke_tien_danh_muc()
{
    $sql = 'SELECT SUM(sp.tien) AS tong_tien, dm.ten_loai FROM san_pham sp JOIN danh_muc dm ON sp.id_dm = dm.id GROUP BY dm.ten_loai;';
    $listThong_ke_tien_danh_muc = pdo_query($sql);
    return $listThong_ke_tien_danh_muc;
}

function thong_ke_thu_nhap()
{
    $sql = "SELECT DATE_FORMAT(hoa_don.ngay_dat, '%m - %Y') AS thang, SUM(hdct.tien) AS tong_tien_ban_duoc FROM hoa_don JOIN hdct ON hoa_don.id = hdct.id_hd GROUP BY thang;";
    $list_thu_nhap = pdo_query($sql);
    return $list_thu_nhap;
}
