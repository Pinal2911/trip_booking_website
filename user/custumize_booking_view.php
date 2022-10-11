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
		<title> Booking View </title>

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
						<h4 class="content-title mb-2">Booking</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Bookings</a></li>
								<li class="breadcrumb-item active" aria-current="page">Booking View</li>
							</ol>
						</nav>
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
									<h4 class="card-title mg-b-2 mt-2">Booking</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div><hr>
							</div>
							
							<div class="card-body">
								<div class="table-responsive">

									<table id="example" class="table key-buttons text-md-nowrap">
										
										<thead>
											<tr>
												<th class="border-bottom-0">Sr No</th>
												<th class="border-bottom-0">Action</th>
												<th class="border-bottom-0">Booking Status</th>
												<th class="border-bottom-0">Booking Date</th>
												<th class="border-bottom-0">User name</th>
												<th class="border-bottom-0">Phone</th>
												<th class="border-bottom-0">Package Name</th>
												<th class="border-bottom-0">No of Adult</th>
												<th class="border-bottom-0">No of Child</th>
												<th class="border-bottom-0">Location</th>
												<th class="border-bottom-0">Hotel</th>
												<th class="border-bottom-0">Food Type</th>
												<th class="border-bottom-0">Spot</th>
												<th class="border-bottom-0">Trasport</th>
												<th class="border-bottom-0">Total Amount</th>
												<th class="border-bottom-0">Modified Date</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												 $count=1; 
												 $query="select b.*,p.*,l.*,h.*,t.*,ft.*,s.*,tc.*,cp.*,r.* from tbl_custumize_booking b,tbl_package p,tbl_tour_location l,tbl_hotel h,tbl_transport_mode t,tbl_food_type ft,tbl_spot s,tbl_travel_company tc,tbl_custumize_package cp,tbl_room r
					                         		where
					                      			p.fld_loc_id=l.fld_loc_id and
					                      	 		l.fld_loc_id=h.fld_loc_id and
					                      	 		l.fld_loc_id=t.fld_loc_id and
					                      	 		p.fld_loc_id=s.fld_loc_id and
					                      	 		p.fld_transport_id=t.fld_transport_id and
					                      	 		h.fld_hotel_id=ft.fld_hotel_id and
					                      	 		p.fld_food_type_id=ft.fld_food_type_id and
					                      	 		p.fld_travel_comp_id=tc.fld_travel_comp_id and
					                      	 		p.fld_package_id=cp.fld_package_id and
					                      	 		p.fld_hotel_id=r.fld_hotel_id and
					                      			b.fld_custumize_id=cp.fld_custumize_id and
				                                    b.fld_booking_status='Register' group by b.fld_booking_id order by b.fld_booking_id desc";
						                        $row=mysqli_query($connect,$query) or die(mysqli_error($connect));  
				                                while($fetch=mysqli_fetch_array($row)) {

				                                extract($fetch);
											 ?>
											<tr>
												<td><?php echo $count++; ?></td>
												<td>
													
													<a href="feedback_add.php?id=<?php echo $fetch['fld_booking_id']; ?>" title="Give Feedback"><i class="far fa-comments" style="color: green;font-size: 22px;"></i></a>
												</td>
												<td><span class="badge badge-warning"><?php echo $fld_booking_status; ?>s</span></td>
												<td><?php echo $fld_booking_date; ?></td>
												<td><?php echo $fld_user_name; ?></td>
												<td><?php echo $fld_user_mobileno; ?></td>
												<td><?php echo $fld_package_name; ?></td>
												<td><?php echo $fld_no_of_adult; ?></td>
												<td><?php echo $fld_no_of_child; ?></td>
												<td><?php echo $fld_loc_name; ?></td>
												<td><?php echo $fld_hotel_name; ?></td>
												<td><?php echo $fld_food_type_name; ?></td>
												<td><?php echo $fld_spot_name; ?></td>
												<td><?php echo $fld_transport_type; ?></td>
												<td><?php echo $fld_total_booking_amount; ?></td>
												<td><?php echo $fld_package_modified_date; ?></td>
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

		