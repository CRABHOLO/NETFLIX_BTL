<?php
    
    $ma_film = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','netflix');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM film WHERE id = '$ma_film'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: film.php"); 
    }else{
        echo 'Lỗi'; 
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>