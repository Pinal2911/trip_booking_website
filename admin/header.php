<?php include "header_session.php"; ?>
<?php include "config.php"; ?>
<?php
$query_admin=mysqli_query($connect,"select * from tbl_admin where fld_admin_email='".$_SESSION['email']."'") or die(mysqli_error($connect));
$fetch_admin=mysqli_fetch_array($query_admin);
extract($fetch_admin);
?>

<!-- Loader -->
<!-- <div id="global-loader">
			<img src="assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div> -->
<!-- /Loader -->

<!-- main-header opened -->
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
            <div class="main-header-center  ml-4">
               
            </div>
        </div><!-- search -->
       
            <div class="nav nav-item  navbar-nav-right ml-auto">
                
               
                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href="#"><img src="../images/admin/<?php echo $fetch_admin['fld_admin_photo'];?>" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile header-img">
                            <div class="main-img-user"><img alt="" src="../images/admin/<?php echo $fetch_admin['fld_admin_photo'];?>"></div>
                            <h6><?php echo $fetch_admin['fld_admin_name']; ?></h6><span>Travel Management</span>
                        </div>
                        <a class="dropdown-item" href="profile.php"><i class="far fa-user"></i> My Profile</a>
                        <a class="dropdown-item" href="change_password.php"><i class="far fa-edit"></i> Change Password</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
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
                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fab fa-servicestack"></i> Travel Company <i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="travel_comp_add.php" class="slide-item">Travel Company Add</a></li>
                            <li aria-haspopup="true"><a href="travel_comp_view.php" class="slide-item">Travel Company Register</a></li>
                            <li aria-haspopup="true"><a href="travel_comp_approve.php" class="slide-item">Travel Company Approved</a></li>
                            <li aria-haspopup="true"><a href="travel_comp_disapprove.php" class="slide-item">Travel Company Disapproved</a></li>
                            <!-- <li aria-haspopup="true"><a href="send_enquiry.php" class="slide-item">Send Enquiry</a></li> -->

                        </ul>
                    </li>
                    <!-- <li aria-haspopup="true"><a href="widgets.html" class=""><i class="fe fe-database"></i> Widgets</a></li> -->
                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fas fa-map-marker-alt"></i> Locations <i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            <li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Tour Location</h3></li>
                            <li aria-haspopup="true"><a href="tour_location_add.php" class="slide-item">Tour Location Add</a></li>
                            <li aria-haspopup="true"><a href="tour_location_view.php" class="slide-item">Tour Location Register</a></li>
                            <li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Transport Mode</h3></li>
                            <li aria-haspopup="true"><a href="transport_mode_add.php" class="slide-item">Transport Mode Add</a></li>
                            <li aria-haspopup="true"><a href="transport_mode_view.php" class="slide-item">Transport Mode Register</a></li>
                            
                            <li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Spot</h3></li>
                            <li aria-haspopup="true"><a href="spot_add.php" class="slide-item">Spot Add</a></li>
                            <li aria-haspopup="true"><a href="spot_view.php" class="slide-item">Spot Register</a></li>
                        </ul>
                    </li>
                     <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fas fa-hotel"></i> Hotels <i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="hotel_add.php" class="slide-item">Hotel Add</a></li>
                            <li aria-haspopup="true"><a href="hotel_view.php" class="slide-item">Hotel View</a></li>
                            <li aria-haspopup="true"><a href="food_type_view.php" class="slide-item">Hotel Food Type View</a></li>
                        </ul>
                    </li>
                     <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-hdd"></i> Packages <i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="packages_add.php" class="slide-item">Packages Add</a></li>
                            <li aria-haspopup="true"><a href="packages_register_view.php" class="slide-item">Packages Register</a></li>
                            <li aria-haspopup="true"><a href="packages_approved_view.php" class="slide-item">Approved Packages</a></li>
                            <li aria-haspopup="true"><a href="packages_disapproved_view.php" class="slide-item">Disapproved Packages</a></li>
                        </ul>
                    </li>
                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-layers"></i> Booking<i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="register_booking_view.php" class="slide-item">Booking Register</a></li>
                            <li aria-haspopup="true"><a href="confirm_booking_view.php" class="slide-item">Confirm Booking</a></li>
                            <!-- <li aria-haspopup="true"><a href="#" class="slide-item">Packages</a></li> -->
                        </ul>
                    </li>
                 
                    
                    <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-compass"></i> Feedback <i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="feedback_read.php" class="slide-item">Feedback Inbox</a></li>
                            
                        </ul>
                    </li>
                   
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>
<!--Horizontal-main -->
