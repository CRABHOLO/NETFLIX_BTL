<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm phim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles_login.css">
    <link rel="stylesheet" href="assets/css/style_home.css">
</head>
<body style="background-color: black">
<header class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
          <div class="container-fluid" style="background-color: black;">
            <a class="navbar-brand" href="home.php">
              <img src="assets/images/Netflix.jfif" class="image-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="phimtruyenhinh.php" style="color: red;">PHIM TRUYỀN HÌNH</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="phimchieurap.php" style="color: red;">PHIM CHIẾU RẠP</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color: red;" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    THỂ LOẠI
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#" style="color: red;">HÀNH ĐỘNG</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#" style="color: red;">ANIME</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#" style="color: red;">KINH DỊ</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="addfilm.php" style="color: red;">THÊM PHIM</a>
                </li>
              </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn" type="submit" style="color: red; width: 40px; height: 40px;"><i class="bi bi-search"></i></button>
                </form>
                <button class="btn"  type="submit" style="color: red;width: 40px; height: 40px;margin: 5px;"><i class="bi bi-bell"></i></button>
                <button class="btn"  type="submit" style="color: red;width: 40px; height: 40px;"><i class="bi bi-person-circle"></i></i></button>     
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

    <!--BANG THEM PHIM-->
    <main>
        <div class="container" style="color: red">
            <h3 class="text-center mt-5">THÊM PHIM</h3>
            <table class="table  table-dark table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">DIRECTOR</th>
                        <th scope="col">ACTOR</th>
                        <th scope="col">CATEGORY_ID</th>
                        <th scope="col">TYPE_MOVIE</th>
                        <th scope="col">YEAR</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">DURATION</th>
                        <th scope="col">NUM_VIEW</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>


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