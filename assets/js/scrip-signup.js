//xác thực email
$(document).ready(function(){
    //kiểm tra tích hợp lệ của email
     $("#inputemail").change(function(){
         let emailPatterm = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@(gmail.com)$/;
         if(emailPatterm.test($(this).val()) == false){
             $("#emailHelp").text("Email không hợp lệ ").css("color","red");
         }
         else{
            $.ajax ({
                url:"checkmail-signup.php",
                type:"post",
                data:{emaill:$(this).val()},
                success:function(res){
                    $("#emailHelp").text(res).css("color","blue");
                }
            })
         }
     })
   })
   $(document).ready(function(){
     $("#inputpassword1").change(function(){
         let passPatterm = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
         if(passPatterm.test($("#inputpassword1").val()) == false){
             $("#pass1Help").text("Mật khẩu tối thiểu tám ký tự, ít nhất một chữ cái viết hoa, chữ cái viết thường và chữ số").css("color","red");
         }else{
            $("#pass1Help").text("Mật khẩu hợp lệ có thể đăng ký").css("color","blue");
         }
     })
   })