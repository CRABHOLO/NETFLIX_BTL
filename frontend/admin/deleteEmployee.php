<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_nguoidung = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','danhba_dhtl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM users WHERE id = '$ma_nguoidung'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin.php");
    }else{
        header("location: error.php");
    }
?>