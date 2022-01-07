<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password  = $_POST['password'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','netflix');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) <= 0){  // kiểm tra email chưa được dùng
            // CẤP THẺ LÀM VIỆC
            $_SESSION['isLoginOK'] = $email;
            header("location: home.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
        
    }else{
        header("location:login.php");
    }
?>

<?php
if(isset($_POST['btnSignIn']) && isset($_POST['txtUser'])){
    require("config.php");
    $email = $_POST['txtUser'];
    $pass = $_POST['txtPass'];
    $sql = "SELECT * FROM db_nguoidung WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    echo'Khớp'
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pass_hash = $row['matkhau'];

        if(password_verify($pass, $pass_hash)){
            $_SESSION['isLogninOK'] = $email;
            header('location: admin.php');
        }else{
            $error = 'Mật khẩu không chính xác';
            header("locaation: erro.php?error=$error");
        }
    }else{
        $error = 'Tài khoản không tồn tại';
        header("location: error.php?error=$error");
    }
}

?>