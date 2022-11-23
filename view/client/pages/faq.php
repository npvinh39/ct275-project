<?php
include "../../../model/bootstrap.php";

use CT275\Project\FAQ;
$faq = new FAQ($PDO);
$faqs = $faq->all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= BASE_URL_PATH ?>./lib//bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_URL_PATH ?>./lib//fontawesome-free-6.1.1-web/css/all.min.css">
  <link rel="stylesheet" href="<?= BASE_URL_PATH ?>./public/client/css/contact.css">
  <link rel="stylesheet" href="<?= BASE_URL_PATH ?>./public/client/css/main.css">
  <script type="text/javascript" src="<?= BASE_URL_PATH ?>./lib//bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?= BASE_URL_PATH ?>./lib//jquery.min.js"></script>
</head>
<body>
  <div class="app">
    <div class="header-blue py-0">
      <!-- Header -->
      <?php include_once '../layouts/header.php' ?>
  </div>
  <div class="app_container container">
    <hr/>
<h2  class="text-center">FAQ</h2>
<hr/>
<?php foreach($faqs as $faq): ?>
    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <p><?=htmlspecialchars($faq->faq_question)?></p>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p><?=htmlspecialchars($faq->faq_answer)?></p>
            </div>
        </div>
    </div>
    <!-- <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2. Tôi có thể hủy bỏ đặt hàng?
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>Được. Bạn có thể hủy bỏ đặt hàng bất khi nào bạn muốn.</p>
        </div>
    </div>
    </div>
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3. Chính sách hoàn tiền như thế nào?
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <p>Bạn có thể nhận được tiền hoàn trả 100% bất kể khi nào và vì bất kỳ lý do gì.</p>
        </div>
    </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4. Làm thế nào để tôi có thể nhận được hóa đơn?
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>Bạn có thể nhận được hóa đơn thông qua email hoặc thư tín.</p>
            </div>
        </div>
    </div> -->
</div>
<?php endforeach ?>

<hr/>
</div>
      <!-- Footer -->
      <?php include_once '../layouts/footer.php' ?>
  </div>
  <a class="phone-call d-block btn btn-secondary" href="tel:0398033985">
    <i class="fa-solid fa-phone d-block" style="font-size: 1.4rem; margin-top: 0.4rem;"></i>
  </a>
</body>
</html>