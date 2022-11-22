<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giới Thiệu Địa Điểm Du Lịch Việt Nam</title>
  <link rel="shortcut icon" href="./public/client/images/logo-locationtour-favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="./lib/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/fontawesome-free-6.1.1-web/css/all.min.css">
  <link rel="stylesheet" href="./public/client/css/main.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet"/>

  <script type="text/javascript" src="./lib/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="./lib/jquery.min.js"></script>
</head>
<body>
  <div class="app">
    <!-- Header & Banner -->
    <div class="header-blue">
        <?php
          include_once './view/client/layouts/header.php';
          ?>
        <div class="container hero">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h1>Các chuyến đi tuyệt nhất cho ngày nghỉ</h1>
                    <p class="">Địa điểm chất lượng - dịch vụ chu đáo.</p>
                    <button
                        class="btn btn-light btn-lg action-button" type="button">Xem ngay <i class="fa-solid fa-arrow-right"></i></button>
                </div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                    <!-- <div class="iphone-mockup">
                      <img class="device" src="./public/client/images/logo-locationtour-favicon.png">
                      <div class="screen">
                      </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
      <!-- Images -->
      <div class="row my-5">
        <h4 class="text-center mb-5">Hình Ảnh Nổi Bật</h4>
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./public/client/images/banner1.jpg" class="d-block w-100" alt="..." style="height: 300px">
              </div>
              <div class="carousel-item">
                <img src="./public/client/images/banner2.jpg" class="d-block w-100" alt="..." style="height: 300px">
              </div>
              <div class="carousel-item">
                <img src="./public/client/images/banner3.jpg" class="d-block w-100" alt="..." style="height: 300px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-xl-5 col-lg-5 d-none d-sm-none d-md-none d-lg-block">
          <img src="./public/client/images/banner4.jpg" class="img-fluid w-100" alt="..." style="height: 300px">
        </div>
      </div>
      <!-- Tour -->
      <div class="row my-5">
        <h4 class="">Tour Mới Nhất</h4>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex justify-content-center">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img class="d-block w-100" src="./public/client/images/tour1.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-12"> <a href="#" class="title" data-abc="true">Toshiba Laptop with 500GB HDD</a> </div>
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
                  <a href="#" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
                </div>
            </figure>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex justify-content-center">
            <figure class="card card-product-grid card-lg"> <a href="./public/client/view/descripsion.html" class="img-wrap" data-abc="true"><img class="d-block w-100" src="./public/client/images/tour1.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-12"> <a href="./public/client/view/descripsion.html" class="title" data-abc="true">Toshiba Laptop with 500GB HDD</a> </div>
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
                  <a href="./public/client/view/checkout.html" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
                </div>
            </figure>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex justify-content-center">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img class="d-block w-100" src="./public/client/images/tour1.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-12"> <a href="#" class="title" data-abc="true">Toshiba Laptop with 500GB HDD</a> </div>
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
                  <a href="#" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
                </div>
            </figure>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex justify-content-center">
            <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><img class="d-block w-100" src="./public/client/images/tour1.jpg"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-12"> <a href="#" class="title" data-abc="true">Toshiba Laptop with 500GB HDD</a> </div>
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
                  <a href="#" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
                </div>
            </figure>
          </div>
        </div>

      </div>
      <!-- Services -->
      <div class="row my-5">
        <h4 class="">Dịch Vụ Miễn Phí</h4>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="card w-100">
            <img src="./public/client/images/service1.jpg" class="card-img-top" alt="..."  style="height: 690px">
            <div class="card-body">
              <p class="card-text">Miễn phí dịch vụ cho thuê phương tiện đi lại.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="row">
            <div class="col">
              <div class="card w-100">
                <img src="./public/client/images/service2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Miễn phí chụp ảnh lưu niệm</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="card w-100 mt-2">
                <img src="./public/client/images/service3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Miễn phí tất cả những phần ăn nhẹ.</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card w-100 mt-2">
                <img src="./public/client/images/service4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Miễn phí dịch vụ đưa đón sân bay.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Partner -->
      <div class="row my-5">
        <h4></h4>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="">Đối Tác</h4>
              <div class="owl-carousel">
                <div class="item">
                  <img src="./public/client/images/partner1.jpg" alt="image" style="width: 70%"/>
                </div>
                <div class="item">
                  <img src="./public/client/images/partner2.jpg" alt="image" style="width: 70%"/>
                </div>
                <div class="item">
                  <img src="./public/client/images/partner3.jpg" alt="image" style="width: 70%"/>
                </div>
                <div class="item">
                  <img src="./public/client/images/partner4.jpg" alt="image" style="width: 70%"/>
                </div>
                <div class="item">
                  <img src="./public/client/images/partner5.jpg" alt="image" style="width: 70%"/>
                </div>
                <div class="item">
                  <img src="./public/client/images/partner6.jpg" alt="image" style="width: 70%"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

          <!-- Form Contact -->
      <div class="contact">
        <div class="container">
          <div class="row my-5">
            <div class="col-sm-12 col-md-12 col-lg-6">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="card w-100 mb-5">
                <div class="card-body">
                  <div class="d-flex justify-content-center">
                    <img class="img-responsive logo-contact text-center" src="./public/client/images/logo-locationtour.png" alt="">
                  </div>
                  <h4 class="card-title text-center" style="color: #00b5f2;">Liên hệ ngay nhận ưu đãi hay!</h4>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Họ và Tên</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Lời nhắn</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <button type="submit w-100" class="btn btn-primary" style="background: #ed407a; border: none;">Gửi yêu cầu</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
      include_once './view/client/layouts/footer.php';
    ?>
  </div>
  <a class="phone-call d-block btn btn-secondary" href="tel:0398033985">
    <i class="fa-solid fa-phone d-block" style="font-size: 1.4rem; margin-top: 0.4rem;"></i>
  </a>
  <!-- Partner -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
  <script type='text/javascript'>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        center: true,
        nav:true,
        loop:true,
        responsive: {
          600: {
            items: 4
          }
        }
      });
    });
    </script>
</body>
</html>