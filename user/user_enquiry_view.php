<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title>Packages</title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--- Select2 css-->
		<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!--- Right-sidemenu css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--- Custom Scroll bar -->
		<link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- Style css -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/skin-modes.css" rel="stylesheet">
		<link href="assets/css/style-dark.css" rel="stylesheet">

		<!--- Animations css -->
		<link href="assets/css/animate.css" rel="stylesheet">
		<!--- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet">	
</head>

<body class="main-body  app dark-theme">
		
		<?php include'header.php';?>

		<!-- main-content opened -->
		<div class="main-content horizontal-content">

			<!-- container opened -->
			<div class="container">
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div>
						<h4 class="content-title mb-2">Enquiry View</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Enquiry</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Enquiry View</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
					</div>
				</div>
				<!-- /breadcrumb -->

				<div class="row row-sm main-content-mail">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card">
							<div class="main-content-body main-content-body-mail card-body">
								<?php 
	                                    $count=1; 
	                                     $query="select * from tbl_enquiry
	                                      			group by fld_enquiry_id order by fld_enquiry_id desc";
	                                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
	                                    
	                                    while($fetch=mysqli_fetch_array($row)) {

	                                    extract($fetch);
	                                
	                                ?>
								<div class="main-mail-list">
									<div class="main-mail-item unread">
										<div class="main-mail-star">
											<i class="typcn typcn-star"></i>
										</div>	
										<div class="main-img-user"><img alt="" src="assets/img/faces/5.jpg"></div>
										<div class="main-mail-body">
											
												<div class="main-mail-from">
													<?php echo $fld_package_name; ?>
												</div>
												<div class="main-mail-subject"><span><?php echo $fld_enquiry_description; ?></span>
												</div>
											
										</div>
										<div class="main-mail-date">
											<?php echo $fld_enquiry_created_date; ?>
										</div>
									</div>
								</div>
							<?php }?>
								<div class="mg-lg-b-30"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
		<?php include'footer.php';?>

		<!--- Internal jquery.maskedinput js -->
		<script src="assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>
		<!--- Internal Spectrum-colorpicker js -->
		<script src="assets/plugins/spectrum-colorpicker/spectrum.js"></script>
		<!--- Select2.min js -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<!--- Internal ion.rangeSlider.min js -->
		<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
		<!--- Internal jquery-simple-datetimepicker js -->
		<script src="assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
		<!--- Ionicons js -->
		<script src="assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
		<!--- Internal Pickerjs js -->
		<script src="assets/plugins/pickerjs/picker.min.js"></script>
		<!-- form-elements js -->
		<script src="assets/js/form-elements.js"></script>

		<!--- Moment js -->
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<!--- Internal Check-all-mail js -->
		<script src="assets/js/check-all-mail.js"></script>
		<!--- Internal Apexchart js -->
		<script src="assets/js/apexcharts.js"></script>