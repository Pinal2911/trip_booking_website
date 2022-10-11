<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title>User | Sign Up</title>

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
		<link href="assets/switcher/demo.css" rel="stylesheet">	
</head>
	
<body class="main-body dark-theme">
	<?php include"config.php"?>
		<!-- Loader -->
	<!-- 	<div id="global-loader">
			<img src="assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div -->
		<!-- /Loader -->
				<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="../images/logo/trval.png" class=" m-0 mb-4" alt="logo">
						</div>
					</div>
				</div>
				<div class="sign-up-body wd-md-50p">
					<div class="main-signin-header">
						<h4>Please Register</h4>
						<form method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
							<div class="form-group">
								<label>User Name</label> <input class="form-control" placeholder="Enter your name" type="text" name="user_name" required="">
							</div>
							<div class="form-group">
								<label>Email</label> <input class="form-control" placeholder="Enter your email" type="email" name="user_email" required="">
							</div>
							<div class="form-group">
								<label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="user_password" required="">
							</div>
							<div class="form-group">
								<label>Confirm Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="user_cpassword" required="">
							</div>
							<div class="form-group">
								<label>Mobile Number</label> <input class="form-control" placeholder="Enter your mobile number" type="text" name="user_mobileno" pattern="[7-9]{1}[0-9]{9}"  maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" required="">
							</div>
							<button class="btn btn-main-primary btn-block" type="submit" name="signup">Create Account</button>
						</form>
					</div>
					<div class="main-signup-footer mg-t-10">
						<p>Already have an account? <a href="index.php">Sign In</a></p>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->
		
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

<?php
	if(isset($_POST['signup']))
	{

	  extract($_POST);

	  $asd1=mysqli_query($connect,"select * from tbl_user where fld_user_email ='".$_POST['user_email']."'");
	  $total_record=mysqli_num_rows($asd1);

	  if($total_record==1)
	  {
	      echo '<script type="text/javascript">';
	      echo " alert('Email Already Exist.');";
	      echo 'window.location.href = "signup.php";';
	      echo '</script>';
	  }
	  else{


	  if($user_password==$user_cpassword)
	  {
		  
	 	$add="insert into tbl_user(fld_user_name, fld_user_email, fld_user_password,fld_user_mobileno) 
	     values('$user_name','$user_email','$user_password','$user_mobileno')";

	 	$asd = mysqli_query($connect,$add) or die(mysqli_error($connect));
	 
	   	if($asd)
	    {
	    
	      echo '<script type="text/javascript">';
	      echo " alert('User Add Successfully.');";
	      echo 'window.location.href = "index.php";';
	      echo '</script>';
	    }

	    else
	    {
	      echo '<script type="text/javascript">';
	      echo " alert('record not insert.');";
	      echo 'window.location.href = "ssignup.php";';
	      echo '</script>';
	    }
	}
	  else
	  {
	      echo '<script type="text/javascript">';
	      echo " alert('Password Not match.');";
	      echo 'window.location.href = "signup.php";';
	      echo '</script>';
	  }
	}

	}
?>