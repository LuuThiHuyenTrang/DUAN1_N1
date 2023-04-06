<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=duan1;',
    'root',
    ''
);


$email = $_POST['email'];
$pass = $_POST['pass'];
$errors = '';
if ($email == '') {
    $errors = 'Email không được để trống!.';
}
if ($pass == '') {
    $errors = 'Password không được để trống!.';
}
if ($errors != '') {
    header("location: login.php");
} else {
    $sql = "SELECT * FROM nguoi_dung WHERE email='$email' AND mat_khau='$pass'";
    // var_dump($sql);
    $statement = $connect->prepare($sql);
    $statement->execute();
    $loginUser = $statement->fetch();
    if ($loginUser['email'] !== $email) {
        $errors = 'Email không tồn tại!';
        header("location: signup_and_login.php?errors=$errors");
        // } else if (password_verify($pass, $loginUser['pass']) == false) {
        //     $errors = 'Mật khẩu không chính xác!';
        //     header("location: dangnhap.php?errors=$errors");
    } else if ($loginUser['mat_khau'] !== $pass && $loginUser['email'] == $email) {
        $errors = 'Mật khẩu không chính xác!';
        header("location: signup_and_login.php?errors=$errors");
    } else {
        session_start();
        $_SESSION['user'] = $loginUser;

        header("location: ./../../index.php");
    }
}
