$(document).ready(function(){
    //kiem tra tinh hop le cua email
    $("#email").change(function(){
        let emailPattern = /^[0-9]{10}(@gmail.com)$/;
        if(emailPattern.test($this).val()) == false){
            $("#emailHelp").text("Email không hợp lệ")
            $("emailHelp").css("color","red");
        }
    })
})
//alert ("thuy");