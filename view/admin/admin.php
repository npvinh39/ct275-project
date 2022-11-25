<?php
ob_start();
include "../../model/bootstrap.php";
include "../../controller/functions.php";
session_start();
if (!is_administrator()) {
	// Nếu không là quản trị viên, hiển thị trang đăng nhập.
  header('Location: login.php');
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Trang Quản Lý</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="//cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?= BASE_URL_PATH . "public/admin/css/sticky-footer.css" ?>" rel=" stylesheet">
	<link href="<?= BASE_URL_PATH . "public/admin/css/font-awesome.min.css" ?>" rel=" stylesheet">
	<link href="<?= BASE_URL_PATH . "public/admin/css/animate.css" ?>" rel=" stylesheet">
	<style>
		.edit-text-2-line {
			line-height: 2.2rem;
    	max-height: 4.4rem;
    	overflow: hidden;
  		text-overflow: ellipsis;
  		white-space: nowrap;
			max-width: 110px;
		}
	</style>
</head>

<body>

	<?php include('./layouts/navbar.php') ?>

	<!-- Main Page Content -->
	<div class="container">
		<section id="inner" class="inner-section section">
			<!-- SECTION HEADING -->
			<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Chào Bạn Đến Với Trang Quản Lý</h2>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<p class="wow fadeIn" data-wow-duration="2s">Bạn có toàn quyền trên trang này.</p>
				</div>
			</div>

			<div class="inner-wrapper row">
				<div class="col-md-12">

					<a href="<?= BASE_URL_PATH . 'view/admin/index.php' ?>" class="btn btn-primary" style="margin-bottom: 30px;">
						<i class="fa fa-plus"></i> Chỉnh Sửa Địa Điểm</a>
                    
                    <a href="<?= BASE_URL_PATH . 'view/admin/category.php' ?>" class="btn btn-primary" style="margin-bottom: 30px;">
                        <i class="fa fa-plus"></i> Chỉnh Sửa danh mục</a>
				</div>
			</div>
		</section>
	</div>

	<?php include('./layouts/footer.php') ?>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= BASE_URL_PATH . "public/admin/js/wow.min.js" ?>"></script>


</html>
