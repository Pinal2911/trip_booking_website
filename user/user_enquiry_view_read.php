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
						<h4 class="content-title mb-2">Hi, welcome back!</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Form-Validation</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a class="btn btn-main-primary pd-x-20 mg-t-10" href="user_enquiry_view.php">View Enquiry</a>
					</div>
				</div>
				<!-- /breadcrumb -->
				<?php
				 	if(isset($_GET['id']))
					{
					 $query="select * from tbl_enquiry where fld_enquiry_id='".$_GET['id']."'
                      	group by fld_enquiry_id order by fld_enquiry_id desc";
                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                    
                    $fetch=mysqli_fetch_array($row);

                    extract($fetch);
				?>
				

				<div class="row row-sm">
					<div class="col-lg-12 col-xl-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="email-media">
									<div class="mt-0 d-sm-flex">
										<div class="media-body">
											<div class="float-right d-none d-md-flex fs-15">
												<small class="mr-3">Sep 13 , 2019 12:45 pm</small>
												<small class="mr-3"><i class="fe fe-star text-dark" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
											</div>
										</div>
									</div>
								</div>
								<div class="eamil-body mt-4">
									<div class="card" id="media-object2">
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="media d-block d-sm-flex">
														<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="assets/img/faces/9.jpg">
														<div class="media-body">
															<h5 class="mg-b-5 tx-inverse tx-15"><?php echo $fld_package_name; ?></h5>
															<p><?php echo $fld_enquiry_description; ?></p>
															<div class="media d-block d-sm-flex mg-t-25">
																<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="assets/img/faces/8.jpg">
																<div class="media-body">
																	<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
																	Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
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
