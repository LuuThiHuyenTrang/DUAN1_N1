<?php

// Lấy thông tin từ form
$name = $_POST['name'];
$tel = $_POST['tel'];
$addres = $_POST['addres'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$hinh = $_FILES['hinh']['name'];

move_uploaded_file($_FILES['hinh']['tmp_name'], "/DUAN1_N1/image/" . $hinh);
// Tạo kết nối đến database
$servername = "localhost";
$dbname = "duan1";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thực thi câu lệnh SQL để chèn dữ liệu vào bảng người dùng
$sql = "INSERT INTO nguoi_dung (ten_kh, sdt, email, mat_khau, dia_chi, hinh) VALUES ('$name', '$tel', '$email', '$pass', '$addres', '$hinh')";

if ($conn->query($sql) === TRUE) {
    echo "Tạo tài khoản thành công";
    $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để sử dụng các chức năng";
    header('location:/DUAN1_N1/index.php?duong_link=sign');
} else {
    $thongbao = "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
