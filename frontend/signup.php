<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="vi" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Signup_Netflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/owl.carousel.js" type="text/javascript"></script>
    <script src="assets/js/jwplayer.js"></script>
    <link rel="stylesheet" href="assets/css/style_signup.css">
    <!-- <script src="assets/js/scrip-signup.js"></script> -->
</head>
 
<body class="bg__wrap">
    <nav class="main_nav">
        <a href="#" class="navbar-brand">
            <img src="assets/images/logo.jpg" alt="net/logo" class="img-fluid">
        </a>
        <button class="btn_login">
        <a href="login.php" class="text_login" >Login</a>
        </button>
        
    </nav>
    <div class="container">
        <div class="col-lg-5 col-md-8 col-sm-10 col-12 mx-lg-auto mx-md-auto mx-5m-auto mx-auto">
            <div class="form__data">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-lg-auto mx-md-auto mx-5m-auto mx-auto">
                    <div class="form_title">
                        <h1>Tạo tài khoản để bắt đầu xem Netflix</h1>
                    </div>
                    <form autocomplete action="process_signup.php" method="post" id="registraion_form">
                            <div class="mb-3">
                              <div class="form-text">Họ và Tên</div>
                              <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="emailHelp" placeholder="Họ và tên" required>
                            </div>
                            <div class="mb-3">
                              <div id="email" class="form-text">Email</div>
                              <input type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp" placeholder="Email hoặc số điện thoại" required>
                            </div>
                            <div class="mb-3">
                               <div id="password" class="form-text">Mật khẩu</div>
                              <input type="password" name="password" class="form-control" id="password1" placeholder="Mật khẩu" required>
                            </div>
                            <div class="mb-3">
                               <div id="password" class="form-text">Nhập lại mật khẩu</div>
                              <input type="password" name="repassword" class="form-control" id="password2" placeholder="Nhập lại mật khẩu" required>
                            </div>
                            <!-- <div class="mb-3">
                               <div id="date" class="form-text">Ngày sinh</div>
                              <input type="date" name="date" class="form-control" id="date" placeholder="Nhập ngày sinh" required>
                            </div> -->
                            <!-- <div class="mb-3">
                               <div id="gioitinh" class="form-text">Nhập giới tính</div>
                              <input type="text" name="gioitinh" class="form-control" id="gioitinh" required>
                            </div> -->
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ghi nhớ tôi</label>
                            </div>

                            <button type="submit" class="btn" name="submit" id="btn_submit" >Đăng ký</button>
                            
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="footer-head">
        <a href="#" class="footer-head-text">Bạn có câu hỏi? Liên hệ với chúng tôi.</a>
      </div>
      <ul class="footer-links structural">
        <li class="footer-link-item" placeholder="footer_responsive_link_faq_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/support/412" placeholder="footer_responsive_link_faq">
            <span id="" data-uia="data-uia-footer-label">Câu hỏi thường gặp</span>
          </a>
        </li>
            
        <li class="footer-link-item" placeholder="footer_responsive_link_help_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com" placeholder="footer_responsive_link_help">    
            <span id="" data-uia="data-uia-footer-label">Trung tâm trợ giúp</span>
          </a>
        </li>
      
        <li class="footer-link-item" placeholder="footer_responsive_link_terms_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/termsofuse" placeholder="footer_responsive_link_terms">   
            <span id="" data-uia="data-uia-footer-label">Điều khoản sử dụng</span>  
          </a>  
        </li>
      </ul>
      <ul class="footer-links structural">
        <li class="footer-link-item" placeholder="footer_responsive_link_privacy_separate_link_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/privacy" placeholder="footer_responsive_link_privacy_separate_link">
            <span id="" data-uia="data-uia-footer-label">Quyền riêng tư</span>
          </a>
        </li>
      
        <li class="footer-link-item" placeholder="footer_responsive_link_cookies_separate_link_item">
          <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_cookies_separate_link">
            <span id="" data-uia="data-uia-footer-label">Tùy chọn cookie</span>
          </a>
        </li>
      
        <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/corpinfo" placeholder="footer_responsive_link_corporate_information">
            <span id="" data-uia="data-uia-footer-label">Thông tin doanh nghiệp</span>
          </a>
        </li>
      </ul>
    </div>  
    
    <script language="javascript">
      var fullname = document.getElementById("fullname");
	    var password1 = document.getElementById("password1");
      var password2 = document.getElementById("password2");
      var email = document.getElementById("email");
      var submit = document.getElementById("submit");

      var fullnameerror = document.getElementById("fullnameerror");
      var password1error =  document.getElementById("password1error");
      var password2error1 =  document.getElementById("password2error1");
      var emailerror =  document.getElementById("emailerror");
 
	    var regFullname = /^[A-Za-z ]+$/;
      var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
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

		
        var validFullname = checkfullname();
        var validNewPass1 = true;
        var validNewPass2 = true;

        if(password1.value.toString().length > 0 || password2.value.toString().length > 0){
          validNewPass1 = checkNewpassword();
          validNewPass2 = checkNewpassword2();
        }
        
        var validEmail = checkemail();

        if( validFullname && validNewPass1 && validNewPass2 && validEmail){
          return true;
        }
        return false;
      }

      function checkfullname(){
        if(!regFullname.test(fullname.value)){
          fullnameerror.style.visibility = 'visible';
          fullnameerror.style.height = 'auto';
          return false;
        }
        else{
          fullnameerror.style.visibility = 'hidden';
          fullnameerror.style.height = '0px';
          return true;
        }
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
      function checkpass(){
        if(!regPassword.test(password.value)){
          passworderror.style.visibility = 'visible';
          passworderror.style.height = 'auto';
          return false;
        }
        else{
          passworderror.style.visibility = 'hidden';
          passworderror.style.height = '0px';
          return true;
        }
      }

      function checkemail(){
        if(!regEmail.test(email.value)){
          emailerror.style.visibility = 'visible';
          emailerror.style.height = 'auto';
          return false;
        }
        else{
          emailerror.style.visibility = 'hidden';
          emailerror.style.height = '0px';
          return true;
        }
      }

      function checkNewpassword2(){
        if(!regPassword.test(password2.value)){
          //password2error1.innerHTML = errorPasswordDefault;
          password2error1.style.visibility = 'visible';
          password2error1.style.height = 'auto';
          return false;
        }
        else{
          if(password1.value.toString().length > 0){
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
          else{
            password2error1.style.visibility = 'hidden';
            password2error1.style.height = '0px';
            return true;
          }
        }
      }

    </script>
  </body>
</html>


