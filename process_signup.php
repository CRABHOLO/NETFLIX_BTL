<?php
  require 'config.php';// kết nối tới csdl

if(isset($_POST['submit'])  ){
   
 ////kiểm tra người dùng nhấp vào nút submit chưa và đã nhập email chưa
	$fullname 		    = $_POST['txtfullname']; //coi dữ liệu là hợp lệ
	$email 			= $_POST['txtemail'];
	$pass1 		= $_POST['txtpassword'];
   
    // Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * FROM users WHERE email = '$email'  ";
    $result01 = mysqli_query($conn,$sql01);
    $result01 = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($result01) > 0){
        //$error = "Bạn nhập thông tin Email đã tồn tại";
        echo "Tài khoản $email đã tồn tại";
        header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }else//Kiểm tra email chưa được dùng (mysqli_num_rows($result01) <= 0)
    {
        $token = md5($_POST['txtemail']).rand(10,9999);//sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
        $pass_md5 = md5($pass1);
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        //ra lệnh lưu vào CSDL
        $sql02 = "INSERT INTO users (fullname, email ,password,email_verification_link) VALUES ('$fullname','$email','$pass_hash','$token')";
        $result02 = mysqli_query($conn,$sql02);
        //Sau khi lưu xong chúng ta cần gửi tới email đăng kí đường link tới website của chúng ta 
        //yêu cầu người dùng kích hoạt ;biến link sẽ được gửi vào email

        $link = "<a href='localhost/BTL/frontend/activation.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
        include "send-mail.php";
        if(sendEmailForAccountActive($email,$link)){
            echo "vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản";
        }
        else{
            echo "Xin lỗi email chưa được gửi đi .Vui lòng kiểm tra lại thông tin đăng kí tài khoản";
        }
          
    }
      

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
}
?>