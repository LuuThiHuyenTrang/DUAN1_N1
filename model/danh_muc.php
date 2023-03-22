<?php
function tatcaloaisanpham()
{
     $sql = "SELECT * FROM `danh_muc` ORDER BY id desc;";
     $listdm = pdo_query($sql); //in ra tất
     return $listdm;
}
function themdanhmuc($tenloai, $logo, $tenTH)
{
     $sql = "INSERT INTO `danh_muc` (`id`, `ten_loai`, `ten_thuong_hieu`, `logo`)
      VALUES (NULL, '$tenloai', '$tenTH', '$logo');";
     pdo_execute($sql);
}
function onedanhmuc($id)
{
     $tam = "SELECT * FROM danh_muc where id = $id";
     $one_dm = pdo_query_one($tam);
     return $one_dm;
}

function editdanhmuc($tenloai, $logo, $tenTH, $id)
{
     if ($logo == null) {
          $trang = "UPDATE `danh_muc` SET `ten_loai` = '$tenloai', `ten_thuong_hieu` = '$tenTH' WHERE `danh_muc`.`id` = $id;
     ";
     } else {
          $trang = "UPDATE `danh_muc` SET `ten_loai` = '$tenloai', `ten_thuong_hieu` = '$tenTH', `logo` = '$logo' WHERE `danh_muc`.`id` = $id;
     ";
     }

     pdo_execute($trang);
}
function deletedanhmuc($id)
{
     $sanpham = "UPDATE san_pham SET `san_pham`.`id_dm` = 99 WHERE `san_pham`.`id_dm` = $id";
     $danhmuc = "DELETE FROM danh_muc WHERE `danh_muc`.`id` = $id";

     pdo_execute($sanpham);
     pdo_execute($danhmuc);
}
