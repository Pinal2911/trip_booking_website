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
		<title>Custumize Packages View </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!-- Internal Data table css -->
		<link href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
		<link href="assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
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
		
		<!--- Internal Sumoselect css -->
		<link rel="stylesheet" href="assets/plugins/sumoselect/sumoselect.css">
		<!--- Internal TelephoneInput css -->
		<link rel="stylesheet" href="assets/plugins/telephoneinput/telephoneinput.css">
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
						<h4 class="content-title mb-2">Custumize Packages</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Package</a></li>
								<li class="breadcrumb-item active" aria-current="page">Custumize Packages View</li>
							</ol>
						</nav>
					</div>
				
				</div>

			
				<div class="row">
					<?php 
						 $query="select cp.*,p.*,u.*,t.*,r.* from tbl_custumize_package cp,tbl_package p ,tbl_user u,tbl_transport_mode t,tbl_room r where cp.fld_package_id=p.fld_package_id and p.fld_loc_id=t.fld_loc_id and p.fld_hotel_id=r.fld_hotel_id and cp.fld_user_id=u.fld_user_id and cp.fld_package_status='Register' group by fld_custumize_id order by fld_custumize_id desc";
                         $row=mysqli_query($connect,$query) or die(mysqli_error($connect));  

                        while($fetch=mysqli_fetch_array($row)) {
                        extract($fetch);

                        $photo_view=mysqli_query($connect,"select * from tbl_loc_images where fld_loc_id='".$fetch['fld_loc_id']."'  order by fld_image_id desc ");
					 ?>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-md-6">
										<div class="">
													<?php $fetch_photo=mysqli_fetch_array($photo_view); ?>
															<img alt="img" class="d-block w-100" height="200px" src="../images/location/<?php echo $fetch_photo['fld_loc_images'];?>">
													<?php ?>
											
											
										</div>
									</div>
									<div class="col-md-6">
										<h5 class="mb-1 mt-3 card-title"><?php echo $fld_package_name; ?></h5>
										<p class="mb-2 mt-1 tx-inverse"><b>Seller :</b> <span style="color: skyblue;"><?php echo $fld_travel_comp_name; ?></span></p>
										<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
											<p  class="mb-2 mr-3"><i class="fe fe-moon mr-2"></i><?php echo $fld_no_nights; ?><b> Nights</b></p>
											<p class="mb-1"><i class="fe fe-map-pin mr-2"></i><?php echo $fld_transport_type; ?></p>&nbsp;&nbsp;
											<p class="mb-1"><i class="fas fa-hotel mr-2"></i><?php echo $fld_room_bed_type; ?></p>
										</div>
										<div class="d-lg-flex mt-2 align-items-center justify-content-center text-center">
											<p  class="mb-2 mr-3"><b>User :</b> <?php echo $fld_user_name; ?></p>
										</div>
										</p>
										<a href="custumize_packages_update.php?id=<?php echo $fetch['fld_custumize_id']; ?>"><button class="btn btn-danger pd-x-20 mg-t-10" type="submit">Update & Approved</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }?>
					
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
		<?php include'footer.php';?>
		<!-- Internal Data tables -->
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>
		<!-- datatable js -->
		<script src="assets/js/table-data.js"></script>
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
		
		<!--- Internal Form-elements js -->
		<script src="assets/js/advanced-form-elements.js"></script>
		<script src="assets/js/select2.js"></script>
		<!--- Internal Sumoselect js -->
		<script src="assets/plugins/sumoselect/jquery.sumoselect.js"></script>