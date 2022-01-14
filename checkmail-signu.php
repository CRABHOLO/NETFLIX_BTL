<?php
if($_POST['emaill'])
{   
        $email = $_POST['emaill'];
        // Bước 01: Kết nối Database Server
        require 'config.php';
        // Bước 02: Thực hiện truy vấn
        $sql01 = "SELECT * FROM users WHERE email = '$email'";
        
        
        $result = mysqli_query($conn,$sql01);
        if(mysqli_num_rows($result) <= 0){
            echo "Email hợp lệ,có thể đăng kí";
        }else
        {
            echo "Email đã được đăng kí,vui lòng kiểm tra hộp thư và kích hoạt tài khoản";
        }
}
?>