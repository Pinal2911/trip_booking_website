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
		<title> Location View </title>

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
						<h4 class="content-title mb-2">Location</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Location</a></li>
								<li class="breadcrumb-item active" aria-current="page">Location View</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
					</div>
				</div>
				<!-- /breadcrumb -->
									<!-- row opened -->
				<div class="row row-sm">
					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-2 mt-2">Location</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div><hr>
							</div>
							
							<div class="card-body">
								<div class="table-responsive">

									<table id="example" class="table key-buttons text-md-nowrap">
										
										<thead>
											<tr>
												<th class="border-bottom-0">Sr No.</th>
												<th class="border-bottom-0">Location Name</th>
												<th class="border-bottom-0">Country</th>
												<th class="border-bottom-0">State</th>
												<th class="border-bottom-0">Location Description</th>
												<th class="border-bottom-0">Location Near by Places</th>
												<th class="border-bottom-0">Location Rate</th>
												<th class="border-bottom-0">Location Images</th>
											</tr>
										</thead>
										<tbody>
											<?php 
								                    $count=0;
								                   $view = mysqli_query($connect,"select * from tbl_tour_location order by fld_loc_id desc") or die (mysqli_error($connect));

													while ($fetch=mysqli_fetch_array($view))
													{
														extract($fetch);

														$photo_view=mysqli_query($connect,"select * from tbl_loc_images where fld_loc_id='".$fetch['fld_loc_id']."' order by fld_image_id desc");
											?>
											<tr>
												<td><?php echo ++$count; ?></td>
												<td><?php echo $fld_loc_name; ?></td>
												<td><?php echo $fld_loc_country; ?></td>
												<td><?php echo $fld_loc_state; ?></td>
											
												<td><?php echo $fld_loc_description; ?></td>
												<td><?php echo $fld_loc_nearbyplace; ?></td>
												<td><?php echo $fld_loc_rate_from_mumbai; ?></td>
													<td>
													<?php while($fetch_photo=mysqli_fetch_array($photo_view)){ ?>
														<img src="../images/location/<?php echo $fetch_photo['fld_loc_images'];?>" height="100" width="100">
													<?php } ?>
												</td>
											</tr>
											<?php }?>
										</tbody>
										
									</table>
								</div>
							</div>
						
						</div>
					</div>
					<!--/div-->
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

		