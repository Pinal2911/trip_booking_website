<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<!-- Title -->
		<title>User | Profile Update</title>

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
								<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
										<div class="main-img-user profile-user"><img alt="" src="../images/user/<?php echo $fetch['fld_user_photo']; ?>"></div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name"><?php echo $fetch['fld_user_name']; ?></h5>
											</div>
										</div>
										<!-- main-profile-work-list -->

										<hr class="mg-y-30">
										
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-md-phone-portrait"></i>
												</div>
												<div class="media-body">
													<span>Mobile</span>
													<div>
														<?php echo $fetch['fld_user_mobileno']; ?>
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
														<?php echo $fetch['fld_user_email']; ?>
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
														<?php echo $fetch['fld_user_address']; ?>
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
								<div class="mb-4 main-content-label">Personal Information</div>
								<form onsubmit="return validateForm()" method="post" class="form-horizontal" enctype="multipart/form-data">
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">User Name<span style="color: red;">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Enter Travel Company Name" name="user_name" value="<?php echo $fetch['fld_user_name']; ?>" required="">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Email<span style="color: red;">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="email" class="form-control" name="user_email"  placeholder="Email" value="<?php echo $fetch['fld_user_email']; ?>" readonly>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Photo<span style="color: red;">*</span></label>
											</div>
											<div class="col-md-6">
													<div class="preview_box">
													<?php
														if($fld_user_photo!="")
															{ 
																?>

																	<img id="preview_img" src="../images/user/<?php echo $fld_user_photo; ?>" height="75" width="75">

																<?php 
															} 
															else 
															{ 
																?>
																	<img id="preview_img" src="../images/default.jpg" height="75" width="75" />
																<?php 
															} 
													?>
													<br><br>	
												    <input type="file" id="image"  class="form-control" name="user_photo" required="" accept=" .png, .jpg, .jpeg" onchange="return fileValidation()" required="" />
												   
												    </div>
													<script>
									                    function fileValidation() {
									                    var fileInput =
									                    document.getElementById('image');

									                    var filePath = fileInput.value;

									                    // Allowing file type 
									                    var allowedExtensions =
									                    /(\.jpg|\.jpeg|\.png)$/i;

									                    if (!allowedExtensions.exec(filePath)) {
									                       alert('Invalid Image type');
									                      fileInput.value = '';
									                    return false;
									                    }

									                    }

									                </script>
											</div>	
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Address<span style="color: red;">*</span></label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" name="user_address" placeholder="Enter Address" required=""><?php echo $fld_user_address; ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Phone<span style="color: red;">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="text" name="user_mobileno" class="form-control"  placeholder="phone number" pattern="[7-9]{1}[0-9]{9}"  maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $fld_user_mobileno; ?>" required="">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<center>
										<button type="submit" class="btn btn-primary waves-effect waves-light" name="update">Update Profile</button>
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

		<script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image").change(function(){
                    readImageData(this);//Call image read and render function
                });
            });
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    readerObj.onload = function (element) {
                        $('#preview_img').attr('src', element.target.result);
                    }
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>
<?php 

	if(isset($_POST['update']))
	{

		extract($_POST);

			$name1=$_FILES['user_photo']['name'];
			$type=$_FILES['user_photo']['type'];
			$size=$_FILES['user_photo']['size'];
			$temp=$_FILES['user_photo']['tmp_name'];
			  if($name1)
			  {  
			    $upload= "../images/user/";
			    unlink($upload.$fld_user_photo);
			    $imgExt=strtolower(pathinfo($name1, PATHINFO_EXTENSION));
			    $valid_ext= array('jpg','png','jpeg' );
			    $photo= rand(1000,1000000).".".$imgExt;
			    move_uploaded_file($temp,$upload.$photo);
			  }
			   else
			  {
			  	$photo=$name1;
			  }

			$adsf="update tbl_user set 
			fld_user_name='".$user_name."',
			fld_user_photo='".$photo."',
			fld_user_address='".$user_address."',
			fld_user_mobileno='".$user_mobileno."'
			where fld_user_id='".$_SESSION['id']."'";			

			$update=mysqli_query($connect, $adsf) or die(mysqli_error($connect));

			$back="profile.php?a_id=".$_SESSION['id']."";
			if($update)
			{
				echo "<script>";
				echo "alert('Record Updated');";
				echo "window.location.href='profile.php';";
				echo "</script>";
			}
			else
			{
				echo "<script>";
				echo "alert('Error');";
				// echo "window.location.href='".$back."'";
				echo "</script>";
			}
		
	}

?>