<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtTenPhim'])){
        $TenPhim = $_POST['txtTenPhim'];
    }

    $TrangThai = $_POST['txtTrangThai'];
    $TacGia = $_POST['txtTacGia'];
    $DaoDien = $_POST['txtDaoDien'];
    $LoaiPhim = $_POST['cboLoaiPhim'];
    $KieuPhim = $_POST['cbokieuphim'];
    $Nam = $_POST['txtNam'];
    $Anh = $_POST['txtAnh'];
    $NoiDung = $_POST['txtNoiDung'];
    $ThoiLuong = $_POST['txtThoiLuong'];


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','netflix');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    
    $sql = "INSERT INTO film (name, status, director, actor, category_id, type_movie, year, image, description, duration) VALUES ('$TenPhim','$TrangThai','$TacGia','$DaoDien','$LoaiPhim', '$KieuPhim', '$Nam', '$Anh', '$NoiDung', '$ThoiLuong')";
    // echo $sql;
    echo $image; 
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        echo "Lỗi"; //Chuyển hướng lỗi
    }else{
        header("location: add-film.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>