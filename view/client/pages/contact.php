<?php include_once '../../../model/bootstrap.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../lib//bootstrap.min.css">
  <link rel="stylesheet" href="../../../lib//fontawesome-free-6.1.1-web/css/all.min.css">
  <link rel="stylesheet" href="../../../public/client//css/contact.css">
  <link rel="stylesheet" href="../../../public/client//css/main.css">
  <script type="text/javascript" src="../../../lib//bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../../../lib//jquery.min.js"></script>
</head>
<body>
  <div class="app">
    <div class="header-blue py-0">
      <!-- Header -->
    <?php include_once '../layouts/header.php' ?>
  </div>
    <div class="container">
      <div class="card w-100">
          <div class="form d-flex justify-content-center">
              <div class="left-side">
                  <span class="line1"></span>
                  <span class="line2"></span>
                  <span class="line3"></span>
                  <div class="contact-us">
                      <p>locationtour@gamil.com.vn</p>
                      <span></span>
                  </div>
                  <div class="social">
                          <i class="fa-brands fa-facebook"></i>
                          <i class="fa-brands fa-twitter"></i>
                          <i class="fa-brands fa-instagram"></i>
                          <i class="fa-brands fa-github"></i>
                  </div>
              </div>
              <div class="right-side">
                  <div class="top-div">
                      <h2>Liên Hệ Chúng Tôi !!!</h2>
                      <p>contact liên hệ nè</p>
                  </div>
                  <div class="stats">
                      <div class="stats1">
                          <i class="fa fa-map-marker"></i>
                          <span>Khu 2, Đ. 3/2, P. Xuân Khánh, Q. Ninh Kiều, Tp. Cần Thơ</span>
                      </div>
                      <div class="stats1">
                          <i class="fa fa-phone"></i>
                          <span>+84292 3832 663</span>
                      </div>
                      <div class="stats1">
                          <i class="fa fa-envelope"></i>
                          <span>locationtour@gamil.com.vn</span>
                      </div>
                  </div>
                  <div class="card-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8414543437266!2d105.76842661428219!3d10.029938975271234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1669195819590!5m2!1svi!2s" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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