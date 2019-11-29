<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html class="no-js before-run" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>ADMINISTRATOR -
		<?php echo $web->identitas_website;?>
	</title>
	<meta name="description" content="<?php echo $web->identitas_deskripsi;?>" />
	<meta name="keywords" content="<?php echo $web->identitas_keyword;?>" />
	<meta name="author" content="<?php echo $web->identitas_author;?>" />

	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/<?php echo $web->identitas_favicon;?>">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/<?php echo $web->identitas_favicon;?>">


 <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
 <script>
            var OneSignal = window.OneSignal || [];
            OneSignal.push(["init", {
				appId: "13219ce1-3c03-40bb-9043-13325e84a94c",
                subdomainName: 'wms-ngodings',
				autoRegister: true,
				persistNotification: false,
                promptOptions: {
                    /* These prompt options values configure both the HTTP prompt and the HTTP popup. */
                    /* actionMessage limited to 90 characters */
                    actionMessage: "a",
                    /* acceptButtonText limited to 15 characters */
                    acceptButtonText: "z",
                    /* cancelButtonText limited to 15 characters */
                    cancelButtonText: "z"
                }
            }]);
        </script>
        <script>
            function subscribe() {
                // OneSignal.push(["registerForPushNotifications"]);
                OneSignal.push(["registerForPushNotifications"]);
                event.preventDefault();
            }
            function unsubscribe(){
                OneSignal.setSubscription(true);
            }
            var OneSignal = OneSignal || [];
            OneSignal.push(function() {
                /* These examples are all valid */
                // Occurs when the user's subscription changes to a new value.
                OneSignal.on('subscriptionChange', function (isSubscribed) {
                    console.log("The user's subscription state is now:", isSubscribed);
                    OneSignal.sendTag("user_id","4444", function(tagsSent)
                    {
                        // Callback called when tags have finished sending
                        console.log("Tags have finished sending!");
                    });
                });
                var isPushSupported = OneSignal.isPushNotificationsSupported();
                if (isPushSupported)
                {
                    // Push notifications are supported
                    OneSignal.isPushNotificationsEnabled().then(function(isEnabled)
                    {
                        if (isEnabled)
                        {
                            console.log("Push notifications are enabled!");
                        } else {
                            OneSignal.showHttpPrompt();
                            console.log("Push notifications are not enabled yet.");
                        }
                    });
                } else {
                    console.log("Push notifications are not supported.");
                }
            });
		</script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/bootstrap/bootstrap-extend.css">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/css/app.css">

	<!-- Libs CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/animsition/animsition.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/asscrollable/asScrollable.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/intro-js/introjs.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/slidepanel/slidePanel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/flag-icon-css/flag-icon.css">

	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/libs/formvalidation/formValidation.css">

	<!-- Fonts -->
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/fonts/web-icons/web-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/fonts/brand-icons/brand-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>templates/backend/assets/fonts/font-awesome/4.5.0/css/font-awesome.min.css">

	<script src="<?php echo base_url();?>templates/backend/assets/libs/jquery/jquery.js"></script>
	<!--[if lt IE 9]>
    <script src="../../<?php echo base_url();?>templates/admin/assets/libs/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

	<!--[if lt IE 10]>
    <script src="../../<?php echo base_url();?>templates/admin/assets/libs/media-match/media.match.min.js"></script>
    <script src="../../<?php echo base_url();?>templates/admin/assets/libs/respond/respond.min.js"></script>
    <![endif]-->

	<!-- Scripts -->
	<script src="<?php echo base_url();?>templates/backend/assets/libs/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/libs/breakpoints/breakpoints.js"></script>
	<script>
		Breakpoints();
	</script>

</head>

<body>
	<nav class="site-navbar navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided" data-toggle="menubar">
				<span class="sr-only">Toggle navigation</span>
				<span class="hamburger-bar"></span>
			</button>
			<button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
				<i class="icon wb-more-horizontal" aria-hidden="true"></i>
			</button>
			<div class="navbar-brand navbar-brand-center">
				<img class="navbar-brand-logo" src="<?php echo base_url();?>assets/<?php echo $web->identitas_favicon;?>" title="Remark">
				<span class="navbar-brand-text">
					<?php echo $web->identitas_website;?>
				</span>
			</div>
		</div>

		<div class="navbar-container container-fluid">
			<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
				<ul class="nav navbar-toolbar">
					<li class="hidden-float" id="toggleMenubar">
						<a data-toggle="menubar" href="" role="button">
							<i class="icon hamburger hamburger-arrow-left">
								<span class="sr-only">Toggle menubar</span>
								<span class="hamburger-bar"></span>
							</i>
						</a>
					</li>
				</ul>
				<ul class="breadcrumb">
					<li class="active">
						<a href="<?php echo base_url();?>admin">Dashboard</a>
					</li>
					<li>
						<?php echo $breadcrumb; ?>
					</li>
				</ul>
				<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
					<li>
						<a>
							<?php echo $admin->admin_nama ?> -
							<span style="text-transform: uppercase;">
								<?php echo $admin->admin_level_nama ?>
								<span>
						</a>
					</li>
					<li class="dropdown">
						<a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false" data-animation="slide-bottom"
						    role="button">
							<span class="avatar avatar-online">
								<img src="<?php echo base_url();?>templates/backend/assets/images/avatar/avatar.jpg" alt="...">
								<i></i>
							</span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li role="presentation">
								<a href="<?php echo base_url();?>pengaturan/edit_password" role="menuitem">
									<i class="icon wb-user" aria-hidden="true"></i> Edit Password</a>
							</li>
							<li class="divider" role="presentation"></li>
							<li role="presentation">
								<a href="<?php echo site_url();?>login/keluar" role="menuitem">
									<i class="icon wb-power" aria-hidden="true"></i> Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="site-menubar">
		<div class="site-menubar-body">
			<div>
				<div>
					<ul class="site-menu">
						<li class="site-menu-category">Menu</li>
						<li class='site-menu-item'>
							<a href='<?php echo base_url();?>admin' class='animsition-link'>
								<i class='site-menu-icon fa fa-dashboard'></i>
								<span class='site-menu-title'>
									Dashboard
								</span>
							</a>
						</li>
						<li class='site-menu-item'>
							<a href='<?php echo base_url();?>website/identitas/edit/1' class='animsition-link'>
								<i class='site-menu-icon fa fa-globe'></i>
								<span class='site-menu-title'>
									Identitas
								</span>
							</a>
						</li>
						<li class='site-menu-item has-sub'>
							<a href='javascript:void(0)' class='animsition-link'>
								<span class='site-menu-arrow'></span>
								<i class='site-menu-icon fa fa fa-users'></i>
								<span class='site-menu-title'>Master Pengguna</span>
							</a>
							<ul class='site-menu-sub'>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>pengaturan/pengguna' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
											Admin & Staff
										</span>
									</a>
								</li>
								<?php if($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') {?>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>website/supplier' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
											Supplier
										</span>
									</a>
								</li>
								<?php } ?>
								<?php if($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') {?>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>website/customer' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
											Customer
										</span>
									</a>
								</li>
								<?php } ?>
							</ul>
						</li>
						<li class='site-menu-item'>
							<a href='<?php echo base_url();?>website/barang' class='animsition-link'>
								<i class='site-menu-icon fa fa-archive'></i>
								<span class='site-menu-title'>
									Master Barang
								</span>
							</a>
						</li>
						<li class='site-menu-item'>
							<a href='<?php echo base_url();?>website/stock/edit/1' class='animsition-link'>
								<i class='site-menu-icon fa fa-volume-up'></i>
								<span class='site-menu-title'>
									Notifikasi Stock
								</span>
							</a>
						</li>
						<li class='site-menu-item has-sub'>
							<a href='javascript:void(0)' class='animsition-link'>
								<span class='site-menu-arrow'></span>
								<i class='site-menu-icon fa fa fa-file'></i>
								<span class='site-menu-title'>Transaksi</span>
							</a>
							<ul class='site-menu-sub'>
								<?php if($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') {?>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>website/masuk' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
											Barang Masuk
										</span>
									</a>
								</li>
								<?php } ?>
								<?php if($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') {?>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>website/keluar' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
											Barang Keluar
										</span>
									</a>
								</li>
								<?php } ?>
								<?php if($admin->admin_level_kode === '1') {?>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>website/penyesuaian' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
											Adjusment
										</span>
									</a>
								</li>
								<?php } ?>
							</ul>
						</li>
						<?php if($admin->admin_level_kode === '1') {?>
						<li class='site-menu-item has-sub'>
							<a href='javascript:void(0)' class='animsition-link'>
								<span class='site-menu-arrow'></span>
								<i class='site-menu-icon fa fa fa-file-o'></i>
								<span class='site-menu-title'>Laporan</span>
							</a>
							<ul class='site-menu-sub'>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>website/laporanmasuk' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
										 Barang Masuk
										</span>
									</a>
								</li>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>website/laporankeluar' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
										 Barang Keluar
										</span>
									</a>
								</li>
								<li class='site-menu-item'>
									<a href='<?php echo base_url();?>website/laporanpenyesuaian' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
										 Adjusment
										</span>
									</a>
								</li>
							</ul>
						</li>
						<?php } ?>
					</ul>

				</div>
			</div>
		</div>
		<div class="site-menubar-footer">
			<a href="<?php echo site_url();?>admin" class="fold-show" data-placement="top" data-toggle="tooltip" data-original-title="Dashboard">
				<span class="icon wb-home" aria-hidden="true"></span>
			</a>
			<a href="<?php echo site_url();?>pengaturan/edit_password" data-placement="top" data-toggle="tooltip" data-original-title="Edit Password">
				<span class="icon wb-lock" aria-hidden="true"></span>
			</a>
			<a href="<?php echo site_url();?>login/keluar" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
				<span class="icon wb-power" aria-hidden="true"></span>
			</a>
		</div>
	</div>

	<!-- Content -->
	<?php $this->load->view($content);?>
	<!-- End Content -->

	<footer class="site-footer">
		<span class="site-footer-legal">© 2018
			<?php echo $web->identitas_website;?>
		</span>
		<div class="site-footer-right">
			Powered by
			<?php echo $web->identitas_author;?>
		</div>
	</footer>

	<script>
		$('#modal-konfirmasi').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget)
			var id = div.data('id')
			var modal = $(this)
			modal.find('#hapus-pengguna').attr("href", "<?php echo site_url();?>pengaturan/pengguna/hapus/" + id);
			modal.find('#hapus-supplier').attr("href", "<?php echo site_url();?>website/supplier/hapus/" + id);
			modal.find('#hapus-customer').attr("href", "<?php echo site_url();?>website/customer/hapus/" + id);
			modal.find('#hapus-barang').attr("href", "<?php echo site_url();?>website/barang/hapus/" + id);
			modal.find('#hapus-masuk').attr("href", "<?php echo site_url();?>website/masuk/hapus/" + id);
			modal.find('#hapus-keluar').attr("href", "<?php echo site_url();?>website/keluar/hapus/" + id);
			modal.find('#hapus-penyesuaian').attr("href", "<?php echo site_url();?>website/penyesuaian/hapus/" + id);
		});
	</script>

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


	<script src="<?php echo base_url();?>templates/backend/assets/libs/formvalidation/formValidation.min.js"></script>

	<script src="<?php echo base_url();?>templates/backend/assets/libs/formvalidation/framework/bootstrap.min.js"></script>

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
	<script src="<?php echo base_url();?>templates/backend/assets/js/components/jquery-placeholder.js"></script>
	<script src="<?php echo base_url();?>templates/backend/assets/js/components/material.js"></script>
	<script>
		(function (document, window, $) {
			'use strict';
			var Site = window.Site;
			$(document).ready(function ($) {
				Site.run();
			});

			(function () {
				$('#exampleStandardForm').formValidation({
					framework: "bootstrap",
					button: {
						selector: '#validateButton2',
						disabled: 'disabled'
					},
					icon: null,
				});
			})();

			(function () {
				$('.summary-errors').hide()
			})();
		})(document, window, jQuery);
	</script>
</body>

</html>