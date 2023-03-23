<?php

function insert_binhluan($id,$noi_dung,$ngay,$id_sp,$id_nd){
    $sql="insert into binhluan(id,noidung,ngay,id_sp,id_nd) values('$id','$noi_dung','$ngay','$id_sp','$id_nd')";
    pdo_execute($sql);
} 
function delete_binhluan($id){
    $sql=" delete from binhluan where id=".$id;
    pdo_execute($sql);
}
function loadall_binhluan($id_sp){
    $sql=" select * from binhluan where 1";
    if ($id_sp>0) $sql.=" AND id_sp='".$id_sp."'";
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
?>