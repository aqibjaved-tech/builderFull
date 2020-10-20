<!DOCTYPE html>
<html lang="en">

	<head>

		<base href="../">
		<meta charset="utf-8" />
		<title>EXC Page Builder - <?php echo $__env->yieldContent('title'); ?></title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js")}}></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href=<?php echo e(asset("assets/vendors/custom/fullcalendar/fullcalendar.bundle.css")); ?> rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href=<?php echo e(asset("assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css")); ?> rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href=<?php echo e(asset("assets/vendors/general/tether/dist/css/tether.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/select2/dist/css/select2.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/nouislider/distribute/nouislider.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/dropzone/dist/dropzone.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/summernote/dist/summernote.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/animate.css/animate.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/toastr/build/toastr.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/morris.js/morris.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/sweetalert2/dist/sweetalert2.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/socicon/css/socicon.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/custom/vendors/line-awesome/css/line-awesome.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/custom/vendors/flaticon/flaticon.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/custom/vendors/flaticon2/flaticon.css")); ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo e(asset("assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css")); ?> rel="stylesheet" type="text/css" />

		<link href=<?php echo e(asset("assets/css/demo3/custom.css")); ?>  rel="stylesheet" type="text/css" />
		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href=<?php echo e(asset("assets/css/demo3/style.bundle.css")); ?> rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo e(asset('assets/media/company-logos/fav.png')); ?>" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="<?php echo e(url('/')); ?>">
					<img alt="Logo" src=<?php echo e(asset("assets/media/logos/logo-2-sm.png")); ?> />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<?php echo $__env->make('admin.layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

						<?php echo $__env->make('admin.layouts.righttopnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

					</div>
					<!-- End Header Code   -->


					<?php echo $__env->yieldContent('content'); ?>


					<!-- begin:: Footer -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2019&nbsp;&copy;&nbsp;<a href="https://exchange-collective.firebaseapp.com/" target="_blank" class="kt-link">Exchange Collective</a>
							</div>
							<!-- <div class="kt-footer__menu">
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div> -->
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		<div id="kt_quick_panel" class="kt-quick-panel">
			<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
			<div class="kt-quick-panel__nav">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
			</div>
			<div class="kt-quick-panel__content">
				<div class="tab-content">
					<div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
						<div class="kt-notification">
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-line-chart kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been received
									</div>
									<div class="kt-notification__item-time">
										2 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-box-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-chart2 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Application has been approved
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-image-file kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New file has been uploaded
									</div>
									<div class="kt-notification__item-time">
										5 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-bar-chart kt-font-info"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New user feedback received
									</div>
									<div class="kt-notification__item-time">
										8 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart-2 kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										System reboot has been successfully completed
									</div>
									<div class="kt-notification__item-time">
										12 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-favourite kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been placed
									</div>
									<div class="kt-notification__item-time">
										15 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item kt-notification__item--read">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-safe kt-font-primary"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Company meeting canceled
									</div>
									<div class="kt-notification__item-time">
										19 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-psd kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New report has been received
									</div>
									<div class="kt-notification__item-time">
										23 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-download-1 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Finance report has been generated
									</div>
									<div class="kt-notification__item-time">
										25 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-security kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer comment recieved
									</div>
									<div class="kt-notification__item-time">
										2 days ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 days ago
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
						<div class="kt-notification-v2">
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-bell kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										5 new user generated report
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-box kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										2 new items submited
									</div>
									<div class="kt-notification-v2__item-desc">
										by Grog John
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-psd kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										79 PSD files generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-supermarket kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										$2900 worth producucts sold
									</div>
									<div class="kt-notification-v2__item-desc">
										Total 234 items
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-paper-plane-1 kt-font-success"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-information kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										Database server is down
									</div>
									<div class="kt-notification-v2__item-desc">
										10 mins ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-mail-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										System report has been generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-hangouts-logo kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
						<form class="kt-form">
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Notifications:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Case Tracking:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Support Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Generate Reports:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Report Export:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow Data Collection:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Member singup:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Allow User Feedbacks:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Enable Customer Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		<!-- <ul class="kt-sticky-toolbar" style="margin-top: 30px;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
				<a href="#" class=""><i class="flaticon2-drop"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
				<a href="https://keenthemes.com/metronic/preview/demo3/builder.html" target="_blank"><i class="flaticon2-gear"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
				<a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
			</li>
		</ul> -->

		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		<div id="kt_demo_panel" class="kt-demo-panel">
			<div class="kt-demo-panel__head">
				<h3 class="kt-demo-panel__title">
					Select A Demo

					<!--<small>5</small>-->
				</h3>
				<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-demo-panel__body">
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 1
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo1.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo1/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 2
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo2.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item kt-demo-panel__item--active">
					<div class="kt-demo-panel__item-title">
						Demo 3
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo3.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 4
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo4.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 5
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo5.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 6
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo6.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 7
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo7.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 8
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo8.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 9
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo9.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 10
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo10.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 11
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo11.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 12
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo12.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 13
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo13.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 14
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src=<?php echo e(asset("assets/media/demos/preview/demo14.jpg")); ?> alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<a href="https://1.envato.market/EA4JP" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
					Buy Metronic Now!
				</a>
			</div>
		</div>

		<!-- end::Demo Panel -->

		<!--Begin:: Chat-->
		<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="kt-chat">
						<div class="kt-portlet kt-portlet--last">
							<div class="kt-portlet__head">
								<div class="kt-chat__head ">
									<div class="kt-chat__left">
										<div class="kt-chat__label">
											<a href="#" class="kt-chat__title">Jason Muller</a>
											<span class="kt-chat__status">
												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
											</span>
										</div>
									</div>
									<div class="kt-chat__right">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="flaticon-more-1"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Messaging
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-group"></i>
															<span class="kt-nav__link-text">New Group</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
															<span class="kt-nav__link-text">Contacts</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-bell-2"></i>
															<span class="kt-nav__link-text">Calls</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-dashboard"></i>
															<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-protected"></i>
															<span class="kt-nav__link-text">Help</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
										<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
											<i class="flaticon2-cross"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
									<div class="kt-chat__messages kt-chat__messages--solid">
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src=<?php echo e(asset("assets/media/users/100_12.jpg")); ?> alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												How likely are you to recommend our company<br> to your friends and family?
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src=<?php echo e(asset("assets/media/users/300_21.jpg")); ?> alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src=<?php echo e(asset("assets/media/users/100_12.jpg")); ?> alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Ok, Understood!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src=<?php echo e(asset("assets/media/users/300_21.jpg")); ?> alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You’ll receive notifications for all issues, pull requests!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src=<?php echo e(asset("assets/media/users/100_12.jpg")); ?> alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src=<?php echo e(asset("assets/media/users/300_21.jpg")); ?> alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src=<?php echo e(asset("assets/media/users/100_12.jpg")); ?> alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src=<?php echo e(asset("assets/media/users/300_21.jpg")); ?> alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Most purchased Business courses during this sale!
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<div class="kt-chat__input">
									<div class="kt-chat__editor">
										<textarea placeholder="Type here..." style="height: 50px"></textarea>
									</div>
									<div class="kt-chat__toolbar">
										<div class="kt_chat__tools">
											<a href="#"><i class="flaticon2-link"></i></a>
											<a href="#"><i class="flaticon2-photograph"></i></a>
											<a href="#"><i class="flaticon2-photo-camera"></i></a>
										</div>
										<div class="kt_chat__actions">
											<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src=<?php echo e(asset("assets/vendors/general/jquery/dist/jquery.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/popper.js/dist/umd/popper.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap/dist/js/bootstrap.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/js-cookie/src/js.cookie.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/moment/min/moment.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/sticky-js/dist/sticky.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/wnumb/wNumb.js")); ?> type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src=<?php echo e(asset("assets/vendors/general/jquery-form/dist/jquery.form.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/block-ui/jquery.blockUI.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/js/vendors/bootstrap-switch.init.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/select2/dist/js/select2.full.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/typeahead.js/dist/typeahead.bundle.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/handlebars/dist/handlebars.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/nouislider/distribute/nouislider.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/owl.carousel/dist/owl.carousel.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/autosize/dist/autosize.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/clipboard/dist/clipboard.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/dropzone/dist/dropzone.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/summernote/dist/summernote.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/markdown/lib/markdown.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/js/vendors/bootstrap-markdown.init.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/js/vendors/bootstrap-notify.init.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/jquery-validation/dist/jquery.validate.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/jquery-validation/dist/additional-methods.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/js/vendors/jquery-validation.init.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/toastr/build/toastr.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/raphael/raphael.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/morris.js/morris.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/chart.js/dist/Chart.bundle.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/waypoints/lib/jquery.waypoints.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/counterup/jquery.counterup.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/es6-promise-polyfill/promise.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/sweetalert2/dist/sweetalert2.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/js/vendors/sweetalert2.init.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/jquery.repeater/src/lib.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/jquery.repeater/src/jquery.input.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/jquery.repeater/src/repeater.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/general/dompurify/dist/purify.js")); ?> type="text/javascript"></script>
		<!--end:: Global Optional Vendors -->
		
		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src=<?php echo e(asset("assets/js/demo3/scripts.bundle.js")); ?> type="text/javascript"></script>
		
		<!--end::Global Theme Bundle -->
		
		<!--begin::Page Vendors(used by this page) -->
		<script src=<?php echo e(asset("assets/vendors/custom/fullcalendar/fullcalendar.bundle.js")); ?> type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src=<?php echo e(asset("assets/vendors/custom/gmaps/gmaps.js")); ?> type="text/javascript"></script>
		
		<!--end::Page Vendors -->
		
		<!--begin::Page Scripts(used by this page) -->
		<script src=<?php echo e(asset("assets/js/demo3/pages/dashboard.js")); ?> type="text/javascript"></script>
		<script src="<?php echo e(asset("assets/js/demo1/pages/crud/forms/widgets/summernote.js")); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('assets/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js')); ?>" type="text/javascript"></script>
		<!--end::Page Scripts -->
		
		<script src=<?php echo e(asset("js/jquery.nicescroll.min.js")); ?> type="text/javascript"></script>
		<script src=<?php echo e(asset("js/callback-functions.js")); ?> type="text/javascript"></script>
	</body>

	<!-- end::Body -->
</html>
<?php /**PATH C:\xampp\htdocs\pageBuilder\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>