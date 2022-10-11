<?php
	session_start();

	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
	include "config.php";
?>

	
		<!-- Loader -->
	<!-- 	<div id="global-loader">
			<img src="assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div> -->
		<!-- /Loader -->

		<!-- main-header opened -->
		<?php 
			$query=mysqli_query($connect,"select * from tbl_travel_company where fld_travel_comp_email='".$_SESSION['email']."' ")or die (mysqli_error($connect));

			$fetch=mysqli_fetch_array($query);
			extract($fetch);
		?>
		<div class="main-header nav nav-item hor-header">
			<div class="container">
				<div class="main-header-left ">
					<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
					<a class="header-brand" href="dashboard.php">
						<img src="../images/logo/trval1.png" class="logo-white ">
		                <img src="../images/logo/trval1.png" class="logo-default">
		                <img src="../images/logo/trval1.png" class="icon-white">
		                <img src="../images/logo/trval1.png" class="icon-default">
					</a>
				</div>
				<div class="main-header-right">
						<div class="nav nav-item  navbar-nav-right ml-auto">
							
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href="#"><img src="../images/travel_company/<?php echo $fetch['fld_travel_comp_photo'] ;?>" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>
								<div class="dropdown-menu">
									<div class="main-header-profile header-img">
										<div class="main-img-user"><img alt="" src="../images/travel_company/<?php echo $fld_travel_comp_photo ;?>"></div>
										<h6><?php echo $fld_travel_comp_name ;?></h6><span><?php  echo "". $_SESSION['email']; ?></span>
									</div>
									<a class="dropdown-item" href="profile.php"><i class="far fa-user"></i> My Profile</a>
									<a class="dropdown-item" href="change_password.php"><i class="far fa-edit"></i> Change Paasword</a>
									<a class="dropdown-item" href="signout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
								</div>
							</div>
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><i class="fe fe-maximize"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- main-header closed -->
		<!--Horizontal-main -->
		<div class="sticky">
			<div class="horizontal-main hor-menu clearfix side-header">
				<div class="horizontal-mainwrapper container clearfix">
					<!--Nav-->
					<nav class="horizontalMenu clearfix">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true"><a href="dashboard.php" class=""><i class="fe fe-airplay  menu-icon"></i> Dashboard</a></li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-shopping-cart"></i> Packages <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="packages_add.php" class="slide-item">Add Packages</a></li>
									<li aria-haspopup="true"><a href="packages_register_view.php" class="slide-item">Register Packages</a></li>
									<li aria-haspopup="true"><a href="packages_approved_view.php" class="slide-item">Approved Packages</a></li>
									<li aria-haspopup="true"><a href="packages_disapproved_view.php" class="slide-item">Disapproved Packages</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-codepen"></i>Custumize Packages Booking<i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="custumize_packages_view.php" class="slide-item">Custumize Packages</a></li>
									<li aria-haspopup="true"><a href="custumize_booking_view.php" class="slide-item">Register Booking</a></li>
									<li aria-haspopup="true"><a href="custumize_booking_approved_view.php" class="slide-item">Approved Booking</a></li>
									<li aria-haspopup="true"><a href="custumize_booking_disapproved_view.php" class="slide-item">Disapproved Booking</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-aperture"></i> Booking <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="booking_view.php" class="slide-item">Register Booking</a></li>
									<li aria-haspopup="true"><a href="booking_approved_view.php" class="slide-item">Approved Booking</a></li>
									<li aria-haspopup="true"><a href="booking_disapproved_view.php" class="slide-item">Disapproved Booking</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="confirm_booking_view.php" class=""><i class="fe fe-bar-chart-2  menu-icon"></i> Confirm Booking</a></li>
							<li aria-haspopup="true"><a href="user_enquiry.php" class=""><i class="fe fe-package  menu-icon"></i> Enquiry</a></li>
							<li aria-haspopup="true"><a href="feedback_view.php" class=""><i class="fe fe-codepen  menu-icon"></i> Feedback</a></li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-settings"></i> Setting <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="profile.php" class="slide-item">Update Profile</a></li>
									<li aria-haspopup="true"><a href="change_password.php" class="slide-item">Change Password</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!--Nav-->
				</div>
			</div>
		</div>
		<!--Horizontal-main -->