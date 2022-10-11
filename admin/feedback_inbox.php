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
		<title> Feedback Inbox -  Travel Company </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		
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
								<li class="breadcrumb-item"><a href="#">Feedback</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Feedback Inbox</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<!-- <a href="packages_add.php"><button class="btn btn-light pd-x-20 mg-t-10" type="submit">Add Packages</button></a> -->
					</div>
				</div>
				<!-- /breadcrumb -->
									<!-- row -->
				<div class="row row-sm main-content-mail">

					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card">
							<div class="main-content-body main-content-body-mail card-body">
								<div class="main-mail-header">
									<div>
										<h4 class="main-content-title mg-b-5">Inbox</h4>
										
									</div>
									<div>
										<span>1-50 of 1200</span>
										<div class="btn-group" role="group">
											<button class="btn btn-outline-secondary disabled" type="button"><i class="icon ion-ios-arrow-back"></i></button> <button class="btn btn-outline-secondary" type="button"><i class="icon ion-ios-arrow-forward"></i></button>
										</div>
									</div>
								</div><!-- main-mail-list-header -->
								<div class="main-mail-options">
									<label class="ckbox"><input id="checkAll" type="checkbox"> <span></span></label>
									<div class="btn-group">
										<button class="btn btn-light"><i class="typcn typcn-arrow-sync"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-archive"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-info-outline"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-trash"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-folder"></i></button> <button class="btn btn-light disabled"><i class="typcn typcn-tag"></i></button>
									</div><!-- btn-group -->
								</div><!-- main-mail-options -->
								 <?php
                                    $view=mysqli_query($connect,"select f.*,u.* from tbl_user_feedback f, tbl_travel_company u where f.fld_travel_comp_id=u.fld_travel_comp_id order by f.fld_feedback_id asc") or die(mysqli_error($connect));

                                 while($fetch=mysqli_fetch_array($view)) { 
                                    extract($fetch);

                                    ?>
								<div class="main-mail-list">
									<div class="main-mail-item unread">
										<div class="main-mail-checkbox">
											<label class="ckbox"><input type="checkbox"> <span></span></label>
										</div>
										<div class="main-mail-star">
											<i class="typcn typcn-star"></i>
										</div>
										<div class="main-img-user"><img alt="" src="../images/travel_company/<?php echo $fetch['fld_travel_comp_photo']; ?>"></div>
										<div class="main-mail-body">
											<div class="main-mail-from">
												<a href="feedback_read.php?a_id=<?php echo $fetch['fld_feedback_id']; ?>">
												<?php echo $fld_travel_comp_name; ?>
											</div>
											<div class="main-mail-subject">
												<strong><?php echo $fld_travel_comp_email; ?></strong>
											</a>
											</div>
										</div>
										<div class="main-mail-attachment">
											<i class="typcn typcn-attachment"></i>
										</div>
										<div class="main-mail-date">
											11:30am
										</div>
									</div>
								
									
								</div>
								<?php } ?>	
								<div class="mg-lg-b-30"></div>
							</div>
						</div>
					</div>
					<div class="main-mail-compose">
						<div>
							<div class="container">
								<div class="main-mail-compose-box">
									<div class="main-mail-compose-header">
										<span>New Message</span>
										<nav class="nav">
											<a class="nav-link" href="#"><i class="fas fa-minus"></i></a> <a class="nav-link" href="#"><i class="fas fa-compress"></i></a> <a class="nav-link" href="#"><i class="fas fa-times"></i></a>
										</nav>
									</div>
									<div class="main-mail-compose-body">
										<div class="form-group">
											<label class="form-label">To</label>
											<div>
												<input class="form-control" placeholder="Enter recipient's email address" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Subject</label>
											<div>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Write your message here..." rows="8"></textarea>
										</div>
										<div class="form-group mg-b-0">
											<nav class="nav">
												<a class="nav-link" data-toggle="tooltip" href="#" title="Add attachment"><i class="fas fa-paperclip"></i></a> <a class="nav-link" data-toggle="tooltip" href="#" title="Add photo"><i class="far fa-image"></i></a> <a class="nav-link" data-toggle="tooltip" href="#" title="Add link"><i class="fas fa-link"></i></a> <a class="nav-link" data-toggle="tooltip" href="#" title="Emoticons"><i class="far fa-smile"></i></a> <a class="nav-link" data-toggle="tooltip" href="#" title="Discard"><i class="far fa-trash-alt"></i></a>
											</nav><button class="btn btn-primary">Send</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div><!-- container closed -->
		</div>
		<!-- main-content closed -->
					<!--Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			
		</div>
		<!--/Sidebar-right-->            		<!-- Footer opened -->
		<?php include"footer.php"; ?>
		<!-- Footer closed -->		
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js -->
		<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!--- Ionicons js -->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js -->
<script src="assets/plugins/raphael/raphael.min.js"></script>
<!--- Internal Check-all-mail js -->
<script src="assets/js/check-all-mail.js"></script>
<!--- Internal Apexchart js -->
<script src="assets/js/apexcharts.js"></script>

		<!--- Moment js -->
		<script src="assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js -->
		<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Sticky js -->
		<script src="assets/js/sticky.js"></script>

		<!--- Perfect-scrollbar js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Rating js -->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		<!--- Custom Scroll bar Js -->
		<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>


		<!--- Horizontalmenu js -->
		<script src="assets/plugins/horizontal-menu/horizontal-menu.js"></script>


		<!--- Right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>
		
		<!--- Eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!--- Scripts js -->
		<script src="assets/js/script.js"></script>

		<!--- Custom js -->
		<script src="assets/js/custom.js"></script>
		
		<!--- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>
	
	</body>
</html>