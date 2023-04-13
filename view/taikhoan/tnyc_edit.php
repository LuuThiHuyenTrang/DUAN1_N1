<?php
try {
    $connect = new PDO(
        'mysql:host=127.0.0.1;dbname=duan1;',
        'root',
        ''
    );

//vì đây là làm việc với các file trong forder taikhoan nên phải dùng header để quay lại các trang
//nếu muốn dùng include thì phải thêm case => case include về file muốn quay về

        if($_POST['ten_kh'] == null){
        $mess = "Bạn không được để trống tên người dùng";
        header("location: /DUAN1_N1/view/taikhoan/edit_taikhoan.php?mess=$mess");
    }else if ($_FILES['hinh']['name'] == null) {
        $mess = "Không để trống ảnh";
        header("location: /DUAN1_N1/view/taikhoan/edit_taikhoan.php?mess=$mess");
    }else if ($_POST['tel'] == null){
        $mess = "Không để trống số điện thoại";
        header("location: /DUAN1_N1/view/taikhoan/edit_taikhoan.php?mess=$mess");
    }else if ($_POST['address'] == null){
        $mess = "Không để trống địa chỉ";
        header("location: /DUAN1_N1/view/taikhoan/edit_taikhoan.php?mess=$mess");
    }else if ($_POST['email'] == null){
        $mess = "Không để trống email";
        header("location: /DUAN1_N1/view/taikhoan/edit_taikhoan.php?mess=$mess");
    }else {
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
    }}
} catch (PDOException $e) {
    // echo 'ajja';
    // echo $sql . '<br>' . $e->getMessage();
}

    // $id = $_POST['id'];

    // $name = test_input($_POST["ten_kh"]);
    // if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    // $nameErr = "Không để trống tên người dùng";
    // }
    // else if($_POST['ten_kh'] == null){
    //     $mess = "Không để trống tên người dùng";
    //     include "taikhoan/edit_taikhoan.php";
    // }else if ($_FILES['hinh']['name'] == null) {
    //     $mess = "Không để trống ảnh";
    //     include "taikhoan/edit_taikhoan.php";
    // }else if ($_POST['tel'] == null){
    //     $mess = "Không để trống số điện thoại";
    //     include "taikhoan/edit_taikhoan.php";
    // }else if ($_POST['address'] == null){
    //     $mess = "Không để trống địa chỉ";
    //     include "taikhoan/edit_taikhoan.php";
    //     // $email = test_input($_POST["email"]);
    // }else (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $emailErr = "Invalid email format"
    // }


    // }else if ($_POST['email'] == null){
    //     $mess = "Không để trống email";
    //     include "taikhoan/edit_taikhoan.php";
    // }
