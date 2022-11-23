<?php
include "../../../model/bootstrap.php";
include "../../../model/Tour.php";

use CT275\Project\Tour;

$tour = new Tour($PDO);
$id = isset($_REQUEST['id']) ?
filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT) : -1;
if ($id < 0 || !($tour->find($id))) {
redirect(BASE_URL_PATH);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../lib//bootstrap.min.css">
  <link rel="stylesheet" href="../../../lib//fontawesome-free-6.1.1-web/css/all.min.css">
  <link rel="stylesheet" href="../../../public/client/css/contact.css">
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
        <div class="row">
          <div class="col-12 col-sm-12 col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div> -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= htmlspecialchars($tour->tour_image) ?>" class="d-block w-100" style="height:500px;" alt="...">
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
          <div class="col-12 col-sm-12 col-md-4">
            <div class="card mt-0" style="width: 100%;">
              <a href="#">
                <iframe src="<?= htmlspecialchars($tour->tour_map) ?>" width="100%" height="300px" frameborder="0" style="border:0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <br />
              </a>
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($tour->tour_name) ?></h5>
                <p class="card-text"><?= htmlspecialchars($tour->tour_title) ?></p>
              </div>
              <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">Diện tích: 1.439 km²</li>
                <li class="list-group-item">Dân số: 1,282 triệu (2018)</li>
                <li class="list-group-item">Mã vùng: 292</li>
              </ul> -->
              <!-- <div class="card-body d-flex justify-content-center">
                <a href="./checkout.html" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="tabs mt-3">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Giới thiệu</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Liên hệ</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h4 class="py-3">Giới Thiệu Về <?= htmlspecialchars($tour->tour_name) ?></h4>
              <p>
              <?= htmlspecialchars($tour->tour_description) ?>
              </p>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="row pt-5 pb-5">
                <div class="col-12 col-sm-12 col-md-12 d-flex justify-content-center align-items-center">
                  <div class="contact__tel text-center">
                    <p class="text-uppercase fs-3">Bạn muốn thêm thông tin?</p>
                    <p class="fw-bold text-uppercase fs-2">Hotline</p>
                    <p class="fw-bold fs-2">0398 033 985</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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