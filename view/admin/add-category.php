<?php
include "../../model/bootstrap.php";

use CT275\Project\Category;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$category = new Category($PDO);
$category->fill($_POST);
if ($category->validate()) {
$category->save() && redirect(BASE_URL_PATH);
}
$errors = $category->getValidationErrors();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Thêm Danh Mục</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= BASE_URL_PATH . "public/admin/css/sticky-footer.css" ?>" rel=" stylesheet">
	<link href="<?= BASE_URL_PATH . "public/admin/css/font-awesome.min.css" ?>" rel=" stylesheet">
	<link href="<?= BASE_URL_PATH . "public/admin/css/animate.css" ?>" rel=" stylesheet">
</head>

<body>
	<?php include('./layouts/navbar.php') ?>

	<!-- Main Page Content -->
	<div class="container">
		<section id="inner" class="inner-section section">
			<div class="container">

				<!-- SECTION HEADING -->
				<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Danh Mục</h2>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="wow fadeIn" data-wow-duration="2s">Thêm danh mục vào form bên dưới.</p>
					</div>
				</div>

				<div class="inner-wrapper row">
					<div class="col-md-12">

						<form name="frm" id="frm" action="" method="post" class="col-md-6 col-md-offset-3">

							<!-- Name -->
							<div class="form-group<?= isset($errors['category_name']) ? ' has-error' : '' ?>">
								<label for="category_name">Category Name</label>
								<input type="text" name="category_name" class="form-control" maxlen="255" id="category_name" placeholder="Nhập vào Name" value="<?= isset($_POST['category_name']) ? htmlspecialchars($_POST['category_name']) : '' ?>" />

								<?php if (isset($errors['category_name'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['category_name']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- Submit -->
							<button type="submit" name="submit" id="submit" class="btn btn-primary">Thêm Danh Mục</button>
						</form>

					</div>
				</div>

			</div>
		</section>
	</div>

	<?php include('./layouts//footer.php') ?>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?= BASE_URL_PATH . "js/wow.min.js" ?>"></script>
	<script>
		$(document).ready(function() {
			new WOW().init();
		});
	</script>
</body>

</html>