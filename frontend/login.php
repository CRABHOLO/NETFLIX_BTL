<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin_Netflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles_login.css">
</head>

<body class="bg__wrap">
    <nav class="main_nav">
        <a href="#" class="navbar-brand">
            <img src="assets/images/logo.jpg" alt="net/logo" class="img-fluid">
        </a>
    </nav>
    <div class="container">
        <div class="col-lg-4 col-md-8 col-sm-10 col-12 mx-lg-auto mx-md-auto mx-5m-auto mx-auto">
            <div class="form__data">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-lg-auto mx-md-auto mx-5m-auto mx-auto">
                    <div class="form_title">
                        <h1>Đăng nhập</h1>
                    </div>
                    <form action="process_login.php" method="post">
                            <div class="mb-3">
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email hoặc số điện thoại">
                              <div id="email" class="form-text" >Vui lòng nhập email hoặc số điện thoại hợp lệ.</div>
                            </div>
                            <div class="mb-3">
                              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mật khẩu">
                              <div id="password" class="form-text">Mật khẩu của bạn phải chứa từ 4 đến 60 ký tự.</div>
                            </div>
                            <button type="submit" class="btn " name="submit">Đăng nhập</button>
                            
                            <div class="form__footer__setting">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label text-white" for="inlineCheckbox1">Ghi nhớ tôi</label>
                                    <?php
                                      if(isset($_GET['error'])){
                                      echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                                      }
                                    ?>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label text-white" for="inlineCheckbox2">Bạn cần trợ giúp?</label>
                                  </div>
                            </div>
                            <div class="fb_link">
                                <a href="#"><img src="assets/images/fb.jpg" class="img-fruid" alt="fb/img"></a>
                                <label class="form-check-label-fb text-white" for="inlineCheckbox2">Đăng nhập bằng tài khoản Facebook</label>
                            </div>
                            <div>
                                <label class="form-check-label-1 text-white " for="inlineCheckbox2">Bạn mới tham gia Netflix?</label>
                                <a class="form-dk" href="signup.php" >Đăng ký ngay</a>
                            </div>
                            <div class="form-research">
                                <p style="font-size: 14px; color: #757575;" class="rap-form">Trang này được Google reCAPTCHA bảo vệ để đảm bảo bạn không phải là robot.
                                    <a href="#" class="text-primary">Tìm hiểu thêm</a>
                                </p>
                            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


