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
      <!-- Header -->
      <?php include_once '../layouts/header.php' ?>
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
      <!-- Footer -->
      <?php include_once '../layouts/footer.php' ?>
  </div>
  <a class="phone-call d-block btn btn-secondary" href="tel:0398033985">
    <i class="fa-solid fa-phone d-block" style="font-size: 1.4rem; margin-top: 0.4rem;"></i>
  </a>
</body>
</html>