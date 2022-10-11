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
		<title> Azira -  Premium dashboard ui bootstrap rwd admin html5 template </title>

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
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Edit-Profile</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class=" d-flex right-page">
							<div class="d-flex justify-content-center mr-5">
								<div class="">
									<span class="d-block">
										<span class="label ">EXPENSES</span>
									</span>
									<span class="value">
										$53,000
									</span>
								</div>
								<div class="ml-3 mt-2">
									<span class="sparkline_bar"></span>
								</div>
							</div>
							<div class="d-flex justify-content-center">
								<div class="">
									<span class="d-block">
										<span class="label">PROFIT</span>
									</span>
									<span class="value">
										$34,000
									</span>
								</div>
								<div class="ml-3 mt-2">
									<span class="sparkline_bar31"></span>
								</div>
							</div>
						</div>
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
									   <?php 
                        $sel=mysqli_query($connect,"select * from tbl_admin where fld_admin_email='".$_SESSION['email']."' ") or die(mysqli_error($connect));
                        $fetch=mysqli_fetch_array($sel);
                    ?>
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="../images/admin/<?php echo $fetch['fld_admin_photo']; ?>">
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name"><?php echo $fetch['fld_admin_name']; ?></h5>
												<p class="main-profile-name-text">Administrator</p>
											</div>
										</div>
										<h6>Bio</h6>
										
										<hr class="mg-y-30">
										<div class="main-content-label tx-13 mg-b-25">
									Contact
								</div>
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-icon bg-primary-transparent text-primary">
											<i class="icon ion-md-phone-portrait"></i>
										</div>
										<div class="media-body">
											<span>Mobile</span>
											<div>
												<?php echo $fetch['fld_admin_mobile']; ?>
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-warning-transparent text-warning">
											<i class="icon ion-logo-google"></i>
										</div>
										<div class="media-body">
											<span>Email</span>
											<div>
												<?php echo $fetch['fld_admin_email']; ?>
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
												<?php echo $fetch['fld_admin_address']; ?>
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
								<form class="form-horizontal" method="post" enctype="multipart/form-data">
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Language</label>
											</div>
											<div class="col-md-9">
												<select class="form-control select2">
													<option>Us English</option>
													<option>Arabic</option>
													<option>Korean</option>
												</select>
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">Personal Information</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">User Name :</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fld_admin_name" placeholder="User Name" value="<?php echo $fetch['fld_admin_name']; ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Avatar :</label>
											</div>
											<div class="col-md-9">
												<div class="main-img-user profile-user">
													<?php
		                                            if ($fetch['fld_admin_photo']=="") 
		                                            {
		                                        ?>

			                                    <img src="../images/no_image.png" alt="" style="width: 120px; height: 120px" id="preview_img1">
			                                    <?php
			                                            }
			                                            else
			                                            {
			                                        ?>
			                                    <img src="../images/admin/<?php echo $fetch['fld_admin_photo']; ?>" alt="" style="width: 120px; height: 120px" id="preview_img1">
                                    <?php
                                            }
                                        ?>
												 <input name="photo" type="file" id="image1" accept=" .jpg , .jpeg , .png " onchange="return fileValidation()">

												</div>
												 <script>
                                function fileValidation() {
                                    var fileInput =
                                        document.getElementById('image1');

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
									
									<div class="mb-4 main-content-label">Contact Info</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Email<i>(required)</i></label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" name="fld_admin_email" placeholder="Email" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" required="" value="<?php echo $fetch['fld_admin_email']; ?>" readonly>
											</div>
										</div>
									</div>
									<!-- <div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Website</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Website" value="@spruko.w">
											</div>
										</div>
									</div> -->
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Phone</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" maxlength="10" minlength="10" name="fld_admin_mobile" oninput="this.value = this.value.replace(/[^0-9][()]/g, '').replace(/(\..*)\./g, '$1');" maxlength="15" minlength="10" required="" value="<?php echo $fetch['fld_admin_mobile']; ?>" placeholder="Phone">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Address</label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" rows="2" name="fld_admin_address" placeholder="Address"><?php echo $fetch['fld_admin_address'];?></textarea>
											</div>
										</div>
									</div>
									
								
							</div>
							<div class="card-footer">
								<button type="submit" name="update" class="btn btn-primary waves-effect waves-light">Update Profile</button>

								<a href="change_password.php" class="btn btn-warning waves-effect waves-light">Change Password</a>
							</div>
							</form>
						</div>
					</div>
					<!-- /Col -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
					<!--Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-primary card mb-0">
				<div class="panel-body tabs-menu-body p-0 border-0">
					<ul class="Date-time">
						<li class="time">
							<h1 class="animated ">21:00</h1>
							<p class="animated ">Sat,October 1st 2029</p>
						</li>
					</ul>
					<div class="card-body latest-tasks">
						<h3 class="events-title"><span>Events For Week </span></h3>
						<div class="event">
							<div class="Day">Monday 20 Jan</div>
							<a href="#">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Tuesday 21 Jan</div>
							<a href="#">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Wednessday 22 Jan</div>
							<div class="tasks">
								<div class=" task-line primary">
									<a href="#" class="label">
										XML Import &amp; Export
									</a>
									<div class="time">
										12:00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input checked="" type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line danger">
									<a href="#" class="label">
										Connect API to pages
									</a>
									<div class="time">
										08:00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Thursday 23 Jan</div>
							<div class="tasks">
								<div class="task-line success">
									<a href="#" class="label">
										Create Wireframes
									</a>
									<div class="time">
										06:20 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Friday 24 Jan</div>
							<div class="tasks">
								<div class="task-line warning">
									<a href="#" class="label">
										Test new features in tablets
									</a>
									<div class="time">
										02: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line teal">
									<a href="#" class="label">
										Design Evommerce
									</a>
									<div class="time">
										10: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks mb-0">
								<div class="task-line purple">
									<a href="#" class="label">
										Fix Validation Issues
									</a>
									<div class="time">
										12: 00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="d-flex pagination wd-100p">
							<a href="#">Previous</a>
							<a href="#" class="ml-auto">Next</a>
						</div>
					</div>
					<div class="card-body border-top border-bottom">
						<div class="row">
							<div class="col-4 text-center">
								<a class="" href="#"><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
								<div>Inbox</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href="#"><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
								<div>Settings</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href="#"><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
								<div>Sign out</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->            		
<?php include "footer.php"; ?>
 <script type="text/javascript">
        $(document).ready(function() {
            //Image file input change event
            $("#image1").change(function() {
                readImageData(this); //Call image read and render function
            });
        });

        function readImageData(imgData) {
            if (imgData.files && imgData.files[0]) {
                var readerObj = new FileReader();

                readerObj.onload = function(element) {
                    $('#preview_img1').attr('src', element.target.result);
                }

                readerObj.readAsDataURL(imgData.files[0]);
            }
        }

    </script>

 <?php

// error_reporting(0);
    
    if(isset($_POST['update']))
    {
     extract($_POST);
// $back="javascript:history.back()";

    $name=$_FILES['photo']['name'];
    $size=$_FILES['photo']['size'];
    $type=$_FILES['photo']['type'];
    $temp=$_FILES['photo']['tmp_name'];

    

        if($name)
            {

                $extension1 = strtolower(pathinfo($name,PATHINFO_EXTENSION));

        if($extension1=="jpg" || $extension1=="jpeg" || $extension1=="png")
        {
                 $desired_dir="../images/admin/";  
                 unlink($desired_dir.$fetch['fld_admin_photo']);             
                $admin_photo=uniqid().$name;
                $extension = strtolower(pathinfo($admin_photo,PATHINFO_EXTENSION));
                
                 move_uploaded_file($temp,"$desired_dir/".$admin_photo);
                // $a1 = $a;
                  $save = "$desired_dir" . $admin_photo; //This is the new file you saving
                  $file = "$desired_dir" . $admin_photo; //This is the original file

                  list($width, $height) = getimagesize($file) ;

                  $modwidth = 200;
   
               // $diff = $width / $modwidth;

                  // $modheight = $height / $diff;
                  $modheight = 200;
                  $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  if($extension=="jpg" || $extension=="jpeg" )
                    {
                    
                    $image = imagecreatefromjpeg($file);

                    }
                    else if($extension=="png")
                    {
                    
                    $image = imagecreatefrompng($file);

                    }
                  // $image = imagecreatefromjpeg($file) ;
                  imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

                  imagejpeg($tn, $save, 100) ;
                  }
        else
        {
           echo '<script type="text/javascript">';
           echo " alert('Please Upload Valid Image File');";
           // echo 'window.location.href = "index.php";';
           echo '<script>';
                        
  
        }

            }
        else
            {
                $admin_photo=$fetch['fld_admin_photo'];
            }  

             $qw="update tbl_admin set
                fld_admin_photo='".$admin_photo."', 
                fld_admin_name='".$_POST['fld_admin_name']."',
                fld_admin_mobile='".$_POST['fld_admin_mobile']."',
                fld_admin_address='".$_POST['fld_admin_address']."'
                where fld_admin_email='".$_SESSION['email']."'";
      
     $update=mysqli_query($connect,$qw) or die(mysqli_error($connect));
     
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Admin Profile Updated Successfully');";
           echo 'window.location.href = "profile.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Admin Profile Not Update');";
             echo '</script>';
                            //echo $cQry;
      
                         }

                         
    }


?>

