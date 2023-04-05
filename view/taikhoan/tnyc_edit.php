<?php
try {
    $connect = new PDO(
        'mysql:host=127.0.0.1;dbname=duan1;',
        'root',
        ''
    );
    // session_start();
    $id=$_POST['id'];
    $name = $_POST['ten_kh'];
    $sdt = $_POST['tel'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $avt = $_FILES['hinh']['name'];
    if ($_FILES['hinh']['name'] == "") {
        $sql = "UPDATE `nguoi_dung` SET `ten_kh` = '$name', `sdt` = '$sdt', `email` = '$email', `mat_khau` = '$password', `dia_chi` = '$address' WHERE `nguoi_dung`.`id` = $id";
        //nếu không tải ảnh lên thì không cập nhật ảnh
    } else {
        move_uploaded_file($_FILES['hinh']['tmp_name'], '../../image/' . $avt);
        $sql = "UPDATE `nguoi_dung` SET `ten_kh` = '$name', `hinh` = '$avt', `sdt` = '$sdt', `email` = '$email', `mat_khau` = '$password', `dia_chi` = '$address' WHERE `nguoi_dung`.`id` = $id";
        $_SESSION['hinh'] = $avt;
    }
        $statement = $connect->prepare($sql);
        $result = $statement->execute();
    if ($result) {
        $_SESSION['name'] = $name;

        $mess = 'Cập nhật thông tin người dùng thành công';
        header("location: /DUAN1_N1/view/taikhoan/edit_taikhoan.php?mess=$mess");
    } else {
        $mess = 'Lỗi web';
        header("location: ../DUAN1_N1/view/taikhoan/edit_taikhoan.php?mess=$mess");
    }
} catch (PDOException $e) {
    // echo 'ajja';
    // echo $sql . '<br>' . $e->getMessage();
}
