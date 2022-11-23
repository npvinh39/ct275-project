<?php
include "../../model/bootstrap.php";
include "../../model/Tour.php";

use CT275\Project\Tour;

$tour = new Tour($PDO);
$id = isset($_REQUEST['id']) ?
filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT) : -1;
if ($id < 0 || !($tour->find($id))) {
redirect(BASE_URL_PATH);
}
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if ($tour->update($_POST)) {
// Cập nhật dữ liệu thành công
redirect(BASE_URL_PATH);
}
// Cập nhật dữ liệu không thành công
$errors = $tour->getValidationErrors();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Contacts</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= BASE_URL_PATH . "css/sticky-footer.css" ?>" rel=" stylesheet">
	<link href="<?= BASE_URL_PATH . "css/font-awesome.min.css" ?>" rel=" stylesheet">
	<link href="<?= BASE_URL_PATH . "css/animate.css" ?>" rel=" stylesheet">
</head>

<body>
<?php include('./layouts/navbar.php') ?>

	<!-- Main Page Content -->
	<div class="container">
		<section id="inner" class="inner-section section">
			<div class="container">

				<!-- SECTION HEADING -->
				<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Địa Điểm</h2>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="wow fadeIn" data-wow-duration="2s">Cật nhật địa điểm tại form bên dưới.</p>
					</div>
				</div>

				<div class="inner-wrapper row">
					<div class="col-md-12">

						<form name="frm" id="frm" action="" method="post" class="col-md-6 col-md-offset-3">

							<input type="hidden" name="id" value="<?= htmlspecialchars($tour->getId()) ?>">

							<!-- Name -->
							<div class="form-group<?= isset($errors['tour_name']) ? ' has-error' : '' ?>">
								<label for="tour_name">Tour Name</label>
								<input type="text" name="tour_name" class="form-control" maxlen="255" id="tour_name" placeholder="Nhập vào Name" value="<?= htmlspecialchars($tour->tour_name) ?>" />

								<?php if (isset($errors['tour_name'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['tour_name']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- Category -->
							<div class="form-group<?= isset($errors['category_id']) ? ' has-error' : '' ?>">
								<label for="category">Category</label>
								<select name="category_id" id="category">
									<?php foreach ($categorys as $category) : ?>
										<option value="<?= isset($_POST['category_id']) ? htmlspecialchars($_POST['category_id']) : '' ?><?= $category->category_id ?>"><?= htmlspecialchars($category->category_name) ?></option>
									<?php endforeach ?>
								</select>
								<?php if (isset($errors['category_id'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['category_id']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- Title -->
							<div class="form-group<?= isset($errors['tour_title']) ? ' has-error' : '' ?>">
								<label for="description">Title </label>
								<textarea name="tour_title" id="tour_title" class="form-control" placeholder="Nhập vào tour_title (maximum character limit: 255)"><?= htmlspecialchars($tour->tour_title) ?></textarea>

								<?php if (isset($errors['tour_title'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['tour_title']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- Description -->
							<div class="form-group<?= isset($errors['tour_description']) ? ' has-error' : '' ?>">
								<label for="description">Description </label>
								<textarea name="tour_description" id="tour_description" class="form-control" placeholder="Nhập vào tour_description (maximum character limit: 255)"><?= htmlspecialchars($tour->tour_description) ?></textarea>

								<?php if (isset($errors['tour_description'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['tour_description']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- map -->
							<div class="form-group<?= isset($errors['tour_map']) ? ' has-error' : '' ?>">
								<label for="description">map </label>
								<textarea name="tour_map" id="tour_map" class="form-control" placeholder="Nhập vào tour_map (maximum character limit: 255)"><?= htmlspecialchars($tour->tour_map) ?></textarea>

								<?php if (isset($errors['tour_map'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['tour_map']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- Image -->
							<div class="form-group<?= isset($errors['tour_image']) ? ' has-error' : '' ?>">
								<label for="image">Image </label>
								<textarea name="tour_image" id="tour_image" class="form-control" placeholder="Nhập vào tour_image (maximum character limit: 255)"><?= htmlspecialchars($tour->tour_image) ?></textarea>

								<?php if (isset($errors['tour_image'])) : ?>
									<span class="help-block">
										<strong><?= htmlspecialchars($errors['tour_image']) ?></strong>
									</span>
								<?php endif ?>
							</div>

							<!-- Submit -->
							<button type="submit" name="submit" id="submit" class="btn btn-primary">Sửa Địa Điểm</button>
						</form>

					</div>
				</div>

			</div>
		</section>
	</div>

	<?php include('./layouts/footer.php') ?>

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