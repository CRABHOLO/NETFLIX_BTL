<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Phim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style_showfilm.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href=" https://fonts.googleapis.com/icon?family=Material+Icons " rel="stylesheet">
</head>
<body class="bg">
<header class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
          <div class="container-fluid" style="background-color: black;">
            <a class="navbar-brand" href="#">
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
                  <a class="nav-link active" aria-current="page" href="#" style="color: red;">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: red;">PHIM TRUYỀN HÌNH</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: red;">PHIM CHIẾU RẠP</a>
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
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit" style="color: red;"><i class="bi bi-search"></i></button>
              </form>
              <button class="btn" type="submit" style="color: red;"><i class="bi bi-bell"></i></button>
              <button class="btn" type="submit" style="color: red;"><i class="bi bi-person-circle"></i></i></button>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <div class="container">
        <div class="col-lg-4 ">
            <div class="form__data">
                <div class="col-lg-12 ">
                    <form action="process_login.php" method="post">
                            <button class="btn-play"><i class="fas fa-play"></i>Play</button>
                            <button class="btn-list">My List</button>
                            <div class="mb-3">
                              <h3>Whatch Season 1 Now</h3>
                              <input class="form-control" name="password">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>