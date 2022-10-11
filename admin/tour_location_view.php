<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">	
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
                                            	<th class="border-bottom-0">Action</th>
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
												<td>
                                                <a class="modal-effect" data-effect="effect-fall" data-toggle="modal" href="#tour_location_update<?php echo $fetch['fld_loc_id'] ?>"><i class="fa fa-edit" style="color: green;font-size: 20px;"></i></a>

                                                <a href="tour_location_delete.php?delete_id=<?php echo $fetch['fld_loc_id'] ?>" onclick="return confirm('Are You Sure To Delete ')"><i class="fa fa-trash" style="font-size:25px;color:red"></i></a>


                                            </td>
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
												<div class="modal" id="tour_location_update<?php echo $fetch['fld_loc_id'] ?>">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Update Location</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
														</div>
														<form method="post" action="tour_location_update.php?update_id=<?php echo $fetch['fld_loc_id'] ?>" enctype="multipart/form-data">

														<div class="modal-body">
															<div class="row row-xs align-items-center mg-b-20">
																<div class="col-md-4">
																	<label class="form-label mg-b-0">Location Name :</label>
																</div>
																<div class="col-md-8 mg-t-5 mg-md-t-0">
																	<input type="text" class="form-control" name="fld_loc_name" placeholder="Enter full name of Location" value="<?php echo $fetch['fld_loc_name']; ?>" />

																</div>
															</div>
															<div class="row row-xs align-items-center mg-b-20">
																<div class="col-md-4">
																	<label class="form-label mg-b-0">Country :</label>
																</div>
																<div class="col-md-8 mg-t-5 mg-md-t-0">
																	<input type="text" class="form-control" name="fld_loc_country" placeholder="Enter location Country" value="<?php echo $fetch['fld_loc_country']; ?>" />
																</div>
															</div>
															<div class="row row-xs align-items-center mg-b-20">
																<div class="col-md-4">
																	<label class="form-label mg-b-0">State :</label>
																</div>
																<div class="col-md-8 mg-t-5 mg-md-t-0">
																	<input type="text" name="fld_loc_state" class="form-control" placeholder="Enter location State" value="<?php echo $fetch['fld_loc_state']; ?>" />
																</div>
															</div>
															<div class="row row-xs align-items-center mg-b-20">
																<div class="col-md-4">
																	<label class="form-label mg-b-0">Location Description :</label>
																</div>
																<div class="col-md-8 mg-t-5 mg-md-t-0">
																	<textarea class="form-control" name="fld_loc_description"  required="" placeholder="Enter Location Description" ><?php echo $fetch['fld_loc_description']; ?></textarea>
																</div>
															</div>
														
															<div class="row row-xs align-items-center mg-b-20">
																<div class="col-md-4">
																	<label class="form-label mg-b-0">Location Rate :</label>
																</div>
																<div class="col-md-8 mg-t-5 mg-md-t-0">
																	<input type="text" class="form-control" name="fld_loc_rate_from_mumbai" placeholder="Enter Rate of Location from Mumbai" value="<?php echo $fetch['fld_loc_rate_from_mumbai']; ?>" />
																</div>
															</div>

														</div>
														<div class="modal-footer">
															<button class="btn ripple btn-primary" name="update" type="submit">Save changes</button>
															<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
														</div>
														</form>
													</div>
												</div>
											</div>
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

		

