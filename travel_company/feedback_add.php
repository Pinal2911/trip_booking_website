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
						<h4 class="content-title mb-2">Feedback</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Feedback</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Feedback</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<a href="feedback_view.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">View Feedback</button></a>
					</div>
				</div>
				<!-- /breadcrumb -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Feedback
								</div><hr>
								<form method="post">
									<?php 
										 $count=1; 
										 $query="select * from tbl_travel_company where fld_travel_comp_id='".$_SESSION['id']."' and fld_travel_comp_email='".$_SESSION['email']."' group by fld_travel_comp_id order by fld_travel_comp_id desc";
			                             $row=mysqli_query($connect,$query) or die(mysqli_error($connect));  
		                                $fetch=mysqli_fetch_array($row);

		                                extract($fetch);
									 ?>
									<div class="pd-30 pd-sm-40 bg-gray-200">
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">Name</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" readonly="" type="text" name="travel_name" value="<?php echo $fetch['fld_travel_comp_name'];?>">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">Email</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" readonly="" type="email" value="<?php echo $fetch['fld_travel_comp_email'];?>">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">Feedback Description</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<textarea class="form-control" name="description" id="description" placeholder="Enter Event Description" data-placement="bottom" data-toggle="tooltip"></textarea>
											</div>
										</div><hr>
										<center><button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit" name="submit">Submit</button></center>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<?php include'footer.php';?>

		<?php 	
		if(isset($_POST['submit']))
		{
			extract($_POST);

			
				$ins="insert into tbl_feedback(fld_travel_comp_id ,fld_travel_comp_name,fld_travel_comp_email,fld_travel_comp_feedback)values('".$_SESSION['id']."','$travel_name','".$_SESSION['email']."','$description')";
				
				$add=mysqli_query($connect,$ins) or die(mysqli_error($connect));

				$fetch=mysqli_fetch_array($add);

				if ($add) 
				{
					echo "<script>";
					echo "alert('Feedback Sent Successfully');";
					echo "window.location.href='feedback_view.php';";
					echo "</script>";
				}
				else
				{
					echo "<script>";
					echo "alert('Oops Error Occured');";
					echo "window.location.href='feedback_add.php';";
					echo "</script>";
				}					
		}
	?>