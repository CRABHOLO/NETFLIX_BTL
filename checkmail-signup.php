<?php
if($_POST['emaill'])//kiểm tra người dùng nhấp vào nút submit chưa và đã nhập email chưa
{   
        $email = $_POST['emaill'];
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','netflix');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql01 = "SELECT * FROM users WHERE email = '$email'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào form
        $result = mysqli_query($conn,$sql01);
        if(mysqli_num_rows($result) <= 0){
            echo "Email hợp lệ,có thể đăng kí";
        }else
        {
            echo "Email đã được đăng kí,vui lòng kiểm tra hộp thư và kích hoạt tài khoản";
        }
}
?>