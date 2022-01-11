<?php
    // trước khi cho người dùng xâm nhập vào bên trong
    // phải kiểm tra Thẻ làm việc
    session_start();
    if(!isset($_SESSION['isSigninOK'])){
        header("location:signup.php");
    }
?>
<?php
if($_POST['txtemail'])//kiểm tra người dùng nhấp vào nút submit chưa và đã nhập email chưa
{   // header("location:signup.php");
        //coi dữ liệu là hợp lệ
        $email = $_POST['txtemail'];
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','netflix');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql01 = "SELECT * FROM users WHERE email = '$email'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        $result = mysqli_query($conn,$sql01);
        if(mysqli_num_rows($result) <= 0){
            echo "Email hợp lệ, bạn có thể đăng kí";
        }else
        {
            echo "Email đã được đăng kí,vui lòng kiểm tra hộp thư và kích hoạt đăng kí";
        }
}
?>