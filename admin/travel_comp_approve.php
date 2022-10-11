<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">	
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title> Admin - Approved Travel Company </title>

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
						<h4 class="content-title mb-2">Travel Company</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Travel Company</a></li>
								<li class="breadcrumb-item active" aria-current="page">Approved Travel Company</li>
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
									<h4 class="card-title mg-b-2 mt-2">Approved Travel Company</h4>
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
												<th class="border-bottom-0">Status</th>
												<th class="border-bottom-0">Company Name</th>
												<th class="border-bottom-0">Company GSTIN</th>
												<th class="border-bottom-0">Company Email</th>
												<th class="border-bottom-0">Company Address</th>
												<th class="border-bottom-0">Company Mobile</th>
												<th class="border-bottom-0">Company location served</th>
												<th class="border-bottom-0">Created Date</th>
											</tr>
										</thead>
										<tbody>
											<?php 
								                    $count=0;
								                    $query1="select * from tbl_travel_company where fld_travel_comp_status='Approved' order by fld_travel_comp_id asc";
								                    $view1=mysqli_query($connect,$query1);
								                    while($fetch=mysqli_fetch_array($view1))
								                    {
								                      extract($fetch);
								            ?>
								            <tr>
												<td><?php echo ++$count; ?></td>
												<td>
													<a href="travel_comp_disapproved.php?a_id=<?php echo $fetch['fld_travel_comp_id'];?>" title="Disapproved"><i style="color: red;size: 20px;" class="fa fa-thumbs-down fa-2x"></i></a>
												</td>
												<td><span class="badge badge-success"><?php echo $fld_travel_comp_status; ?></span></td>
												<td><?php echo $fld_travel_comp_name; ?></td>
												<td><?php echo $fld_travel_comp_gstin; ?></td>
												<td><?php echo $fld_travel_comp_email; ?></td>
												<td><?php echo $fld_travel_comp_address; ?></td>
												<td><?php echo $fld_travel_comp_mobileno; ?></td>
												<td><?php echo $fld_travel_comp_location_served; ?></td>
												<td><?php echo $fld_travel_comp_created_date; ?></td>
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

		

