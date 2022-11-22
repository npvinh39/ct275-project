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
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../../../public/client/images/banner1.jpg" class="d-block w-100" style="height:500px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../../../public/client/images/banner2.jpg" class="d-block w-100" style="height:500px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../../../public/client/images/banner1.jpg" class="d-block w-100" style="height:500px;" alt="...">
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62860.63914868832!2d105.72255074897778!3d10.034185113830706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1645546397856!5m2!1svi!2s" width="100%" height="200px" frameborder="0" style="border:0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <br />
              </a>
              <div class="card-body">
                <h5 class="card-title">Cần Thơ</h5>
                <p class="card-text">Cần Thơ là một thành phố thuộc tỉnh Cần Thơ cũ và là tỉnh lỵ của tỉnh Cần Thơ.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Diện tích: 1.439 km²</li>
                <li class="list-group-item">Dân số: 1,282 triệu (2018)</li>
                <li class="list-group-item">Mã vùng: 292</li>
              </ul>
              <div class="card-body d-flex justify-content-center">
                <a href="./checkout.html" class="btn btn-primary btn-product" role="button" data-bs-toggle="button">Đặt ngay</a>
              </div>
            </div>
          </div>
        </div>
        <div class="tabs mt-3">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Giới thiệu</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Địa lý</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Liên hệ</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h4>GIỚI THIỆU VỀ TP. CẦN THƠ</h4>
              <p>
                Tp. Cần Thơ – Một thành phố lớn nhất miền Tây Nam Bộ, được mệnh danh là Tây Đô với bề dày lịch sử trên 270 năm. Cùng với sự phát triển của những thăng trầm lịch sử đến nay TP. Cần Thơ không chỉ là đô thị loại một mà còn là một trong 5 thành phố trực thuộc trung ương của Việt Nam.
              </p>
              <p>
                Chẳng những là một Thành phố rộng lớn, trẻ trung và hiện đại Tp. Cần Thơ còn không ngừng đổi mới nhằm sánh kịp với thời đại và phù hợp với một kỷ nguyên mới, kỷ nguyên của sự hợp tác và phát triển gắn liền với hội nhập quốc tế.
              </p>
              <p>
                Tp. Cần Thơ hội tụ đầy đủ các yếu tố về kinh tế, văn hóa, giáo dục, thiên nhiên và con người… tạo điều kiện phát triển kinh tế và thu hút nguồn đầu tư trong và ngoài nước vào Cần Thơ. Có thể nói, đây là một vùng đất đầy triển vọng cho sự phát triển kinh tế trong tất cả các lĩnh vực, là thị trường tiềm năng cho nhiều tập đoàn lớn và là nơi khởi đầu cho những dự án đầu tư mới có tiềm năng trong tương lai,…
              </p>
              <p>
                Theo kế hoạch, đến năm 2025 TPCT sẽ trở thành trung tâm Công nghiệp – Thương mại – Dịch vụ – Giáo dục – Đào tạo và Khoa học công nghệ của vùng ĐBSCL, đồng thời là đô thị cửa ngõ của vùng hạ lưu sông Mê Kong, là đầu mối quan trọng trong giao thông vận tải nội vùng và liên vận quốc tế.
              </p>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <p>Thành phố Cần Thơ nằm trên bờ phải sông Hậu, cách Thành phố Hồ Chí Minh 169 km về phía tây nam.</p>
              <p>Trước khi giải thể vào năm 2004, thành phố có vị trí địa lý:</p>
              <ul>
                <li>Phía đông và phía bắc giáp huyện Bình Minh, tỉnh Vĩnh Long</li>
                <li>Phía tây và tây bắc giáp huyện Ô Môn</li>
                <li>Phía nam giáp huyện Châu Thành, tây nam giáp huyện Châu Thành A</li>
              </ul>
            </div>

            <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="row pt-5 pb-5">
                <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
                  <div class="contact__tel text-center">
                    <p class="text-uppercase fs-3">Bạn muốn thêm thông tin?</p>
                    <p class="fw-bold text-uppercase fs-2">Hotline</p>
                    <p class="fw-bold fs-2">0398 033 985</p>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                  <p class="fs-5 text-center">Vui lòng nhập vào biểu mẫu hoặc gọi HOTLINE!</p>

                  <form class="row g-3 d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                      <!-- <label for="inputEmail4" class="form-label">Email</label> -->
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                      <!-- <label for="inputPassword4" class="form-label">Password</label> -->
                      <input type="tel" class="form-control" id="inputPassword4" placeholder="Số điện thoại">
                    </div>
                    <div class="col-12">
                      <!-- <label for="inputAddress" class="form-label">Address</label> -->
                      <input type="text" class="form-control" id="inputAddress" placeholder="Họ và tên">
                    </div>
                    <div class="col-12">
                      <!-- <label for="inputAddress2" class="form-label">Address 2</label> -->
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Địa chỉ">
                    </div>
                    <div class="col-4">
                      <!-- <label for="inputState" class="form-label">State</label> -->
                      <select id="inputState" class="form-select">
                        <option selected>Nam</option>
                        <option>Nữ</option>
                        <option>Khác</option>
                      </select>
                    </div>
                    <div class="col-8 align-self-end">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Nhận thông tin qua Email.
                        </label>
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary">Đăng Ký</button>
                    </div>
                  </form>
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