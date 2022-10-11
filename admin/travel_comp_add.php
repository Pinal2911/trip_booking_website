<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title> Admin - Add Travel Company</title>

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
		<link href="assets/switcher/demo.css" rel="stylesheet">	</head>

	<body class="main-body  app dark-theme">
		
		<!-- Switcher -->
		<?php include "header.php"; ?>

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
								<li class="breadcrumb-item active" aria-current="page"> Add Travel Company</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a href="travel_comp_view.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">View Travel Company</button></a>
					</div>
				</div>
				<!-- /breadcrumb -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Add Travel Company
								</div>
								
								<form method="post" enctype="multipart/form-data">
								<div class="pd-30 pd-sm-40 bg-gray-200">
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Company Name :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input type="text" class="form-control" name="fld_travel_comp_name" placeholder="Enter Company name" required="" />

										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Company GSTIN :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input type="text" class="form-control" name="fld_travel_comp_gstin" placeholder="Enter Company GSTIN"  maxlength="13" minlength="13" required="" />
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Email address :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input type="email" name="fld_travel_comp_email" class="form-control" placeholder="Enter email" required="" />
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Company Mobile :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input type="text" class="form-control" name="fld_travel_comp_mobileno" oninput="this.value = this.value.replace(/[^0-9][()]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" minlength="10" required="" placeholder="Enter Company Mobile" required="" />
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Company Address :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<textarea name="fld_travel_comp_address" class="form-control" placeholder="Enter Location" required=""></textarea>
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Company Location Served :</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<textarea name="fld_travel_comp_location_served" class="form-control" placeholder="Enter Location" required=""></textarea>
										</div>
									</div>
									<button type="submit" name="submit" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Register</button>
									<button type="reset" class="btn btn-dark pd-x-30 mg-t-5">Cancel</button>
								</form>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
					<!--Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			
		</div>
		<!--/Sidebar-right-->            		
<?php include "footer.php"; ?>
<?php 	

  if (isset($_POST['submit'])) 
  {

    extract($_POST);

    $query = "insert into tbl_travel_company (fld_travel_comp_name,fld_travel_comp_gstin,fld_travel_comp_email,fld_travel_comp_address,fld_travel_comp_mobileno,fld_travel_comp_location_served)values('$fld_travel_comp_name', '$fld_travel_comp_gstin','$fld_travel_comp_email','$fld_travel_comp_address','$fld_travel_comp_mobileno','$fld_travel_comp_location_served')";
  	$add = mysqli_query($connect,$query)or die(mysqli_error($connect));
 	 	
 	 	if($add)
  		{
   		 	echo "<script>";
       		 echo "alert('Record Inserted Successfully');";
      		echo "window.location.href='travel_comp_view.php';";
        	echo "</script>";
  		}
 		 else
  		{
    		echo "<script>";
    		echo "alert('Please Check For Error!');";
    		echo "</script>";
  		}
 }

?>					