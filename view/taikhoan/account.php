<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";

// Tạo kết nối đến database
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


?>