<?php
require 'config.php'; // kết nối tới csdl

if(isset($_POST['submit'])  &&  $_POST["name"] != '' &&  $_POST["email"] != '' &&  $_POST["password"] != ''){
 ////kiểm tra người dùng nhấp vào nút submit chưa và đã nhập email chưa
	$name 		= $_POST['name']; //coi dữ liệu là hợp lệ
	$email 			= $_POST['email'];
	$password 		= $_POST['password'];
    
    // Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * FROM users WHERE email = '$email'  ";
    $result01 = mysqli_query($conn,$sql01);
    $result01 = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($result01) > 0){
        $error = "Bạn nhập thông tin Email đã tồn tại";
        header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }else//Kiểm tra email chưa được dùng (mysqli_num_rows($result01) <= 0)
    {
        $token = md5($_POST['email']).rand(10,9999);//sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
        $pass_md5 = md5($password);
        $pass_hash = password_hash($password,PASSWORD_DEFAULT );
        //ra lệnh lưu vào CSDL
        $sql02 = "INSERT INTO users (name, email ,password,email_verification_link) VALUES ('$name','$email','$pass_hash','$token')";
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
            //Quá trình gửi email
            // require_once('phpmail/PHPMailerAutoload.php');
            // $mail = new PHPMailer();
            // $mail->CharSet =  "utf-8";
            // $mail->IsSMTP();
            // // enable SMTP authentication
            // $mail->SMTPAuth = true;                  
            // // GMAIL username
            // $mail->Username = "your_email_id@gmail.com";
            // // GMAIL password
            // $mail->Password = "your_gmail_password";
            // $mail->SMTPSecure = "ssl";  
            // // sets GMAIL as the SMTP server
            // $mail->Host = "smtp.gmail.com";
            // // set the SMTP port for the GMAIL server
            // $mail->Port = "465";
            // $mail->From='your_gmail_id@gmail.com';
            // $mail->FromName='your_name';
            // $mail->AddAddress('reciever_email_id', 'reciever_name');
            // $mail->Subject  =  'Reset Password';
            // $mail->IsHTML(true);
            // $mail->Body    = 'Click On This Link to Verify Email '.$link.'';
            // if($mail->Send())
            // {
            //     echo "Check Your Email box and Click on the email verification link.";
            // }
            // else
            // {
            // echo "Mail Error - >".$mail->ErrorInfo;
            // }
    }
        // else
        // {
        // echo "You have already registered with us. Check Your email box and verify email.";
        // }
        //  if ( $result02 == TRUE){
        //     header("location: signin.php");
        //  }
        //  else{
        //     $error = "Kiểm tra lại";
        //     header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        //  }
        

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
}
?>