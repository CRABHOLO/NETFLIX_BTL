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