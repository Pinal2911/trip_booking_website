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
						<h4 class="content-title mb-2">Package</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Package</a></li>
								<li class="breadcrumb-item active" aria-current="page">Package Enquiry</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a class="btn btn-light pd-x-20 mg-t-10" href="user_enquiry_view.php">View Enquiry Reply</a>
					</div>
				</div>
				<!-- /breadcrumb -->
				<!-- row -->
				<?php
					$count=1; 
                   if(isset($_GET['id']))
					{
						 $query="select e.*,p.* from tbl_enquiry e,tbl_package p where e.fld_package_id=p.fld_package_id and e.fld_package_id='".$_GET['id']."'
                      	group by e.fld_enquiry_id order by e.fld_enquiry_id desc";
                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                    
                    $fetch=mysqli_fetch_array($row);

				?>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Package Enquiry
								</div><hr>
								<form method="POST" class="form-horizontal form-bordered" onsubmit="return validateForm()" enctype="multipart/form-data">
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Package Name: <span class="tx-danger">*</span></label>
												<input class="form-control" name="package_name" placeholder="Enter Package Name/Destination Name" value="<?php echo $fetch['fld_package_name'];?>" required="" type="text">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">Date Of Departure: <span class="tx-danger">*</span></label>
												<input class="form-control fc-datepicker" name="dep_date" placeholder="MM/DD/YYYY" type="text">
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-12">
											<div class="form-group mg-b-0">
												<label class="form-label">Massage: <span class="tx-danger">*</span></label>
												<textarea class="form-control" name="description" placeholder="Enter text"></textarea><br>
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-6">
											<div class="form-group mg-b-0">
												<label class="form-label">Name: <span class="tx-danger">*</span></label>
												<input class="form-control" readonly="" value="<?php echo $fld_user_name; ?>">
											</div>
										</div>
										<div class="col-6">
											<div class="form-group">
												<label class="form-label">Email Id: <span class="tx-danger">*</span></label>
												<input class="form-control" value="<?php echo $fld_user_email; ?>" readonly="">
											</div>
										</div>
									</div>
									<div class="row row-sm">
										<div class="col-12">
											<div class="form-group mg-b-0">
												<label class="form-label">Mobile No: <span class="tx-danger">*</span></label>
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															+ 91
														</div>
													</div><!-- input-group-prepend -->
													<input class="form-control" placeholder="Enter your phone number"  name="user_mobileno" type="text" pattern="[7-9]{1}[0-9]{9}"  maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
												</div>
											</div>
										</div>
									</div>
									<div class="col-12"><hr><center><button name="submit" type="submit" class="btn btn-main-primary pd-x-20 mg-t-10">Submit</button></center></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
				<!-- /row -->
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

		<?php	
			if(isset($_POST['submit']))
			{
					extract($_POST);
				 	$add="insert into tbl_enquiry(fld_package_id,fld_package_name, fld_departure_date, fld_enquiry_description, fld_user_id, fld_enquiry_email, fld_enquiry_mobno) 
				     values('".$_GET['id']."','$package_name','$dep_date','$description','".$_SESSION['id']."','".$_SESSION['email']."','$user_mobileno')";

				 	$asd = mysqli_query($connect,$add) or die(mysqli_error($connect));
				 
				   	if($asd)
				    {
				    
				      echo '<script type="text/javascript">';
				      echo " alert('Enquiry Sent Successfully');";
				      echo 'window.location.href = "user_enquiry_view.php";';
				      echo '</script>';
				    }
				    else
				    {
				      echo '<script type="text/javascript">';
				      echo " alert('Enquiry not insert.');";
				      echo 'window.location.href = "user_enquiry.php";';
				      echo '</script>';
				    }
				
			
			}
		?>