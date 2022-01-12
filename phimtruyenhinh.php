<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phim truyền hình</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/styles_login.css">
  <link rel="stylesheet" href="assets/css/style_home.css">
</head>

<body style="background-color: black;">
  <!-- Navbar -->
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

  <!-- MAIN SLIDER -->
  <main class="container-fluid">
    <section class="posts_slider">
      <div class="row">
        <div class="col-md-12">
          <!-- Carosel -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/AntMan.jpg" width="1265" height="600" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>NGƯỜI KIẾN</h5>
                  <p>Câu truyện kể về Scott Lang - một tên trộm vừa được ra tù và trở thành Người Kiến với bộ đồ có khả
                    năng phóng to thu nhỏ</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/Avengers-EndGame.jpg" width="1265"  height="600"  class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>BIỆT ĐỘI BÁO THÙ: HỒI KẾT</h5>
                  <p>Sau cú búng tay của gã khổng lồ điên Thanos, một nửa dân số toàn bộ vũ trụ đã bị bay màu.
                    Giờ đây các anh hùng tập hợp lại với nhau để đảo ngược lại mọi thứ, đem mọi người trở lại.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/JonhWick.jpg" width="1265"  height="600" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>JONH WICK</h5>
                  <p>Jonh Wick - một sát thủ khét tiếng đã rửa tay gác kiếm - đang sống một cuộc sống yên ổn sau khi
                    người vợ yêu quý của anh qua đời>
                    Thế nhưng một tên trẻ trâu dám đột nhập vào nhà anh, trộm xe và giết chết chú chó yêu quý của anh.
                    Giờ với ngọn lửa căm hận bùng cháy, Ông Kẹ lại một lần nữa cầm súng và trừng phạt đứa trẻ hư đó.
                  </p>
                </div>
              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!--SLIDER NỔI BẬT-->
  <section class="sub_post_slider_2 container-fluid">
    <h4 class="noibat mt-5" style="color: red;">NỔI BẬT</h4>
    <div id="carouselNOIBAT" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md">
              <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row">
            <div class="col-md">
              <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md">
              <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselNOIBAT" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselNOIBAT " data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

<!--SLIDER HÀNH ĐỘNG-->
<section class="sub_post_slider_2 container-fluid">
  <h4 class="noibat mt-5" style="color: red;">HÀNH ĐỘNG</h4>
  <div id="carouselHANHDONG" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md">
            <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row">
          <div class="col-md">
            <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md">
            <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
          <div class="col-md">
            <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHANHDONG" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHANHDONG" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

  <!-- SLIDER anime -->
  <section class="sub_post_slider_2 container-fluid">
    <h4 class="noibat mt-5" style="color: red;">ANIME</h4>
    <div id="carouselANIME" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md">
              <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row">
            <div class="col-md">
              <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md">
              <img src="assets/images/JonhWick.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/AntMan.jpg" width="500" height="250" class="d-block w-100 " alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
            <div class="col-md">
              <img src="assets/images/Jojo'sBizarreAdventure.jpg" width="500" height="250" class="d-block w-100" alt="">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselANIME" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselANIME" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>