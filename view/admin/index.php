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

use CT275\Project\Tour;
$tour = new Tour($PDO);
$tours = $tour->all();


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

					<a href="<?= BASE_URL_PATH . 'view/admin/add.php' ?>" class="btn btn-primary" style="margin-bottom: 30px;">
						<i class="fa fa-plus"></i> Thêm Địa Điểm</a>

					<!-- Table Starts Here -->
					<table id="tours" class="table table-bordered table-responsive table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Title</th>
								<th>description</th>
								<th>Map</th>
								<th>Image</th>
								<th>Date Created</th>
								<th>Date Updated</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($tours as $tour): ?>
								<tr>
									<td class="edit-text-2-line"><?=htmlspecialchars($tour->tour_name)?></td>
									<td class="edit-text-2-line"><?=htmlspecialchars($tour->tour_title)?></td>
									<td class="edit-text-2-line"><?=htmlspecialchars($tour->tour_description)?></td>
									<td class="edit-text-2-line"><?=htmlspecialchars($tour->tour_map)?></td>
									<td class="edit-text-2-line" style="text-align: center;"><img src="<?=htmlspecialchars($tour->tour_image)?>" alt="image" style="width: 50px; height: 50px; border-radius: 50%;"></td>
									<td class="edit-text-2-line"><?=date("d-m-Y", strtotime($tour->created_at))?></td>
									<td class="edit-text-2-line"><?=date("d-m-Y", strtotime($tour->updated_at))?></td>
									<td class="edit-text-2-line" style="text-align: center;">
										<a href="<?=BASE_URL_PATH . 'view/admin/edit.php?id=' . $tour->getId()?>"
										class="btn btn-xs btn-warning">
										<i alt="Edit" class="fa fa-pencil"> Sửa</i></a>
										<form class="delete" action="<?=BASE_URL_PATH . 'view/admin/delete.php'?>"
										method="POST" style="display: inline;">
											<input type="hidden" name="id"
											value="<?=$tour->getId()?>">
											<button type="submit" class="btn btn-xs btn-danger"
											name="delete-tour">
											<i alt="Delete" class="fa fa-trash"> Xóa</i></button>
										</form>

									</td>
								</tr>
							<?php endforeach ?>

						</tbody>
					</table>
					<!-- Table Ends Here -->
				</div>
			</div>
		</section>
	</div>

	<div id="delete-confirm" class="modal fade" role="dialog">"
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close"
				data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Xác Nhận</h4>
				</div>
				<div class="modal-body">Bạn có thực sự muốn xóa địa điểm này?</div>
				<div class="modal-footer">
				<button type="button" data-dismiss="modal"
				class="btn btn-danger" id="delete">Xóa</button>
				<button type="button" data-dismiss="modal"
				class="btn btn-default">Đóng</button>
				</div>
			</div>
		</div>
	</div>

	<?php include('./layouts/footer.php') ?>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= BASE_URL_PATH . "public/admin/js/wow.min.js" ?>"></script>
	<script>
		$(document).ready(function() {
			new WOW().init();
			$('#tours').DataTable();

			$('button[name="delete-tour"]').on('click', function(e){
			e.preventDefault();
			const form = $(this).closest('form');
			const nameTd = $(this).closest('tr').find('td:first');
			if (nameTd.length > 0) {
			$('.modal-body').html(
			`Bạn có muốn xóa "${nameTd.text()}" không?`
			);
			}
			$('#delete-confirm').modal({
			backdrop: 'static', keyboard: false
			})
			.one('click', '#delete', function() {
			form.trigger('submit');
			});
			});

		});
	</script>
</body>

</html>
<?php ob_end_flush(); ?>