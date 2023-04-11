<?php
function thongkeLoaiSanPham()
{
    $sql = 'SELECT `danh_muc`.`id` ,`danh_muc`.`ten_loai`, count(`san_pham`.`id`) as "so_luong", min(`san_pham`.`tien`) as "gia_min", max(`san_pham`.`tien`) as "gia_max",AVG(`san_pham`.`tien`) as "gia_avg" FROM `san_pham` join `danh_muc` on `danh_muc`.`id`=`san_pham`.`id_dm` group by `danh_muc`.`id`, `danh_muc`.`ten_loai` ORDER BY count(`san_pham`.`id`) desc;';
    $listThongKeLoaiSP = pdo_query($sql);
    return $listThongKeLoaiSP;
}
