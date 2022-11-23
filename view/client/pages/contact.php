<?php
include "../../../model/bootstrap.php";
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
                      <p>Contact Us</p>
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
                      <h2>Get in touch !</h2>
                      <p>Contact us for a quote,help or to join the team. </p>
                  </div>
                  <div class="stats">
                      <div class="stats1">
                          <i class="fa fa-map-marker"></i>
                          <span>102 Street<br>2714 DONNZY</span>
                      </div>
                      <div class="stats1">
                          <i class="fa fa-phone"></i>
                          <span>+02 1203 153</span>
                      </div>
                      <div class="stats1">
                          <i class="fa fa-envelope"></i>
                          <span>contact@us.fr</span>
                      </div>
                  </div>
                  <div class="card-content">
                      <span>
                          <div class="input-text">
                              <input type="text" required="required">
                              <small>Name</small>
                          </div>
                           <div class="input-text">
                              <input type="text" required="required">
                              <small>E-mail</small>
                          </div>
                          <div class="textarea">
                              <textarea required="required"></textarea>
                              <small>Message</small>
                          </div>

                      </span>
                  </div>
                  <div class="buttons">
                      <button>SEND</button>
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