<?php
// trước khi cho người dùng xâm nhập vào bên trong
// phải kiểm tra Thẻ làm việc
session_start();
if(!isset($_SESSION['isSigninOK'])){
    header("location:lognin.php");
}
if($_POST['txtpassword'])//kiểm tra người dùng đã ấn vào nút submit chưa và đã nhập mật khẩu chưa
{   
         $pass1 = $_POST['txtpassword'] ;
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','netflix');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql01 = "SELECT * FROM users WHERE password = '$pass'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        $result = mysqli_query($conn,$sql01);
        if(mysqli_num_rows($result) <= 0){
            echo "Mật khẩu hợp lệ,có thể đăng kí";
        }else
        {
            echo "Mật khẩu Tối thiểu tám ký tự, ít nhất một chữ cái viết hoa, chữ cái viết thường và chữ số";
        }
}
?>