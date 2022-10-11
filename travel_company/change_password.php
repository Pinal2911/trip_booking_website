<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title>Travel Company-Dashboard</title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!-- Owl-carousel css-->
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet"/>

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
		<style>
	    	.preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
	    	.preview_box img{max-width: 100px; max-height: 100px;}
		</style>
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
						<h4 class="content-title mb-2">Update Profile</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Change Password</li>
							</ol>
						</nav>
					</div>
				</div>
				<!-- /breadcrumb -->
				<!-- row -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user"><img alt="" src="../images/travel_company/<?php echo $fetch['fld_travel_comp_photo']; ?>"></div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name"><?php echo $fetch['fld_travel_comp_name']; ?></h5>
											</div>
										</div>
										<!-- main-profile-work-list -->

										<hr class="mg-y-30">
										
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="icon ion-md-link"></i>
												</div>
												<div class="media-body">
													<span>GSTIN</span> <a href="#"><?php echo $fetch['fld_travel_comp_gstin']; ?></a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-md-phone-portrait"></i>
												</div>
												<div class="media-body">
													<span>Mobile</span>
													<div>
														<?php echo $fetch['fld_travel_comp_mobileno']; ?>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-slack"></i>
												</div>
												<div class="media-body">
													<span>Email</span>
													<div>
														<?php echo $fetch['fld_travel_comp_email']; ?>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-md-locate"></i>
												</div>
												<div class="media-body">
													<span>Current Address</span>
													<div>
														<?php echo $fetch['fld_travel_comp_address']; ?>
													</div>
												</div>
											</div>
										</div><!-- main-profile-social-list -->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<!-- /Col -->

					<!-- Col -->
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="mb-4 main-content-label">Change Password</div>
								<form onsubmit="return validateForm()" method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Old Password<span style="color: red;">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="password" class="form-control"  placeholder="Enter old password" name="old_password" required="">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">New Password<span style="color: red;">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="password" class="form-control"  placeholder="Enter old password" name="new_password" required="">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Confirm Password<span style="color: red;">*</span></label>
											</div>
											<div class="col-md-9">
												 <input type="password" class="form-control"  placeholder="Enter old password" name="confirm_password" required="">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<center>
										<button type="submit" class="btn btn-primary waves-effect waves-light" name="update">Update</button>
										</center>
									</div>
								</form>
							</div>
							
						</div>
					</div>
					<!-- /Col -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!-- Footer opened -->
		<?php include'footer.php';?>
		<!-- Footer closed -->
<?php
	if(isset($_POST['update'])) 

	{
	extract($_POST);
	 $updt = 'select * from tbl_travel_company where fld_travel_comp_password="'.$_POST['old_password'].'" and fld_travel_comp_email="'.$_SESSION['email'].'"';

	$res=mysqli_query($connect,$updt);

	if(mysqli_num_rows($res)>0)
	{

	  	if(strlen($_POST['new_password'])>=5 )
	      {
	          if($_POST['new_password']==$_POST['confirm_password'])
	          {
	            $query1='update tbl_travel_company set fld_travel_comp_password="'.$_POST['new_password'].'" where fld_travel_comp_email="'.$_SESSION['email'].'" ';   
	              $res=mysqli_query($connect,$query1);

	              echo '<script type="text/javascript">';
	              echo 'alert("password changed Successfully !!!! ");';
	              echo 'window.location.href = "index.php";';
	              echo '</script>';
	          }
	          else
	          {
	          echo '<script type="text/javascript">';
	          echo 'alert(" password is not matched...try again !!!! ");';
	          echo 'window.location.href = "change_password.php";';
	          echo '</script>';
	          }
	      }
		  else
		  {
		      echo '<script type="text/javascript">';
		      echo 'alert("password length not match");';
		      echo 'window.location.href = "change_password.php";';
		      echo '</script>';
		  }
	} 
	else
	{
	    echo '<script type="text/javascript">';
	    echo 'alert("Old password is not matched...try again ");';
	    // $query1;
	    echo 'window.location.href = "change_password.php";';
	    echo '</script>';
	           

	}
	}
?>