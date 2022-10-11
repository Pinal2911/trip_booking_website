<?php
	session_start();

	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
	include "config.php";
?>

		
		<!-- Loader -->
		<!-- <div id="global-loader">
			<img src="assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div> -->
		<!-- /Loader -->

		<!-- main-header opened -->
		<?php 
			$query=mysqli_query($connect,"select * from tbl_user where fld_user_email='".$_SESSION['email']."' ")or die (mysqli_error($connect));

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
								<a class="profile-user d-flex" href="#"><img src="../images/user/<?php echo $fetch['fld_user_photo'] ;?>" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>
								<div class="dropdown-menu">
									<div class="main-header-profile header-img">
										<div class="main-img-user"><img alt="" src="../images/user/<?php echo $fld_user_photo ;?>"></div>
										<h6><?php echo $fld_user_name ;?></h6><span><?php  echo $_SESSION['email']; ?></span>
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
							<li aria-haspopup="true"><a href="location_view.php" class=""><i class="fa fa-map-marker-alt  menu-icon"></i> Location</a></li>

							<li aria-haspopup="true"><a href="packages_view.php" class=""><i class="fe fe-layers  menu-icon"></i> Packages</a></li>
							
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-layers"></i> Custumize Packages <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="custumize_packages_view.php" class="slide-item">Custumize Package View</a></li>
									<li aria-haspopup="true"><a href="custumize_booking_view.php" class="slide-item">Register Booking</a></li>
									<li aria-haspopup="true"><a href="confirm_custumize_booking_view.php" class="slide-item">Confirm Booking</a></li>
									
								</ul>
							</li>
							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-layers"></i> Bookings <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="booking_view.php" class="slide-item">Register Booking</a></li>
									<li aria-haspopup="true"><a href="confirm_booking_view.php" class="slide-item">Confirm Booking</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="user_enquiry_view.php" class=""><i class="fe fe-package  menu-icon"></i> Enquiry View</a></li>
							<li aria-haspopup="true"><a href="feedback_view.php" class=""><i class="fe fe-compass  menu-icon"></i> Feedback</a></li>
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