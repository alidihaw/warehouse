<!DOCTYPE html>
<html class="no-js before-run" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

	<title>LOGIN -
		<?php echo $web->identitas_website;?>
	</title>
	<meta name="description" content="<?php echo $web->identitas_deskripsi;?>" />
	<meta name="keywords" content="<?php echo $web->identitas_keyword;?>" />
	<meta name="author" content="<?php echo $web->identitas_author;?>" />

	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/<?php echo $web->identitas_favicon;?>">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/<?php echo $web->identitas_favicon;?>">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/bootstrap/bootstrap-extend.css">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/app.css">

	<!-- Libs CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/animsition/animsition.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/asscrollable/asScrollable.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/switchery/switchery.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/intro-js/introjs.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/slidepanel/slidePanel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/flag-icon-css/flag-icon.css">


	<!-- Fonts -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/fonts/web-icons/web-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/fonts/brand-icons/brand-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/fonts/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Page -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/login.css">

	<!--[if lt IE 9]>
    <script src="<?php echo base_url();?>templates/backend/assets/libs/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

	<!--[if lt IE 10]>
    <script src="<?php echo base_url();?>templates/backend/assets/libs/media-match/media.match.min.js"></script>
    <script src="<?php echo base_url();?>templates/backend/assets/libs/respond/respond.min.js"></script>
    <![endif]-->

	<!-- Scripts -->
	<script src="<?php echo base_url();?>templates/backend/assets/libs/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/breakpoints/breakpoints.js"></script>
	<script>
		Breakpoints();

	</script>
</head>

<body class="page-login layout-full">
	<!-- Page -->
	<div class="page animsition vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
		<div class="page-content vertical-align-middle">
			<div class="brand">
				<img class="brand-img" style="width: 120px;" src="<?php echo base_url();?>assets/<?php echo $web->identitas_favicon;?>" alt="...">
				<h2 class="brand-text">
					<?php echo $web->identitas_website;?>
				</h2>
			</div>

			<form method="post" action="<?php echo site_url();?>login/ceklogin" name="formLogin" id="form" parsley-validate novalidate>
				<!-- ========== Flashdata ========== -->
				<center>
				<?php if ($this->session->flashdata('success') || $this->session->flashdata('warning') || $this->session->flashdata('error')) { ?>
					<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-check sign"></i>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php } else if ($this->session->flashdata('warning')) { ?>
					<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-check sign"></i>
						<?php echo $this->session->flashdata('warning'); ?>
					</div>
					<?php } else { ?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-warning sign"></i>
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php } ?>
				<?php } ?>
				</center>
				<!-- ========== End Flashdata ========== -->
				<div class="form-group">
					<label class="sr-only" for="user">Username</label>
					<input type="text" required class="form-control" name="username" id="user" placeholder="Username">
				</div>
				<div class="form-group">
					<label class="sr-only" for="pass">Password</label>
					<input type="password" class="form-control" name="password" id="pass" placeholder="Password">
				</div>
				
				
				<div class="signup"><button type="submit" class="btn btn-primary" name="masuk">Login</button></div>
			</form>
			<footer class="page-copyright">
				<p>Powered by
					<?php echo $web->identitas_author;?> © 2018</p>
			</footer>
		</div>
	</div>
	<!-- End Page -->

	<?php error_reporting(0); ?>
	<!-- Core  -->
	<script src="<?php echo base_url();?>templates/backend/assets/libs/jquery/jquery.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/animsition/jquery.animsition.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/asscroll/jquery-asScroll.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/mousewheel/jquery.mousewheel.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/asscrollable/jquery.asScrollable.all.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/ashoverscroll/jquery-asHoverScroll.js"></script>
	<!-- Plugins -->
	<script src="<?php echo base_url();?>templates/backend/assets/libs/intro-js/intro.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/screenfull/screenfull.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/slidepanel/jquery-slidePanel.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/jquery-placeholder/jquery.placeholder.js"></script>
	<!-- Scripts -->
	<script src="<?php echo base_url();?>templates/backend/assets/js/core/core.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/site/site.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/sections/menu.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/sections/menubar.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/sections/sidebar.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/configs/config-colors.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/configs/config-tour.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/components/asscrollable.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/components/animsition.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/components/slidepanel.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/components/switchery.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/components/jquery-placeholder.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/components/material.js"></script>

	<script>
		(function (document, window, $) {
			'use strict';

			var Site = window.Site;
			$(document).ready(function () {
				Site.run();
			});
		})(document, window, jQuery);
	</script>

</body>

</html>
