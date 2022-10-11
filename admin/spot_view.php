<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">	
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title> Spot View -  Travel Company </title>

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
						<h4 class="content-title mb-2">Spot</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Location</a></li>
								<li class="breadcrumb-item active" aria-current="page">Spot View</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a href="spot_add.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">Add Spot</button></a>
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
									<h4 class="card-title mg-b-2 mt-2">Spot</h4>
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
												<th class="border-bottom-0">Spot Name</th>
												<th class="border-bottom-0">Location Name</th>
												<th class="border-bottom-0">Spot Distance</th>
												<th class="border-bottom-0">Spot Image</th>
												<th class="border-bottom-0">Spot Description</th>
												<th class="border-bottom-0">Spot Nearby Places</th>
												<th class="border-bottom-0">Created</th>
											</tr>
										</thead>
										<tbody>
											<?php 
								                   $count=0;
								                   $view = mysqli_query($connect,"select l.*, s.* from tbl_tour_location l,tbl_spot s where l.fld_loc_id=s.fld_loc_id and l.fld_location_delete=0 order by s.fld_spot_id desc") or die (mysqli_error($connect));

												while ($fetch=mysqli_fetch_array($view))
												{
													extract($fetch);

								            ?>
								            <tr>
												<td><?php echo ++$count; ?></td>
												<td>
													<a class="modal-effect" data-effect="effect-fall" data-toggle="modal" href="#spot_update<?php echo $fetch['fld_spot_id'] ?>"><i class="fa fa-edit" style="color: green;font-size: 20px;"></i></a>

                                               		<a href="spot_delete.php?delete_id=<?php echo $fetch['fld_spot_id'] ?>" onclick="return confirm('Are You Sure To Delete ')"><i class="fa fa-trash" style="font-size:25px;color:red"></i></a>
												</td>
												<td><?php echo $fld_spot_name; ?></td>
												<td><?php echo $fld_loc_name; ?></td>
												<td><?php echo $fld_spot_distance; ?></td>
												<td>
													<img src="../images/location/<?php echo $fetch['fld_spot_images'];?>" height="100" width="100">
												</td>
												<td><?php echo $fld_spot_description; ?></td>
												<td><?php echo $fld_spot_nearby_visit; ?></td>
												<td><?php echo $fld_spot_created_date; ?></td>

												
												<div class="modal" id="spot_update<?php echo $fetch['fld_spot_id']; ?>">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content modal-content-demo">
															<div class="modal-header">
																<h6 class="modal-title">Update Spot</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
															</div>
															<form method="post" action="spot_update.php?update_id=<?php echo $fetch['fld_spot_id'];?>" enctype="multipart/form-data">

															<div class="modal-body">
																<div class="row row-xs align-items-center mg-b-20">
																	<div class="col-md-4">
																		<label class="form-label mg-b-0">Spot Name :</label>
																	</div>
																	<div class="col-md-8 mg-t-5 mg-md-t-0">
																		<input type="text" class="form-control" name="fld_spot_name" placeholder="Enter full name of Spot" value="<?php echo $fetch['fld_spot_name']; ?>" />

																	</div>
																</div>
																<div class="row row-xs align-items-center mg-b-20">
																	<div class="col-md-4">
																		<label class="form-label mg-b-0">Location :</label>
																	</div>
																	<div class="col-md-8 mg-t-5 mg-md-t-0">
																		<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" name="fld_loc_id" required="">
																				<option label="Choose one">
																				</option>
																				<?php
																		  			$query=mysqli_query($connect,"select * from tbl_tour_location order by fld_loc_name asc ");
																		        
																					while($row=mysqli_fetch_assoc($query))
																		      		{
																		       			extract($row);
																		     	 ?>
																		        	<option value="<?php echo $row['fld_loc_id'];?>" <?php if($row['fld_loc_id']==$fetch['fld_loc_id']) {echo "selected";} ?>><?php echo $row['fld_loc_name'];?> </option>
																		    	<?php 
																		    		} 
																		    	?>
																			</select>
																	</div>
																</div>
																<div class="row row-xs align-items-center mg-b-20">
																	<div class="col-md-4">
																		<label class="form-label mg-b-0">Spot Distance :</label>
																	</div>
																	<div class="col-md-8 mg-t-5 mg-md-t-0">
																		<input type="text" name="fld_spot_distance" class="form-control" placeholder="Enter location State" value="<?php echo $fetch['fld_spot_distance']; ?>" />
																	</div>
																</div>
																<div class="row row-xs align-items-center mg-b-20">
																	<div class="col-md-4">
																		<label class="form-label mg-b-0">Spot Description :</label>
																	</div>
																	<div class="col-md-8 mg-t-5 mg-md-t-0">
																		<textarea class="form-control" name="fld_spot_description"  required="" placeholder="Enter Location Description" ><?php echo $fetch['fld_spot_description']; ?></textarea>
																	</div>
																</div>
																<div class="row row-xs align-items-center mg-b-20">
																	<div class="col-md-4">
																		<label class="form-label">Spot NearBy Visit : <span class="tx-danger">*</span></label>
																	</div>
																	<div class="col-md-8 mg-t-5 mg-md-t-0">
																		<textarea class="form-control" name="fld_spot_nearby_visit" placeholder="Enter Spot Nearby" required=""><?php echo $fetch['fld_spot_nearby_visit']; ?></textarea>
																	</div>
																</div>
														

															</div>
															<div class="modal-footer">
																<button class="btn ripple btn-primary" name="update">Save changes</button>
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

		


