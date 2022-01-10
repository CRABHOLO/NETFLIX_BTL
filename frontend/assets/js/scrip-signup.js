// $(document).ready(function(){
//     //kiem tra tinh hop le cua email
//     $("#email").change(function(){
//         let emailPattern = /^[0-9]{10}(@gmail.com)$/;
//         if(emailPattern.test($(this).val()) == false){
//             $("#emailHelp").text("Email không hợp lệ")
//             $("#emailHelp").css("color","red");
//         }
//     })
// })
//alert ("thuy");


	// $(document).on('click','#btn_submit',function(e){
		
	// 	e.preventDefault();
			
	// 	var name = $('#name').val();
	// 	var email 	 = $('#email').val();
	// 	var password = $('#password').val();
    //     var repassword = $('#repassword').val();
			
	// 	var atpos  = email.indexOf('@');
	// 	var dotpos = email.lastIndexOf('.com');
			
	// 	if(name == ''){ // check username not empty
	// 		alert('please enter username !!'); 
	// 	}
	// 	else if(!/^[a-z A-Z]+$/.test(name)){ // check username allowed capital and small letters 
	// 		alert('name only capital and small letters are allowed !!'); 
	// 	}
	// 	else if(email == ''){ //check email not empty
	// 		alert('please enter email address !!'); 
	// 	}
	// 	else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ //check valid email format
	// 		alert('please enter valid email address !!'); 
	// 	}
	// 	else if(password == ''){ //check password not empty
	// 		alert('please enter password !!'); 
	// 	}
	// 	else if(password.length < 6){ //check password value length six 
	// 		alert('password must be 6 !!');
	// 	} 
    //     else if(password != repassword){
    //         alert('Nhap lai mat khau chua chinh xac');
    //     }
	// 	else{			
	// 		$.ajax({
	// 			url: 'process_signup.php',
	// 			type: 'post',
	// 			data: 
	// 				{newname:name, 
	// 				 newemail:email, 
	// 				 newpassword:password,
    //                  newrepassword:repassword
	// 				},
	// 			success: function(response){
	// 				$('#message').html(response);
	// 			}
	// 		});
				
	// 		$('#registraion_form')[0].reset();
	// 	}
	// });

      var fullname = document.getElementById("fullname");
	  var password1 = document.getElementById("password1");
      var password2 = document.getElementById("password2");
      var email = document.getElementById("email");
      var submit = document.getElementById("submit");

      var fullnameerror = document.getElementById("fullnameerror");
      //var passworderror = document.getElementById("passworderror");
      var password1error =  document.getElementById("password1error");
      var password2error1 =  document.getElementById("password2error1");
     
      var emailerror =  document.getElementById("emailerror");
      //var phoneerror =  document.getElementById("phoneerror");

	  var regFullname = /^[A-Za-z ]+$/;
      var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      // var regPhone =  /^\d{10}$/;
      var regPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/

      //var errorPasswordDefault = (passworderror.innerText || passworderror.textContent);

      fullname.onchange = function(){
        checkfullname();
      }

       password1.onchange = function(){
        checkNewpassword();
      }

      password2.onchange = function(){
        checkNewpassword2();
      }

      email.onchange = function(){
        checkemail();
      }
	  submit.onclick = function(){
        if(fullname.value.toString().length <= 0){
          alert("Bạn chưa nhập họ tên");
          checkfullname();
          return false;
        }

        if(email.value.toString().length <= 0){
          alert("Bạn chưa nhập email");
          checkemail();
          return false;
        }

		

        var validNewPass1 = true;
        var validNewPass2 = true;

        if(password1.value.toString().length > 0 || password2.value.toString().length > 0){
          validNewPass1 = checkNewpassword();
          validNewPass2 = checkNewpassword2();
        }
        var validFullname = checkfullname();
        var validEmail = checkemail();

        if( validFullname && validNewPass1 && validNewPass2 && validEmail){
          return true;
        }
        return false;
      }
      function checkNewpassword(){
        if(!regPassword.test(password1.value)){
          password1error.style.visibility = 'visible';
          password1error.style.height = 'auto';
          return false;
        }
        else{
          password1error.style.visibility = 'hidden';
          password1error.style.height = '0px';
          
          if(password2.value.toString().length > 0){
            if(password2.value.localeCompare(password1.value) == 0){
              password2error1.style.visibility = 'hidden';
              password2error1.style.height = '0px';
              return true;
            }
            else{
              password2error1.innerHTML = "Mật khẩu không khớp";
              password2error1.style.visibility = 'visible';
              password2error1.style.height = 'auto';
              return false;
            }
          }   
          return true;
        }
      }


