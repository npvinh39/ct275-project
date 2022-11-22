<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../lib//bootstrap.min.css">
  <link rel="stylesheet" href="../../../lib//fontawesome-free-6.1.1-web/css/all.min.css">
  <link rel="stylesheet" href="../../../public/client/css/product-list.css">
  <link rel="stylesheet" href="../../../public/client/css/main.css">
  <script type="text/javascript" src="../../../lib//bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../../../lib//jquery.min.js"></script>
</head>
<body>
  <div class="app">
    <div class="header-blue py-0">
      <nav class="navbar navbar-expand-lg bg-light navbar-expand-md navigation-clean-search">
          <div class="container">
            <a class="navbar-brand" href="../index.html">
              <img src="../../../public/client/images/logo-locationtour.png" class="logo" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navcol-1" aria-controls="navcol-1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="fa-solid fa-bars icon-bars"></i></span>
            </button>
              <div class="collapse navbar-collapse justify-content-between" id="navcol-1">
                <div class="none"></div>
                  <ul class="nav navbar-nav">
                      <li class="nav-item" role="presentation"><a class="nav-link" href="../view/product-list.html">Tour</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="#">Về chúng tôi</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="../view/contact.html">Liên hệ</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="../view/faq.html">FAQ</a></li>
                      <!-- <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Services</a>
                          <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Logo design</a><a class="dropdown-item" role="presentation" href="#">Banner design</a><a class="dropdown-item" role="presentation" href="#">content writing</a></div>
                      </li> -->
                  </ul>
                  <!-- <form class="form-inline mr-auto" target="_self">
                      <div class="form-group"><label for="search-field"><i class="fa fa-search text-white"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                  </form> -->
                  <div>
                    <span class="navbar-text"> <a class="login text-dark" href="./login.html">Đăng nhập</a></span>
                    <a class="btn btn-primary action-button" role="button" href="./register.html">Đăng ký</a>
                  </div>
                </div>
          </div>
      </nav>
  </div>
  <div class="app_container container">
    <div class="card mt-2 mb-2 w-100" style="height: auto">
      <div class="card-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="margin-bottom: 0;">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
          </ol>
        </nav>
      </div>
      <div class="card-body">
        <div class="filter">
          <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
      </div>
      <div id="mobile-filter">
          <div>
              <h6 class="p-1 border-bottom">Home Furniture</h6>
              <ul>
                  <li><a href="#">Living</a></li>
                  <li><a href="#">Dining</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Bedroom</a></li>
                  <li><a href="#">Kitchen</a></li>
              </ul>
          </div>
          <div>
              <h6 class="p-1 border-bottom">Filter By</h6>
              <p class="mb-2">Color</p>
              <ul class="list-group">
                  <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                      <span class="fa fa-circle pr-1" id="red"></span>Red
                  </a></li>
                  <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                      <span class="fa fa-circle pr-1" id="teal"></span>Teal
                  </a></li>
                  <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                      <span class="fa fa-circle pr-1" id="blue"></span>Blue
                  </a></li>
              </ul>
          </div>
          <div>
              <h6>Type</h6>
              <form class="ml-md-2">
                  <div class="form-inline border rounded p-sm-2 my-2">
                      <input type="radio" name="type" id="boring">
                      <label for="boring" class="pl-1 pt-sm-0 pt-1">Boring</label>
                  </div>
                  <div class="form-inline border rounded p-sm-2 my-2">
                      <input type="radio" name="type" id="ugly">
                      <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ugly</label>
                  </div>
                  <div class="form-inline border rounded p-md-2 p-sm-1">
                      <input type="radio" name="type" id="notugly">
                      <label for="notugly" class="pl-1 pt-sm-0 pt-1">Not Ugly</label>
                  </div>
              </form>
          </div>
      </div>
      <section id="sidebar">
          <div>
              <h6 class="p-1 border-bottom">Loại Tour</h6>
              <ul>
                  <li><a href="#">Tour Du xuân 1 ngày</a></li>
                  <li><a href="#">Tour tham quan</a></li>
                  <li><a href="#">Tour giá rẻ</a></li>
                  <li><a href="#">Tour cao cấp</a></li>

              </ul>
          </div>
          <!-- <div>
              <h6 class="p-1 border-bottom">Filter By</h6>
              <p class="mb-2">Color</p>
              <ul class="list-group">
                  <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                      <span class="fa fa-circle pr-1" id="red"></span>Red
                  </a></li>
                  <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                      <span class="fa fa-circle pr-1" id="teal"></span>Teal
                  </a></li>
                  <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                      <span class="fa fa-circle pr-1" id="blue"></span>Blue
                  </a></li>
              </ul>
          </div>
          <div>
              <h6>Type</h6>
              <form class="ml-md-2">
                  <div class="form-inline border rounded p-sm-2 my-2">
                      <input type="radio" name="type" id="boring">
                      <label for="boring" class="pl-1 pt-sm-0 pt-1">Boring</label>
                  </div>
                  <div class="form-inline border rounded p-sm-2 my-2">
                      <input type="radio" name="type" id="ugly">
                      <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ugly</label>
                  </div>
                  <div class="form-inline border rounded p-md-2 p-sm-1">
                      <input type="radio" name="type" id="notugly">
                      <label for="notugly" class="pl-1 pt-sm-0 pt-1">Not Ugly</label>
                  </div>
              </form>
          </div> -->
      </section>
      <section id="products">
      <div class="container">
          <div class="row">

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
              <div class="d-flex justify-content-center">
                <figure class="card card-product-grid card-lg" style="height: 400px; margin-top: 20px;"> <a href="./descripsion.html" class="img-wrap" data-abc="true"><img class="d-block w-100" src="../../../public/client/images/tour1.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-12"> <a href="./descripsion.html" class="title" data-abc="true">Toshiba Laptop with 500GB HDD</a> </div>
                            <!-- <div class="col-md-3">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div> -->
                        </div>
                    </figcaption>
                    <div class="bottom-wrap d-flex justify-content-between">
                      <div class="price-wrap">
                        <span class="price h5">$999</span> <br>
                        <small class="text-success">Free shipping</small>
                      </div>
                      <a href="./descripsion.html" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
                    </div>
                </figure>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
              <div class="d-flex justify-content-center">
                <figure class="card card-product-grid card-lg" style="height: 400px; margin-top: 20px;"> <a href="./descripsion.html" class="img-wrap" data-abc="true"><img class="d-block w-100" src="../../../public/client/images/tour1.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-12"> <a href="./descripsion.html" class="title" data-abc="true">Toshiba Laptop with 500GB HDD</a> </div>
                            <!-- <div class="col-md-3">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div> -->
                        </div>
                    </figcaption>
                    <div class="bottom-wrap d-flex justify-content-between">
                      <div class="price-wrap">
                        <span class="price h5">$999</span> <br>
                        <small class="text-success">Free shipping</small>
                      </div>
                      <a href="./descripsion.html" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
                    </div>
                </figure>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
              <div class="d-flex justify-content-center">
                <figure class="card card-product-grid card-lg" style="height: 400px; margin-top: 20px;"> <a href="./descripsion.html" class="img-wrap" data-abc="true"><img class="d-block w-100" src="../../../public/client/images/tour1.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-12"> <a href="./descripsion.html" class="title" data-abc="true">Toshiba Laptop with 500GB HDD</a> </div>
                            <!-- <div class="col-md-3">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div> -->
                        </div>
                    </figcaption>
                    <div class="bottom-wrap d-flex justify-content-between">
                      <div class="price-wrap">
                        <span class="price h5">$999</span> <br>
                        <small class="text-success">Free shipping</small>
                      </div>
                      <a href="./descripsion.html" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
                    </div>
                </figure>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
              <div class="d-flex justify-content-center">
                <figure class="card card-product-grid card-lg" style="height: 400px; margin-top: 20px;"> <a href="./descripsion.html" class="img-wrap" data-abc="true"><img class="d-block w-100" src="../../../public/client/images/tour1.jpg"></a>
                    <figcaption class="info-wrap">
                        <div class="row">
                            <div class="col-md-12"> <a href="./descripsion.html" class="title" data-abc="true">Toshiba Laptop with 500GB HDD</a> </div>
                            <!-- <div class="col-md-3">
                                <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            </div> -->
                        </div>
                    </figcaption>
                    <div class="bottom-wrap d-flex justify-content-between">
                      <div class="price-wrap">
                        <span class="price h5">$999</span> <br>
                        <small class="text-success">Free shipping</small>
                      </div>
                      <a href="./descripsion.html" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
                    </div>
                </figure>
              </div>
            </div>
          </div>
      </div>
      </section>
      </div>
    </div>
  </div>
  <footer class="bg-white">
    <div class="container py-5">
      <div class="row py-3">

        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Về chúng tôi</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Sự Kiện</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Tour</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Nội dung</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Giới thiệu</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Trợ giúp</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Thanh toán</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Dịch vụ</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Cancellation</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Returns</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Chinh sách</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Chính sách hoàn trả</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Điều khoản sử dụng</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Bảo mật</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Điều khoản</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Công ty</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Đăng nhập</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Đăng ký</a></li>
            <li class="mb-2"><a href="#" class="text-muted">sơ đồ sử dụng</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Các dịch vụ</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Địa chỉ văn phòng</h6>
          <p class="text-muted mb-4">Khu II, Đ. 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ. Điện thoại: 0379830470 - 0948935476</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fab  fa-2x fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fab fa-2x fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fab fa-2x fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fab fa-2x fa-youtube"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fab fa-2x fa-google"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <p class="text-muted mb-0 py-2">&copy; Nguyễn Phúc Vinh - Nguyễn Thái Sơn</p>
    </div>
    <!-- <hr class="p-0 m-0 b-0">
    <div class="bg-light py-2">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">&copy; 2022 Design by student CTU. All rights reserved.</p>
      </div>
    </div> -->

  </footer>
  </div>
  <a class="phone-call d-block btn btn-secondary" href="tel:0398033985">
    <i class="fa-solid fa-phone d-block" style="font-size: 1.4rem; margin-top: 0.4rem;"></i>
  </a>
</body>
</html>