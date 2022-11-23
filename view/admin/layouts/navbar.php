<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<a class="navbar-brand" href="<?= BASE_URL_PATH ?>">
				Trang Chủ
			</a>
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">
				&nbsp;
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->


				<?php
				if (isset($_SESSION['user'])){ ?>
				<li><a href="#">Xin Chào, <?php echo $_SESSION['user']; ?></a></li>
				<li><a href="<?= BASE_URL_PATH ?>./controller/handleLogout.php">Đăng Xuất</a></li>
				<?php }?>
			</ul>
		</div>
	</div>
</nav>