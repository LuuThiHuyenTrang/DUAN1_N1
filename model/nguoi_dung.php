<?php
    function loadall_nguoi_dung(){
    $sql=" select * from nguoi_dung order by id desc";
    $listnguoi_dung=pdo_query($sql);
    return $listnguoi_dung;
    }
    function loadone_nguoi_dung($id){
        $sql=" select * from nguoi_dung where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function delete_nguoi_dung($id){
    $sql=" delete from nguoi_dung where id=".$id;
    pdo_execute($sql);
    }
    function insert_nguoi_dung($email,$ten_kh,$mat_khau){
        $sql=" insert into nguoi_dung(email,ten_kh,mat_khau) values('$email','$ten_kh','$mat_khau')";
        pdo_execute($sql);
    }
    function checkuser($ten_kh,$mat_khau){
        $sql=" select * from nguoi_dung where user='".$ten_kh."' AND mat_khau='".$mat_khau."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function checkemail($email){
        $sql=" select * from nguoi_dung where email='".$email."' ";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_nguoi_dung($id, $ten_kh, $hinh, $sdt, $dia_chi, $email, $vaitro,$mat_khau) /////
{
    $sql = "UPDATE nguoi_dung SET user = '$user', mat_khau = '$mat_khau', email = '$email', address = '$address', tel = '$tel', role = '$role' WHERE nguoi_dung.`id` = $id;"; /////
    pdo_execute($sql);
}
        
?>   