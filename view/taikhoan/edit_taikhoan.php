<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=duan1;',
    'root',
    ''
);

// include 'edit_taikhoan.php';

session_start();

$thongbao = isset($_GET['thongbao']) ? $_GET['thongbao'] : '';

$user = $_SESSION['user'];
$sql = 'SELECT * FROM nguoi_dung WHERE id = ' . $user['id'];
// var_dump($_SESSION['user']);
$statement1 = $connect->prepare($sql);
$statement1->execute();
$userOne = $statement1->fetch();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<style>
    .button{
        color: black;
    }
</style>

<body>
    <h2 style="color: blue; font-weight: 500;"><?= isset($mess) ? $mess : ""; ?></h2>

    <h3 class="m-5" style="text-align: center;">Chỉnh sửa thông tin tài khoản</h3>
    <form action="/DUAN1_N1/view/taikhoan/tnyc_edit.php" method="POST" style="width: 400px; margin: 0 auto" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input type="text" value="<?= $userOne['id'] ?>"  name='id' hidden>
            <input  value="<?= $userOne['ten_kh'] ?>" required type="text" name="ten_kh" class="form-control" id="" aria-describedby="" placeholder="Tên đăng nhập">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input type="file" name="hinh" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input value="<?= $userOne['sdt'] ?>"  required type="phone" name="tel" class="form-control" id="" aria-describedby="" placeholder="Số điện thoại">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input value="<?= $userOne['dia_chi'] ?>" required type="text" name="address" class="form-control" id="" aria-describedby="" placeholder="Địa chỉ">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input value="<?= $userOne['email'] ?>"  required type="email" name="email" class="form-control" id="" aria-describedby="" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input value="<?= $userOne['mat_khau'] ?>" required type="password" name="pass" class="form-control" id="" aria-describedby="" placeholder="Mật khẩu">
        </div>

        <button onclick="return confirm('Bạn có chắc muốn sửa thông tin này không?')" type="submit" name="sua" class="btn btn-primary">Sửa</button>
        <div style="color: red;">
            <!-- <?php echo $errors ?> -->
        </div>
        <input class="btn btn-link" type="reset" value="Nhập lại">
        <a href="/DUAN1_N1/index.php" class="button">Quay lại trang chủ</a>


    </form>

    <!-- <p style="color: red">
        <?php echo $thongbao; ?>
    </p> -->
</body>

</html>