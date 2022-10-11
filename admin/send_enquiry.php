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
		<title> Enquiry -  Travel Company</title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--- Select2 css -->
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
		
	<?php include "header.php"; ?>

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
								<li class="breadcrumb-item"><a href="#">Enquiry</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Send Enquiry</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						
					</div>
				</div>
				<!-- /breadcrumb -->
									<!-- row opened -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4 col-xl-3 col-md-12">
						<div class="card mg-b-20 compose-mail">
							<div class="main-content-left main-content-left-mail card-body ">
								<a class="btn btn-primary btn-compose" href="#" id="btnCompose">Compose</a>
								<div class="main-mail-menu">
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href="#"><i class="typcn typcn-mail"></i> Sentbox <span>18</span></a>
										
									</nav>
									
								</div><!-- main-mail-menu -->
							</div>
						</div>
					</div>
					<!-- /Col -->
					<div class="col-lg-8 col-xl-9 col-md-12">
						<div class="card">
							<div class="card-header border-bottom">
								<h3 class="card-title mt-2 mb-1">Compose Enquiry</h3>
							</div>
							<div class="card-body">
								<form >
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-2">Username :</label>
											<div class="col-sm-10">
												<input type="text" name="fld_user_id" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-2">Email :</label>
											<div class="col-sm-10">
												<input type="text" name="fld_enquiry_email" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-2">Mobile :</label>
											<div class="col-sm-10">
												<input type="text" name="fld_enquiry_mobno" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-2">Package Name :</label>
											<div class="col-sm-10">
												<input type="text" name="fld_package_id" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row ">
											<label class="col-sm-2">Message :</label>
											<div class="col-sm-10">
												<textarea rows="10" name="fld_enquiry_description" class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div class="card-footer d-sm-flex">
										<div class="mt-2 mb-2">
											<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Attach"><i class="fe fe-paperclip text-muted fs-20"></i></a>
											<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Link"><i class="fe fe-link-2 text-muted fs-20"></i></a>
											<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Photos"><i class="fe fe-image text-muted fs-20"></i></a>
											<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-muted fs-20"></i></a>
										</div>
										<div class="btn-list ml-auto">
											<button type="button" class="btn btn-danger btn-space">Cancel</button>
											<button type="submit" name="submit" class="btn btn-primary btn-space">Send message</button>
										</div>
									</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
					<!--Sidebar-right-->
		
		<!--/Sidebar-right-->            		<!-- Footer opened -->
		<?php include "footer.php"; ?>
<?php 	
		if(isset($_POST['submit']))
		{
			extract($_POST);

			
			 $ins="insert into tbl_enquiry(fld_user_id,fld_enquiry_email,fld_enquiry_mobno,fld_package_id,fld_enquiry_description)values('$fld_user_id','$fld_enquiry_email','$fld_enquiry_mobno','$fld_package_id','$fld_enquiry_description')";
				
				$add=mysqli_query($connect,$ins) or die(mysqli_error($connect));

				$fetch=mysqli_fetch_array($add);

				if ($add) 
				{
					echo "<script>";
					echo "alert('Record Inserted Successfully');";
					echo "window.location.href='enquiry_view.php';";
					echo "</script>";
				}
				else
				{
					echo "<script>";
					echo "alert('Oops Error Occured');";
					echo "window.location.href='send_enquiry.php';";
					echo "</script>";
				}					
		}
?>		