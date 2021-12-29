<?php
include 'config.php';

if(isset($_POST['submit']) &&  $_POST["firstname"] != '' &&  $_POST["firstname"] != ''&&  $_POST["lastname"] != ''&&  $_POST["email"] != '' &&  $_POST["password"] != ''){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$password 		= md5($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE email='$email' ";
    $old = mysqli_query($conn,$sql);
    if(mysqli_num_rows($old) > 0) {
        $_SESSION["thongbao"] = "Tài khoản đã tồn tại";
        header("location:signup.php");
        die();
    }

    $sql = "INSERT INTO users (firstname, lastname, email, password ) VALUES('$firstname', '$lastname', '$email', '$password' )";
	mysqli_query($conn,$sql);
    $_SESSION["thongbao"] = "Đăng ký thành công";
	header("location:home.php");
}else{
    $_SESSION["thongbao"] = "Vui lòng nhập thông tin";
	header("location:signup.php");
}
?>